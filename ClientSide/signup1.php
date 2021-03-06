<!doctype html>
<html lang="en">
<head>
	<!-- Basic Page Needs
	================================================== -->
	<?php
		include_once("loadfiles.php");
		include_once("Connection.php");
	?>
    
	</head>
	<body>
		<div class="Loader"></div>
		<div class="wrapper">  
			
			<!-- Start Navigation -->
			<?php
				include_once("navbar.php");
			?>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			
			<!-- Title Header Start -->
			<section class="login-plane-sec">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="login-panel panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Create An Account</h3>
								</div>
								<div class="panel-body">
									<img src="assets\img\logo.png" class="img-responsive">
									<form role="form">
										<fieldset>
											<div class="form-group">
												<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
											</div>
											<div class="form-group">
												<input class="form-control" placeholder="Password" name="password" type="password" value="">
											</div>
											<div class="checkbox">
												<label>
													<input name="remember" type="checkbox" value="Remember Me">Remember Me
												</label>
											</div>
											<!-- Change this to a button or input when using this as a form -->
											<a href="signup.php" class="btn btn-login">Sign Up</a>
										</fieldset>
									</form>
									<ul class="social-login">
										<li class="facebook-login"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
										<span>OR</span>
										<li class="google-plus-login"><a href="#"><i class="fa fa-google-plus"></i>Facebook</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<!-- Footer Section Start -->
			<?php
				include_once("footer.php");
			?>
			<div class="clearfix"></div>
			<!-- Footer Section End -->
			
			<!-- Sign Up Window Code -->
			<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-body">
							<div class="tab" role="tabpanel">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#login" role="tab" data-toggle="tab">Sign In</a></li>
								<li role="presentation"><a href="#register" role="tab" data-toggle="tab">Sign Up</a></li>
							</ul>
							<!-- Tab panes -->
							<div class="tab-content" id="myModalLabel2">
								<div role="tabpanel" class="tab-pane fade in active" id="login">
									<img src="assets\img\logo.png" class="img-responsive" alt="">
									<div class="subscribe wow fadeInUp">
										<form class="form-inline" method="post">
											<div class="col-sm-12">
												<div class="form-group">
													<input type="email" name="email" class="form-control" placeholder="Username" required="">
													<input type="password" name="password" class="form-control" placeholder="Password" required="">
													<div class="center">
													<button type="submit" id="login-btn" class="submit-btn"> Login </button>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>

								<div role="tabpanel" class="tab-pane fade" id="register">
								<img src="assets\img\logo.png" class="img-responsive" alt="">
									<form class="form-inline" method="post">
											<div class="col-sm-12">
												<div class="form-group">
													<input type="text" name="email" class="form-control" placeholder="Your Name" required="">
													<input type="email" name="email" class="form-control" placeholder="Your Email" required="">
													<input type="email" name="email" class="form-control" placeholder="Username" required="">
													<input type="password" name="password" class="form-control" placeholder="Password" required="">
													<div class="center">
													<button type="submit" id="subscribe" class="submit-btn"> Create Account </button>
													</div>
												</div>
											</div>
										</form>
								</div>
							</div>
							</div>
						</div>
						</div>
				</div>
			</div>   
			<!-- End Sign Up Window -->
			<button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()"><i class="spin fa fa-cog" aria-hidden="true"></i></button>
			<div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="rightMenu">
				<button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
				<ul id="styleOptions" title="switch styling">
					<li>
						<a href="javascript: void(0)" class="cl-box blue" data-theme="colors/blue-style"></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box red" data-theme="colors/red-style"></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box purple" data-theme="colors/purple-style"></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box green" data-theme="colors/green-style"></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box dark-red" data-theme="colors/dark-red-style"></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box orange" data-theme="colors/orange-style"></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box sea-blue" data-theme="colors/sea-blue-style "></a>
					</li>
					<li>
						<a href="javascript: void(0)" class="cl-box pink" data-theme="colors/pink-style"></a>
					</li>
				</ul>
			</div>
			
			<!-- Scripts
			================================================== -->
			<script type="text/javascript" src="assets\plugins\js\jquery.min.js"></script>
			<script type="text/javascript" src="assets\plugins\js\viewportchecker.js"></script>
			<script type="text/javascript" src="assets\plugins\js\bootstrap.min.js"></script>
			<script type="text/javascript" src="assets\plugins\js\bootsnav.js"></script>
			<script type="text/javascript" src="assets\plugins\js\select2.min.js"></script>
			<script type="text/javascript" src="assets\plugins\js\wysihtml5-0.3.0.js"></script>
			<script type="text/javascript" src="assets\plugins\js\bootstrap-wysihtml5.js"></script>
			<script type="text/javascript" src="assets\plugins\js\datedropper.min.js"></script>
			<script type="text/javascript" src="assets\plugins\js\dropzone.js"></script>
			<script type="text/javascript" src="assets\plugins\js\loader.js"></script>
			<script type="text/javascript" src="assets\plugins\js\owl.carousel.min.js"></script>
			<script type="text/javascript" src="assets\plugins\js\slick.min.js"></script>
			<script type="text/javascript" src="assets\plugins\js\gmap3.min.js"></script>
			<script type="text/javascript" src="assets\plugins\js\jquery.easy-autocomplete.min.js"></script>
			
			<!-- Custom Js -->
			<script src="assets\js\custom.js"></script>
			<script src="assets\js\jQuery.style.switcher.js"></script>
			<script type="text/javascript">
				$(document).ready(function() {
					$('#styleOptions').styleSwitcher();
				});
			</script>
			<script>
				function openRightMenu() {
					document.getElementById("rightMenu").style.display = "block";
				}

				function closeRightMenu() {
					document.getElementById("rightMenu").style.display = "none";
				}
			</script>
		</div>
	</body>
</html>