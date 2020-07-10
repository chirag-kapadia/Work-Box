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
				<?php
					$select_jobs15="select * from tbljobs where companyName='".$_REQUEST['CName']."'";
							$select_jobs15_Exe=mysqli_query($con,$select_jobs15) or die(mysqli_error($con));
							$select_jobs15_fetch=mysqli_fetch_array($select_jobs15_Exe);
				?>
				<div class="container">
					<h1>Jobs List</h1>
					<h2 style="color: white"><?php echo $select_jobs15_fetch['companyName']?></h2>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
			
			<!-- ========== Begin: Brows job Category ===============  -->
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
							$select_jobs="select * from tbljobs where companyName='".$_REQUEST['CName']."'";
							$select_jobs_Exe=mysqli_query($con,$select_jobs) or die(mysqli_error($con));
							while($select_jobs_fetch=mysqli_fetch_array($select_jobs_Exe))
							{


						?>
						<a href="jobdetails.php?JBID=<?php echo $select_jobs_fetch['JobID']?>">
						<div class="col-md-4 col-sm-6">
							<div class="grid-view brows-job-list">
								<div class="brows-job-company-img">
									<img src="assets\jobProfile\<?php echo $select_jobs_fetch['jobProfile']?>" class="img-responsive" alt="">
								</div>
								<div class="brows-job-position">
									<h3><a href="jobdetails.php?JBID=<?php echo $select_jobs_fetch['JobID']?>"><?php echo $select_jobs_fetch['jobTitle']?></a></h3>
									<p><span><?php echo $select_jobs_fetch['companyName']?></span></p>
								</div>
								
								
							</div>
						</div>
						</a>
						<?php
							}
						?>

						
					</div>
					<!--/.Browse Job In Grid-->

					
					
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