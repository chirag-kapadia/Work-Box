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
			<section class="inner-header-title" style="background-image:url(assets/img/banner-10.jpg);">
				<div class="container">
					<h1>My Jobs</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
			
			<!-- ========== Begin: Brows job Category ===============  -->
			<section class="brows-job-category">
				<div class="container">
					
					<?php 
						$select_job="select * from tbljobs where ClientID='".$_SESSION['ClientID']."'";
						$select_job_Exe=mysqli_query($con,$select_job) or die(mysqli_error($con));

						while($select_job_Fetch=mysqli_fetch_array($select_job_Exe))
						{
					?>
					
					<div class="item-click">
						<article>
							<div class="brows-job-list">
								<div class="col-md-1 col-sm-2 small-padding">
									<div class="brows-job-company-img">
										<a href="jobdetails.php?JBID=<?php echo $select_job_Fetch['JobID'];?>"><img src="assets\JobProfile\<?php echo $select_job_Fetch['jobProfile'];?>" class="img-responsive" alt=""></a>
									</div>
								</div>
								<div class="col-md-6 col-sm-5">
									<div class="brows-job-position">
										<a href="jobdetails.php?JBID=<?php echo $select_job_Fetch['JobID'];?>"><h3><?php echo $select_job_Fetch['jobTitle']?></h3></a>
										
									</div>
								</div>
								<div class="col-md-3 col-sm-3">
									<div class="brows-job-location">
										<?php
											$select_PackName="select * from tblpackage where PackageID='".$select_job_Fetch['PackageID']."'";
											$select_PackName_Exe=mysqli_query($con,$select_PackName);
											$select_PackName_Fetch=mysqli_fetch_array($select_PackName_Exe);
										?>
										<p><i class="fa fa-money"></i>Package Selected <b><?php echo $select_PackName_Fetch['PackageName']?></b></p>
									</div>
								</div>

								<div class="col-md-2 col-sm-2">
									
									<div class="brows-job-link">
										<?php 
											if(empty($select_job_Fetch['PackageID']))
											{


										?>
										<a href="packages.php?JID=<?php echo $select_job_Fetch['JobID'];?>"><button type="button" class="btn bg-default" >Select Package</button></a>
										<?php
											}
											else
											{
										?>
												<div class="input-group">
													<span class="input-group-btn">
												<button type="button" class="btn bg-success" style="width: 85%;color: white;" >Activated</button>
											</span>
											</div>
										<?php
											}
										?>
									</div>
									
								</div>
							</div>
							<?php 
								if($select_job_Fetch['IsActive']==0)
								{
							?>
							<span class="tg-themetag tg-featuretag">Pending</span>
							<?php
								}
							?>
						</article>
					</div>
					<?php
						}	
					?>
					
				</div>
			</section>
			<!-- ========== Begin: Brows job Category End ===============  -->
			
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