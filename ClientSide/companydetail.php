<!doctype html>
<html lang="en">
<head>
	<?php
		include_once("loadfiles.php");
		include_once("Connection.php");
	?>
    
	</head>
		<?php
			$Company_details="select * from tbljobs where ClientID='".$_REQUEST['ClientID']."'";
			$Company_details_Exe=mysqli_query($con,$Company_details) or die(mysqli_error($con));
			$Company_details_fetch=mysqli_fetch_array($Company_details_Exe);
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
					<h1>Company Details</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
			
			<!-- Company Detail Start -->
			<section class="detail-desc">
				<div class="container white-shadow">
				
					<div class="row">
						<div class="detail-pic">
							<img src="assets\JobProfile\<?php echo $Company_details_fetch['jobProfile']?>" class="img" alt="">
							
						</div>
						
					</div>
					
					<div class="row bottom-mrg">
					
						<div class="col-md-8 col-sm-8">
							<div class="detail-desc-caption">
								<h4><?php echo $Company_details_fetch['companyName']?></h4>
								
								<p><?php echo $Company_details_fetch['companyDescription']?></p>
							</div>
						</div>
						
						<div class="col-md-4 col-sm-4">
							<div class="get-touch">
								<h4>Get in Touch</h4>
								<ul>
									<li><i class="fa fa-envelope"></i><span><?php echo $Company_details_fetch['companyEmail']?></span></li>
									<li><i class="fa fa-globe" ></i><span><?php echo $Company_details_fetch['CompanyWebsite']?></span></li>
									<li><i class="fa fa-map-marker" ></i><span> <?php echo $Company_details_fetch['companyLocation']?></span></li>
									
									
								</ul>
							</div>
						</div>
						
					</div>
					
					<div class="row no-padd">
						<div class="detail pannel-footer">
						
							<div class="col-md-5 col-sm-5">
								<ul class="detail-footer-social">
									<li><a href="<?php echo $Company_details_fetch['facebookLink'];?>" target="_blank"><i class="fa fa-facebook"></i></a></li>


									<li><a href="<?php echo $Company_details_fetch['twitterLink'];?>" target="_blank"><i class="fa fa-twitter"></i></a></li>

									<li><a href="<?php echo $Company_details_fetch['instagramLink'];?>" target="_blank"><i class="fa fa-instagram"></i></a></li>

									<li><a href="<?php echo $Company_details_fetch['linkedinLink'];?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
							
							
							
						</div>
					</div>
					
				</div>
			</section>
			<!-- Company Detail End -->
			<div class="clearfix"></div>
			
			<!-- Title Header Start -->
			<div >
				
				<center><h1>Available Jobs</h1></center>
				
			</div>
			<section class="brows-job-category">
				<div class="container">
					<!-- Company Searrch Filter Start -->
					<div class="row extra-mrg">
						<div class="wrap-search-filter">
							
						</div>
					</div>
					<!-- Company Searrch Filter End -->
					
					<!--Browse Job In Grid-->
					
					<div class="row extra-mrg">
						<?php
							$Company_Name_select="select * from tbljobs where companyName='".$_REQUEST['CName1']."'";
							$Company_Name_select_Exe=mysqli_query($con,$Company_Name_select) or die(mysqli_error($con));
							$Company_Name_select_fetch=mysqli_fetch_array($Company_Name_select_Exe);
						?>
						<a href="jobdetails.php?JBID=<?php echo $Company_Name_select_fetch['JobID']?>">
						<div class="col-md-4 col-sm-6">
							<div class="grid-view brows-job-list">
								<div class="brows-job-company-img">
									<img src="assets\JobProfile\<?php echo $Company_Name_select_fetch['jobProfile'];?>" class="img-responsive" alt="">
								</div>
								<div class="brows-job-position">
									<h3><a href="jobdetails.php?JBID=<?php echo $Company_Name_select_fetch['JobID']?>"><?php echo $Company_Name_select_fetch['jobTitle']?></a></h3>
									<p><span class="fa fa-money"> ₹ <?php echo $Company_Name_select_fetch['MinWage'];?> - <?php echo $Company_Name_select_fetch['MaxWage'];?></span></p>
								</div>
								
								
							</div>
						</div>
						</a>

						

						

						
						
					</div>
					<!--/.Browse Job In Grid-->

					
					
				</div>
			</section>
			
			<!-- Footer Section Start -->
			<?php
				include_once("footer.php");
			?>
			<div class="clearfix"></div>
			<!-- Footer Section End -->
			
			
			
			<!-- Scripts-->
			<?php
				include_once("javascript.php");
			?>
		</div>
	</body>
</html>