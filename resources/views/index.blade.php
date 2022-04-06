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
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/colors/blue.css"> 


	</head>
	<body>

		<!-- Wrapper -->
		<div id="wrapper">

		<!-- ================================================== Header Container ================================================== -->
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
							

								<!-- Search Field -->
								<div class="intro-search-field">
									<label for ="intro-keywords" class="field-title ripple-effect">Which subject?</label>
									<div class="input-with-icon">
										<input id="intro-keywords" type="text" name="subject" placeholder="Which subject?">
										<i class="icon-feather-book"></i>
										{{-- <i class="fa fa-book"></i> --}}
									</div>
								</div>

								<div class="intro-search-field with-autocomplete">
									<label for="autocomplete-input" class="field-title ripple-effect">Lesson location?</label>
									<div class="input-with-icon">
										<input id="autocomplete-input" type="text" name="location" class="typeahead"  placeholder="Specify your State or Local Government Area">
										<i class="icon-material-outline-location-on"></i>
									</div>
								</div>

								<!-- Button -->
								<div class="intro-search-button">
									<button class="button ripple-effect" onclick="window.location.href='jobs-list-layout-full-page-map.html'">Search</button>
								</div>
							</div> 
						</form> 
					</div>
				</div>

				<!-- Stats reserved -->
				{{-- <div class="row">
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
				</div> --}}

			</div>
		</div>


		<!-- Content
		============================================================ -->
		<!-- Category Boxes -->
		<div class="section margin-top-65 margin-bottom-30">
			<div class="container">
				<div class="row">
		
					<!-- Section Headline -->
					<div class="col-xl-12">
						<div class="section-headline centered margin-top-0 margin-bottom-45">
							<h3>What we cover</h3>
						</div>
					</div>
		
					<div class="col-xl-3 col-md-6">
						<!-- Photo Box -->
						<a  class="photo-box small" data-background-image="images/job-category-01.jpg">
							<div class="photo-box-content">
								<h3>Computer programming</h3>
								<span>612</span>
							</div>
						</a>
					</div>
					
					<div class="col-xl-3 col-md-6">
						<!-- Photo Box -->
						<a class="photo-box small" data-background-image="images/job-category-02.jpg">
							<div class="photo-box-content">
								<h3>Secondary Sch. Subject</h3>
								<span>113</span>
							</div>
						</a>
					</div>
					
					<div class="col-xl-3 col-md-6">
						<!-- Photo Box -->
						<a class="photo-box small" data-background-image="images/job-category-03.jpg">
							<div class="photo-box-content">
								<h3>Institution Subject</h3>
								<span>186</span>
							</div>
						</a>
					</div>
		
					<div class="col-xl-3 col-md-6">
						<!-- Photo Box -->
						<a class="photo-box small" data-background-image="images/job-category-04.jpg">
							<div class="photo-box-content">
								<h3>Other Businesses</h3>
								<span>298</span>
							</div>
						</a>
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
							<h3>Create an account</h3>
							<p>Create a new account by providing all the required details in the sign up page.</p>
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
							<h3>Login and verify your account</h3>
							<p>Your have to verify your email before you will have access to login in to your account for security purpose.</p>
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
							<p>Then navigate to Become a tutor and fill all the required boxes appropriately</p>
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
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" ></script>
		{{-- <script src="js/jquery-3.4.1.min.js"></script> --}}
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
				componentRestrictions: {country: "us"}
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
		 <script>
			var path = "{{ route('autocomplete')  }}";
			$('input.typeahead').typeahead({
				source:  function (query, process) {
				return $.get(path, { term: query }, function (data) {
						return process(data);
					});
				}
			});
		</script>
	</body>
</html>
