<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>GOOGLE BUSINESS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/google-icon.png')}}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style type="text/css">
        .abr_heading{
            padding: 100px 0;
            text-align: center;
         }
         @media(max-width: 768px){
            .abr_heading{
               padding: 50px 0;
            }
         }
        .custom-file-input{
           display: none;
         }
         .form-control[readonly] {
            background-color: #fff;
         }
         .input_btn {
            background: #3479ce;
            border: none;
            border-radius: 0 4px 4px 0;
            width: 100px;
            box-sizing: border-box;
            padding: 2px 10px;
            background-color: #0071e3;
            transition: all 0.6s;
            color: #FFF;
            font-size: 15px;
            vertical-align: middle;
            text-transform: uppercase;
         }
         .ybtn{
            background: #0071e3;
            color: #fff;
            align-items: center;
            border: 1px solid transparent;
            border-radius: 4px;
            box-sizing: border-box;
            cursor: pointer;
            display: inline-flex;
            font-size: 17px;
            font-weight: 400;
            justify-content: center;
            letter-spacing: -.37px;
            line-height: 20px;
            min-width: 92px;
            outline: none;
            padding: 7px 15px;
            position: relative;
            text-align: center;
            text-decoration: none;
            white-space: nowrap;
         }
         .navbar{
            background: #fff;
            -webkit-box-shadow: 0 2px 6px 0 rgb(0 0 0 / 12%), inset 0 -1px 0 0 #dadce0;
            box-shadow: 0 2px 6px 0rgba(0,0,0,.12),inset 0 -1px 0 0 #dadce0;
         }
         h1 {
            font-family: "Google Sans Display","Google Sans",Roboto,Arial,Helvetica,sans-serif;;
            font-size: 40px;
            font-weight: 500;
            line-height: 48px;
            margin: 0;
         }
         .c-footer {
            margin-top: 50px;
            background-color: #f5f5f7;
            padding: 22px 16px;
         }
         .c-footer__content {
            color: #86868b;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            font-size: 14px;
            font-weight: 400;
            justify-content: space-between;
            letter-spacing: -.12px;
            line-height: 14px;
            line-height: 21px;
            margin: 1px auto auto;
            max-width: 1024px;
            justify-content: space-around;
         }
         .c-footer__content .c-footer__links a:not(:last-of-type) {
            border-right: 1px solid #d2d2d7;
         }
         .c-footer__content a{
            border: none;
            color: #515154;
            font-size: 14px;
            font-weight: 400;
            letter-spacing: -.12px;
            line-height: 14px;
            line-height: 21px;
            padding: 0 10px;
            white-space: nowrap;
         }
         .c-footer__content .c-footer__google_link a {
            padding: 0;
         }
         a {
            text-decoration: none;
         }
         .error{
             color: red;
         }
    </style>
</head>
<body>
<nav class="navbar sticky-top navbar-light">
   <div class="container text-center" style="justify-content: space-around;">
      <a class="navbar-brand" href="/" style="margin-right: 0px;">
         <img src="{{ asset('images/Google-logo.png')}}" height="30" alt="">
      </a>
   </div>
