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
	<body class="simple-bg-screen" style="background-image:url(assets/img/banner-10.jpg);">
		<div class="Loader"></div>
		<div class="wrapper">  
			
			<!-- Title Header Start -->
			<section class="signup-screen-sec">
				<div class="container">
					<div class="signup-screen">
						<a href="index.html"><img src="assets\img\logo.png" class="img-responsive" alt=""></a>
						<form>
							<input type="text" class="form-control" placeholder="First Name" id="txtFname">
							<input type="text" class="form-control" placeholder="Last Name" id="txtLname">
							<input type="email" class="form-control" placeholder="Your Email" id="emlEmail">
							<input type="text" class="form-control" placeholder="Contact No" id="txtContact" maxlength="10">
							<input type="text" class="form-control" placeholder="Username" 	id="txtUsername">
							<input type="password" class="form-control" placeholder="Password" id="pwdPassword">
							<button class="btn btn-login" type="submit">Sign Up</button>
							<span>Have You Account? <a href="login.html"> Login</a></span>	
						</form>
					</div>
				</div>
			</section>
			<button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()"><i class="spin fa fa-cog" aria-hidden="true"></i></button>
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