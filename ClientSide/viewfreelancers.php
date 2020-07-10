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
					<h1>My Freelancers</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
			
			<!-- Member list start -->
			<section class="member-card gray">
				<div class="container">
				
					
					
					<div class="row">
						<?php
						//echo $_SESSION['ClientID'];
							$select_Freelancer12="SELECT tblclient.ClientID,tblfreelancer.*,tbljobassign.*
									FROM tbljobassign
									INNER JOIN tblclient ON tbljobassign.ClientID = tblclient.ClientID
									INNER JOIN tblfreelancer ON tbljobassign.FreelancerID = tblfreelancer.FreelancerID
									WHERE IsAssign=1 AND tblclient.ClientID=".$_SESSION['ClientID'];
							$select_Freelancer12_Exe=mysqli_query($con,$select_Freelancer12);
							while($select_Freelancer12_fetch=mysqli_fetch_array($select_Freelancer12_Exe))
							{


								
						?>
						<div class="col-md-4 col-sm-4">
							<div class="manage-cndt">
								
								<div class="cndt-caption">
									<div class="cndt-pic">
										<img src="assets\FreelancerProfile\<?php echo $select_Freelancer12_fetch['ProfilePicture'];?>" class="img-responsive" alt="">
									</div>
									<h4><?php echo $select_Freelancer12_fetch['F_FirstName']." ".$select_Freelancer12_fetch['F_LastName'];?></h4>
									<span><?php echo $select_Freelancer12_fetch['ProfessionalTitle'];?></span>
									<p><?php echo $select_Freelancer12_fetch['EmploymentHistory'];?></p>
								</div>
								<a href="flprofile.php?FLID=<?php echo $select_Freelancer12_fetch['FreelancerID'];?>" title="" class="cndt-profile-btn">View Profile</a>
							</div>
						</div>
						<?php
							}
						?>
						
						
						
						
						
						
					</div>
					
					
					
				</div>
			</section>
			<!-- Member List End -->
			
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