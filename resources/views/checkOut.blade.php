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
<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
@include('layout/header_out')
<!-- Header Container / End -->

<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Checkout</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Checkout</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<!-- Container -->
<div class="container">
    @foreach ($Checkout as $search)
	<div class="row">
		<div class="col-xl-8 col-lg-8 content-right-offset">


			<!-- Hedaline -->
			<h3>Billing Cycle</h3>
			<!-- Billing Cycle Radios  -->
			<div class="billing-cycle margin-top-25">

				<!-- Radio -->
				<div class="radio">
					<input id="radio-5" name="radio-payment-type" type="radio" checked>
					<label for="radio-5">
						<span class="radio-label"></span>
						Billed Weekly
						<span class="billing-cycle-details">
							<span class="regular-price-tag">{{49.00}} / Week</span>
						</span>
					</label>
				</div>

				<!-- Radio -->
				<div class="radio">
					<input id="radio-6" name="radio-payment-type" type="radio">
					<label for="radio-6">
                        <span class="radio-label"></span>
						Billed Monthly
						<span class="billing-cycle-details">
							<span class="discounted-price-tag">$529.20 / month</span>
						</span>
					</label>
				</div>
				<!-- Radio -->
				<div class="radio">
					<input id="radio-7" name="radio-payment-type" type="radio">
					<label for="radio-7">
                        <span class="radio-label"></span>
						Billed Yearly
						<span class="billing-cycle-details">
							<span class="discounted-price-tag">$529.20 / year</span>
						</span>
					</label>
				</div>
			</div>


			<!-- Hedline -->
			<h3 class="margin-top-50">Payment Method</h3>

			<!-- Payment Methods Accordion -->
			<div class="payment margin-top-30">

				<div class="payment-tab payment-tab-active">
					<div class="payment-tab-trigger">
						<input checked id="paypal" name="cardType" type="radio" value="paypal">
						<label for="paypal">Wallet</label>
						<img class="payment-logo paypal" src="images/logos/wallet.png" alt="dsdfdfs">
					</div>

					<div class="payment-tab-content">
						<p>You will be redirected to PayPal to complete payment.</p>
					</div>
				</div>


				<div class="payment-tab">
					<div class="payment-tab-trigger">
						<input type="radio" name="cardType" id="creditCart" value="creditCard">
						<label for="creditCart">Credit / Debit Card</label>
						<img class="payment-logo" src="images/logos/debit.png" alt="dfdf">
					</div>

					<div class="payment-tab-content">
						<div class="row payment-form-row">

							<div class="col-md-6">
								<div class="card-label">
									<input id="nameOnCard" name="nameOnCard" required type="text" placeholder="Cardholder Name">
								</div>
							</div>

							<div class="col-md-6">
								<div class="card-label">
									<input id="cardNumber" name="cardNumber" placeholder="Credit Card Number" required type="text">
								</div>
							</div>

							<div class="col-md-4">
								<div class="card-label">
									<input id="expiryDate" placeholder="Expiry Month" required type="text">
								</div>
							</div>

							<div class="col-md-4">
								<div class="card-label">
									<label for="expiryDate">Expiry Year</label>
									<input id="expirynDate" placeholder="Expiry Year" required type="text">
								</div>
							</div>

							<div class="col-md-4">
								<div class="card-label">
									<input id="cvv" required type="text" placeholder="CVV">
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
			<!-- Payment Methods Accordion / End -->

			<a href="pages-order-confirmation.html" class="button big ripple-effect margin-top-40 margin-bottom-65">Proceed Payment</a>
		</div>


		<!-- Summary -->
		<div class="col-xl-4 col-lg-4 margin-top-0 margin-bottom-60">

			<!-- Summary -->
			<div class="boxed-widget summary margin-top-0">
				<div class="boxed-widget-headline">
					<h3>Summary</h3>
				</div>
				<div class="boxed-widget-inner">
					<ul>
						<li>Standard Plan <span>$49.00</span></li>
						<li>VAT (20%) <span>$9.80</span></li>
						<li class="total-costs">Final Price <span>$58.80</span></li>
					</ul>
				</div>
			</div>
			<!-- Summary / End -->

			<!-- Checkbox -->
			<div class="checkbox margin-top-30">
				<input type="checkbox" id="two-step">
				<label for="two-step"><span class="checkbox-icon"></span>  I agree to the <a href="#">Terms and Conditions</a> and the <a href="#">Automatic Renewal Terms</a></label>
			</div>
		</div>

	</div>
