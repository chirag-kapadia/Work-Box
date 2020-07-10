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
	<?php
		/*if(isset($_REQUEST['PackID']))
		{
				$date=date("Y-m-d");
			$update_Package="update tbljobs set PackageDate='".$date."'where jobID='".$_REQUEST['JobID']."'";
			//echo $update_Package;
			mysqli_query($con,$update_Package) or die(mysqli_error($con));
			$PackID=$_REQUEST['PackID'];
			$JobID=$_REQUEST['JobID'];*/
			/*header("location:postselectpackage.php?PackID=<?php echo $_REQUEST['PackID']?>&JobID=<?php echo $_REQUEST['JobID'];?>");*/
			//header("location:payment.php?PackID=$PackID&JobID=$JobID");
				
		//}
	?>
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
			<section class="inner-header-title" style="background-image:url(assets/img/banner-10.jpg);">
				<div class="container">
					<h1>Our Packages</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
			<form>
			<!-- pricing Section Start -->
			<section class="pricing">
				<div class="container">

					<?php
						$select_package="select * from tblpackage";
						$select_package_Exe=mysqli_query($con,$select_package) or die(mysqli_error());
						while($select_package_Fetch=mysqli_fetch_array($select_package_Exe))
						{



					?>
						
					<div class="col-md-4 col-sm-4">
						<div class="pr-table">
							<div class="pr-header active">
								<div class="pr-plan">
									<h4><?php echo $select_package_Fetch['PackageName'];?></h4>
								</div>
								<div class="pr-price">
									<h3><sup>₹</sup><?php echo $select_package_Fetch['Price'];?><sub>/<?php echo $select_package_Fetch['Days'];?> Days</sub></h3>
								</div>
							</div>
							
							<div class="pr-buy-button">
                                <!-- <a href="?PackID=<?php echo $select_package_Fetch['PackageID'];?>"><button class="pr-btn active" style="width: 100%" name="btnBuyPackages">Select Package</button></a> -->
                                <a href="payment.php?PackID=<?php echo $select_package_Fetch['PackageID'];?>&JobID=<?php echo $_REQUEST['JID'];?>" class="pr-btn active">Select Package</a>
							</div>
						</div>
					</div>
				
					<?php
						}
					?>
				
					
					
			
					
					
				</div>
			</section>
		</form>
			<!-- End Pricing Section -->
			
			<!-- Footer Section Start -->
			<?php
				include_once("footer.php");
			?>
			<div class="clearfix"></div>
			<!-- Footer Section End -->
			
			<!-- Sign Up Window Code -->
			   
			<!-- End Sign Up Window -->
			
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