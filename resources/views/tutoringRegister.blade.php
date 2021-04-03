<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo/dashboard-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Dec 2020 02:32:05 GMT -->
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
<body class="gray">

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
@extends('layout/header_out')
<!-- Header Container / End -->


<!-- Dashboard Container -->

	<!-- Dashboard Sidebar / End -->


	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>Settings</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>Settings</li>
					</ul>
				</nav>
			</div>
	
			<!-- Row -->
			<div class="row">
				<form action="become_tutor" method="POST">
					@csrf
					<!-- Dashboard Box -->
					<div class="col-xl-12">
						<div class="dashboard-box margin-top-0">

							<!-- Headline -->
							<div class="headline">
								<h3><i class="icon-material-outline-account-circle"></i> My Account</h3>
							</div>

							<div class="content with-padding padding-bottom-0">

								<div class="row">
									{{-- <div class="col-auto">
										<div class="avatar-wrapper" data-tippy-placement="bottom" title="Change Avatar">
											<img class="profile-pic" src="images/user-avatar-placeholder.png" alt="" />
											<div class="upload-button"></div>
											<input class="file-upload" type="file" accept="image/*"/>
										</div>
									</div> --}}

									<div class="col">
										<div class="row">
											<div class="col-xl-12">
												<div class="submit-field">
													<h5>Categories</h5>
													<select class="selectpicker with-border" name="categories" data-size="7" title="Select Job Type" data-live-search="true">
														<option value="AR">Argentina</option>
														<option value="AM">Armenia</option>
														<option value="AW">Aruba</option>
														<option value="AU">Australia</option>
													</select>
												</div>
											</div>

											<div class="col-xl-12">
												<div class="submit-field">
													<h5>other skill</h5>
													<input type="text" class="with-border" name="other_skill" value="Tom">
												</div>
											</div>

											{{-- <div class="col-xl-4">
												<div class="submit-field">
													<h5>Last Name</h5>
													<input type="text" class="with-border" value="Smith">
												</div>
											</div>

											<div class="col-xl-4">
												<div class="submit-field">
													<h5>Email</h5>
													<input type="text" class="with-border" value="tom@example.com">
												</div>
											</div> --}}

											<div class="col-xl-12">
												<!-- Account Type -->
												<div class="submit-field">
													<h5>Class Type</h5>
													<div class="account-type">
														<div>
															<input type="checkbox" name="class_type" value="Individual Class" id="freelancer-radio" class="account-type-radio" checked/>
															<label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Individual Class</label>
														</div>

														<div>
															<input type="checkbox" name="class_type" value="Group Class" id="employer-radio" class="account-type-radio"/>
															<label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Group Class</label>
														</div>

														<div>
															<input type="checkbox" name="class_type" value="Both Class" id="employer-radio" class="account-type-radio"/>
															<label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Both Class</label>
														</div>
													</div>
												</div>
											</div>

											
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>

					<!-- Dashboard Box -->
					<div class="col-xl-12">
						<div class="dashboard-box">

							<!-- Headline -->
							<div class="headline">
								<h3><i class="icon-material-outline-face"></i> My Profile</h3>
							</div>

							<div class="content">
								<ul class="fields-ul">
								<li>
									<div class="row">
										{{-- <div class="col-xl-4">
											<div class="submit-field">
												<div class="bidding-widget">
													<!-- Headline -->
													<span class="bidding-detail">Set your <strong>minimal hourly rate</strong></span>

													<!-- Slider -->
													<div class="bidding-value margin-bottom-10">$<span id="biddingVal"></span></div>
													<input class="bidding-slider" type="text" value="" data-slider-handle="custom" data-slider-currency="$" data-slider-min="5" data-slider-max="150" data-slider-value="35" data-slider-step="1" data-slider-tooltip="hide" />
												</div>
											</div>
										</div> --}}

										{{-- <div class="col-xl-4">
											<div class="submit-field">
												<h5>Skills <i class="help-icon" data-tippy-placement="right" title="Add up to 10 skills"></i></h5>

												<!-- Skills List -->
												<div class="keywords-container">
													<div class="keyword-input-container">
														<input type="text" class="keyword-input with-border" placeholder="e.g. Angular, Laravel"/>
														<button class="keyword-input-button ripple-effect"><i class="icon-material-outline-add"></i></button>
														<input type="submit" class="keyword-input-button ripple-effect" value="<i class='icon-material-outline-add'></i>">
													</div>
													<div class="keywords-list">
														<span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Angular</span></span>
														<span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Vue JS</span></span>
														<span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">iOS</span></span>
														<span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Android</span></span>
														<span class="keyword"><span class="keyword-remove"></span><span class="keyword-text">Laravel</span></span>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
										</div> --}}
										
										<div class="col-xl-6">
											<div class="submit-field">
												<h5>Address</h5>
												<input type="text" class="with-border" name="address" value="iOS Expert + Node Dev">
											</div>
										</div>

										<div class="col-xl-6">
											<div class="submit-field">
												<h5>Where will your classes be held</h5>
												<select class="selectpicker with-border" name="meeting_point" data-size="7" title="Select Job Type" data-live-search="true">
													<option value="Receive student at my home">I can receive student at my home</option>
													<option value="Give student online class">I can give student online class</option>
													<option value="Travel to the student home">I can travel to the student home</option>
												</select>
											</div>
										</div>
										<div class="col-xl-6">
											<div class="submit-field">
												<h5>Language</h5>
												<select class="selectpicker with-border" name="language" data-size="7" title="Select Job Type" data-live-search="true">
													<option value="AR">Argentina</option>
													<option value="AM">Armenia</option>
													<option value="AW">Aruba</option>
													<option value="AU">Australia</option>
												</select>
											</div>
										</div>

										{{-- <div class="col-xl-4">
											<div class="submit-field">
												<h5>Attachments</h5>
												
												<!-- Attachments -->
												<div class="attachments-container margin-top-0 margin-bottom-0">
													<div class="attachment-box ripple-effect">
														<span>Cover Letter</span>
														<i>PDF</i>
														<button class="remove-attachment" data-tippy-placement="top" title="Remove"></button>
													</div>
													<div class="attachment-box ripple-effect">
														<span>Contract</span>
														<i>DOCX</i>
														<button class="remove-attachment" data-tippy-placement="top" title="Remove"></button>
													</div>
												</div>
												<div class="clearfix"></div>
												
												<!-- Upload Button -->
												<div class="uploadButton margin-top-0">
													<input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload" multiple/>
													<label class="uploadButton-button ripple-effect" for="upload">Upload Files</label>
													<span class="uploadButton-file-name">Maximum file size: 10 MB</span>
												</div>

											</div>
										</div> --}}
									</div>
								</li>
								<li>
									<div class="row">

										<div class="col-xl-12">
											<div class="submit-field">
												<h5>Tutoring title ads</h5>
												<textarea cols="30" rows="5" name="title_ads" class="with-border">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</textarea>
											</div>
										</div>

										<div class="col-xl-12">
											<div class="submit-field">
												<h5>What method do you intend to use for tutoring</h5>
												<textarea cols="30" rows="5" name="teaching_mathod" class="with-border">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</textarea>
											</div>
										</div>

										<div class="col-xl-12">
											<div class="submit-field">
												<h5>Introduce Yourself</h5>
												<textarea cols="30" rows="5" name="background" class="with-border">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</textarea>
											</div>
										</div>

									</div>
								</li>
							</ul>
							</div>
						</div>
					</div>

					<!-- Dashboard Box -->
					<div class="col-xl-12">
						<div id="test1" class="dashboard-box">

							<!-- Headline -->
							<div class="headline">
								<h3><i class="icon-material-outline-lock"></i> Password & Security</h3>
							</div>

							<div class="content with-padding">
								<div class="row">
									<div class="col-xl-4">
										<div class="submit-field">
											<h5>rate / hour</h5>
											<input type="number" name="parhrs" class="with-border">
										</div>
									</div>

									<div class="col-xl-4">
										<div class="submit-field">
											<h5>rate / 5 hours</h5>
											<input type="number" name="parfivehrs" class="with-border">
										</div>
									</div>

									<div class="col-xl-4">
										<div class="submit-field">
											<h5>more than 5 hours</h5>
											<input type="number" name="morefivehrs" class="with-border">
										</div>
									</div>

									{{-- <div class="col-xl-12">
										<div class="checkbox">
											<input type="checkbox" id="two-step" checked>
											<label for="two-step"><span class="checkbox-icon"></span> Enable Two-Step Verification via Email</label>
										</div>
									</div> --}}
								</div>
							</div>
						</div>
					</div>
					
					<!-- Button -->
					<div class="col-xl-12">
						{{-- <a href="#" class="button ripple-effect big margin-top-30">Save Changes</a> --}}
						<button type="submit" class="button ripple-effect big margin-top-30">Save Change</button>
					</div>

				</form>
			</div>
			<!-- Row / End -->

			<!-- Footer -->
			<div class="dashboard-footer-spacer"></div>
			<div class="small-footer margin-top-15">
				<div class="small-footer-copyrights">
					© 2019 <strong>Hireo</strong>. All Rights Reserved.
				</div>
				<ul class="footer-social-links">
					<li>
						<a href="#" title="Facebook" data-tippy-placement="top">
							<i class="icon-brand-facebook-f"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Twitter" data-tippy-placement="top">
							<i class="icon-brand-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#" title="Google Plus" data-tippy-placement="top">
							<i class="icon-brand-google-plus-g"></i>
						</a>
					</li>
					<li>
						<a href="#" title="LinkedIn" data-tippy-placement="top">
							<i class="icon-brand-linkedin-in"></i>
						</a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<!-- Footer / End -->

		</div>
	</div>
	<!-- Dashboard Content / End -->

