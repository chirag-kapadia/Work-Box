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
	if(isset($_REQUEST['btnFreelancer']))
	{
		$date=date("Ymdhis");
		$insert_freelancer="insert into tblfreelancer values(null,'".$_REQUEST['txtFName']."','".$_REQUEST['txtLName']."','".$_REQUEST['txtEmail']."',null,'".$_REQUEST['txtCPass']."',null,null,null,null,null,null,null,null,null,'freelancer',null,null,0,'".$date."')";
		//echo $insert_freelancer;
		$insert_Exe_freelancer=mysqli_query($con,$insert_freelancer) or die(mysqli_error($con));
		header("location:CheckOtp.php");
	}
	if(isset($_REQUEST['btnClient']))
	{
		$date=date("Ymdhis");
		$insert_client="insert into tblclient values(null,
		'".$_REQUEST['txtFName']."',
		'".$_REQUEST['txtLName']."',
		'".$_REQUEST['txtEmail']."',
		null,
		'".$_REQUEST['txtCPass']."',
		null,
		null,
		null,
		null,
		null,
		null,
		null,
		null,
		null,
		null,
		null,
		null,
		null,
		'client',
		null,
		null,
		0,
		'".$date."')";
		//echo $insert_freelancer;
		$insert_Exe_client=mysqli_query($con,$insert_client) or die(mysqli_error($con));
		header("location:CheckOtp.php");
	}
	if(isset($_REQUEST['btnLogin']))
	{
		$select_client="select * from tblclient where Email='".$_REQUEST['txtEmail']."'and Password='".$_REQUEST['txtPass']."'";
		$select_client_Exe=mysqli_query($con,$select_client) or die(mysqli_error($con));
		
		if(mysqli_num_rows($select_client_Exe)>0)
		{
			$FetchID=mysqli_fetch_array($select_client_Exe);
			$_SESSION['ClientID']=$FetchID['ClientID'];
			$_SESSION['UserType']=$FetchID['C_UserType'];

			header("location:index.php");	
		}
		else
		{
			$select_freelancer="select * from tblfreelancer where Email='".$_REQUEST['txtEmail']."'and Password='".$_REQUEST['txtPass']."'";
		$select_freelancer_Exe=mysqli_query($con,$select_freelancer) or die(mysqli_error($con));
		
		if(mysqli_num_rows($select_freelancer_Exe)>0)
		{
			$FetchFID=mysqli_fetch_array($select_freelancer_Exe);
			$_SESSION['FreelancerID']=$FetchFID['FreelancerID'];
			$_SESSION['UserType']=$FetchFID['F_UserType'];
			header("location:index.php");	
		}
		else
		{
	?>
			<script type="text/javascript">alert('Invalid Email / Password');</script>
		<?php
		}
		}
	}
	else
	{

	}

?>

	<body>
		<div class="Loader"></div>
		<div class="wrapper">  
			
			<!-- Start Navigation -->
			<?php
				include_once("navbar.php");
			?>
			
			<!-- Title Header Start -->
			<section class="inner-header-title gray-bg">
				<div class="container">
					<h2 class="cl-default">Create An Account</h2>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
			
			<!-- Accordion Design Start -->
			<section class="accordion">
				<div class="container">
					<div class="row">
						
						<!-- Billing Address -->
						<div class="col-md-6 col-sm-6">
							<div class="sidebar-wrapper">
							
							<div class="sidebar-box-header bb-1">
								<h4>Create An Account</h4>
							</div>
							
							<form class="billing-form" method="post">
								<div class="row">
									<div class="col-xs-6">
										<label>First Name</label>
										<input type="text" class="form-control" name="txtFName">
									</div>
									<div class="col-xs-6">
										<label>Last Name</label>
										<input type="text" class="form-control" name="txtLName">
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6">
										<label>User Name</label>
										<input type="text" class="form-control" name="txtUName">
									</div>
									<div class="col-xs-6">
										<label>Email</label>
										<input type="email" class="form-control" name="txtEmail">
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6">
										<label>Password</label>
										<input type="password" class="form-control" name="txtPass">
									</div>
									<div class="col-xs-6">
										<label>Confirm Password</label>
										<input type="password" class="form-control" name="txtCPass">
									</div>
								</div>
								
								<div class="row mrg-top-30">
									<div class="col-md-12 text-center">
										<button class="btn btn-success" name="btnFreelancer" style="width: 200px;">SignUp (As Freelancer)</button>
										&nbsp
										<button class="btn btn-success" name="btnClient" style="width: 200px;">SignUp (As Client)</button>
									</div>
								</div>
							</form>
							
							</div>
						</div>
						
						<!-- Payment Detail -->
						<div class="col-md-6 col-sm-6">
							<div class="sidebar-wrapper">
							
							<div class="sidebar-box-header bb-1">
								<h4>LogIn Your Account</h4>
							</div>
							
							<form class="billing-form" method="post">
								<div class="row">
									<div class="col-xs-12">
										<label>Email</label>
										<input type="text" class="form-control" name="txtEmail">
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<label>Password</label>
										<input type="password" class="form-control" name="txtPass">
									</div>
								</div>
								
								<div class="row">
									<div class="col-xs-12 mrg-top-5">
										<span class="custom-checkbox">
											<input type="checkbox" id="1">
											<label for="1"></label>
										</span> Forgat Password? <a href="#" class="cl-success">Click Here</a>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 text-center mrg-top-25">
										<button class="btn btn-success" name="btnLogin">LogIn</button>
										
									</div>
								</div>
								
							</form>
							
							</div>
						</div>
						
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
			
			<!-- Sign Up Window Code -->
			
			
			<!-- Scripts
			================================================== -->
			<?php
				include_once("javascript.php");
			?>
		</div>
	</body>
</html>