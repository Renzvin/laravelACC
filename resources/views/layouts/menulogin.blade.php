<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	
    <link href="{{asset('login/images/icons/favicon.ico')}}" rel="icon" type="image/png">
<!--===============================================================================================-->
    <link href="{{asset('login/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<!--===============================================================================================-->
    <link href="{{asset('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<!--===============================================================================================-->
    <link href="{{asset('login/fonts/iconic/css/material-design-iconic-font.min.css')}}" rel="stylesheet" type="text/css">
<!--===============================================================================================-->
	
    <link href="{{asset('login/vendor/animate/animate.css')}}" rel="stylesheet" type="text/css">
<!--===============================================================================================-->	
    <link href="{{asset('login/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" type="text/css">
<!--===============================================================================================-->
    <link href="{{asset('login/vendor/animsition/css/animsition.min.css')}}" rel="stylesheet" type="text/css">
<!--===============================================================================================-->
    <link href="{{asset('login/vendor/select2/select2.min.css')}}" rel="stylesheet" type="text/css">
<!--===============================================================================================-->	
    <link href="{{asset('login/vendor/daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css">
<!--===============================================================================================-->
    <link href="{{asset('login/css/util.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('login/css/main.css')}}" rel="stylesheet" type="text/css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: {{url('public/login/images/bg-01.jpg')}}">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					@yield('content')
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
    <script src="{{ asset('login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('login/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('login/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{ asset('login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('login/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('login/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{ asset('login/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('login/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('login/js/main.js')}}"></script>

</body>
</html>