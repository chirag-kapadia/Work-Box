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
	if(isset($_REQUEST['btnChangePassword']))
	{
		$select_Password="select Password from tblclient where ClientID='".$_SESSION['ClientID']."'";
		$select_Password_Exe=mysqli_query($con,$select_Password);
		$select_Password_fetch=mysqli_fetch_array($select_Password_Exe);
		if($select_Password_fetch['Password']==$_REQUEST['txtCurrentPass'])
		{
			if($_REQUEST['txtNewPass']==$_REQUEST['txtConfirmPass'])
			{
				$Update_Password="update tblclient set Password='".$_REQUEST['txtConfirmPass']."',CreatedOn=now() where ClientID=".$_SESSION['ClientID'];
			//echo $Update_Password;
				$Update_Password_Exe=mysqli_query($con,$Update_Password) or die(mysqli_error());
				header("location:clprofile.php");		
			}
			else
			{
		?>
				<script>alert("Invalid New and Confirm Password");</script>
		<?php
			}
		}
		else
		{
	?>
			<script>alert("Invalid Current Password");</script>
	<?php
		}

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
					<h1>Change Password</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Header Title End -->
			<form class="add-feild" method="post" enctype="multipart/form-data">

				<section class="full-detail">
					<div class="container">
						<div class="row bottom-mrg extra-mrg">

							<h2 class="detail-title">Account Security</h2>
							<div class="col-md-12 col-sm-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock"></i></span>
									<input type="password" class="form-control" placeholder="Current Password" name="txtCurrentPass">
								</div>	
							</div>
							
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input type="password" class="form-control" placeholder="New Password" name="txtNewPass">
								</div>	
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
									<input type="password" class="form-control" placeholder="Confirm Password" name="txtConfirmPass">
								</div>	
							</div>


						</div>
					</div>
					<div class="row bottom-mrg extra-mrg">

						<div class="col-md-12">
							<button class="btn btn-success btn-primary small-btn" name="btnChangePassword">Change Password</button>
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