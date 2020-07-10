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
		$select_freelancerDetials="select * from tblfreelancer where FreelancerID='".$_REQUEST['bluID']."'";
		$select_freelancerDetials_Exe=mysqli_query($con,$select_freelancerDetials) or die(mysqli_error($con));
		$select_freelancerDetials_fetch=mysqli_fetch_array($select_freelancerDetials_Exe);
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
			

			<!-- Main Banner Section Start -->
			<div class="hero-banner" data-ride="carousel" data-pause="hover" data-interval="false">
				<div class="hero-img">
					<img src="assets\img\gtrr.jpg" class="img-responsive" alt="">
				</div>
				<div class="container">
					<div class="row">
						<div class="col col-md-6 col-sm-8">
							<div class="content">

								<h2>Thumbs Up</h2>
								<p>Your have successfully hired <?php echo $select_freelancerDetials_fetch['F_FirstName']." ".$select_freelancerDetials_fetch['F_LastName'];?>. </p>
								<h4>You can now contact <?php echo $select_freelancerDetials_fetch['F_FirstName']." ".$select_freelancerDetials_fetch['F_LastName'];?> to share details and files via.</h4>
								<h5>Whatsapp : <?php echo $select_freelancerDetials_fetch['ContactNo'];?></h5><br />
								
								<a href="websitepayment.php?JobID=<?php echo $_REQUEST['JID11'];?>&CID13=<?php echo $_REQUEST['CID11']?>&FID=<?php echo $_REQUEST['bluID']?>" class="btn btn-success" name="btnAccept">Pay Now</a>
								<form class="banner-form" data-animation="animated fadeInUp">
									

										<div class="col-md-10 col-sm-10">
											<ul class="detail-footer-social">
												<li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
												<li><a href="https://www.googleplus.com/"><i class="fa fa-google-plus"></i></a></li>
												<li><a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
												<li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
												<li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
											</ul>
							
												
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