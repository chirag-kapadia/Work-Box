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
	<body>
		<div class="Loader"></div>
		<div class="wrapper">  
			
			<!-- Start Navigation -->
			<?php
				include_once("navbar.php");
			?>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			
			<!-- Title Header Start -->
			<section class="inner-header-title gray-bg">
				<div class="container">
					<h2 class="cl-default">Fill Details To Redeem Your Payment</h2>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
			
			<!-- Accordion Design Start -->
			
			<section class="accordion" style="margin-left: 450px">
				<div class="container">
					<div class="row">
						
						
						
						<!-- Payment Detail -->
						
						<div class="col-md-6 col-sm-6">
							<div class="sidebar-wrapper">
							
							<div class="sidebar-box-header bb-1">
								<center>	<h4>Account Details</h4></center>
							</div>
							
							<form class="billing-form">
								<div class="row">
									<div class="col-xs-12">
										<label>Name As on Bank Account</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="row">
									<div class="col-xs-8">
										<label>Name Of Bank</label>
										<input type="text" class="form-control" placeholder="">
									</div>
									<div class="col-xs-4">
										<img src="assets\img\debit.png" class="img-responsive payment-img" alt="">
									</div>

								</div>
								<div class="row">
									<div class="col-xs-8">
											<label>Account Number</label>
											<input type="text" class="form-control">
									</div>
								</div>
								<div class="row">
									<div class="col-xs-8">
											<label>Branch Code</label>
											<input type="text" class="form-control" placeholder="IFSC Code">
									</div>
								</div>
								
							</form>
							
							</div>
						</div>
						
					</div>
					
					<div class="row" style="margin-left: 185px">
						<div >
							<a href="#" class="btn btn-success">Save</a>
							<a href="postredeem.php" class="btn btn-success">Redeem</a>
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
			
			
			
			<!-- Scripts
			================================================== -->
			<?php

				include_once("javascript.php");

			?>
		</div>
	</body>
</html>