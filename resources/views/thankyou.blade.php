<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>GOOGLE BUSINESS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="{{ asset('images/google-icon.png')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=Raleway:400,600,900');

*{
  box-sizing:border-box;
 /* outline:1px solid ;*/
}
.navbar{
  background: #fff;
  -webkit-box-shadow: 0 2px 6px 0 rgb(0 0 0 / 12%), inset 0 -1px 0 0 #dadce0;
  box-shadow: 0 2px 6px 0rgba(0,0,0,.12),inset 0 -1px 0 0 #dadce0;
}

.wrapper-1{
  width:100%;
  height:100vh;
  display: flex;
flex-direction: column;
}
.wrapper-2{
  padding: 30px;
  text-align:center;
}
h1.thankyoutext{
  font-family: "Google Sans Display","Google Sans",Roboto,Arial,Helvetica,sans-serif;
  font-size:50px;
  font-weight: 800;
  letter-spacing:3px;
  color: #1a73e8;
  margin:0;
  margin-top: 40px;
  margin-bottom:40px;
}
@media(max-width: 425px){
    h1.thankyoutext{
        font-size: 40px;
    }
}
.wrapper-2 p{
  margin:0;
  font-size:1.3em;
  color:#000;
  font-family: 'Raleway', sans-serif;
  letter-spacing:1px;
  line-height: 1.5;
}
.go-home{
  background: #e83890;
  border:none;
  padding: 25px 30px;
  margin: 30px 0;
  border-radius: 5px;
  cursor: pointer;
}
.go-home:hover{
  opacity: 0.9;
}
.go-home a{
  font-family: 'Raleway', Arial Black;
  font-size: 1rem;
  font-weight: 700!important;
  text-transform: uppercase;
  letter-spacing: 2px;
  
}
.footer-like{
  margin-top: auto; 
  background: #1a73e8;
  padding:6px;
  text-align:center;
}
.footer-like p{
  margin:0;
  padding:4px;
  color:#fafafa;
  font-family: 'Raleway', sans-serif;
  letter-spacing:1px;
}
.footer-like p a{
  text-decoration:none;
  color:#5892FF;
  font-weight: 600;
}

.footer-like p a:hover{
  color:#FFF;
 }

@media (min-width:360px){
  h1{
    font-size:4.5em;
  }
  .go-home{
    margin-bottom:20px;
  }
}

@media (min-width:600px){
  .thankyoucontent{
  max-width:650px;
  margin:0 auto;
}
  .wrapper-1{
  height: initial;
  max-width:620px;
  margin:0 auto;
  margin-top:50px;
  }
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
  font-size: 24px;
  font-weight: 400;
  justify-content: center;
  letter-spacing: -.37px;
  line-height: 21px;
  min-width: 92px;
  outline: none;
  padding: 7px 15px;
  position: relative;
  text-align: center;
  text-decoration: none;
  white-space: nowrap;
}
a:hover{
  color: #fff;
}
  </style>
  <title></title>
</head>
<body>
<nav class="navbar sticky-top navbar-light">
   <div class="container text-center" style="justify-content: space-around;">
      <a class="navbar-brand" href="/" style="margin-right: 0px;">
         <img src="{{ asset('images/Google-logo.png')}}" height="30" alt="">
      </a>
   </div>
</nav>
    <div class=thankyoucontent>
       <div class="wrapper-1">
          <div class="wrapper-2">
            <h2 style="font-family: SF Pro Display,SF Pro Icons,Helvetica Neue,Helvetica,Arial,sans-serif;
    font-size: 40px; font-weight: 600; line-height: 48px; margin: 0;">Business Submitted</h2>
           <h1 class="thankyoutext">Thank you!</h1>
            <p>Your business will be added to the <br class="d-none d-md-block">Google Business Directory within 72 hours.<br class="d-none d-md-block"> If we need any additional information, <br class="d-none d-md-block">a representative will be contacting you.</p> 
            <img class="mt-5" src="{{ asset ('images/thumb_checkmark.png')}}" alt="thank-you-envelope" border="0" style="width:50%">
          </div>
         <center><a href="/" type="button" id="" class="ybtn ybtn-accent-color px-3 mt-3 mb-5">Submit Another Business</a></center>
          <div class="footer-like">
            <p>
            </p>
          </div>
      </div>
</body>
</html>