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
		
			$select_job="select * from tbljobs where JobID='".$_REQUEST['JBID']."'";
		$select_job_Exe=mysqli_query($con,$select_job) or die(mysqli_error($con));
		$select_job_fetch=mysqli_fetch_array($select_job_Exe);
		
		
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
					<h1>Job Details</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
			
			<!-- Job Detail Start -->
			<section class="detail-desc">
				<div class="container white-shadow">
				
					<div class="row">
					
						<div class="detail-pic">
							<img src="assets\JobProfile\<?php echo $select_job_fetch['jobProfile'];?>" class="img" alt="">
							<a href="#" class="detail-edit" title="Company Profile Pic"></a>
						</div>
						
						
						
					</div>
					
					<div class="row bottom-mrg">
						<div class="col-md-8 col-sm-8">
							<div class="detail-desc-caption">
								<h4><?php echo $select_job_fetch['jobTitle'];?></h4>
								<span class="designation"><?php echo $select_job_fetch['companyName'];?></span>
								<p><?php echo $select_job_fetch['jobDescription'];?></p>
								
							</div>
						</div>
						
						<div class="col-md-4 col-sm-4">
							<div class="get-touch">
								<h4>Company Details / Get to Touch</h4>
								<ul>
									<li><i class="fa fa-envelope"></i><span><?php echo $select_job_fetch['companyEmail'];?></span></li>
									<li><i class="fa fa-globe" ></i><span><?php echo $select_job_fetch['CompanyWebsite'];?></span></li>
									<li><i class="fa fa-map-marker"></i><span><?php echo $select_job_fetch['companyLocation']?></span></li>
									
								</ul>
							</div>
						</div>
						
					</div>
					
					<div class="row no-padd">
						<div class="detail pannel-footer">
							<div class="col-md-5 col-sm-5">
								<ul class="detail-footer-social">
									<li><a target="_blank" href="<?php echo $select_job_fetch['facebookLink'];?>"><i class="fa fa-facebook"></i></a></li>
								
									<li><a target="_blank" href="<?php echo $select_job_fetch['twitterLink'];?>"><i class="fa fa-twitter"></i></a></li>
									<li><a target="_blank" href="<?php echo $select_job_fetch['instagramLink'];?>"><i class="fa fa-instagram"></i></a></li>
									<li><a target="_blank" href="<?php echo $select_job_fetch['linkedinLink'];?>"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
							
							<div class="col-md-7 col-sm-7">
								<div class="detail-pannel-footer-btn pull-right">
									<a href="postjobapply.php" class="footer-btn grn-btn" title="">Apply Now</a>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Job Detail End -->
			
			<!-- Job full detail Start -->
			<section class="full-detail-description full-detail">
				<div class="container">
					<div class="row row-bottom">
						<h2 class="detail-title">Job Description</h2>
						<ul class="detail-list">
							<li><?php echo $select_job_fetch['jobDescription']?></li>
							
						</ul>
					</div>
					
					<div class="row row-bottom">
						<h2 class="detail-title">Job Requirement</h2>
						<ul class="detail-list">
							<li><?php echo $select_job_fetch['jobRequirement']?></li>
							
						</ul>
					</div>
					
					
					
				</div>
			</section>
			<!-- Job full detail End -->
			
			<!-- Footer Section Start -->
			<?php
				include_once("footer.php");
			?>
			<div class="clearfix"></div>
			
			
			<!-- Scripts
			================================================== -->
			<?php
				include_once("javascript.php");
			?>
		</div>
	</body>
</html>