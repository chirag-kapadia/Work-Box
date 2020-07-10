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

	$select_profile="select * from tblclient where ClientID='".$_REQUEST['ClientID']."'";
	$select_profile_Exe=mysqli_query($con,$select_profile) or die(mysqli_error($con));
	$select_profile_fetch=mysqli_fetch_array($select_profile_Exe);

		if(isset($_REQUEST['JID']))
		{
			//						echo "-----------------------------";
			//$FID=$select_freelancer_details_fetch['FreelancerID'];
			$insert_Assign="insert into tbljobassign values(null,'".$_REQUEST['FID']."','".$_SESSION['ClientID']."',null,now(),1)";
			//echo $insert_Assign;
			$insert_Assign_Exe=mysqli_query($con,$insert_Assign) or die(mysqli_error($con));
			$bluID1=$_REQUEST['FID'];

			$Update_IsAssign1="update tbljobrequest set IsActive=1 where FreelancerID='".$_REQUEST['FID']."' AND UserType='C_R' AND ClientID='".$_SESSION['ClientID']."' AND JobID='".$_REQUEST['JID']."' ";
			//echo $Update_IsAssign1;
			$Update_IsAssign1_Exe=mysqli_query($con,$Update_IsAssign1) or die(mysqli_error($con));
			$bluID2=$_REQUEST['FID'];
			$CID10=$_SESSION['ClientID'];
			$JID10=$_REQUEST['JID'];
			header("location:posthire.php?bluID=$bluID2&CID11=$CID10&JID11=$JID10");
		}
		if(isset($_REQUEST['RejectID']))
		{
			//echo "----------------------------------------";
			
			//echo $_REQUEST['J']; //JOB ID Working
			$Update_IsAssign="update tbljobrequest set IsActive=1 where FreelancerID='".$_REQUEST['RejectID']."' AND UserType='C_R' AND ClientID='".$_SESSION['ClientID']."' AND JobID='".$_REQUEST['J']."' ";
			//echo $Update_IsAssign;
			$Update_IsAssign_Exe=mysqli_query($con,$Update_IsAssign) or die(mysqli_error($con));
			$CLID1=$_SESSION['ClientID'];
			header("location:clprofile.php?ClientID=$CLID1");
		}

		if(isset($_REQUEST['Ok']))
		{
			$Update_notification="update tblnotification set IsRead=1 where ClientID='".$_SESSION['ClientID']."'";
			//echo $Update_notification;
			$Update_notification_Exe=mysqli_query($con,$Update_notification);
			$CLID1=$_SESSION['ClientID'];
			header("location:clprofile.php?ClientID=$CLID1");
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
			<section class="inner-header-title" style="background-image:url(assets/img/banner-10.jpg);">
				<div class="container">
					<h1>Employer Profile</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
			
			<!-- Candidate Profile Start -->
			<section class="detail-desc advance-detail-pr gray-bg">
				<div class="container white-shadow">
					
					<div class="row">
						<div class="detail-pic"><img src="assets\img\can-1.png" class="img" alt=""><a href="#" class="detail-edit" title="edit"></a></div>
						
					</div>
					<?php
					$Select_live_job="Select count(*) as Count from tbljobassign where ClientID=".$_REQUEST['ClientID'];
					$Select_live_job_Exe=mysqli_query($con,$Select_live_job) or die(mysqli_error($con));
					$Select_live_job_fetch=mysqli_fetch_array($Select_live_job_Exe);
					?>
					<div class="row bottom-mrg">
						<div class="col-md-12 col-sm-12">
							<div class="advance-detail detail-desc-caption">
								<h4><?php echo $select_profile_fetch['C_FirstName']." ".$select_profile_fetch['C_LastName']?></h4><span class="designation">CEO & Founder</span>
								<ul>
									<li><strong class="j-view"><?php echo $Select_live_job_fetch['Count']?></strong>Live Jobs</li>
									<?php
									$Select_Posted_job="Select count(*) as Countjob from tbljobs where ClientID=".$_REQUEST['ClientID'];
									$Select_Posted_job_Exe=mysqli_query($con,$Select_Posted_job) or die(mysqli_error($con));
									$Select_Posted_job_fetch=mysqli_fetch_array($Select_Posted_job_Exe);
									?>
									<li><strong class="j-applied"><?php echo $Select_Posted_job_fetch['Countjob']?></strong>Job Posted</li>
									<?php
									$Select_request_job="Select count(*) as Countrequestjob from tbljobrequest where ClientID=".$_REQUEST['ClientID'];
									$Select_request_job_Exe=mysqli_query($con,$Select_request_job) or die(mysqli_error($con));
									$Select_request_job_fetch=mysqli_fetch_array($Select_request_job_Exe);
									?>             
									<li><strong class="j-shared"><?php echo $Select_request_job_fetch['Countrequestjob']?></strong>Job Requests</li>
								</ul>
							</div>
							
						</div>
					</div>
					
					<div class="row no-padd">
						<div class="detail pannel-footer">
							<div class="col-md-5 col-sm-5">
								<ul class="detail-footer-social">
									<li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
									<li><a href="https://www.googleplus.com/"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
									<li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
									<li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
							<div class="col-md-7 col-sm-7">
								<div class="detail-pannel-footer-btn pull-right">
									<?php
										if(isset($_SESSION['ClientID']))
										{
									?>
											<a href="EditProfile.php" class="footer-btn blu-btn" title="">Edit Profile</a>
									<a href="ChangePassword.php" style="background-color: green;color: white;" class="footer-btn blu-btn" title="">Change Password</a>
									<?php
										}
									?>
									

								</div>
							</div> 
						</div>
					</div>
					
				</div>
			</section>
			
			<section class="full-detail-description full-detail gray-bg">
				<div class="container">
					<div class="col-md-12 col-sm-12">
						<div class="full-card">
							<div class="deatil-tab-employ tool-tab">
								<ul class="nav simple nav-tabs" id="simple-design-tab">
									<li class="active"><a href="#about">About</a></li>
									<li><a href="#employementhistory">Employment History</a></li>
									<li><a href="#skills">Skills</a></li>
									<?php
									if(isset($_SESSION['ClientID']))
									{

										$select_notification="select count(IsActive) as countNoti, FreelancerID from tbljobrequest where IsActive=0 AND UserType='C_R' AND ClientID='".$_SESSION['ClientID']."'";
										$select_notification_Exe=mysqli_query($con,$select_notification);
										$select_notification_fetch=mysqli_fetch_array($select_notification_Exe);
										?>
										<li><a href="#messages">Messages <span class="info-bar"><?php echo $select_notification_fetch['countNoti']?></span></a></li>
										<?php
												$count_notification="select count(IsRead) as countnotification from tblnotification where ClientID='".$_SESSION['ClientID']."' AND IsRead=0";
												$count_notification_Exe=mysqli_query($con,$count_notification);
												$count_notification_fetch=mysqli_fetch_array($count_notification_Exe);
										?>
										<li><a href="#notification">Notification <span class="info-bar"><?php echo $count_notification_fetch['countnotification']; ?></span></a></li>
										<?php
									}
									?>
								</ul>
								
								<!-- Start All Sec -->
								<div class="tab-content">
									<div id="about" class="tab-pane fade in active">
										<h3>About</h3>
										<p><?php echo $select_profile_fetch['About'];?></p>
										
									</div>
									<!-- End About Sec -->
									
									<!-- Start Address Sec -->
									<div id="employementhistory" class="tab-pane fade">
										<h3>Employment History</h3>
										<p>Employement History of Freelancer(freelancers names and payment made)</p>

									</div>
									<!-- End Address Sec -->
									
									<!-- Start Job List -->
									<div id="skills" class="tab-pane fade">
										<h3>Skills</h3>
										<div class="row">
										</div>

										<div class="row">
											<?php
											$select_Skill="select * from tblskill where SkillID='".$select_profile_fetch['SkillID']."'";
											$select_Skill_Exe=mysqli_query($con,$select_Skill) or die(mysqli_error());
											$select_Skill_Fetch=mysqli_fetch_array($select_Skill_Exe);
											?>
											<ul>
												<li><?php echo $select_Skill_Fetch['SkillName']?></li>


											</ul>
										</div>
									</div>

									<!-- End Job List -->
									
									
									
									<!-- Start Message -->
									<div id="messages" class="tab-pane fade">
										<div class="inbox-body inbox-widget">
											<?php
											

											$select_notification_Freelancer="select FreelancerID,ClientID,JobID from tbljobrequest where IsActive=0 AND UserType='C_R' AND ClientID='".$_SESSION['ClientID']."'";
											$select_notification_Freelancer_Exe=mysqli_query($con,$select_notification_Freelancer);
											while($select_notification_Freelancer_fetch=mysqli_fetch_array($select_notification_Freelancer_Exe))
											{
												$select_freelancer_details="select * from tblfreelancer where FreelancerID='".$select_notification_Freelancer_fetch['FreelancerID']."'";
												$select_freelancer_details_Exe=mysqli_query($con,$select_freelancer_details);
												while($select_freelancer_details_fetch=mysqli_fetch_array($select_freelancer_details_Exe))
												{




													?>

													<div class="mail-card">
														<header class="card-header cursor-pointer collapsed">
															<div class="card-title flexbox">
																<img class="img-responsive img-circle avatar" src="assets\FreelancerProfile\<?php echo $select_notification_Freelancer_fetch['ProfilePicture'];?>" alt="...">
																<div>
																	<h6><?php echo $select_freelancer_details_fetch['F_FirstName']." ".$select_freelancer_details_fetch['F_LastName'];?></h6>
																	<?php 
																		$select_job="select * from tbljobs where JobID='".$select_notification_Freelancer_fetch['JobID']."'";
																		 $select_job_Exe=mysqli_query($con,$select_job) or die(mysqli_error($con));
																		$select_job_Fetch=mysqli_fetch_array($select_job_Exe);
																echo $select_notification_Freelancer_fetch['JobID'];

																	?>
																	
																	<small><?php echo $select_job_Fetch['jobTitle']?></small>
																	<form>
																	<a href="flprofile.php?FLID=<?php echo $select_freelancer_details_fetch['FreelancerID']?>" class="btn btn-success" style="margin-left: 650px;">View Profile</a>
																	&nbsp;&nbsp;&nbsp;
																	<a href="?ClientID=<?php echo $_REQUEST['ClientID']?>&JID=<?php echo $select_notification_Freelancer_fetch['JobID']?>&FID=<?php echo $select_notification_Freelancer_fetch['FreelancerID']?>" class="btn btn-success" name="btnAccept">Accept</a>&nbsp;&nbsp;&nbsp;
																<a href="?ClientID=<?php echo $select_notification_Freelancer_fetch['ClientID']?>&RejectID=<?php echo $select_notification_Freelancer_fetch['FreelancerID']?>&J=<?php echo $select_notification_Freelancer_fetch['JobID'];?>" class="btn btn-danger" >Reject</a>
																	
																	</form>
																</div>
															</div>
														</header>
														
													</div>
													<?php
												}
											}
											?>
											
											
											
										</div>
									</div>
									<!-- End Message -->
									<!-- Notofication  -->
									<div id="notification" class="tab-pane fade">
										<div class="inbox-body inbox-widget">
											<?php
											

											$select_noti="select * from tblnotification where ClientID='".$_SESSION['ClientID']."' AND UserType='C_R' AND IsActive=1 AND IsRead=0";

																		
											$select_noti_Exe=mysqli_query($con,$select_noti) or die(mysqli_error($con));
																		
											while($select_noti_Fetch=mysqli_fetch_array($select_noti_Exe))
											{



													?>

													<div class="mail-card">
														<header class="card-header cursor-pointer collapsed">
															<div class="card-title flexbox">
																<img class="img-responsive img-circle avatar" src="assets\FreelancerProfile\<?php echo $select_notification_Freelancer_fetch['ProfilePicture'];?>" alt=" ">
																<div>
																	<?php
																		$select_Free="select * from tblfreelancer where FreelancerID='".$select_noti_Fetch['FreelancerID']."'";
																		$select_Free_Exe=mysqli_query($con,$select_Free);
																		while($select_Free_fetch=mysqli_fetch_array($select_Free_Exe))
																		{


																		if($select_noti_Fetch['Type']==1)
																		{
																			echo $select_Free_fetch['F_FirstName']." ". $select_Free_fetch['F_LastName'];
																			echo "<h5>Freelancer has Accepted your job proposal, You can contact via contact no OR Email.</h5>";
																		}
																		if($select_noti_Fetch['Type']==2)
																		{
																			echo $select_Free_fetch['F_FirstName']." ". $select_Free_fetch['F_LastName'];
																			echo "<h5>Freelancer has decline your job proposal, You can contact via contact no OR Email.</h5>";
																		}
																		?>


																	 <a href="?ClientID=<?php echo $_SESSION['ClientID'];?>&Ok=<?php echo $_SESSION['ClientID'];?>" class="btn btn-success" style="margin-left: 900px;">OKAY</a>
																	<?php
																	}
																		if($select_noti_Fetch['NotificationID']==2)
																		{
																			echo "<h5>2Freelancer has decline you proposal.</h5>";
																		}
																		if($select_noti_Fetch['NotificationID']==2)
																		{
																			echo "<h5>3.Your Request Accepted by [Freelancer Name] Payment Now.</h5>";
																		}
																	?>
																	
																	<form>
																	
																	
																	

																	</form>
																</div>
															</div>
														</header>
														
													</div>
													<?php
												
													}
											?>
											
											
											
										</div>
									</div>
									<!-- End Notification -->
									<!-- Start Settings -->
									
									<!-- End Settings -->
								</div>
								<!-- Start All Sec -->
							</div>  
						</div>
					</div>
				</div>
			</section>
			<!-- Candidate Profile End -->
			
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