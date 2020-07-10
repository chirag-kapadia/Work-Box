
<!doctype html>
<html lang="en">
<head>
	<?php
		include_once("loadfiles.php");
		include_once("Connection.php");

	?>
</head>

<body>
	<div class="Loader"></div>
	    <div class="wrapper">
			<?php
				include_once("navbar.php");
			?>

		<div class="clearfix"></div>

			<?php
				include_once("banner.php");
			?>

		<div class="clearfix"></div>

			<?php
				include_once("section1.php");//New and Random Jobs.
			?>


		<div class="clearfix"></div>

			<?php
				include_once("section3.php");//How It Works
			?>

		<div class="clearfix"></div>

			<?php
				include_once("section4.php");//Testimonial.(Our Success Stories)
			?>
		<?php

			 if(!isset($_SESSION['FreelancerID']))
			 {


		?>
		<div class="clearfix"></div>

			<?php
				include_once("section5.php");//Pricing.(Our Freelancers)
			?>
		<?php
			}
		?>

		<div class="clearfix"></div>

			<?php
				include_once("footer.php");//Footer Section.
			?>

		<div class="clearfix"></div>

			

		
		
		
		<?php 
			include_once("javascript.php");
		?>

	</div>
</body>
</html>