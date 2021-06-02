<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo/dashboard-messages.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Dec 2020 02:32:03 GMT -->
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
@include('dashboard/layout/header')
<div class="clearfix"></div>

<!-- Header Container / End -->


<!-- Dashboard Container -->
<div class="dashboard-container">

	<!-- Dashboard Sidebar
	================================================== -->
	@include('dashboard/layout/dashboard_side_bar')
	<!-- Dashboard Sidebar / End -->


	<!-- Dashboard Content
	================================================== -->
	<div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner" >

			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>{{auth()->user()->username}}</h3>
				<span>We are glad to see you again!</span>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
                        <li><a href="{{route('dashboard')}}">Dashboard</a></li>
						<li>Setting</li>
					</ul>
				</nav>
			</div>
            <form action="Update" method="post" enctype="multipart/form-data">
                @csrf
            <div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">

					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-account-circle"></i> My Account</h3>
						</div>

						<div class="content with-padding padding-bottom-0">

							<div class="row">
                                @foreach ($setting as $data)
								<div class="col-auto">
                                    @error('fileName')
                                    <span style="color:red;">{{$message}}</span>
                                @enderror
									<div class="avatar-wrapper" data-tippy-placement="bottom" title="Change Avatar">
										<img class="profile-pic" src="images/passport/{{$data->passport}}" alt="" />
										<div class="upload-button"></div>


										<input class="file-upload" type="file" name="fileName" accept="image/*"/>


									</div>
								</div>
                                {{-- <img src="images/passport/tesleem.png" alt="mnn" srcset=""> --}}
                                {{$data->passport}}
								<div class="col">
									<div class="row">
                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>Full Name</h5>
                                                    <input type="text" name="fullname" class="with-border" value="{{$data->fullname}}">
                                                    @error('fullname')
                                                        <span style="color:red;">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>Username</h5>
                                                    <input type="text" name="username" class="with-border" value="{{$data->username}}">
                                                    @error('username')
                                                        <span style="color:red;">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>Phone Number</h5>
                                                    <input type="text" name="phone" class="with-border" value="{{$data->phone}}">
                                                        @error('phone')
                                                            <span style="color:red;">{{$message}}</span>
                                                        @enderror
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>Email</h5>
                                                    <input type="text" name="email" class="with-border" value="{{$data->email}}" readonly>
                                            </div>
                                        @endforeach

									</div>
								</div>
							</div>

						</div>
					</div>


                </form>
				</div>
				<!-- Button -->
                <div class="col-xl-12">
                    <button type="submit" class="button ripple-effect big margin-top-30">Published class ad</button>
                </div>

			</div>
        </form>
</div>




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


<!-- Apply for a job popup
================================================== -->
<div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
    <ul class="popup-tabs-nav">
        <li><a href="#tab">Accept Offer</a></li>
    </ul>

		<div class="popup-tab-content">
            <div class="welcome-text ">
                <h3>Write a request note to </h3>
            </div>
            <form action="../placeOrder" method="post" >
                @csrf
                <input type="hidden" value="" name="tutor_id">

                <textarea  name="message" cols="10" placeholder="Message" class="with-border"></textarea>

            <!-- Button -->
                <button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" >Place Request <i class="icon-material-outline-arrow-right-alt"></i></button>
            </form>
	</div>
</div>
<!-- Apply for a job popup / End -->


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

<!-- Mirrored from www.vasterad.com/themes/hireo/dashboard-messages.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Dec 2020 02:32:03 GMT -->
</html>
