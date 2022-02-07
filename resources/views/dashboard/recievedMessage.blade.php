
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
				<h3>Messages</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						{{-- <li><a href="#">Home</a></li> --}}
						<li><a href="{{route('dashboard')}}">Dashboard</a></li>
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
										<input id="autocomplete-input" type="text" placeholder="Search">
									<i class="icon-material-outline-search"></i>
								</div>
							</div>

							<ul>
                                @foreach ($message as $myMSG)
                                @php

                                    $fulln[] = $myMSG->fullname;
                                    $passport[] = $myMSG->passport;
                                    $idMe[] = $myMSG->sender;
                                    
                               

                                @endphp

                                @endforeach
                                @php
                                 if(empty($fulln)){
                                    echo  '';


                                }else{
                                    $fullname  = array();
                                    $fullPort  = array();
                                    $fullID  = array();
                                    for($i=0; $i<sizeof($fulln); $i++){

                                        if (!in_array($fulln[$i], $fullname))
                                        {
                                            $fullname[] =  $fulln[$i];

                                        }

                                        if (!in_array($passport[$i], $fullPort))
                                        {
                                            $fullPort[] =  $passport[$i];
                                        }
                                        if (!in_array($idMe[$i], $fullID))
                                        {
                                            $fullID[] =  $idMe[$i];
                                        }

                                    }

                                }
                                    
                                @endphp
@if(empty($fulln))
    <h1>No Message</h1>
@else
    @for ($p=0; $p<sizeof($fullPort); $p++)
                                <li style="margin-top: 20px; margin-bottom:10px">
                                   <form action="Recievedshow" method="get">
                                        <button href="{{$fullID[$p]}}" >
                                           
                                            <div class="message-avatar"><i class="status-icon status-online"></i><img src="images/passport/{{$fullPort[$p]}}" alt="" /></div>

                                            <div class="message-by">
                                                <div class="message-by-headline">
                                                    <h5 style="margin-left: 10px;">{{$fullname[$p]}}</h5>
                                                    {{-- <span>4 hours ago</span> --}}
                                                </div>
                                                {{-- <p>Thanks for reaching out. I'm quite busy right now on many</p> --}}
                                            </div>
                                        </button>
                                   </form>
                                </li>
                                @endfor
@endif
                                



							</ul>
						</div>
						<!-- Messages / End -->

						<!-- Message Content -->

                        <div class="message-content">

							{{-- <div class="messages-headline">
								<h4>Sindy Forest</h4>
								<a href="#" class="message-action"><i class="icon-feather-trash-2"></i> Delete Conversation</a>
							</div> --}}

							<!-- Message Content Inner -->
							<div class="message-content-inner">

									<!-- Time Sign -->
                                    @if (empty($messageShow))
                            <h1></h1>
                        @else
                        @foreach ($messageShow as $mssg)
									<div class="message-time-sign">
										{{-- <span>28 June, 2019</span> --}}
									</div>

									<div class="message-bubble ">
										<div class="message-bubble-inner">
											<div class="message-avatar"><img src="images/passport/{{$mssg->passport}}" alt="" /></div>
											<div class="message-text"><p>{{$mssg->message}}</p></div>
										</div>
										<div class="clearfix"></div>
									</div>
                                    
							</div>
							<!-- Message Content Inner / End -->

							<!-- Reply Area -->
                            <form action="sendMeg" method="post" >
							<div class="message-reply">
                                @csrf
                                
                                    <input type="hidden" value="{{$mssg->user_id}}" name="destination">

                                        @endforeach
                                    @endif
								<textarea cols="1" rows="1" name="message" placeholder="Your Message" data-autoresize></textarea>
								<button class="button ripple-effect">Send</button>
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
