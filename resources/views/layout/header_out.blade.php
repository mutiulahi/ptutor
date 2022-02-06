<header id="header-container" class="fullwidth transparent">

	<!-- Header -->
	<div id="header">
		<div class="container">
			<!-- Left Side Content -->
			<div class="left-side">

				<!-- Logo -->
				<div id="logo">
					<a href="{{route('/')}}"><img src="images/logo.png" alt=""></a>
				</div>

				<!-- Main Navigation -->

				<div class="clearfix"></div>
				<!-- Main Navigation / End -->

			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			<div class="right-side">
				@guest
                    <div class="header-widget ">
                        <a href="{{route('RegisterUser')}}" class="log-in-button"><i class="icon-feather-user"></i><span>Become a tutor</span></a>
                    </div>
                    <div class="header-widget">
                        <a href="{{route('RegisterUser')}}" class="log-in-button"><i class="icon-feather-log-in"></i> <span>Log In | Register </span></a>
                    </div>
                    {{-- <div class="header-widget">
                        <a href="{{route('RegisterUser')}}" class="log-in-button"><i class="icon-feather-user"></i><span>Register</span></a>
                    </div> --}}
				@endguest

                @auth
                    <div class="header-widget ">
                        <a href="{{route('becometutor')}}" class=" log-in-button"><i class="icon-feather-user"></i><span>Become a tutor</span></a>
                    </div>
                    <div class="header-widget">
                        <!-- Messages -->
                        <div class="header-notifications user-menu">
                            <div class="header-notifications-trigger">
                                @if (auth()->user()->passport =='')
                                <a href="#"><div class="user-avatar status-online"><img src="images/user-avatar-placeholder.png" alt=""></div></a>
                                @else
                                <a href="#"><div class="user-avatar status-online"><img src="images/passport/{{auth()->user()->passport}}" alt=""></div></a>
                                @endif
                            </div>

                            <!-- Dropdown -->
                            <div class="header-notifications-dropdown">
                                <!-- User Status -->
                                <div class="user-status">

                                    <!-- User Name / Avatar -->
                                    <div class="user-details">
                                        @if (auth()->user()->passport =='')
                                        <a href="#"><div class="user-avatar status-online"><img src="images/user-avatar-placeholder.png" alt=""></div></a>
                                        @else
                                        <a href="#"><div class="user-avatar status-online"><img src="images/passport/{{auth()->user()->passport}}" alt=""></div></a>
                                        @endif

                                                <div class="user-name">
                                                    {{auth()->user()->username}}<span>{{auth()->user()->status}}</span>
                                                </div>
                                    </div>
                                </div>

                                <ul class="user-menu-small-nav">
                                    <li><a href="{{route('dashboard')}}"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
                                    {{-- <li><a href="dashboard-settings.html"><i class="icon-feather-user"></i> Profile</a></li> --}}
                                    <li><a href="{{route('logout')}}"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                @endauth
			</div>
			<!-- Right Side Content / End -->
		</div>
	</div>
	<!-- Header / End -->

</header>
{{-- <div class="clearfix"></div> --}}
