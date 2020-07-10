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
			<section class="inner-header-page">
				<div class="container">
					
					<h2>Hire The Best IT Geeks</h2>
					<p>Work with the world’s best talent on Workbox — the top freelancing website trusted by over 5 million businesses.</p>
					
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
			
			<!-- Accordion Design Start -->
			<section class="accordion">
				<div class="container">
					
					<!-- search filter -->
					<div class="row extra-mrg">
						<div class="wrap-search-filter">
							
						</div>
					</div>
					<!-- search filter End -->
					
					<!-- Freelancers Style 2 Start -->
					<div class="row">
						
						<!-- Single Freelancer Style 2 -->
						 <?php
                        
                        $select_freelancer="select * from tblfreelancer";
                        $select_freelancer_Exe=mysqli_query($con,$select_freelancer) or die(mysqli_error());
    
                        while($select_freelancer_Fetch=mysqli_fetch_array($select_freelancer_Exe))
                        {
                    ?>
						<div class="col-md-4 col-sm-6">
							<div class="freelance-container style-2">
								<div class="freelance-box">
									<span class="freelance-status">Available</span>
									<h4 class="flc-rate">₹<?php echo $select_freelancer_Fetch['HourlyRate'];?>/hr</h4>
									<div class="freelance-inner-box">
										<div class="freelance-box-thumb">
											<img src="assets\img\client-1.jpg" class="img-responsive img-circle" alt="">
										</div>
										<div class="freelance-box-detail">
											 <h4><?php echo $select_freelancer_Fetch['F_FirstName']." ".$select_freelancer_Fetch['F_LastName']?></h4>
											<span class="location"><?php echo $select_freelancer_Fetch['ProfessionalTitle'];?></span>
										</div>
										<div class="rattings">
                                         <?php
                                            if($select_freelancer_Fetch['Rating']==1)
                                            {
                                        ?>
                                                <i class="fa fa-star fill"></i>
                                        <?php        
                                            }
                                             if($select_freelancer_Fetch['Rating']==2)
                                             {
                                            ?>
                                                <i class="fa fa-star fill"></i><i class="fa fa-star fill"></i>
                                        <?php
                                             }
                                             if($select_freelancer_Fetch['Rating']==3)
                                             {
                                        ?>
                                                <i class="fa fa-star fill"></i><i class="fa fa-star fill"></i><i class="fa fa-star fill"></i>
                                        <?php
                                             }
                                             if($select_freelancer_Fetch['Rating']==4)
                                             {
                                            ?>
                                                <i class="fa fa-star fill"></i><i class="fa fa-star fill"></i><i class="fa fa-star fill"></i><i class="fa fa-star fill"></i>
                                        <?php
                                             }
                                             if($select_freelancer_Fetch['Rating']==5)
                                             {
                                        ?>
                                                 <i class="fa fa-star fill"></i><i class="fa fa-star fill"></i><i class="fa fa-star fill"></i><i class="fa fa-star fill"></i><i class="fa fa-star fill"></i>
                                        <?php
                                             }
                                        ?>
                                        <!-- <i class="fa fa-star fill"></i><i class="fa fa-star fill"></i><i class="fa fa-star fill"></i><i class="fa fa-star-half fill"></i><i class="fa fa-star"></i>-->
                                    </div>
									</div>
									 <div class="freelance-box-extra">
                                    <?php
                                        $select_Skill="select * from tblskill where SkillID='".$select_freelancer_Fetch['SkillID']."'";
                                        $select_Skill_Exe=mysqli_query($con,$select_Skill) or die(mysqli_error());
                                        $select_Skill_Fetch=mysqli_fetch_array($select_Skill_Exe);
                                    ?>
                                    <ul>
                                        <li><?php echo $select_Skill_Fetch['SkillName']?></li>
                                        
                                        
                                    </ul>
                                </div>
									 <a href="flprofile.php?FLID=<?php echo $select_freelancer_Fetch['FreelancerID'];?>" class="btn btn-freelance-two bg-default">Profile</a>
									<a href="#" class="btn btn-freelance-two bg-info">Hire Now</a>
								</div>
							</div>
						</div>
						<?php
							}
						?>	
						
				
						
						
					</div>
						
				</div>
			</section>
			<!-- Accordion Design End -->
			
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