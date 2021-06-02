<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">

		<ul class="popup-tabs-nav">
			<li><a href="#login">Log In</a></li>
			<li><a href="#register">Register</a></li>
		</ul>

		<div class="popup-tabs-container">

			<!-- Login -->
			<div class="popup-tab-content" id="login">

				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>We're glad to see you again!</h3>
					<span>Don't have an account? <a href="{{route('RegisterUser')}}">Sign Up!</a></span>
					@if(session('error'))
					<span style="color: #fff; background-color: rgb(247, 149, 154); padding: 5px; width: 50%; margin-left: 25%; border-radius: 5px">
							{{session('error')}}
					</span>
					@endif
				</div>

				<!-- Form -->
				<form action="Login" method="post" >
					@csrf
					<div class="input-with-icon-left">
						<i class="icon-material-baseline-mail-outline"></i>
						<input type="text" class="input-text with-border" name="email"  placeholder="Email Address" @error('email') style="box-shadow: 0px 0px 5px  red"@enderror value="{{old('email')}}"/>
						@error('email')
							<span style="color:red;">{{$message}}</span>
						@enderror
					</div>

					<div class="input-with-icon-left" title="Should be at least 8 characters long" data-tippy-placement="bottom">
						<i class="icon-material-outline-lock"></i>
						<input type="password" class="input-text with-border" name="password" id="password-register" placeholder="Password" @error('password') style="box-shadow: 0px 0px 5px  red"@enderror value="{{old('password')}}"/>
						@error('password')
							<span style="color:red;">{{$message}}</span>
						@enderror
					</div>
				<!-- Button -->
					<button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" >Log in <i class="icon-material-outline-arrow-right-alt"></i></button>
				</form>
			</div>

			<!-- Register -->
		</div>
	</div>
</div>

