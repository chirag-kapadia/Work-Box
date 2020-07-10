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
			<section class="login-screen-sec">
				<div class="container">
					<div class="login-screen">
						<a href="index.html"><img src="assets\img\logo.png" class="img-responsive" alt=""></a>
						<form>
							<input type="text" class="form-control" placeholder="Useraname">
							<input type="password" class="form-control" placeholder="Password">
							<button class="btn btn-login" type="submit">Login</button>
							<span>You Have No Account? <a href="signup.php"> Create An Account</a></span>
							<span><a href="lost-password.html"> Forget Password</a></span>
						</form>
					</div>
				</div>
			</section>
			<button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()"><i class="spin fa fa-cog" aria-hidden="true"></i></button>
			<?
				include_once("sidebar.php");
			?>
			
			<!-- Scripts
			================================================== -->
			<?
				include_once("javascript.php");
			?>
		</div>
	</body>
</html>