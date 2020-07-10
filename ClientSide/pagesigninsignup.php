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
			<?php
				include_once("sidebar.php");
			?>
			
			<!-- Scripts
			================================================== -->
			<?php
				include_once("javascript.php");
			?>
		</div>
	</body>
</html>