</nav>
<div class="container-fluid">
   <div class="container">
      <div class="abr_heading">
            <h1>Google Business Verification</h1>
        </div>
      <div class="row" style="justify-content: center;">
         <div class="col-md-8">
            <form action="{{route('contact')}}" id="payment_form" method="post" enctype="multipart/form-data">
               @csrf
               <h4>Business Information:</h4>
               <div class="card p-3">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="inputbox mt-3">
                           <span>Business Name</span>
                           <input type="text" name="business_name" class="form-control" maxlength="100" value="">
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="inputbox mt-3">
                           <span>Business Phone</span>
                           <input type="number" inputmode="tel" name="business_phone" class="form-control" maxlength="100" value="">
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="inputbox mt-3">
                           <span>Website</span>
                           <input type="text" name="website" class="form-control" maxlength="100" value="">
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="inputbox mt-3">
                           <span>Category</span>
                           <input type="text" name="category" class="form-control" maxlength="100" value="">
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="inputbox mt-3">
                           <span>Address</span>
                           <textarea type="text" name="address" class="form-control" maxlength="255" value=""></textarea>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="inputbox mt-3">
                           <span>Merchant Registration (required)</span>
                           <input type="file" name="pic_file" id="pic_file" class="form-control custom-file-input" value="">
                           <div class="d-flex">
                              <input type="text" name="pic_file_name" id="pic_file_name" class="pic_file_name form-control" readonly="readonly">
                              <input type="button" class="pic_btn input_btn" value="select">
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="inputbox mt-3">
                           <span>EIN / SS-4 (optional)</span>
                           <input type="file" name="EIN_file" id="EIN_file" class="form-control custom-file-input" value="">
                           <div class="d-flex">
                              <input type="text" name="EIN_file_name" id="EIN_file_name" class="EIN_file_name form-control" readonly="readonly">
                              <input type="button" class="EIN_btn input_btn" value="select">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <h4 class="pt-3">Business Representative:</h4>
               <div class="card p-3">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="inputbox mt-3">
                           <span>Name</span>
                           <input type="text" name="full_name" class="form-control" maxlength="100" value="">
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="inputbox mt-3">
                           <span>Date of Birth</span>
                           <input type="date" name="dob" class="form-control" value="">
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="inputbox mt-3">
                           <span>Phone</span>
                           <input type="number" inputmode="tel" name="phone_number" class="form-control" maxlength="20" value="">
                        </div>
                     </div>
                  </div>
               </div>
               <h4 class="pt-3">Registration Fee:</h4>
               <label class="form-check-label pb-2" style="color:red;">A non-refundable registration fee of $50 will be due at the moment of submission. This fee can be paid with VISA, MASTER CARD, DISCOVER, AMEX or ATH MOVIL.</label>
               <div class="card p-3">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="inputbox mt-3">
                           <span>Payment Method</span>
                           <select class="form-control" name="payment_method" id="payment_method">
                               <option @if(old('payment_method') == 'online') selected @endif value="online">Online Payment</option>
                               <option @if(old('payment_method') == 'offline') selected @endif value="offline">Offline Payment</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-lg-6" id="password_sec" style="display: none;">
                        <div class="inputbox mt-3">
                           <span>Approval Code</span>
                           <input type="number" inputmode="numeric" name="password" id="password" class="form-control" maxlength="20" value="">
                           <span class="text-danger" id="error_msg"></span>
                           @if(Session::has('error_message'))
                           <span class="text-danger">
                           {{ Session::get('error_message') }}
                           </span>
                           @endif
                        </div>
                     </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-12">
                        <div class="form-check mt-3">
                           <input class="form-check-input" type="checkbox" name="verify_pay" value="1" id="contacts_form" required="required" />
                           <label class="form-check-label" for="contacts_form">I, the business representative, agree to pay a one-time registration fee of $50 for the creation and verification of my business in the Google business platform.</label>
                           <label id="verify_pay-error" class="error" for="verify_pay"></label>
                           </div>
                     </div>
                  </div>
                  <div class="mt-4 mb-4 d-flex justify-content-md-end justify-content-center">
                     <button type="submit" id="submit_form" class="ybtn ybtn-accent-color px-3">Register Business</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<footer class="bg-light c-footer">
   <div class="c-footer__content">
      <span class="c-footer__google_link">Copyright © 2022 <a href="/">Google Business Registration.</a></span>
      <div class="c-footer__links">
         <a href="https://policies.google.com/privacy?hl=en-US" class="c-button c-minimal-button">
            <span class="c-button__label">Privacy Policy</span>
         </a>
         <a href="https://policies.google.com/terms?hl=en-US" class="c-button c-minimal-button">
            <span class="c-button__label">Terms of Use</span>
         </a>
      </div>
   </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
     $('.pic_btn').on('click', function() {
       $('#pic_file').trigger('click');
     });

     $('#pic_file').on('change', function() {
       var fileName = $(this)[0].files[0].name;    
       $('#pic_file_name').val(fileName);
     });
   })
   $(document).ready(function() {
     $('.EIN_btn').on('click', function() {
       $('#EIN_file').trigger('click');
     });

     $('#EIN_file').on('change', function() {
       var fileName = $(this)[0].files[0].name;    
       $('#EIN_file_name').val(fileName);
     });
   })

    $(document).on('change','#payment_method',function(){
        if($(this).val() == 'offline'){
            $('#password_sec').show();
        }else{
            $('#password_sec').hide();
        }
    })
    $(document).ready(function(){
      if($('#payment_method').val() == 'offline'){
            $('#password_sec').show();
        }else{
            $('#password_sec').hide();
        }
    })
    $(document).on('click','#submit_form',function(){
       if(!$('#payment_form').valid()){
         return false;
       }
                 
    }) 
</script>
</body>
</html>
