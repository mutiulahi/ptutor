<!doctype html>
<html lang="en">

<!-- Mirrored from www.vasterad.com/themes/hireo/freelancers-grid-layout-full-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Dec 2020 02:31:54 GMT -->
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

	@include('layout/header_out')

<!-- Header Container / End -->

<!-- Page Content
================================================== -->
<div class="full-page-container">

	<form action="finderTutors" method="post">
        @csrf
        <div class="full-page-sidebar">
            <div class="full-page-sidebar-inner" data-simplebar>
                <div class="sidebar-container">
                    <br>
                    <!-- Location -->
                    <div class="sidebar-widget">
                        <h3>Location</h3>
                        <div class="input-with-icon">
                            <div id="autocomplete-container">
                                <input id="autocomplete-input" type="text" name="location" placeholder="Location">
                            </div>
                            <i class="icon-material-outline-location-on"></i>
                        </div>
                    </div>

                    <!-- Subject -->
                    <div class="sidebar-widget">
                        <h3>Subject</h3>
                        <div class="input-with-icon">
                            <div id="autocomplete-container">
                                <input id="autocomplete-input" type="text" name="subject" placeholder="Subject">
                            </div>
                            <i class="icon-line-awesome-book"></i>
                        </div>
                    </div>

                    {{-- <div class="sidebar-widget">
                        <h3>Sex</h3> 
                        <div class="tags-container">
                           <select name="sex" id="">
                               <option value="male">male</option>
                               <option value="female">female</option>
                           </select>
                        </div>
                    </div> --}}

                    <!-- Category -->
                    {{-- <div class="sidebar-widget mb-5">
                        <h3>Age</h3> 
                        <div class="tags-container">
                           <input type="number" name="age" id="" placeholder="Tutor Age"> 
                        </div>
                        <div class="clearfix"></div> 
                    </div> --}}
                    <div class="sidebar-widget mb-5">
                        <h3></h3>  
                        <div class="clearfix"></div> 
                    </div>
                </div>
                {{-- <div class="clearfix"></div> --}}
                <!-- Sidebar Container / End -->

                <!-- Search Button -->
                <div class="sidebar-search-button-container">
                    <button class="button ripple-effect">Search</button>
                </div>
                <!-- Search Button / End-->

            </div>
        </div>
    </form>
	<!-- Full Page Sidebar / End -->

	<!-- Full Page Content -->
	<div class="full-page-content-container" data-simplebar>
		<div class="full-page-content-inner">

			<h3 class="page-title">Search Results</h3>

			<div class="notify-box margin-top-15">
				<div class="switch-container">
					<label class="switch"><span class="">Use the search bar to search for your prefered tutor</span></label>
				</div>

				{{-- <div class="sort-by">
					<span>Sort by:</span>
					<select class="selectpicker hide-tick">
						<option>Relevance</option>
						<option>Newest</option>
						<option>Oldest</option>
						<option>Random</option>
					</select>
				</div> --}}
			</div>

			<!-- Freelancers List Container -->
            <div class="col-xl-12">
                <div class="freelancers-container freelancers-grid-layout margin-top-35">
                    <!--Freelancer -->
                    @if (empty($searchGIGs))
                        <h3 style="margin-left: auth; margin-top: -50px; font-size:15px; text-align:center;">no tutor found use the search bar to search for your prefered tutor</h3>
                    @else

                        @foreach ($searchGIGs as $search)
                            @if ($search->tutor_id=='')
                            <div class="freelancer">
                                {{-- {{$search['user_id']}} --}}

                                <!-- Overview -->
                                <div class="freelancer-overview">
                                    <div class="freelancer-overview-inner">

                                        <!-- Bookmark Icon -->
                                        <span class="bookmark-icon"></span>

                                        <!-- Avatar -->
                                        <div class="freelancer-avatar">
                                            <div class="verified-badge"></div>
                                            @if ($search->passport == '')
                                            <a href="{{route('detail',$search->id)}}"><img src="images/user-avatar-placeholder.png" alt=""></a>
                                            @else
                                            <a href="{{route('detail',$search->id)}}"><img style="height: 90px; width:90px;" src="images/passport/{{$search->passport}}" alt=""></a>
                                            {{-- {{$search->passport}} --}}
                                            @endif

                                        </div>

                                        <!-- Name -->
                                        <div class="freelancer-name">
                                            <h2 style="font-weight: 700; margin-bottom: 10px">
                                                <a href="{{route('detail',$search->id)}}">{{$search->title_ads}}</a>
                                            </h2>
                                            <h4 style="margin-bottom: 5px"><a href="{{route('detail', $search->id)}}">{{$search->fullname}}</a></h4>
                                            <span>{{$search->subject}}</span>
                                        </div>

                                        <!-- Rating -->
                                        {{-- <div class="freelancer-rating">
                                            <div class="star-rating" data-rating="5"></div>
                                        </div> --}}
                                    </div>
                                </div>

                                <!-- Details -->
                                <div class="freelancer-details">
                                    <div class="freelancer-details-list">
                                        <ul>
                                            <li>Location <strong><i class="icon-material-outline-location-on"></i> {{$search->meeting_point}}</strong></li>
                                            <li>Rate <strong>{{$search->week}} / week</strong></li>
                                            <li>Rate <strong>{{$search->month}} / month</strong></li>
                                            {{-- <li>Rate <strong>{{$search->year}} / year</strong></li> --}}
                                        </ul>
                                    </div>
                                    <a href="{{route('detail',$search->id)}}" class="button button-sliding-icon ripple-effect">View Profile <i class="icon-material-outline-arrow-right-alt"></i></a>
                                </div>
                            </div>
                            @elseif($search->tutor_id=='')
                                <h3 style="margin-left: 35%; font-weight: 600">Sorry, No tutor available for your demand</h3>
                            @endif

                        @endforeach
                    @endif

                    <!-- Freelancer / End -->
                </div>
            </div>
			<!-- Freelancers Container / End -->

			<!-- Pagination -->
			<div class="clearfix"></div>
			<div class="clearfix"></div>
			<div class="clearfix"></div>
			<div class="clearfix"></div>
			<div class="clearfix"></div>
			<!-- Pagination / End -->

			<!-- Footer --> 
                <div class="small-footer" style="margin-top: 20px;">
                    <div class="small-footer-copyrights">
                        © {{date('Y')}} <strong>Hireo</strong>. All Rights Reserved.
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
	<!-- Full Page Content / End -->

</div>


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
$('.status-switch label').click(function() {
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
</script>

<!-- Google API & Maps -->
<!-- Geting an API Key: https://developers.google.com/maps/documentation/javascript/get-api-key -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaoOT9ioUE4SA8h-anaFyU4K63a7H-7bc&amp;libraries=places"></script>

</body>

<!-- Mirrored from www.vasterad.com/themes/hireo/freelancers-grid-layout-full-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Dec 2020 02:31:54 GMT -->
</html>

