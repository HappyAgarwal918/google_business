<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use Mail;
use App\Mail\demoMail;
use Session;
use Stripe;

class contactController extends Controller
{
    public function contactview()
    {
        $id = base64_decode($_GET['id']);

        $user = contact::where('id', $id)->first();
        $mailData = [
            'title' => 'New Google business registration request has been received.',
            'business_name' => $user['business_name'],
            'business_phone' => $user['business_phone'],
            'website' => $user['website'],
            'category' => $user['category'],
            'address' => $user['address'],
            'payment_method' => $user['payment_method'],
            'city' => $user['city'],
            'country' => $user['country'],
            'zip' => $user['zip'],
            'pic_name' => $user['pic_name'],
            'pic_path' => $user['pic_path'],
            'EIN_name' => $user['EIN_name'],
            'EIN_path' => $user['EIN_path'],
            'full_name' => $user['full_name'],
            'dob' => $user['dob'],
            'phone_number' => $user['phone_number'],
            'payment_method' => $user['payment_method'],
        ];
         
        Mail::to('happyagarwal918@gmail.com')->send(new demoMail($mailData));

        return view('thankyou');
    }
    
    public function contact(Request $request)
    {
        if ($request->pic_file) {
            $pic_name = $request->file('pic_file')->getClientOriginalName();
            $pic_path = time().'_'.rand().'.'.$request->file('pic_file')->getClientOriginalExtension();
            $pic_name_path = $request->file('pic_file')->move(public_path('pic'), $pic_path);
        }else{
            $pic_name = null;
            $pic_path = null;
        }
        if ($request->EIN_file) {
            $EIN_name = $request->file('EIN_file')->getClientOriginalName();
            $EIN_path = time().'_'.rand().'.'.$request->file('EIN_file')->getClientOriginalExtension();
            $EIN_name_path = $request->file('EIN_file')->move(public_path('EIN'), $EIN_path);
        }else{
            $EIN_name = null;
            $EIN_path = null;
        }

        $user = contact::create([
            'business_name' => $request->business_name,
            'business_phone' => $request->business_phone,
            'website' => $request->website,
            'category' => $request->category,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
            'zip' => $request->zip,
            'pic_name' => $pic_name,
            'pic_path' => $pic_path,
            'EIN_name' => $EIN_name,
            'EIN_path' => $EIN_path,
            'full_name' => $request->full_name,
            'dob' => $request->dob,
            'phone_number' => $request->phone_number,
            'payment_method' => $request->payment_method,
            'verify_pay' => $request->verify_pay,
        ]);

        if($request->payment_method == 'online')
        {
            \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

            $checkout_session = \Stripe\Checkout\Session::create([
              'line_items' => [[
                # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
                'price' => 'price_1LMxXXSFp9l5wyf37dyvEaYQ',
                'quantity' => 1,
              ]],
              'mode' => 'payment',
              'success_url' => 'http://localhost:8000/thank-you?id='.base64_encode($user->id),
              'cancel_url' => 'http://localhost:8000/',
            ]);

            return redirect($checkout_session['url']);
        }
        elseif($request->payment_method == 'offline')
        {
            if($request->password == '2580') {
                $mailData = [
                'title' => 'New Google business registration request has been received.',
                'business_name' => $user['business_name'],
                'business_phone' => $user['business_phone'],
                'website' => $user['website'],
                'category' => $user['category'],
                'address' => $user['address'],
                'payment_method' => $user['payment_method'],
                'city' => $user['city'],
                'country' => $user['country'],
                'zip' => $user['zip'],
                'pic_name' => $user['pic_name'],
                'pic_path' => $user['pic_path'],
                'EIN_name' => $user['EIN_name'],
                'EIN_path' => $user['EIN_path'],
                'full_name' => $user['full_name'],
                'dob' => $user['dob'],
                'phone_number' => $user['phone_number'],
                'payment_method' => $user['payment_method'],
                ];
                 
                Mail::to('happyagarwal918@gmail.com')->send(new demoMail($mailData));
                
                return view('thankyou');
            }
            else{
                return back()->with('error_message', 'Invalid Approval Code')
                ->withInput($request->all());            
            }
        }
    }
}

