<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo/single-freelancer-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Dec 2020 02:31:54 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>Tutor Detail</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/colors/blue.css">

</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
@include('layout/header_out')

<div class="clearfix"></div>


<!-- Header Container / End -->



<!-- Titlebar
================================================== -->
<div class="single-page-header freelancer-header" data-background-image="../images/single-freelancer.jpg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="single-page-header-inner">

                    @foreach ($Detail as $search)
                        <div class="left-side">
                            <div class="header-image freelancer-avatar"><img src="../images/passport/{{$search->passport}}" alt=""></div>
                            <div class="header-details">
                                <h2>{{$search->title_ads}} </h2>
                                <h4>{{$search->fullname}} </h4>
                                <span> <strong>Subject: </strong> {{$search->subject}}</span>
                                <ul>
                                    <li><div class="star-rating" data-rating="{{$rate}}"></div></li>
                                    <li> {{$search->meeting_point}}</li>
                                    <li><div class="verified-badge-with-title">Verified</div></li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Page Content
================================================== -->

<div class="container">
	<div class="row">

		<!-- Content -->
		<div class="col-xl-8 col-lg-8 content-right-offset">

			<!-- Page Content -->
            @foreach ($Detail as $search)
			<div class="single-page-section">
				<h3 class="margin-bottom-25">About Me</h3> 
				<p>{{$search->about_tutor}}</p> 
			</div>
		 
			<div class="single-page-section">
				<h3 class="margin-bottom-25">Method of Teaching</h3>
				<p>{{$search->method}}.</p>

			</div>
            @endforeach
			<!-- Boxed List -->
			<div class="boxed-list margin-bottom-60">
				<div class="boxed-list-headline">
					<h3><i class="icon-material-outline-thumb-up"></i> Work History and Feedback</h3>
				</div>
				<ul class="boxed-list-ul">
                    @foreach ($review as $rev)
                        <li>
                            <div class="boxed-list-item">
                                <!-- Content -->
                                <div class="item-content">
                                    <h4>{{$rev->fullname}} <span>Rated as Tutor</span></h4>
                                    <div class="item-details margin-top-10">
                                        <div class="star-rating" data-rating="{{$rev->rate}}"></div>
                                        <div class="detail-item"><i class="icon-material-outline-date-range"></i>{{$rev->created_at}}</div>
                                    </div>
                                    <div class="item-description">
                                        <p>{{$rev->comment}}</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
			</div>
		</div>


		<!-- Sidebar -->
		<div class="col-xl-4 col-lg-4">
			<div class="sidebar-container">
                @foreach ($Detail as $search)
				<!-- Profile Overview -->
				<div class="profile-overview">
					<div class="overview-item"><strong>{{$search->week}}</strong><span>Weekly Rate</span></div>
					<div class="overview-item"><strong>{{$search->month}}</strong><span>Monthly Rate</span></div>
					<div class="overview-item"><strong>{{$search->year}}</strong><span>Yearly Rate</span></div>
				</div>
                @endforeach

				<!-- Button -->
                @auth
				    <a href="#small-dialog" class="apply-now-button margin-bottom-50 popup-with-zoom-anim button ripple-effect">Place Request<i class="icon-material-outline-arrow-right-alt"></i></a>
				    {{-- <a href="#small-dialog" class="popup-with-zoom-anim button dark ripple-effect">Place Request<i class="icon-material-outline-arrow-right-alt"></i></a> --}}
                    @endauth
                @guest
				    <a href="{{route('login')}}" class="apply-now-button margin-bottom-50">Place Request<i class="icon-material-outline-arrow-right-alt"></i></a>
                @endguest
				<!-- Freelancer Indicators -->
				<div class="sidebar-widget">
					<div class="freelancer-indicators">

						<!-- Indicator -->
						<div class="indicator">
							<strong>88%</strong>
							<div class="indicator-bar" data-indicator-percentage="88"><span></span></div>
							<span>Successful Order </span>
						</div>

						<!-- Indicator -->
						<div class="indicator">
							<strong>90%</strong>
							<div class="indicator-bar" data-indicator-percentage="90"><span></span></div>
							<span>Cancel Order</span>
						</div>

						<!-- Indicator -->
						<div class="indicator">
							<strong>80%</strong>
							<div class="indicator-bar" data-indicator-percentage="80"><span></span></div>
							<span>Active Order</span>
						</div>
					</div>
				</div>


				<!-- Widget -->
				<div class="sidebar-widget">
					<h3>Categories</h3>
					<div class="task-tags">
                        @foreach ($Detail as $search )
                            <span>{{$search->categories}}</span>
                        @endforeach
					</div>
				</div>
				<div class="sidebar-widget">
					<h3>Lessons offered by Patience</h3>
					<div class="task-tags">
                        @foreach ($Detail as $search )
                            <span>{{$search->class_type}}</span>
                        @endforeach
					</div>
				</div>
				<div class="sidebar-widget">
					<h3>The lessons will be held</h3>
					<div class="task-tags">
                        @foreach ($Detail as $search )
                            <span>{{$search->class_location}}</span>
                        @endforeach
					</div>
				</div>
				<div class="sidebar-widget">
					<h3>Location</h3>
					<div class="task-tags">
                        @foreach ($Detail as $search )
                            <span>{{$search->address}}</span>
                        @endforeach
					</div>
				</div>

				<!-- Sidebar Widget -->


			</div>
		</div>

	</div>
</div>


