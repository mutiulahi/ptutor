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



<!-- Intro Banner
================================================== -->
<!-- add class "disable-gradient" to enable consistent background overlay -->
<div class="intro-banner" data-background-image="images/home-background.jpg">
	<div class="container">

		<!-- Intro Headline -->
		<div class="row">
			<div class="col-md-12">
				<div class="banner-headline">
					<h3>
						<strong>Find the perfect tutor.</strong>
						<br>
						<span>Thousands of student find tutor on <strong class="color">Hireo</strong> that help them in their difficulty of learning new things.</span>
					</h3>
				</div>
			</div>
		</div>

		<!-- Search Bar -->
		<div class="row">
			<div class="col-md-12">
				<form action="finderTutors" method="post">
					<div class="intro-banner-search-form margin-top-95">
                        @csrf
						<!-- Search Field -->
						<div class="intro-search-field with-autocomplete">
							<label for="autocomplete-input" class="field-title ripple-effect">Where?</label>
							<div class="input-with-icon">
								<input id="autocomplete-input" type="text" name="location" placeholder="Your location">
								<i class="icon-material-outline-location-on"></i>
							</div>
						</div>

						<!-- Search Field -->
						<div class="intro-search-field">
							<label for ="intro-keywords" class="field-title ripple-effect">What subject do you need help?</label>
							<input id="intro-keywords" type="text" name="subject" placeholder="Subject ">
						</div>

						<!-- Button -->
						<div class="intro-search-button">
							<button class="button ripple-effect" onclick="window.location.href='jobs-list-layout-full-page-map.html'">Search</button>
						</div>
					</div>
				</form>

			</div>
		</div>

		<!-- Stats -->
		<div class="row">
			<div class="col-md-6">
				<ul class="intro-stats margin-top-45 hide-under-992px">
					<li>
						<strong class="counter">1,232</strong>
						<span>Available Tutor's</span>
					</li>
				</ul>
			</div>
			<div class="col-md-6">
				<ul class="intro-stats margin-top-45 hide-under-992px">
					<li>
						<strong class="counter">10,000</strong>
						<span>Subject is Available</span>
					</li>
				</ul>
			</div>
		</div>

	</div>
</div>


<!-- Content
============================================================ -->
<!-- Category Boxes -->
<div class="section margin-top-65">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">

				<div class="section-headline centered margin-bottom-15">
					<h3>Available Tutor's Categories</h3>
				</div>

				<!-- Category Boxes Container -->
				<div class="categories-container">

					<!-- Category Box -->
					<a href="jobs-grid-layout-full-page.html" class="category-box">
						<div class="category-box-icon">
							<i class="icon-line-awesome-file-code-o"></i>
						</div>
						{{-- <div class="category-box-counter">612</div> --}}
						<div class="category-box-content">
							<h3>Web & Software Dev</h3>
							<p>Software Engineer, Web / Mobile Developer & More</p>
						</div>
					</a>

					<!-- Category Box -->
					<a href="jobs-list-layout-1.html" class="category-box">
						<div class="category-box-icon">
							<i class="icon-line-awesome-image"></i>
						</div>
						{{-- <div class="category-box-counter">873</div> --}}
						<div class="category-box-content">
							<h3>Graphics & Design</h3>
							<p>Creative Director, Web Designer & More</p>
						</div>
					</a>

					<!-- Category Box -->
					<a href="jobs-grid-layout-full-page.html" class="category-box">
						<div class="category-box-icon">
							<i class="icon-line-awesome-graduation-cap"></i>
						</div>
						{{-- <div class="category-box-counter">445</div> --}}
						<div class="category-box-content">
							<h3>Education & Training</h3>
							<p>Advisor, Coach, Education Coordinator & More</p>
						</div>
					</a>
					<!-- Category Box -->
					<a href="jobs-grid-layout-full-page.html" class="category-box">
						<div class="category-box-icon">
							<i class="icon-line-awesome-mortar-board"></i>
						</div>
						{{-- <div class="category-box-counter">445</div> --}}
						<div class="category-box-content">
							<h3>Academics</h3>
							<p>Academic tutoring like, Physics, Chemistary Integrated Sci. & More</p>
						</div>
					</a>

				</div>

			</div>
		</div>
	</div>
</div>
<!-- Category Boxes / End -->

<div class="section padding-top-65 padding-bottom-65">
	<div class="container">
		<div class="row">

			<div class="col-xl-12">
				<!-- Section Headline -->
				<div class="section-headline centered margin-top-0 margin-bottom-5">
					<h3>How To Become a Tutor?</h3>
				</div>
			</div>

			<div class="col-xl-4 col-md-4">
				<!-- Icon Box -->
				<div class="icon-box with-line">
					<!-- Icon -->
					<div class="icon-box-circle">
						<div class="icon-box-circle-inner">
							<i class="icon-line-awesome-lock"></i>
							<div class="icon-box-check"><i class="icon-material-outline-check"></i></div>
						</div>
					</div>
					<h3>Create an Account</h3>
					<p>Creating new account will let us know you.</p>
				</div>
			</div>

			<div class="col-xl-4 col-md-4">
				<!-- Icon Box -->
				<div class="icon-box with-line">
					<!-- Icon -->
					<div class="icon-box-circle">
						<div class="icon-box-circle-inner">
							<i class="icon-line-awesome-lock"></i>
							<div class="icon-box-check"><i class="icon-material-outline-check"></i></div>
						</div>
					</div>
					<h3>Login to your account</h3>
					<p>Your have to login for security purpose.</p>
				</div>
			</div>

			<div class="col-xl-4 col-md-4">
				<!-- Icon Box -->
				<div class="icon-box">
					<!-- Icon -->
					<div class="icon-box-circle">
						<div class="icon-box-circle-inner">
							<i class="icon-line-awesome-trophy"></i>
							<div class="icon-box-check"><i class="icon-material-outline-check"></i></div>
						</div>
					</div>
					<h3>Create your class ads</h3>
					<p>Just what you wanted to teach and fill the form become a tutor.</p>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- Features Jobs -->

<!-- Featured Jobs / End -->


<!-- Some recormended tutor's -->
{{-- @include('layout/recormended') --}}
<!-- Some recormended tutor's / End-->

<!-- Footer
================================================== -->
@extends('layout.footer')
<!-- Footer / End -->

</div>
<!-- Wrapper / End -->


<!-- Sign In Popup
================================================== -->
@extends('layout/sign_in_popup')
<!-- Sign In Popup / End -->


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


<!-- Google Autocomplete -->
<script>
	function initAutocomplete() {
		 var options = {
		  types: ['(cities)'],
		  // componentRestrictions: {country: "us"}
		 };

		 var input = document.getElementById('autocomplete-input');
		 var autocomplete = new google.maps.places.Autocomplete(input, options);
	}

	// Autocomplete adjustment for homepage
	if ($('.intro-banner-search-form')[0]) {
	    setTimeout(function(){
	        $(".pac-container").prependTo(".intro-search-field.with-autocomplete");
	    }, 300);
	}

</script>

<!-- Google API & Maps -->
<!-- Geting an API Key: https://developers.google.com/maps/documentation/javascript/get-api-key -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaoOT9ioUE4SA8h-anaFyU4K63a7H-7bc&amp;libraries=places"></script>

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo/index-logged-out.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Dec 2020 02:32:30 GMT -->
</html>
