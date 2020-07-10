<!doctype html>
<html lang="en">
<head>
		<?php
		include_once("loadfiles.php");
		include_once("Connection.php");
		?>
	</head>
	<?php
									
		$Billing_info="select * from tblclient where ClientID='".$_REQUEST['CID13']."'";
		$Billing_info_Exe=mysqli_query($con,$Billing_info);
		$Billing_info_fetch=mysqli_fetch_array($Billing_info_Exe);

		if(isset($_REQUEST['btnProceed']))
		{
			$InvoiceID=rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
			//$Amount=$Billing_job_fetch['MaxWage'];
			$insert_Payment="insert into tbljobHiredpayment values(null,'".$_REQUEST['txtNameOnCard']."','".$_REQUEST['txtCardNo']."','".$_REQUEST['optMonth']."','".$_REQUEST['optYear']."','".$_REQUEST['txtCVV']."','".$_REQUEST['FID']."','".$_REQUEST['CID13']."','".$_REQUEST['JobID']."','".$_REQUEST['txtAmount']."',0,now(),'".$InvoiceID."')";
			//echo $insert_Payment;
			$insert_Payment_Exe=mysqli_query($con,$insert_Payment);
			$FID1=$_REQUEST['FID'];
			$CID1=$_REQUEST['CID13'];
			Header("location:Invoice.php?FID=$FID1&CID=$CID1");
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
			
			<!-- Title Header Start -->
			<section class="inner-header-title gray-bg">
				<div class="container">
					<h2 class="cl-default">Payment To Website</h2>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
			
			<!-- Accordion Design Start -->
			<form method="post">
			<section class="accordion">
				<div class="container">
					<div class="row">
						
						<!-- Billing Address -->
						<div class="col-md-6 col-sm-6">
							<div class="sidebar-wrapper">
							
							<div class="sidebar-box-header bb-1">
								<h4>Billing Information</h4>
							</div>
							
							

								<div class="row">
									<div class="col-xs-12">
										<label>Full Name</label>
										<input type="text" class="form-control" value="<?php echo $Billing_info_fetch['C_FirstName']." ".$Billing_info_fetch['C_LastName']?>" readonly="">
									</div>
								</div>
								<div>
									<div class="row">
										<div class="col-xs-12">
											<label>Email ID</label>
											<input type="text" class="form-control" value="<?php echo $Billing_info_fetch['Email']?>" readonly="">
										</div>
									</div>
								</div>
								<div class="row">
									<?php
										$Billing_job="select * from tbljobs where jobID='".$_REQUEST['JobID']."'";
										$Billing_job_Exe=mysqli_query($con,$Billing_job);
										$Billing_job_fetch=mysqli_fetch_array($Billing_job_Exe);
									?>
									<div class="col-xs-12">
										<label>Job Name</label>
										<input type="text" class="form-control" value="<?php echo $Billing_job_fetch['jobTitle']?>" readonly="">
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<label>Job Budget</label>
										<input type="text" class="form-control" name="txtAmount" value="<?php echo $Billing_job_fetch['MaxWage'];?>" readonly="" >
									</div>
								</div>
							
							
							</div>
						</div>
						
						<!-- Payment Detail -->
						<div class="col-md-6 col-sm-6">
							<div class="sidebar-wrapper">
							
							<div class="sidebar-box-header bb-1">
								<h4>Debit Card Information</h4>
							</div>
							
							
								<div class="row">
									<div class="col-xs-12">
										<label>Name on Card</label>
										<input type="text" class="form-control" name="txtNameOnCard">
									</div>
								</div>
								<div class="row">
									<div class="col-xs-8">
										<label>Card Number</label>
										<input type="text" class="form-control" name="txtCardNo">
									</div>
									<div class="col-xs-4">
										<img src="assets\img\debit.png" class="img-responsive payment-img" alt="">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-8">
										<label>Expiration Date</label>
										<div class="row">
											<div class="col-xs-6">
												<select class="form-control input-lg" name="optMonth">
													<option value="January">January</option>
													<option value="February">February</option>
													<option value="March">March</option>
													<option value="April">April</option>
													<option value="May">May</option>
													<option value="June">June</option>
													<option value="July">July</option>
													<option value="August">August</option>
													<option value="September">September</option>
													<option value="November">November</option>
													<option value="December">December</option>
												</select>
											</div>
											<div class="col-xs-6">
												<select class="form-control input-lg" name="optYear">
													<option value="2020">2020</option>
													<option value="2021">2021</option>
													<option value="2022">2022</option>
													<option value="2023">2023</option>
													<option value="2024">2024</option>
													<option value="2025">2025</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<label>CVC/CVV</label>
										<input type="text" class="form-control" name="txtCVV">
									</div>
								</div>
								
							
							
							</div>
						</div>
						
					</div>
					
					<div class="row">
						<div class="col-md-12 text-center">
							<!-- <a href="Invoice.php?$JobID=<?php echo $_REQUEST['JobID']?>&CID13=<?php echo $_REQUEST['CID13']?>" class="btn btn-success">Proceed...</a> -->
							<input type="submit" class="btn btn-success" value="Proceed..." name="btnProceed" />
							<a href="#" class="btn btn-default">Cancel</a>
						</div>
					</div>
				</div>
			</section>
			</form>
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