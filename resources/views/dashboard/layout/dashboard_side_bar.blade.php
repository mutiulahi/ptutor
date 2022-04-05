	<!-- Dashboard Sidebar
	================================================== -->
	<div class="dashboard-sidebar">
		<div class="dashboard-sidebar-inner" data-simplebar>
			<div class="dashboard-nav-container">

				<!-- Responsive Navigation Trigger -->
				<a href="#" class="dashboard-responsive-nav-trigger">
					<span class="hamburger hamburger--collapse" >
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</span>
					<span class="trigger-title">Dashboard Navigation</span>
				</a>

				<!-- Navigation -->
				<div class="dashboard-nav">
					<div class="dashboard-nav-inner">

						<ul data-submenu-title="Start">
							<li ><a href="{{route('dashboard')}}"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
							{{-- <li><a href=""><i class="icon-material-outline-message"></i> Messages <span class="nav-tag">2</span></a></li> --}}
                            <ul data-submenu-title="Message">
                                <li><a href="#"><i class="icon-material-outline-business-center"></i> Message</a>
                                    <ul>
                                        <li><a href="{{route('message')}}">Messages</a></li>
                                    </ul>
                                </li>
                            </ul>
                            @if(auth()->user()->status == 'Tutor')

							<li><a href="{{route('ads')}}"><i class=""></i> Ads </a></li>
                            @endif
						</ul>

						<ul data-submenu-title="Organize and Manage">
							<li><a href="#"><i class="icon-material-outline-business-center"></i> Request</a>
								<ul>
                                    @if(auth()->user()->status == 'Tutor')
                                        <li><a href="{{route('recieved')}}">Recieved request </a></li>
                                        {{-- <li><a href="{{route('recieved')}}">Accepted request</a></li> --}}
                                    @endif
									<li><a href="{{route('sendOrder')}}">Sent request</a></li>
								</ul>
							</li>
						</ul>

						<ul data-submenu-title="Account">
							{{-- <li><a href=""><i class="icon-brand-google-wallet"></i> Wallet</a></li> --}}
							<li><a href="{{route('setting')}}"><i class="icon-material-outline-settings"></i> Settings</a></li>
							<li><a href="{{route('logout')}}"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
						</ul>

					</div>
				</div>
				<!-- Navigation / End -->

			</div>
		</div>
	</div>
	<!-- Dashboard Sidebar / End -->


