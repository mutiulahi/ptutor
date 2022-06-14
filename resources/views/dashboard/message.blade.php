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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	{{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/> --}}
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	{{-- {{ asset('css/styles.css') }} --}}
	<link rel="stylesheet" href="{{asset('css/colors/blue.css')}}">
	<style>
		/* .list_group {
			
			/* -webkit-overflow-scrolling: touch; */
            } */
	</style>
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
				<div class="dashboard-content-inner">

					<!-- Dashboard Headline -->
					<div class="dashboard-headline">
						<h3>Messages</h3>

						<!-- Breadcrumbs -->
						<nav id="breadcrumbs" class="dark">
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#">Dashboard</a></li>
								<li>Messages</li>
							</ul>
						</nav>
					</div>

					<div class="messages-container margin-top-0">

						<div class="messages-container-inner">

							<!-- Messages -->
							<div class="messages-inbox">
								<div class="messages-headline">
									<div class="input-with-icon"> 
										<span> Contact list</span>
									</div>
								</div>

								<ul>
									@if (empty($contact_list))
										<p style="text-align:center; margin-top:20px;">no contact found</p>
									@else
									@foreach ($contact_list as $contact)
										<li>
											<a href="{{route('show',$contact->id)}}">
												<div class="message-avatar"><i class="status-icon status-online"></i>
													@if ($contact->passport =='')
														<img src="../images/user-avatar-placeholder.png" alt="" /></div>
													@else
														<img src="../images/passport/{{$contact->passport}}" alt="" /></div>
													@endif

												<div class="message-by">
													<div class="message-by-headline">
														<h5>{{$contact->fullname}}</h5>
														{{-- <span>4 hours ago</span> --}}
													</div>
													{{-- <p>{{$contact->mgs}}</p> --}}
												</div>
											</a>
										</li>
									@endforeach 
									@endif
									
								</ul>
							</div>
							<!-- Messages / End -->

							<!-- Message Content -->
							<div class="message-content">

								<div class="messages-headline">
									<h4>
										@if (empty($patiner_details))
										
										@else 
									
											@foreach ($patiner_details as $user_detail)
												{{$user_detail->fullname}}
											@endforeach
										@endif	
									</h4>
									{{-- <a href="#" class="message-action"><i class="icon-feather-trash-2"></i> Delete
										Conversation</a> --}}
								</div>

								<!-- Message Content Inner -->
								<div class="message-content-inner list_group">

									{{-- <!-- Time Sign -->
									<div class="message-time-sign">
										<span>28 June, 2019</span>
									</div> --}}
									@if (empty($messages))
										
									@else 
									
										@foreach ($messages as $megs)
											<div class="message-bubble @if($megs->sender_id == auth()->user()->id) me @endif">
												<div class="message-bubble-inner">
													<div class="message-text">
														<p>{{$megs->mgs}}</p>
													</div>
												</div>
												<div class="clearfix"></div>
											</div>
											@php
												if ($megs->sender_id == auth()->user()->id) {
													$new_destination_id =  $megs->destination_id;
												}else{
													$new_destination_id =  $megs->sender_id;
												}											
											@endphp
										@endforeach
									@endif
									  
								</div>
								<!-- Message Content Inner / End -->

								<!-- Reply Area -->
								<form action="{{route('replymessage')}}" method="post"> 
									@csrf
								    <div class="message-reply">
										<textarea cols="1" rows="1" name="message" placeholder="Your Message" data-autoresize></textarea>
										@if (empty($messages))
											<button class="button ripple-effect" disabled>Send</button>
										@else 
											<input type="hidden" name="destination_id" value="{{$new_destination_id}}">
											<button class="button ripple-effect">Send</button>
										@endif
									</div>
								</form>

										

							</div>
							<!-- Message Content -->

						</div>
					</div>

					<!-- Messages Container / End -->




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
		<div class="sign-in-form">

			<ul class="popup-tabs-nav">
				<li><a href="#tab">Add Note</a></li>
			</ul>

			<div class="popup-tabs-container">

				<!-- Tab -->
				<div class="popup-tab-content" id="tab">

					<!-- Welcome Text -->
					<div class="welcome-text">
						<h3>Do Not Forget 😎</h3>
					</div>

					<!-- Form -->
					<form method="post" id="add-note">

						<select class="selectpicker with-border default margin-bottom-20" data-size="7"
							title="Priority">
							<option>Low Priority</option>
							<option>Medium Priority</option>
							<option>High Priority</option>
						</select>

						<textarea name="textarea" cols="10" placeholder="Note" class="with-border"></textarea>

					</form>

					<!-- Button -->
					<button class="button full-width button-sliding-icon ripple-effect" type="submit"
						form="add-note">Add Note <i class="icon-material-outline-arrow-right-alt"></i></button>

				</div>

			</div>
		</div>
	</div>
	<!-- Apply for a job popup / End -->


	<!-- Scripts
================================================== -->
	<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
	<script src="{{asset('js/jquery-migrate-3.1.0.min.html')}}"></script>
	<script src="{{asset('js/mmenu.min.js')}}"></script>
	<script src="{{asset('js/tippy.all.min.js')}}"></script>
	<script src="{{asset('js/simplebar.min.js')}}"></script>
	<script src="{{asset('js/bootstrap-slider.min.js')}}"></script>
	<script src="{{asset('js/bootstrap-select.min.js')}}"></script>
	<script src="{{asset('js/snackbar.js')}}"></script>
	<script src="{{asset('js/clipboard.min.js')}}"></script>
	<script src="{{asset('js/counterup.min.js')}}"></script>
	<script src="{{asset('js/magnific-popup.min.js')}}"></script>
	<script src="{{asset('js/slick.min.js')}}"></script>
	<script src="{{asset('js/custom.js')}}"></script>

	<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
	<script>
		// Snackbar for user status switcher
		$('#snackbar-user-status label').click(function () {
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

<!-- Mirrored from www.vasterad.com/themes/hireo_21/dashboard-messages.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 31 Jan 2022 14:11:29 GMT -->

</html>