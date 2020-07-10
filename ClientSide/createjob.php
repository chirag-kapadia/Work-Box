
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
		if(isset($_REQUEST['btnJobSubmit']))
		{
			 if(!empty($_FILES['upload-pic']['name']))
				{	
					$img2=date("HMmd").$_FILES['upload-pic']['name'];
					move_uploaded_file($_FILES['upload-pic']['tmp_name'],"assets/JobProfile/$img2");
				}
				
			
				$date=date("Ymdhis");
				$insert_job="insert into tbljobs values(null,'".$_REQUEST['CategoryID']."','".$_SESSION["ClientID"]."','".$_REQUEST['txtJobTitle']."','".$_REQUEST['txtDescription']."',
				'".$_REQUEST['txtSkillRequirement']."',
				'".$_REQUEST['txtMinWage']."',
				'".$_REQUEST['txtMaxWage']."',
				'".$img2."',
				null,
				null,
				null,
				'".$_REQUEST['txtCompanyName']."',
				'".$_REQUEST['txtCompanyDescription']."',
				'".$_REQUEST['txtCompanyEmail']."',
				'".$_REQUEST['txtLocation']."',
				'".$_REQUEST['txtCompanyWebsite']."',
				'".$_REQUEST['txtFacebookLink']."',
				'".$_REQUEST['txttwitterLink']."',
				'".$_REQUEST['txtinstagramLink']."',
				'".$_REQUEST['txtLinkedinLink']."',
				'".$_REQUEST['txtJobRequirement']."',
				0,
				'".$date."')";

			//echo "string".$insert_job;
				mysqli_query($con,$insert_job) or die(mysqli_error($con));
				
				$Last_JobID=mysqli_insert_id($con);
				header("location:postjobsubmit.php?JID=$Last_JobID");
					
				
			
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
			
			<!-- Header Title Start -->
			<section class="inner-header-title blank">
				<div class="container">
					<h1>Create Job</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Header Title End -->
			

			<form method="post" enctype="multipart/form-data" class="add-feild">
				<!-- General Detail Start -->
				<div class="detail-desc section">
					<div class="container white-shadow">
					
						<div class="row">
							<div class="detail-pic js">
								<div class="box">
									
									<input type="file" name="upload-pic" id="upload-pic" class="inputfile" >
									<label for="upload-pic"><i class="fa fa-upload" title="Company logo" aria-hidden="true"></i><span></span></label>
								</div>
							</div>
						</div>
						
						<div class="row bottom-mrg">
							
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Job Title" name="txtJobTitle">
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
								
								
								
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Minimux Wage" name="txtMinWage">
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Maximum Wage" name="txtMaxWage">
									</div>
								</div>
								<div class="col-md-12 col-sm-12">
									<textarea class="form-control" placeholder="Job Description" name="txtDescription" required=""></textarea>
								</div>
							
						</div>
						
							
								
								
								
						
					
					</div>
				</div>
			
				<!-- General Detail End -->
			
				<!-- Basic Full Detail Form Start -->
				<section class="full-detail">
					<div class="container">
						<div class="row bottom-mrg extra-mrg">
						
								<h2 class="detail-title">Company Information</h2>
								
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-flag"></i></span>
										<input type="text" class="form-control" placeholder="Company Name" name="txtCompanyName">
									</div>	
								</div>
								
								
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
										<input type="text" class="form-control" placeholder="Company Email" name="txtCompanyEmail">
									</div>	
								</div>
								
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
										<input type="text" class="form-control" placeholder="Local E.g. It Park New" name="txtLocation">
									</div>	
								</div>
								
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-globe"></i></span>
										<input type="text" class="form-control" placeholder="Website" name="txtCompanyWebsite">
									</div>	
								</div>

								<div class="col-md-12 col-sm-12">
									<textarea class="form-control" placeholder="Company Description" style="height: 70px;" name="txtCompanyDescription"></textarea >
								</div>
								
								
								
							
						</div>
						
						<div class="row bottom-mrg extra-mrg">
							
								<h2 class="detail-title">Social Profile</h2>
								
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-facebook"></i></span>
										<input type="text" class="form-control" placeholder="Profile Link" name="txtFacebookLink">
									</div>	
								</div>
								
								
								
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-twitter"></i></span>
										<input type="text" class="form-control" placeholder="Profile Link" name="txttwitterLink">
									</div>	
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-instagram"></i></span>
										<input type="text" class="form-control" placeholder="Profile Link" name="txtinstagramLink">
									</div>	
								</div>
								
								<div class="col-md-6 col-sm-6">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-linkedin"></i></span>
										<input type="text" class="form-control" placeholder="Profile Link" name="txtLinkedinLink">
									</div>	
								</div>
								
							
							
						</div>
						<div class="row bottom-mrg extra-mrg">
							
								<h2 class="detail-title">Skills Required</h2>
								<div class="col-md-12 col-sm-12">
									<textarea class="form-control" placeholder="Skills Required.." style="height: 70px;" name="txtSkillRequirement"></textarea >
								</div>	
								
								
						
						</div>
						
						<div class="row bottom-mrg extra-mrg">
							
								<h2 class="detail-title">Job Requirement</h2>
								<div class="col-md-12 col-sm-12">
									<textarea class="form-control" placeholder="Tell a brief description about the job requirement.." style="height: 150px;" name="txtJobRequirement"></textarea >
								</div>	
								
								<div class="col-md-12 col-sm-12">
									<button class="btn btn-success btn-primary small-btn" name="btnJobSubmit">Submit your job</button>	
								</div>	
						
						</div>
					</div>
				</section>
				<!-- Basic Full Detail Form End -->
			</form>
			<!-- Footer Section Start -->
			<?php
				include_once("footer.php");
			?>
			<div class="clearfix"></div>
			<!-- Footer Section End -->
			
			<!-- Sign Up Window Code -->
			  
			
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