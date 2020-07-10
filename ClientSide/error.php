<!doctype html>
<html lang="en">
<head>
	<!-- Basic Page Needs
	================================================== -->
	<?php
		include_once("loadfles.php");
		include_once("Connection.php");
	?>
    
	</head>
	<body>
		<div class="Loader"></div>
		<div class="wrapper"> 
		
			<!-- Start Navigation -->
			<?php
				include_once("navbar1.php");
			?>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			
			<!-- Tab Section Start -->
			<section class="simple-bg-screen big-wrap">
				<div class="container">
					<div class="error-page">
						<h2>4<span>0</span>4</h2>
						<p>Oops...looks like we got lost</p> 
						<a class="btn btn-success small-btn">Let's Go Home</a>
					</div>
				</div>
			</section>
			<!-- Tab section End -->
			
			<!-- Footer Section Start -->
			<?php
				include_once("footer.php");
			?>
			<!-- Footer Section End -->
			
			<!-- Sign Up Window Code -->
			 
			<!-- End Sign Up Window -->
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