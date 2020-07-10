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
		$select_jobDetails="select * from tbljobs where JobID='".$_REQUEST['JobID11']."'";
		$select_jobDetails_Exe=mysqli_query($con,$select_jobDetails) or die(mysqli_error($con));
		$select_jobDetails_fetch=mysqli_fetch_array($select_jobDetails_Exe);

		if(isset($_REQUEST['btnApplyJob']))
		{
			//echo "------------------------------";
			$insert_request="insert into tbljobrequest values(null,'".$select_jobDetails_fetch['ClientID']."','".$_REQUEST['JobID11']."','".$_SESSION['FreelancerID']."',null,'C_R',0)";
			//echo $insert_request;
			$insert_request_Exe=mysqli_query($con,$insert_request) or die(mysqli_error($con));

			$Update_IsActive="Update tbljobs set IsActive=0 where JobID='".$_REQUEST['JobID11']."'";
			//echo $Update_IsActive;
			$Update_IsActive_Exe=mysqli_query($con,$Update_IsActive) or die(mysqli_error($con));
			header("location:postjobapply.php");

		}
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
			<section class="inner-header-page">
				<div class="container">
					
					<div class="col-md-8">
						<div class="left-side-container">
							<div class="freelance-image"><a href="company-detail.html"><img src="assets\JobProfile\<?php echo $select_jobDetails_fetch['jobProfile'];?>" class="img-responsive" alt=""></a></div>
							<div class="header-details">
								<h4><?php echo $select_jobDetails_fetch['jobTitle'];?></h4>
								<p><?php echo $select_jobDetails_fetch['companyName'];?></p>
								<ul>
									<li><a href="single-company-profile.html"><i class="fa fa-money"></i> ₹ <?php echo $select_jobDetails_fetch['MinWage'];?> - <?php echo $select_jobDetails_fetch['MaxWage'];?> </a></li>
									<li><i class="fa fa-map-marker"></i> <?php echo $select_jobDetails_fetch['companyLocation'];?></li>
									
									
									<li>
										<?php 
											if($select_jobDetails_fetch['IsActive']==1)
											{
										?>
												<div class="verified-action" >
											<b>Verified</b>
										</div>
										<?php		
											}
											else
											{
										?>
												<div class="verified-action" style="background-color: red;color: white">
											 <b>Not Verified</b>
										</div>
										<?php
											}
										?>
										
									</li>
								</ul>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 bl-1 br-gary">
						<div class="right-side-detail">
							<ul>
								<li><span class="detail-info">Email</span><?php echo $select_jobDetails_fetch['companyEmail'];?></li>
								
								<li><span class="detail-info">Website</span><?php echo $select_jobDetails_fetch['CompanyWebsite'];?></li>
								
							</ul>
							<ul class="social-info">
								<li><a href="<?php echo $select_jobDetails_fetch['facebookLink'];?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a href="<?php echo $select_jobDetails_fetch['twitterLink'];?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li><a href="<?php echo $select_jobDetails_fetch['linkedinLink'];?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="<?php echo $select_jobDetails_fetch['instagramLink'];?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
								
							</ul>
						</div>
					</div>
					
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
			
			<!-- Job Detail Start -->
			<section>
				<div class="container">
					
					<div class="col-md-8 col-sm-8">
						<div class="container-detail-box">
						
							<div class="apply-job-header">
								<h4><?php echo $select_jobDetails_fetch['jobTitle'];?></h4>
								<a href="company-detail.html" class="cl-success"><span><i class="fa fa-building"></i><?php echo $select_jobDetails_fetch['companyName'];?></span></a>
								<span><i class="fa fa-map-marker"></i><?php echo $select_jobDetails_fetch['companyLocation'];?></span>
							</div>
							
							<div class="apply-job-detail">
								<p><?php echo $select_jobDetails_fetch['jobDescription'];?></p>
							</div>
							
							<div class="apply-job-detail">
								<h5>Category</h5>
								<ul class="skills">
									<?php
                                        $job_Category="select * from tbljobcategories where CategoryID='".$select_jobDetails_fetch['CategoryID']."'";
                                        $job_Category_Exe=mysqli_query($con,$job_Category) or die(mysqli_error());
                                        while($job_Category_Fetch=mysqli_fetch_array($job_Category_Exe))
                                        {


                                    ?>
									<li><?php echo $job_Category_Fetch['CategoryName']?></li>
									<?php
										}
									?>
									<!-- <li>Html5</li>
									<li>Photoshop</li>
									<li>Wordpress</li>
									<li>PHP</li>
									<li>Java Script</li> -->
								</ul>
							</div>
							
							<div class="apply-job-detail">
								<h5>Requirements</h5>
								
								<p><?php echo $select_jobDetails_fetch['jobRequirement'];?></p>
							</div>
							<form method="post">
							<button class="btn btn-success" name="btnApplyJob">Apply For This Job</button>
						</form>
							
							
						</div>
						
						<!-- Similar Jobs -->
						
					</div>
					
					<!-- Sidebar Start-->
					<?php
						$JobID12=$_REQUEST['JobID11'];
						//echo $JobID12;
						include_once("sidebar2.php");
					?>
					<!-- End Sidebar -->
					
				</div>
			</section>
			<!-- Job Detail End -->
						
			<!-- Footer Section Start -->
			<?php
				include_once("footer.php");
			?>
			<div class="clearfix"></div>
			<!-- Footer Section End -->
			
			
			
			<?php
				//include_once("sidebar.php");
			?>
			
			<!-- Scripts
			================================================== -->
			<?php
				include_once("javascript.php");
			?>
		</div>
	</body>
</html>