<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo/index-logged-out.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Dec 2020 02:32:30 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>Hireo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/colors/blue.css">

</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
@include('layout/header_out')
<!-- Header Container / End -->
<!-- Header Container / End -->

<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient"  style="margin-top:-50px">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Register</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Register</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		<div class="col-xl-5 offset-xl-3">

			<div class="login-register-page">
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3 style="font-size: 26px;">Let's create your account!</h3>
					<span>Already have an account? <a href="{{route('login')}}">Log In!</a></span>
					@if(session('error'))
						<span style="color: #fff; background-color: rgb(247, 149, 154); padding: 5px; width: 50%; margin-left: 25%; border-radius: 5px">
							{{session('error')}}
						</span>
					@endif
				</div>

				<!-- Account Type -->
				{{-- <div class="account-type">
					<div>
						<input type="radio" name="account-type-radio" id="freelancer-radio" class="account-type-radio" checked/>
						<label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Freelancer</label>
					</div>

					<div>
						<input type="radio" name="account-type-radio" id="employer-radio" class="account-type-radio"/>
						<label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Employer</label>
					</div>
				</div> --}}
					
				<!-- Form -->
				<form action="RegisterUser" method="post" >
					@csrf
					<div class="input-with-icon-left">
						<i class="icon-feather-user"></i>
						<input type="text" class="input-text with-border" name="firstname" id="emailaddress-register" placeholder="First Name" @error('firstname') style="box-shadow: 0px 0px 5px  red"@enderror value="{{old('firstname')}}"/>
						@error('firstname')
							 <span style="color:red;">{{$message}}</span>
						@enderror
					</div>

					<div class="input-with-icon-left">
						<i class="icon-feather-user"></i>
						<input type="text" class="input-text with-border" name="lastname" id="emailaddress-register" placeholder="Last Name" @error('lastname') style="box-shadow: 0px 0px 5px  red"@enderror value="{{old('lastname')}}"/>
						@error('lastname')
							<span style="color:red;">{{$message}}</span>
						@enderror
					</div>

					<div class="input-with-icon-left">
						<i class="icon-feather-user"></i>
						<input type="text" class="input-text with-border" name="username" id="emailaddress-register" placeholder="Username"  @error('username') style="box-shadow: 0px 0px 5px  red"@enderror value="{{old('username')}}"/>
						@error('username')
							<span style="color:red;">{{$message}}</span>
						@enderror
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="email" class="input-text with-border" name="email"  placeholder="Email Address" @error('email') style="box-shadow: 0px 0px 5px  red"@enderror value="{{old('email')}}"/>
						@error('email')
							<span style="color:red;">{{$message}}</span>
						@enderror
					</div>

					<div class="input-with-icon-left" title="Should be at least 8 characters long" data-tippy-placement="bottom">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="password" id="password-register" placeholder="Password" @error('password') style="box-shadow: 0px 0px 5px  red"@enderror value="{{old('password')}}"/>
						@error('password')
							<span style="color:red;">{{$message}}</span>
						@enderror
					</div>

					<div class="input-with-icon-left">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="password_confirmation" id="password-repeat-register" placeholder="Repeat Password" @error('password') style="box-shadow: 0px 0px 5px  red"@enderror />
						@error('password_confirmation')
							<span style="color:red;">{{$message}}</span>
						@enderror
					</div>
				
				
				<!-- Button -->
				<button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" >Register <i class="icon-material-outline-arrow-right-alt"></i></button>
			</form>
				<!-- Social Login -->
				{{-- <div class="social-login-separator"><span>or</span></div>
				<div class="social-login-buttons">
					<button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Register via Facebook</button>
					<button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Register via Google+</button>
				</div> --}}
			</div>

		</div>
	</div>
</div>


<!-- Spacer -->
<div class="margin-top-70"></div>
<!-- Spacer / End-->

<!-- Footer
================================================== -->
{{-- @extends('layout.footer') --}}
<!-- Footer / End -->

</div>
<!-- Wrapper / End -->

<!-- Scripts
================================================== -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/jquery-migrate-3.1.0.min.html"></script>
<script src="js/mmenu.min.js"></script>
<script src="js/tippy.all.min.js"></script>
<script src="js/simplebar.min.js"></script>
<script src="js/bootstrap-slider.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/snackbar.js"></script>
<script src="js/clipboard.min.js"></script>
<script src="js/counterup.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/custom.js"></script>

<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
// Snackbar for user status switcher
$('#snackbar-user-status label').click(function() { 
	Snackbar.show({
		text: 'Your status has been changed!',
		pos: 'bottom-center',
		showAction: false,
		actionText: "Dismiss",
		duration: 3000,
		textColor: '#fff',
		backgroundColor: '#383838'
	}); 
}); 
</script>

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Dec 2020 02:33:42 GMT -->
</html>