<!-- Spacer -->
<div class="margin-top-15"></div>
<!-- Spacer / End-->

<!-- Footer
================================================== -->
<div id="footer">

	<!-- Footer Top Section -->
	<div class="footer-top-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">

					<!-- Footer Rows Container -->
					<div class="footer-rows-container">

						<!-- Left Side -->
						<div class="footer-rows-left">
							<div class="footer-row">
								<div class="footer-row-inner footer-logo">
									<img src="images/logo2.png" alt="">
								</div>
							</div>
						</div>

						<!-- Right Side -->
						<div class="footer-rows-right">

							<!-- Social Icons -->
							<div class="footer-row">
								<div class="footer-row-inner">
									<ul class="footer-social-links">
										<li>
											<a href="#" title="Facebook" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-facebook-f"></i>
											</a>
										</li>
										<li>
											<a href="#" title="Twitter" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-twitter"></i>
											</a>
										</li>
										<li>
											<a href="#" title="Google Plus" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-google-plus-g"></i>
											</a>
										</li>
										<li>
											<a href="#" title="LinkedIn" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-linkedin-in"></i>
											</a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
							</div>

							<!-- Language Switcher -->
							<div class="footer-row">
								<div class="footer-row-inner">
									<select class="selectpicker language-switcher" data-selected-text-format="count" data-size="5">
										<option selected>English</option>
										<option>Français</option>
										<option>Español</option>
										<option>Deutsch</option>
									</select>
								</div>
							</div>
						</div>

					</div>
					<!-- Footer Rows Container / End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Top Section / End -->

	<!-- Footer Middle Section -->
	<div class="footer-middle-section">
		<div class="container">
			<div class="row">

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>For Candidates</h3>
						<ul>
							<li><a href="#"><span>Browse Jobs</span></a></li>
							<li><a href="#"><span>Add Resume</span></a></li>
							<li><a href="#"><span>Job Alerts</span></a></li>
							<li><a href="#"><span>My Bookmarks</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>For Employers</h3>
						<ul>
							<li><a href="#"><span>Browse Candidates</span></a></li>
							<li><a href="#"><span>Post a Job</span></a></li>
							<li><a href="#"><span>Post a Task</span></a></li>
							<li><a href="#"><span>Plans & Pricing</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>Helpful Links</h3>
						<ul>
							<li><a href="#"><span>Contact</span></a></li>
							<li><a href="#"><span>Privacy Policy</span></a></li>
							<li><a href="#"><span>Terms of Use</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>Account</h3>
						<ul>
							<li><a href="#"><span>Log In</span></a></li>
							<li><a href="#"><span>My Account</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Newsletter -->
				<div class="col-xl-4 col-lg-4 col-md-12">
					<h3><i class="icon-feather-mail"></i> Sign Up For a Newsletter</h3>
					<p>Weekly breaking news, analysis and cutting edge advices on job searching.</p>
					<form action="#" method="get" class="newsletter">
						<input type="text" name="fname" placeholder="Enter your email address">
						<button type="submit"><i class="icon-feather-arrow-right"></i></button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Middle Section / End -->

	<!-- Footer Copyrights -->
	<div class="footer-bottom-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					© 2019 <strong>Hireo</strong>. All Rights Reserved.
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Copyrights / End -->

</div>
<!-- Footer / End -->

</div>
<!-- Wrapper / End -->


<!-- Make an Offer Popup
================================================== -->
<div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
    <ul class="popup-tabs-nav">
        <li><a href="#tab">Make an Offer</a></li>
    </ul>
		<div class="popup-tab-content">

            @foreach ($Detail as $search)
            <div class="welcome-text ">
                <h3>Write a request note to {{$search->fullname}}</h3>
            </div>
            @endforeach
            <form action="../placeOrder" method="post" >
                @csrf
                @foreach ($Detail as $search)
                <input type="hidden" value="{{$search->user_id}}" name="tutor_id">
                <input type="hidden" value="{{$search->email}}" name="email">
                {{-- <input type="hidden" value="{{$search->u}}" name="email"> --}}
				
                @endforeach

                <textarea  name="message" cols="10" placeholder="Message" class="with-border" required></textarea>

            <!-- Button -->
                <button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" >Place Request <i class="icon-material-outline-arrow-right-alt"></i></button>
            </form>
	</div>
</div>
<!-- Make an Offer Popup / End -->



<!-- Scripts
================================================== -->
<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/jquery-migrate-3.1.0.min.html"></script>
<script src="../js/mmenu.min.js"></script>
<script src="../js/tippy.all.min.js"></script>
<script src="../js/simplebar.min.js"></script>
<script src="../js/bootstrap-slider.min.js"></script>
<script src="../js/bootstrap-select.min.js"></script>
<script src="../js/snackbar.js"></script>
<script src="../js/clipboard.min.js"></script>
<script src="../js/counterup.min.js"></script>
<script src="../js/magnific-popup.min.js"></script>
<script src="../js/slick.min.js"></script>
<script src="../js/custom.js"></script>

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

// Snackbar for "place a bid" button
$('#snackbar-place-bid').click(function() {
	Snackbar.show({
		text: 'Your bid has been placed!',
	});
});


// Snackbar for copy to clipboard button
$('.copy-url-button').click(function() {
	Snackbar.show({
		text: 'Copied to clipboard!',
	});
});
</script>

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo/single-freelancer-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Dec 2020 02:31:56 GMT -->
</html>

