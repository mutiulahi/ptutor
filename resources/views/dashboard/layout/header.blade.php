<header id="header-container" class="fullwidth transparent">

	<!-- Header -->
	<div id="header">
		<div class="container">

			<!-- Left Side Content -->
			<div class="left-side">

				<!-- Logo -->
				<div id="logo">
					<a href="{{route('/')}}"><img src="../images/logo.png" alt=""></a>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation">
					<ul id="responsive">

						{{-- <li><a href="#">Find Work</a>
							<ul class="dropdown-nav">
								<li><a href="#">Browse Jobs</a>
									<ul class="dropdown-nav">
										<li><a href="jobs-list-layout-full-page-map.html">Full Page List + Map</a></li>
										<li><a href="jobs-grid-layout-full-page-map.html">Full Page Grid + Map</a></li>
										<li><a href="jobs-grid-layout-full-page.html">Full Page Grid</a></li>
										<li><a href="jobs-list-layout-1.html">List Layout 1</a></li>
										<li><a href="jobs-list-layout-2.html">List Layout 2</a></li>
										<li><a href="jobs-grid-layout.html">Grid Layout</a></li>
									</ul>
								</li>
								<li><a href="#">Browse Tasks</a>
									<ul class="dropdown-nav">
										<li><a href="tasks-list-layout-1.html">List Layout 1</a></li>
										<li><a href="tasks-list-layout-2.html">List Layout 2</a></li>
										<li><a href="tasks-grid-layout.html">Grid Layout</a></li>
										<li><a href="tasks-grid-layout-full-page.html">Full Page Grid</a></li>
									</ul>
								</li>
								<li><a href="browse-companies.html">Browse Companies</a></li>
								<li><a href="single-job-page.html">Job Page</a></li>
								<li><a href="single-task-page.html">Task Page</a></li>
								<li><a href="single-company-profile.html">Company Profile</a></li>
							</ul>
						</li> --}}



					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->

			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			<div class="right-side">
                @auth

                	@if (auth()->user()->status === 'Tutor') 
                        <div class="header-widget">
                            <a href="{{route('logout')}}" class="log-in-button"><i class="icon-feather-log-out"></i> <span>Log Out </span></a>
                        </div>
                    @else
                        <div class="header-widget ">
                            <a href="{{route('becometutor')}}" class=" log-in-button"><i class="icon-feather-user"></i><span>Become a tutor</span></a>
                        </div>
                    @endif
                    <div class="header-widget">
                        <!-- Messages -->
                        <div class="header-notifications user-menu">
                            <div class="header-notifications-trigger">
                                @if (auth()->user()->passport =='')
                                <a href="#"><div class="user-avatar status-online"><img src="../images/user-avatar-placeholder.png" alt=""></div></a>
                                @else
                                <a href="#"><div class="user-avatar status-online"><img style="height: 40px; width:40px;" src="../images/passport/{{auth()->user()->passport}}" alt=""></div></a>
                                @endif

                                {{-- <a href="#"><div class="user-avatar status-online"><img src="images/user-avatar-small-01.jpg" alt="ff"></div></a> --}}
                            </div>

                            <!-- Dropdown -->
                            <div class="header-notifications-dropdown">
                                <!-- User Status -->
                                <div class="user-status">

                                    <!-- User Name / Avatar -->
                                    <div class="user-details">
                                        @if (auth()->user()->passport =='')
											<a href="#"><div class="user-avatar status-online"><img src="../images/user-avatar-placeholder.png" alt=""></div></a>
										@else
											<a href="#"><div class="user-avatar status-online"><img style="height: 40px; width:40px;" src="../images/passport/{{auth()->user()->passport}}" alt=""></div></a>
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