@endforeach
</div>
<!-- Container / End -->

<!-- Footer
================================================== -->
<div id="footer">

	<!-- Footer Top Section -->
	<div class="footer-top-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">

					<!-- Footer Rows Container -->
					<div class="footer-rows-container">

						<!-- Left Side -->
						<div class="footer-rows-left">
							<div class="footer-row">
								<div class="footer-row-inner footer-logo">
									<img src="images/logo2.png" alt="">
								</div>
							</div>
						</div>

						<!-- Right Side -->
						<div class="footer-rows-right">

							<!-- Social Icons -->
							<div class="footer-row">
								<div class="footer-row-inner">
									<ul class="footer-social-links">
										<li>
											<a href="#" title="Facebook" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-facebook-f"></i>
											</a>
										</li>
										<li>
											<a href="#" title="Twitter" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-twitter"></i>
											</a>
										</li>
										<li>
											<a href="#" title="Google Plus" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-google-plus-g"></i>
											</a>
										</li>
										<li>
											<a href="#" title="LinkedIn" data-tippy-placement="bottom" data-tippy-theme="light">
												<i class="icon-brand-linkedin-in"></i>
											</a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
							</div>

							<!-- Language Switcher -->
							<div class="footer-row">
								<div class="footer-row-inner">
									<select class="selectpicker language-switcher" data-selected-text-format="count" data-size="5">
										<option selected>English</option>
										<option>Français</option>
										<option>Español</option>
										<option>Deutsch</option>
									</select>
								</div>
							</div>
						</div>

					</div>
					<!-- Footer Rows Container / End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Top Section / End -->

	<!-- Footer Middle Section -->
	<div class="footer-middle-section">
		<div class="container">
			<div class="row">

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>For Candidates</h3>
						<ul>
							<li><a href="#"><span>Browse Jobs</span></a></li>
							<li><a href="#"><span>Add Resume</span></a></li>
							<li><a href="#"><span>Job Alerts</span></a></li>
							<li><a href="#"><span>My Bookmarks</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>For Employers</h3>
						<ul>
							<li><a href="#"><span>Browse Candidates</span></a></li>
							<li><a href="#"><span>Post a Job</span></a></li>
							<li><a href="#"><span>Post a Task</span></a></li>
							<li><a href="#"><span>Plans & Pricing</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>Helpful Links</h3>
						<ul>
							<li><a href="#"><span>Contact</span></a></li>
							<li><a href="#"><span>Privacy Policy</span></a></li>
							<li><a href="#"><span>Terms of Use</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Links -->
				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h3>Account</h3>
						<ul>
							<li><a href="#"><span>Log In</span></a></li>
							<li><a href="#"><span>My Account</span></a></li>
						</ul>
					</div>
				</div>

				<!-- Newsletter -->
				<div class="col-xl-4 col-lg-4 col-md-12">
					<h3><i class="icon-feather-mail"></i> Sign Up For a Newsletter</h3>
					<p>Weekly breaking news, analysis and cutting edge advices on job searching.</p>
					<form action="#" method="get" class="newsletter">
						<input type="text" name="fname" placeholder="Enter your email address">
						<button type="submit"><i class="icon-feather-arrow-right"></i></button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Middle Section / End -->

	<!-- Footer Copyrights -->
	<div class="footer-bottom-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					© 2019 <strong>Hireo</strong>. All Rights Reserved.
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Copyrights / End -->

</div>
<!-- Footer / End -->

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

<!-- Mirrored from www.vasterad.com/themes/hireo/pages-checkout-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Dec 2020 02:32:26 GMT -->
</html>

