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
	if(isset($_REQUEST['btnSubmit']))
	{
	$date=date("Y-m-d-h:i:s");
		$insert_contactus="insert into tblinquiry values(null,'".$_REQUEST['txtName']."','".$_REQUEST['txtSubject']."','".$_REQUEST['txtEmail']."','".$date."',null,null,0,null)";
		//echo $insert_contactus;
		if(mysqli_query($con,$insert_contactus))
		{
	?>
			<script type="text/javascript">alert('Thanking you contacting us');</script>
	<?php
		}
	}
	?>
	<body>
		<div class="Loader"></div>
		<div class="wrapper">  
			
			<!-- Start Navigation -->
			<?php
				include_once("navbar1.php");
			?>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			
			<!-- Title Header Start -->
			<section class="inner-header-title" style="background-image:url(assets/img/banner-10.jpg);">
				<div class="container">
					<h1>Contact Page</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
			
			<!-- Contact Page Section Start -->
			<section class="contact-page">
				<div class="container">
				<h2>Drop A Mail</h2>
				
					<div class="col-md-4 col-sm-4">
						<div class="contact-box">
							<i class="fa fa-map-marker"></i>
							<p>#Street 2122, Near New Market<br>London Uk (122546)</p>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-4">
						<div class="contact-box">
							<i class="fa fa-envelope"></i>
							<p>careerdesk12@gmail.com<br>support@careerdesk.com</p>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-4">
						<div class="contact-box">
							<i class="fa fa-phone"></i>
							<p>UK: 01 123 456 7895<br>Ind: +91 123 546 8758</p>
						</div>
					</div>
					
				</div>
			</section>
			<!-- contact section End -->
			
			<!-- contact form -->
			<form method="post">
			<section class="contact-form">
				<div class="container">
					<h2>Drop A Mail</h2>
					
					<div class="col-md-6 col-sm-6">
						<input type="text" class="form-control" placeholder="Your Name" name="txtName">
					</div>
					
					<div class="col-md-6 col-sm-6">
						<input type="email" class="form-control" placeholder="Your Email" name="txtEmail">
					</div>
				
					
					<div class="col-md-12 col-sm-12">
						<textarea class="form-control" placeholder="Message" name="txtSubject"></textarea>
					</div>
					
					<div class="col-md-12 col-sm-12">
						<button type="submit" class="btn btn-primary" name="btnSubmit">Submit</button>
					</div>
					
				</div>
			</section>
			</form>
			<!-- Contact form End -->
			
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