</div>
<!-- Dashboard Container / End -->

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

<!-- Chart.js // documentation: http://www.chartjs.org/docs/latest/ -->
<script src="js/chart.min.js"></script>
<script>
	Chart.defaults.global.defaultFontFamily = "Nunito";
	Chart.defaults.global.defaultFontColor = '#888';
	Chart.defaults.global.defaultFontSize = '14';

	var ctx = document.getElementById('chart').getContext('2d');

	var chart = new Chart(ctx, {
		type: 'line',

		// The data for our dataset
		data: {
			labels: ["January", "February", "March", "April", "May", "June"],
			// Information about the dataset
	   		datasets: [{
				label: "Views",
				backgroundColor: 'rgba(42,65,232,0.08)',
				borderColor: '#2a41e8',
				borderWidth: "3",
				data: [196,132,215,362,210,252],
				pointRadius: 5,
				pointHoverRadius:5,
				pointHitRadius: 10,
				pointBackgroundColor: "#fff",
				pointHoverBackgroundColor: "#fff",
				pointBorderWidth: "2",
			}]
		},

		// Configuration options
		options: {

		    layout: {
		      padding: 10,
		  	},

			legend: { display: false },
			title:  { display: false },

			scales: {
				yAxes: [{
					scaleLabel: {
						display: false
					},
					gridLines: {
						 borderDash: [6, 10],
						 color: "#d8d8d8",
						 lineWidth: 1,
	            	},
				}],
				xAxes: [{
					scaleLabel: { display: false },  
					gridLines:  { display: false },
				}],
			},

		    tooltips: {
		      backgroundColor: '#333',
		      titleFontSize: 13,
		      titleFontColor: '#fff',
		      bodyFontColor: '#fff',
		      bodyFontSize: 13,
		      displayColors: false,
		      xPadding: 10,
		      yPadding: 10,
		      intersect: false
		    }
		},


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

		if ($('.submit-field')[0]) {
		    setTimeout(function(){ 
		        $(".pac-container").prependTo("#autocomplete-container");
		    }, 300);
		}
	}
</script>

<!-- Google API -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaoOT9ioUE4SA8h-anaFyU4K63a7H-7bc&amp;libraries=places&amp;callback=initAutocomplete"></script>


</body>

<!-- Mirrored from www.vasterad.com/themes/hireo/dashboard-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Dec 2020 02:32:05 GMT -->
</html>