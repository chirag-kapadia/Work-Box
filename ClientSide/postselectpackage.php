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
								<?php
									$Select_Package="select * from tblpackage where PackageID='".$_REQUEST['PackID']."'";
		$Select_Package_Exe=mysqli_query($con,$Select_Package) or die(mysqli_error($con));
		$Select_Package_Fetch=mysqli_fetch_array($Select_Package_Exe);
								?>
								<h2>Congratulations</h2>
								<p>You Have Successfully Bought the <?php echo $Select_Package_Fetch['PackageName'];?> Package.</p>
								<?php


									$Select_Pack_Date="select * from tbljobs where jobID='".$_REQUEST['JobID']."'";
									$Select_Pack_Date_Exe=mysqli_query($con,$Select_Pack_Date) or die(mysqli_error($con));
									$Select_Pack_Date_Fetch=mysqli_fetch_array($Select_Pack_Date_Exe);
									
									

								?>
								<h4>Your Job Post Will Be Activate From (<?php echo $Select_Pack_Date_Fetch['PackageDate'];?>) to (<?php echo $Select_Pack_Date_Fetch['ExpiryDate'];?>).</h4>
								<form class="banner-form" data-animation="animated fadeInUp" method="post">
									<div class="input-group">
										
										<span class="input-group-btn">
											
											<a href="index.php"><input type="button" style="width: 200px;" class="btn bg-success" value="Home"></a>
											



										
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