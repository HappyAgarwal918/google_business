<!DOCTYPE html>
<html>
<head>
    <title>GOOGLE BUSINESS</title>
</head>
<body>
<p>Greetings,</p>
    <h3>{{ $mailData['title'] }}</h3>
    <h4 style="color:red;">Business Information:</h4>
    <p>Business Name: {{ $mailData['business_name'] }}</p>
    <p>Business Phone: {{ $mailData['business_phone'] }}</p>
    <p>Website: {{ $mailData['website'] }}</p>
    <p>Business Category: {{ $mailData['category'] }}</p>
    <p>Business Address: {{ $mailData['address'] }}</p>
    <h4 style="color:red;">Point of contact</h4>
    <p>Full Name: {{ $mailData['full_name'] }}</p>
    <p>Date of Birth: {{ $mailData['dob'] }}</p>
    <p>Phone Number: {{ $mailData['phone_number'] }}</p>
    <h4 style="color:red;">Payment method</h4>
    <p>{{ $mailData['payment_method'] }}</p>
    <h4 style="color:red;">Attachments</h4>
    @isset($mailData['pic_path'])
    <p>Merchant Registration: <a href="@php echo url('')@endphp/pic/{{$mailData['pic_path']}}" download>{{$mailData['pic_name']}}</a></p>
    @endisset
    @isset($mailData['EIN_path'])
    <p>EIN / SS-4: <a href="@php echo url('')@endphp/EIN/{{$mailData['EIN_path']}}" download>{{$mailData['EIN_name']}}</a></p>
    @endisset
    <br>
    <p>Best Regards,</p>
    <p>Google Business Registration Team</p>
</body>
</html>