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

								<h2>Congratulations</h2>
								<p>Your job is successfully submitted to us.<br> Please select a package first to Activate your job on our website. </br> Activation may take 24 hours after you select your package.</p>
								<h4>Click the Button Below To Select A Package.</h4>
								<form class="banner-form" data-animation="animated fadeInUp">
									<div class="input-group">
										
										<span class="input-group-btn">
											<a href="packages.php">
											<a href="packages.php?JID=<?php echo $_REQUEST['JID'];?>"><button type="button" class="btn bg-success" >Select Package</button></a>
										
										</a>
										</span>
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