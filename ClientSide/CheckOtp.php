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
			

			<!-- Main Banner Section Start -->
			<div class="hero-banner" data-ride="carousel" data-pause="hover" data-interval="false">
				<div class="hero-img">
					<img src="assets\img\gtrr.jpg" class="img-responsive" alt="">
				</div>
				<div class="container">
					<div class="row">
						<div class="col col-md-6 col-sm-8">
							<div class="content">

								<!-- <h2>Please Enter Otp</h2> -->
								<h3>We have sent a verification code to your given Email Address</h3>
								<p>Please insert the code to continue...</p>
								<form class="banner-form" data-animation="animated fadeInUp">
									<div class="input-group">
										<div class="col-md-12">
										
										<input type="text" class="form-control" placeholder="Enter OTP" name="txtOTP">
									</div>
										
									<div class="col-md-12">
										<br />
										<center>
										<button class="btn btn-success" name="btnOTP" style="width: 400px;">Submit</button></center>
										
									</div>
										
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<!-- Main Banner Section End -->
	
			
			
			<!-- ========= start Call To Action section =========== -->
			<div class="clearfix"></div>
		
			<!-- =========== Call To Action section End ============= -->
			
			<!-- ====================== Freelancer Slide ================= -->
			
			
			<!-- Download app Section Start -->
			<div class="clearfix"></div>
			
			<div class="clearfix"></div>
			<!-- Download app Section End -->
			
			<!-- Footer Section Start -->
			<?php
				include_once("footer.php");
			?>
			<div class="clearfix"></div>
			<!-- Footer Section End -->
			
			
			
			<!-- Scripts
			================================================== -->
			<?php
				include_once("javascript.php");
			?>
		</div>
	</body>
</html>