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
	if(isset($_REQUEST['btnSubmitResume']))
	{
		if(!empty($_FILES['txtProfile']['name']))
		{	
			if(isset($_REQUEST['txtProfile']))
			{
				$updateimg=$_REQUEST['txtProfile'];
				unlink("assets/FreelancerProfile/$updateimg");
			}
			$img3=date("HMmd").$_FILES['txtProfile']['name'];
			//echo "----------------".$img3;
			move_uploaded_file($_FILES['txtProfile']['tmp_name'],"assets/FreelancerProfile/".$img3);
		}



		if(isset($_REQUEST['MultiSkill']))
		{
			$a=$_REQUEST['MultiSkill'];
			$multiskill=implode(',', $a);
			$Update_freelancer="update tblfreelancer set SkillID='".$multiskill."' where FreelancerID=".$_SESSION['FreelancerID'];
			//echo $Update_freelancer;	
			
			$Update_freelancer_Exe=mysqli_query($con,$Update_freelancer) or die(mysqli_error($con));
		}

		$Update_freelancer_details="update tblfreelancer set ContactNo='".$_REQUEST['txtPhoneNo']."',CategoryID='".$_REQUEST['CategoryID']."',Qualification='".$_REQUEST['txtQualification']."',ExperienceLevel='".$_REQUEST['optExpLevel']."',ExperienceYears='".$_REQUEST['txtExperienceYears']."',ProfilePicture='".$img3."',ProfessionalTitle='".$_REQUEST['txtProfessionalTitle']."',About='".$_REQUEST['txtAbout']."',EmploymentHistory='".$_REQUEST['txtCompaniesWorked']."',HourlyRate='".$_REQUEST['txtRateperHour']."',IsActive=1 where FreelancerID=".$_SESSION['FreelancerID'];
		//echo $Update_freelancer_details;
		$Update_freelancer_details_Exe=mysqli_query($con,$Update_freelancer_details) or die(mysqli_error($con));
		header("location:browsejobs.php");
		
	}
	?>

	<body>
		<div class="Loader"></div>
		<div class="wrapper">  
			
			<!-- Start Navigation -->
			<?php
			include_once("navbar.php");
			?>
			
			<div class="clearfix"></div>
			
			<!-- Header Title Start -->
			<section class="inner-header-title blank">
				<div class="container">
					<h1>Freelancer Resume</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Header Title End -->
			<form class="add-feild" method="post" enctype="multipart/form-data">
				<!-- General Detail Start -->
				<div class="section detail-desc">
					<div class="container white-shadow">

						<div class="row">
							<div class="detail-pic js">
								<div class="box">
									<input type="file" name="txtProfile" id="upload-pic1" class="inputfile">
									<label for="upload-pic1"><i class="fa fa-upload" aria-hidden="true"></i><span></span></label>
								</div>
							</div>
						</div>
						<?php
							$select_Name="select * from tblfreelancer where FreelancerID='".$_SESSION['FreelancerID']."'";
							$select_Name_Exe=mysqli_query($con,$select_Name);
							$select_Name_fetch=mysqli_fetch_array($select_Name_Exe);
						?>
						<div class="row bottom-mrg">

							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<input type="text" class="form-control" value="<?php if(isset($select_Name_fetch)) echo $select_Name_fetch['F_FirstName']; ?>" disabled="" placeholder="First Name" name="txtFName">
									
								</div>
							</div>

							
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<input type="text" class="form-control" value="<?php if(isset($select_Name_fetch)) echo $select_Name_fetch['F_LastName'];?>" disabled="" placeholder="Last Name" name="txtLName">
								</div>
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Professional Title" name="txtProfessionalTitle">
								</div>
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<select class="form-control input-lg" name="CategoryID">
										<option>Select Category</option>>
										<?php
										$select_Category="select * from tbljobcategories";
										$select_Category_Exe=mysqli_query($con,$select_Category) or die(mysqli_error($con));
										while($fetch_Category=mysqli_fetch_array($select_Category_Exe))
										{
											?>
											<option value="<?php echo $fetch_Category['CategoryID']?>"><?php echo $fetch_Category['CategoryName']?></option>
											<?php
										}
										?>

									</select>
								</div>
							</div>

							<div class="col-md-12 col-sm-12">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Rate / Hour ( in rupees )" name="txtRateperHour">
								</div>
							</div>
							
							
							

						</div>



					</div>
				</div>

				<!-- General Detail End -->

				<!-- full detail SetionStart-->
				<section class="full-detail">
					<div class="container">
						<div class="row bottom-mrg extra-mrg">

							<h2 class="detail-title">General Information</h2>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
									<input type="text" class="form-control" value="<?php if(isset($select_Name_fetch)) echo $select_Name_fetch['Email'];?>" disabled="" placeholder="Email Address" name="txtEmail">
								</div>	
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone"></i></span>
									<input type="text" class="form-control" placeholder="Phone Number" name="txtPhoneNo">
								</div>	
							</div>	

						</div>





						<div class="row bottom-mrg extra-mrg">

							<h2 class="detail-title">Resume Content</h2>
							<div class="col-md-12 col-sm-12">
								<textarea class="form-control" placeholder="Write About yourself" name="txtAbout"></textarea>
							</div>	
							

						</div>
						<div class="row bottom-mrg extra-mrg">

							<h2 class="detail-title">Add Education</h2>
							<div class="extra-field-box">
								<div class="multi-box">	
									<div class="dublicat-box">
										
										<div class="col-md-12 col-sm-12">
											<input type="text" class="form-control" placeholder="Qualification, e.g. Master Of Arts" name="txtQualification">
										</div>

										
										
									</div>
								</div>									
								
							</div>

						</div>

						<div class="row bottom-mrg extra-mrg">

							<h2 class="detail-title">Add Experience</h2>
							<div class="extra-field-box">
								<div class="multi-box">	
									<div class="dublicat-box">
										
										<div class="col-md-12 col-sm-12">
											<input type="text" class="form-control" placeholder="Companies worked for... (if any)" name="txtCompaniesWorked">
										</div>

										<div class="col-md-12 col-sm-12">
											<div class="input-group">
												<select class="form-control input-lg" name="optExpLevel">
													<option>Select Experience Level</option>
													<option value="Begginner">Begginner</option>
													<option value="Intermidiate">Intermidiate</option>
													<option value="Expert">Expert</option>

												</select>
											</div>


										</div>

										<div class="col-md-12 col-sm-12">
											<input type="text" class="form-control" placeholder=" Experience Years" name="txtExperienceYears">
										</div>

										
										
									</div>
								</div>									
								
							</div>

						</div>


						<div class="row">

							<h2 class="detail-title">Add Skills</h2>
							
							<!-- Chirag -->

							<div class="col-xs-12" style="margin-left: 100px;">
								<?php 
								$select_Skill1="select * from tblSkill";
								$select_Skill1_Exe=mysqli_query($con,$select_Skill1) or die(mysqli_error($con));
								while($select_Skill1_fetch=mysqli_fetch_array($select_Skill1_Exe))
								{

									?>
									<div class="col-md-3">
										<input type="checkbox" 
										name="MultiSkill[]" 
										id="<?php echo $select_Skill1_fetch['SkillID'];?>" 
										value="<?php echo $select_Skill1_fetch['SkillID'];?>" 
										style="height: 20px;width: 20px;">&nbsp;<?php echo $select_Skill1_fetch['SkillName'];?>

									</div>
									<?php
								}
								?>

							</div>  

							<!-- End Chirag -->



							<br/>									

							

						</div>
						<div class="row bottom-mrg extra-mrg">

							<div class="col-md-12">
								<button class="btn btn-success btn-primary small-btn" name="btnSubmitResume">Submit your Resume</button>
							</div>
							
						</div>					
					</div>
				</section>
				<!-- full detail SetionStart-->			
			</form>
			
			<!-- Footer Section Start -->
			<?php
			include_once("footer.php");
			?>
			<div class="clearfix"></div>
			<!-- Footer Section End -->
			
			<!-- Sign Up Window Code -->

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