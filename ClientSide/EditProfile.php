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
		if(isset($_REQUEST['btnEditSubmit']))
		{
			$Update_Details="update tblclient set C_FirstName='".$_REQUEST['txtFirstName']."',C_LastName='".$_REQUEST['txtLastName']."',ContactNo='".$_REQUEST['txtPhoneNo']."',About='".$_REQUEST['txtAbout']."',CreatedOn=now() where ClientID=".$_SESSION['ClientID'];
			//echo $Update_Details;
			$Update_Details_Exe=mysqli_query($con,$Update_Details);
			header("location:clprofile.php");
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
					<h1>Edit Profile</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Header Title End -->
			<form class="add-feild" method="post" enctype="multipart/form-data">
				<?php
				$select_Profile="select * from tblclient where ClientID=".$_SESSION['ClientID'];
				$select_Profile_Exe=mysqli_query($con,$select_Profile);
				$select_Profile_fetch=mysqli_fetch_array($select_Profile_Exe);
				?>
				<!-- full detail SetionStart-->
				<section class="full-detail">
					<div class="container">
						<div class="row bottom-mrg extra-mrg">

							<h2 class="detail-title">General Information</h2>
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input type="text" class="form-control" value="<?php echo $select_Profile_fetch['C_FirstName']?>" name="txtFirstName">
								</div>	
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input type="text" class="form-control" value="<?php echo $select_Profile_fetch['C_LastName']?>" name="txtLastName">
								</div>	
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
									<input type="text" class="form-control" value="<?php echo $select_Profile_fetch['Email']?>" name="txtEmail" disabled="">
								</div>	
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone"></i></span>
									<input type="text" class="form-control" value="<?php echo $select_Profile_fetch['ContactNo']?>" name="txtPhoneNo">
								</div>	
							</div>	

						</div>





						<div class="row bottom-mrg extra-mrg">

							<h2 class="detail-title">About</h2>
							<div class="col-md-12 col-sm-12">
								<textarea class="form-control" placeholder="Write About yourself" name="txtAbout"><?php echo $select_Profile_fetch['About']?></textarea>
							</div>	
							

						</div>
						


					</div>
					<div class="row bottom-mrg extra-mrg">

						<div class="col-md-12">
							<button class="btn btn-success btn-primary small-btn" name="btnEditSubmit">Edit Profile</button>
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