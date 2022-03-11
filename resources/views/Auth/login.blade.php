<!doctype html>
<html lang="en">

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

<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient" style="margin-top:-50px">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Log In</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Log In</li>
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
		<div class="col-xl-6 offset-xl-3">


			<div class="login-register-page">
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>We're glad to see you again!</h3>
					<span>Don't have an account? <a href="{{route('signup')}}">Sign Up!</a></span>

					@if(session('error_mail')) 
						<div class="notification error closeable">
							<p>{{session('error_mail')}} 
								<a href="#small-dialog" class=" popup-with-zoom-anim  ripple-effect"> Re-send verification mail</a>
							</p>
							<a class="close" href="#"></a>
						</div>
					@endif
					@if(session('error'))
						<div class="notification error closeable">
							<p>{{session('error')}}</p>
							<a class="close" href="#"></a>
						</div> 
					@endif
					@if(session('success'))
						<div class="notification success closeable">
							<p>{{session('success')}}</p>
							<a class="close" href="#"></a>
						</div>
					@endif
					
				</div>

				<!-- Form -->
				<form action="{{route('login')}}" method="post" >
					@csrf
					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="email" id="email" placeholder="Email Address" @error('email') style="box-shadow: 0px 0px 5px  red"@enderror value="{{old('email')}}"/>
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
				<!-- Button -->
					<button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" >Log in <i class="icon-material-outline-arrow-right-alt"></i></button>
				</form>
			</div>

		</div>
	</div>
</div>


<!-- Spacer -->
<div class="margin-top-70"></div>
<!-- Spacer / End-->

<!-- Footer
================================================== -->


<!-- Footer / End -->

</div>
<!-- Wrapper / End -->
<!-- Make an Offer Popup
================================================== -->
<div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
    <ul class="popup-tabs-nav">
        <li><a href="#tab">Resend verification mail</a></li>
    </ul>
		<div class="popup-tab-content">

            {{-- @foreach ($Detail as $search) --}}
            <div class="welcome-text ">
                <h3>Enter your registered E-mail</h3>
            </div>
            {{-- @endforeach --}}
            <form action="{{route('verifymail')}}" method="post" >
                @csrf 
				<div class="input-with-icon-left">
					<i class="icon-material-baseline-mail-outline"></i>
					<input type="text" class="input-text with-border" name="email" placeholder="Email Address" required/>
				</div>
				
            <!-- Button -->
                <button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" >Send <i class="icon-material-outline-arrow-right-alt"></i></button>
            </form>
	</div>
</div>
<!-- Make an Offer Popup / End -->
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

<!-- Mirrored from www.vasterad.com/themes/hireo/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Dec 2020 02:32:30 GMT -->
</html>

