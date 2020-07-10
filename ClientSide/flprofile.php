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
	$select_freelancer="select * from tblfreelancer where FreelancerID='".$_REQUEST['FLID']."'";
	$select_freelancer_Exe=mysqli_query($con,$select_freelancer);
	$select_freelancer_fetch=mysqli_fetch_array($select_freelancer_Exe);

	if(isset($_REQUEST['btnHireNow']))
	{
			$Freelancer1ID=$_REQUEST['FLID']; // aa freelid tne btn submit kre pachi nai mde
			$insert_request="insert into tbljobrequest values(null,'".$_SESSION['ClientID']."',null,'".$Freelancer1ID."',null,'F_R',0)";
			//echo"--------------------".$insert_request;
			$insert_request_Exe=mysqli_query($con,$insert_request) or die(mysqli_error($con));
			

			header("location:posthire.php?bluID=$Freelancer1ID");
		}

		if(isset($_REQUEST['CID']))
		{
			//$CID=$select_ClientDetails_Fetch['ClientID'];
			$insert_Assign="insert into tbljobassign values(null,'".$_SESSION['FreelancerID']."','".$_REQUEST['CID']."',null,now(),1)";
			//echo $insert_Assign;
			$insert_Assign_Exe=mysqli_query($con,$insert_Assign) or die(mysqli_error($con));
			$bluID1=$_REQUEST['FLID'];

			$Update_IsAssign1="update tbljobrequest set IsActive=1 where FreelancerID='".$_SESSION['FreelancerID']."' AND UserType='F_R' AND ClientID='".$_REQUEST['CID']."' ";
			//echo $Update_IsAssign1;
			$Update_IsAssign1_Exe=mysqli_query($con,$Update_IsAssign1) or die(mysqli_error($con));

			/*Notificaiton to CLient when Freelancer ACCEPT request*/
			$insert_request="insert into tblnotification values(null,'".$_REQUEST['CID']."','".$_SESSION['FreelancerID']."','C_R',1,1,0)";
			//echo $insert_request;
			$insert_request_Exe=mysqli_query($con,$insert_request) or die(mysqli_error($con));	

			/* END Notificaiton to CLient when Freelancer ACCEPT request*/

			header("location:posthire.php?bluID=$bluID1");
		}	
		if(isset($_REQUEST['RejectID']))
		{
			//echo "----------------------------------------";
			$Update_IsAssign="update tbljobrequest set IsActive=1 where FreelancerID='".$_SESSION['FreelancerID']."' AND UserType='F_R' AND ClientID='".$_REQUEST['RejectID']."' ";
			//echo $Update_IsAssign;
			$Update_IsAssign_Exe=mysqli_query($con,$Update_IsAssign) or die(mysqli_error($con));

			$insert_request="insert into tblnotification values(null,'".$_REQUEST['RejectID']."','".$_SESSION['FreelancerID']."','C_R',1,2,0)";
			//echo $insert_request;
			$insert_request_Exe=mysqli_query($con,$insert_request) or die(mysqli_error($con));	

			$FLID1=$_REQUEST['FLID'];
			header("location:flprofile.php?FLID=$FLID1");
		}
		if(isset($_REQUEST['btnEdit']))
		{
			$Update_Edit="update tblfreelancer set F_FirstName='".$_REQUEST['txtFName']."',F_LastName='".$_REQUEST['txtLName']."',Email='".$_REQUEST['txtEmail']."',ContactNo='".$_REQUEST['txtPhone']."',About='".$_REQUEST['txtAbout']."' where FreelancerID='".$_REQUEST['FLID']."'";
			//echo $Update_Edit;
			$Update_Edit_Exe=mysqli_query($con,$Update_Edit) or die(mysqli_error($con));
		}

		?>
		<body>
			<form method="post">
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
						<h1>Freelancer Profile</h1>
					</div>
				</section>
				<div class="clearfix"></div>
				<!-- Title Header End -->

				<!-- Candidate Profile Start -->
				<!-- <form method="post"> -->
					<section class="detail-desc advance-detail-pr gray-bg">
						<div class="container white-shadow">

							<div class="row">
								<div class="detail-pic"><img src="assets\img\can-1.png" class="img" alt=""><a href="#" class="detail-edit" title="edit"></a></div>


								<div class="row bottom-mrg extra-mrg">
									<div class="col-md-12 col-sm-12">
										<div class="advance-detail detail-desc-caption">
											<h3><?php echo $select_freelancer_fetch['F_FirstName']." ".$select_freelancer_fetch['F_LastName']?></h3><span class="designation"><?php echo $select_freelancer_fetch['ProfessionalTitle']?></span>
											<ul>
												
												<li><strong class="j-applied">
												<!-- <?php
													$select_job_applied="select count(*) as CountJob from tbljobprogress where FreelancerID='".$_REQUEST['FLID']."' AND IsComplete=1";
													$select_job_applied_Exe=mysqli_query($con,$select_job_applied) or die(mysqli_error($con));
									$select_job_applied_fetch=mysqli_fetch_array($select_job_applied_Exe);
									echo $select_job_applied_fetch['CountJob'];
												?> -->
												<?php
														$Select_invitation="Select count(*) as Countinvitation from tbljobrequest where FreelancerID=".$_REQUEST['FLID'];
									$Select_invitation_Exe=mysqli_query($con,$Select_invitation) or die(mysqli_error($con));
									$Select_invitation_fetch=mysqli_fetch_array($Select_invitation_Exe);
									echo $Select_invitation_fetch['Countinvitation'];
													?>
												</strong>Job Applied</li>
												<li><strong class="j-shared">
													
													<?php
														$Select_invitation="Select count(*) as Countinvitation from tbljobrequest where FreelancerID=".$_REQUEST['FLID'];
									$Select_invitation_Exe=mysqli_query($con,$Select_invitation) or die(mysqli_error($con));
									$Select_invitation_fetch=mysqli_fetch_array($Select_invitation_Exe);
									echo $Select_invitation_fetch['Countinvitation'];
													?>
												</strong>Invitation</li>
											</ul>
										</div>
									</div>
								</div>

								<div class="row no-padd">
									<div class="detail pannel-footer">
										<div class="col-md-5 col-sm-5">
											<ul class="detail-footer-social">
												<li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
												<li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
												<li><a href="https://in.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="https://www.instagram.com/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a></li>
											</ul>
										</div>

										<div class="col-md-7 col-sm-7">
											<div class="detail-pannel-footer-btn pull-right">
												<!-- <a href="?FLID1=<?php echo $select_freelancer_fetch['FreelancerID']?>" class="footer-btn grn-btn" title="">Hire Now1</a> -->

												<!-- <a href="#" class="footer-btn blu-btn" title="">Reject</a> -->

												<!-- <a href="index.php"><button name="btnReject11" class="footer-btn grn-btn" title="">Reject</button></a> -->
												<?php
												if(isset($_SESSION["ClientID"]))
												{
													?>

													<button class="btn-success" name="btnHireNow" style="height: 50px;width: 110px;">Hire Now</button>
													<a href="index.php" class="footer-btn blu-btn" title="">Reject</a>
													<?php
												}
												?>


											</div>
										</div> 
									</div>

								</div>
							</div>

						</div>
					</section>
				<!-- </form> -->
				<section class="full-detail-description full-detail gray-bg">
					<div class="container">
						<div class="col-md-12 col-sm-12">
							<div class="full-card">
								<div class="deatil-tab-employ tool-tab">
									<ul class="nav simple nav-tabs" id="simple-design-tab">
										<li class="active"><a href="#about">About</a></li>
										<li><a href="#workhistory">Work History</a></li>
										<li><a href="#skills">Skills</a></li>
										<?php 
											if(isset($_SESSION['FreelancerID']))
											{

												$select_notification="select count(IsActive) as countNoti, FreelancerID from tbljobrequest where IsActive=0 AND UserType='F_R' AND FreelancerID='".$_SESSION['FreelancerID']."'";
										$select_notification_Exe=mysqli_query($con,$select_notification)or die(mysqli_error($con));
										$select_notification_fetch=mysqli_fetch_array($select_notification_Exe);
										?>
										
										<li><a href="#messages">Messages <span class="info-bar"><?php echo $select_notification_fetch['countNoti']?></span></a></li>
										<li><a href="#settings">Edit Profile</a></li>
										<?php
											}
										?>
										
									</ul>

									<!-- Start All Sec -->
									<div class="tab-content">
										<div id="about" class="tab-pane fade in active">
											<h3>About</h3>
											<p><?php echo $select_freelancer_fetch['About']?></p>

										</div>
										<!-- End About Sec -->

										<!-- Start Address Sec -->
										<div id="workhistory" class="tab-pane fade">
											<h3>Work History</h3>
											<p><?php echo $select_freelancer_fetch['EmploymentHistory']?></p>
										</div>
										<!-- End Address Sec -->

										<!-- Start Job List -->
										<div id="skills" class="tab-pane fade">
											<h3>Skills</h3>
											<div class="row">
											</div>

											<div class="row">
												<?php
												$select_Skill="select * from tblskill where SkillID='".$select_freelancer_fetch['SkillID']."'";
												$select_Skill_Exe=mysqli_query($con,$select_Skill) or die(mysqli_error($con));
												$select_Skill_Fetch=mysqli_fetch_array($select_Skill_Exe);
												$Skill=$select_Skill_Fetch['SkillName'];
												$D=explode(',',$Skill);
												//print_r($D);
												//$Display=explode(",",$Skill);
												foreach($D as $value){
												?>
													<li style="margin-left: 70px;"><?php print_r($value);?></li>
											<?php
												}
												?>
												
											</div>
										</div>
										<!-- End Job List -->



										<!-- Start Message -->
										<div id="messages" class="tab-pane fade">
										<div class="inbox-body">
											<?php
											
												$selClientDEtails="SELECT tbljobrequest.FreelancerID, tbljobrequest.ClientID,tbljobrequest.UserType,tblclient.C_FirstName,tblclient.C_LastName
													FROM tbljobrequest 
													INNER JOIN tblclient ON tblclient.ClientID=tbljobrequest.ClientID
													WHERE tbljobrequest.IsActive=0 AND tbljobrequest.UserType='F_R' AND tbljobrequest.FreelancerID=".$_SESSION['FreelancerID'];
													$select_ClientDetails_Exe=mysqli_query($con,$selClientDEtails) or die(mysqli_error($con));
													while($select_ClientDetails_Fetch=mysqli_fetch_array($select_ClientDetails_Exe))
												{

													?>

													<div class="mail-card">
														<header class="card-header cursor-pointer" >
															<div class="card-title flexbox">
																<img class="img-responsive img-circle avatar" src="assets\FreelancerProfile\<?php echo $select_ClientDetails_Fetch['ProfilePicture'];?>" alt="...">
																<div>
																	<h6><?php echo $select_ClientDetails_Fetch['C_FirstName']." ".$select_ClientDetails_Fetch['C_LastName'];?></h6>
																	
																	
																	<small><?php //echo $select_job_Fetch['Cli']?></small>
																	<!-- <form> -->
																		<!-- Select Company Name -->
																		<?php
																			$select_Name="select * from tbljobs where ClientID='".$select_ClientDetails_Fetch['ClientID']."'";
																			$select_Name_Exe=mysqli_query($con,$select_Name);
																			$select_Name_Fetch=mysqli_fetch_array($select_Name_Exe);
																		?>

																		<!--  End Select Company Name -->
																	<a href="companydetail.php?ClientID=<?php echo $select_ClientDetails_Fetch['ClientID']?>&CName1=<?php echo $select_Name_Fetch['companyName']?>" class="btn btn-success"  style="margin-left: 700px;">Company Details</a>&nbsp;&nbsp;&nbsp;
																	<a href="?FLID=<?php echo $select_ClientDetails_Fetch['FreelancerID']?>&CID=<?php echo $select_ClientDetails_Fetch['ClientID']?>" class="btn btn-success" name="btnAccept">Accept</a>&nbsp;&nbsp;&nbsp;
																<a href="?FLID=<?php echo $select_ClientDetails_Fetch['FreelancerID'];?>&RejectID=<?php echo $select_ClientDetails_Fetch['ClientID']?>" class="btn btn-danger" style="float: right;">Reject</a>
																	<!-- </form> -->
																</div>
															</div>
														</header>
														
													</div>
													<?php
												}
											
											?>
											
											
											
										</div>
									</div>
								<!-- End Message -->
								
								<!-- Start Settings -->
								<?php
									$Edit_details="select * from tblfreelancer where FreelancerID='".$_SESSION['FreelancerID']."'";
									$Edit_details_Exe=mysqli_query($con,$Edit_details);
									$Edit_details_Fetch=mysqli_fetch_array($Edit_details_Exe);
								?>
								
									<div id="settings" class="tab-pane fade">
										<div class="row no-mrg">
											<h3>Edit Profile</h3>
											<!-- <form method="post"> -->
											<div class="edit-pro">
												<div class="col-md-4 col-sm-6">
													<label>First Name</label>
													<input type="text" class="form-control" name="txtFName" value="<?php if(isset($Edit_details_Fetch)) echo $Edit_details_Fetch['F_FirstName']; ?>">
												</div>
											<!-- <div class="col-md-4 col-sm-6">
												<label>Middle Name</label>
												<input type="text" class="form-control" placeholder="Else">
											</div> -->
											<div class="col-md-4 col-sm-6">
												<label>Last Name</label>
												<input type="text" class="form-control" name="txtLName" value="<?php if(isset($Edit_details_Fetch)) echo $Edit_details_Fetch['F_LastName']; ?>">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Email</label>
												<input type="email" class="form-control" name="txtEmail" value="<?php if(isset($Edit_details_Fetch)) echo $Edit_details_Fetch['Email']; ?>">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Phone</label>
												<input type="text" class="form-control" name="txtPhone" value="<?php if(isset($Edit_details_Fetch)) echo $Edit_details_Fetch['ContactNo']; ?>">
											</div>
											
											<div class="col-md-4 col-sm-6">
												<label>About you</label>
												<input type="text" style="height: 100px;" class="form-control" name="txtAbout" value="<?php if(isset($Edit_details_Fetch)) echo $Edit_details_Fetch['About']; ?>">
										
												</div>
												
											</div>
										<!-- </form> -->
											<div class="col-md-12 col-sm-12">
														
														
															<div class="dz-default dz-message">
																<center><!-- <a href="?FLID=<?php echo $Edit_details_Fetch['FreelancerID']?>&EditID=<?php echo $Edit_details_Fetch['FreelancerID']?>" class="btn grn-btn" style="background-color: green; color: white" name="btnEdit">Edit</a> -->
																	<input type="Submit" name="btnEdit" class="btn btn-success" value="Edit Profile">
																</center>
															</div>
														
													</div> 
										</div>
									
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
		</form>
		</body>
		</html>