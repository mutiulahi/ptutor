
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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
						<li><a href="#">Home</a></li>
						<li>Dashboard</li>
					</ul>
				</nav>
			</div>
            <div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">
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

						<!-- Headline -->
						<div class="headline">
							<h3>Recieved Request</h3>
						</div>

						<div class="content">
							<ul class="dashboard-box-list">
                                @foreach ($order_message as $msg )
								<li>
									<!-- Overview -->
									<div class="freelancer-overview manage-candidates">


                                        {{-- {{$msg->request_message}} --}}


                                        <div class="freelancer-overview-inner">

											<!-- Avatar -->
											<div class="freelancer-avatar">
                                                @if ($msg->status == 'accept')
                                                    <div class="verified-badge"></div>
                                                @endif

												<a href="#"><img src="images/passport/{{$msg->passport}}" alt=""></a>
											</div>

											<!-- Name -->
											<div class="freelancer-name">
												<h4><a href="#">{{$msg->fullname}} </a>

                                                    @if ($msg->status == 'accept')
                                                    <span class="dashboard-status-button green">Accepted</span>
                                                    @else
                                                    <span class="dashboard-status-button yellow">Not Accepted</span>
                                                    @endif

                                                </h4>


												<!-- Details -->
												<span class="freelancer-detail-item"><a href="#"><i class="icon-feather-mail"> </i>{{$msg->email}}</a></span>


                                                <p class="with-border">{{$msg->request_message}}</p>


												<!-- Buttons -->
												<div class="buttons-to-right always-visible margin-top-25 margin-bottom-5">
													<a href="{{route('accept',$msg->id)}}" class="button  ripple-effect"><i class="icon-material-outline-check"></i> Accept Offer</a>
													<a href="{{route('reject',$msg->id)}}" class="button  ripple-effect"><i class="icon-feather-trash-2"></i> Reject Offer</a>
													<a type="button" style="width: 150px; color:#fff" class="button ripple-effect ico" data-toggle="modal" data-target="#myModal{{$msg->id}}" title="Send Message" data-tippy-placement="top"><i class="icon-feather-mail"></i> Send Message</a>

												</div>
											</div>
										</div>

									</div>
								</li>
								
                                @endforeach
							</ul>
						</div>
					</div>
				</div>

			</div>




			<!-- Footer -->
			<div class="dashboard-footer-spacer"></div>
			<div class="small-footer margin-top-15">
				<div class="small-footer-copyrights">
					?? 2019 <strong>Hireo</strong>. All Rights Reserved.
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
	@foreach ($order_message as $msg )
		<div id="myModal{{$msg->id}}" class="modal fade" role="dialog">
			<div class="modal-dialog"> 
			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title text-secondary"><b>Send message to your student </b></h4>
					</div>
					<form action="sendMeg" method="post" >
						@csrf
						<input type="hidden" value="{{$msg->user_id}}" name="destination">
						<textarea style="width:40%;" name="message" cols="10" placeholder="Message"></textarea> 
						<!-- Button -->
						{{-- <button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" >Place Request <i class="icon-material-outline-arrow-right-alt"></i></button> --}}
						<button type="submit" class="btn btn-success button-sliding-icon ripple-effect" style="border:none; width:80%; margin-left:10%; padding:2%; margin-bottom:10px;">Place Request <i class="icon-material-outline-arrow-right-alt"></i></button>

					</form>
				</div>
			</div>
		</div>
	@endforeach
<!-- Apply for a job popup / End -->



<!-- Scripts
================================================== -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
</script>


</body>

<!-- Mirrored from www.vasterad.com/themes/hireo/dashboard-messages.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Dec 2020 02:32:03 GMT -->
{{-- <div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs"> 
	<ul class="popup-tabs-nav">
		<li><a href="#tab">Accept Offer</a></li>
	</ul>

		<div class="popup-tab-content">
			<div class="welcome-text ">
				<h3>send message to your student</h3>
			</div>
			<form action="sendMeg" method="post" >

				@csrf

				<input type="text" value="4" name="destination">

				<textarea  name="message" cols="10" placeholder="Message" class="with-border"></textarea>

			<!-- Button -->
				<button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" >Place Request <i class="icon-material-outline-arrow-right-alt"></i></button>
			</form>
	</div>
</div> --}}
</html>
