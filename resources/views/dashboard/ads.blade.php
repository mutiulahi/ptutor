
<!doctype html>
<html lang="en">

<head> 
	<!-- Basic Page Needs
	================================================== -->
	<title>Dashboard Send Order</title>
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
						<li><a href="{{route('dashboard')}}">Dashboard</a></li>
						<li>Ads</li>


					</ul>
				</nav>
				
			</div>

			@if(session('success'))
            <div class="notification success closeable">
				<p>{{session('success')}}</p>
				<a class="close" href="#"></a>
			</div>
            @endif
            <div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-headline">
						<a href="{{route('becometutor')}}" style="float: right;" class="button ripple-effect">Create Class <i class="icon-feather-arrow-right"></i></a>
					</div>
					<div class="dashboard-box margin-top-0">
							<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-gavel"></i> Active Ads List</h3>
						</div>

						<div class="content">
							<ul class="dashboard-box-list">
                                @foreach ($ads as $ad)
                                    <li>
                                        <!-- Job Listing -->
                                        <div class="job-listing width-adjustment">

                                            <!-- Job Listing Details -->
                                            <div class="job-listing-details">

                                                <!-- Details -->
                                                <div class="job-listing-description">
                                                    <h3 class="job-listing-title"><a href="#">{{$ad->title_ads}}</a>
                                                        @if ($ad->status == 'active')
                                                        	<span class="dashboard-status-button green">{{$ad->status}}</span>
                                                        @else
                                                        	<span class="dashboard-status-button yellow">{{$ad->status}}</span>
                                                        @endif
                                                    </h3>

                                                </div>
                                            </div>
                                        </div>

                                        <!-- Task Details -->
                                        <ul class="dashboard-task-info">
                                            <li><strong>₦ {{$ad->week}}</strong><span>Weekly Rate</span></li>
                                            <li><strong>₦ {{$ad->month}}</strong><span>Monthly Rate</span></li>
                                            <li><strong>₦ {{$ad->year}}</strong><span>Yearly Rate</span></li>
                                        </ul>
                                        {{-- popup-with-zoom-anim --}}
                                        <!-- Buttons -->
                                        <div class="buttons-to-right me always-visible"> 
											<button type="button" class="button popup-with-zoom-anim dark ripple-effect ico" data-toggle="modal" data-target="#aDsEdit{{$ad->id}}" title="Edit Ad" data-tippy-placement="top"><i class="icon-feather-edit"></i></button>
											<button type="button" class="button popup-with-zoom-anim red ripple-effect ico" data-toggle="modal" data-target="#myModal{{$ad->id}}" title="Delete Ad" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></button>
                                        </div><br><br><br>
										
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
@foreach ($ads as $ad)
	<div id="myModal{{$ad->id}}" class="modal fade" role="dialog">
		<div class="modal-dialog"> 
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title text-danger">Delete Class {{$ad->title_ads}}</h4>
			</div>
			<div class="modal-body" style="text-align: center;">
				<p class="text-warning">Hey! You are about to delete your Class Ad {{$ad->title_ads}}</p>
				<h3 class="red">Are sure of this action!!!</h3>
				<h4>Note that this action can't be reverse</h4>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success button-sliding-icon ripple-effect" style="border:none;" data-dismiss="modal">Close</button>
				<a type="button" href="{{route('delete_ads',$ad->id)}}" class="btn btn-success button-sliding-icon ripple-effect text-white"  style="width: 100px; border:none;">Confirm</a>
			</div>
		</div>
		</div>
	</div>
@endforeach

@foreach ($ads as $ad)
	<div id="myModal{{$ad->id}}" class="modal fade" role="dialog">
		<div class="modal-dialog"> 
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title text-danger">Delete Class {{$ad->title_ads}}</h4>
			</div>
			<div class="modal-body" style="text-align: center;">
				<p class="text-warning">Hey! You are about to delete your Class Ad {{$ad->title_ads}}</p>
				<h3 class="red">Are sure of this action!!!</h3>
				<h4>Note that this action can't be reverse</h4>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success button-sliding-icon ripple-effect" style="border:none;" data-dismiss="modal">Close</button>
				<a type="button" href="{{route('delete_ads',$ad->id)}}" class="btn btn-success button-sliding-icon ripple-effect text-white"  style="width: 100px; border:none;">Confirm</a>
			</div>
		</div>
		</div>
	</div>
@endforeach



<!-- Scripts ================================================== -->
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
<script>
	function Get_Ad_id() {
		var id = document.getElementById('id').value;
		console.log(id);
	}
</script>

</body>

</html>
