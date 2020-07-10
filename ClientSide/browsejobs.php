<!doctype html>
<html lang="en">
<head>
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
			<section class="inner-header-title" style="background-image:url(assets/img/banner-10.jpg);">
				<div class="container">
					<h1>Browse Jobs</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
			
			<!-- ========== Begin: Brows job Category ===============  -->
			<section class="brows-job-category">
				<div class="container">
					<!-- Company Searrch Filter Start -->
					
					<!-- Company Searrch Filter End -->
					<?php
						$select_job="select * from tbljobs where IsActive=1";
						$select_job_Exe=mysqli_query($con,$select_job) or die(mysqli_error($con));
						while($select_job_fetch=mysqli_fetch_array($select_job_Exe))
						{


					?>
					<div class="item-click">
						<article>
							<div class="brows-job-list">
								<div class="col-md-1 col-sm-2 small-padding">
									<div class="brows-job-company-img">
										<a href="jobdetails.php"><img src="assets\JobProfile\<?php echo $select_job_fetch['jobProfile'];?>" class="img-responsive" alt=""></a>
									</div>
								</div>
								<div class="col-md-6 col-sm-5">
									<div class="brows-job-position">
										<a href=""><h3><?php echo $select_job_fetch['jobTitle'];?></h3></a>
										<p>
											<span><?php echo $select_job_fetch['companyName'];?></span><span class="brows-job-sallery"><i class="fa fa-money"></i>₹ <?php echo $select_job_fetch['MinWage'];?> - <?php echo $select_job_fetch['MaxWage'];?></span>
											
										</p>
									</div>
								</div>
								<div class="col-md-3 col-sm-3">
									<div class="brows-job-location">
										<p><i class="fa fa-map-marker"></i><?php echo $select_job_fetch['companyLocation'];?></p>
									</div>
								</div>
								<div class="col-md-2 col-sm-2">
									<div class="brows-job-link">
										<?php
											if(isset($_SESSION['FreelancerID']))
											{
										?>
												<a href="jobapply.php?JobID11=<?php echo $select_job_fetch['JobID']?>" class="btn btn-success">Apply Now</a>		
										<?php
											}
											else
											{
										?>
												<a href="signinsignup.php" class="btn btn-success">Apply Now</a>
										<?php
											}
										?>
										
									</div>
								</div>
							</div>
							
						</article>
					</div>
					<?php
						}
					?>
				
					
					
					
					
					
					<!--/.row-->
					<div class="row">
						<ul class="pagination">
							<li><a href="#">&laquo;</a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li> 
							<li><a href="#">4</a></li> 
							<li><a href="#"><i class="fa fa-ellipsis-h"></i></a></li> 
							<li><a href="#">&raquo;</a></li> 
						</ul>
					</div>
					
				</div>
			</section>
			<!-- ========== Begin: Brows job Category End ===============  -->
			
			<!-- Footer Section Start -->
			<?php
				include_once("footer.php");
			?>
			<div class="clearfix"></div>
			<!-- Footer Section End -->
			
			
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