<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Modern an Admin Panel Category Flat Bootstarp Resposive Website Template | Register :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!----webfonts--->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <!---//webfonts--->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</head>
<body id="login">
<div class="login-logo">
    <a href="index.html"><img src="images/logo.png" alt=""/></a>
</div>
<h2 class="form-heading">Register</h2>
<form class="form-signin app-cam"  method="POST" action="{{ url('/register') }}">
    {!! csrf_field() !!}
    <p>Enter your stadium details below</p>
    <input type="text" class="form-control1" placeholder="Stadium Name" name="name" autofocus="">
    @if ($errors->has('name'))
        <span class="help-block">
              <strong>{{ $errors->first('name') }}</strong>
          </span>
    @endif
    <input type="email" class="form-control1" placeholder="Email" name="email" autofocus="">
    @if ($errors->has('email'))
        <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
          </span>
    @endif
    <input type="password" class="form-control1" name="password" placeholder="Password">
    @if ($errors->has('password'))
        <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
          </span>
    @endif
    <input type="password" class="form-control1" placeholder="Re-type Password" name="password_confirmation">
    @if ($errors->has('password_confirmation'))
        <span class="help-block">
            <strong>{{ $errors->first('password_confirmation') }}</strong>
          </span>
    @endif
    <button class="btn btn-lg btn-success1 btn-block" type="submit">Submit</button>
    <div class="registration">
        Already Registered.
        <a class="" href="signin">
            Login
        </a>
    </div>
</form>
<div class="copy_layout login register">
    <p>Copyright &copy; 2015 Modern. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>
</body>
</html>
