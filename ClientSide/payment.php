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
		
		if(isset($_REQUEST['btnPayNow']))
		{
			$select_Amount="select * from tblpackage where PackageID='".$_REQUEST['PackID']."'";
		//echo $select_Amount;
		$select_Amount_Exe= mysqli_query($con,$select_Amount) or die(mysqli_error($con));
		$select_Amount_Fetch=mysqli_fetch_array($select_Amount_Exe);
		$Price=$select_Amount_Fetch['Price'];
		//echo $Price;
		//echo $_REQUEST['JobID'];
			$date=date("Y-m-d-h-i-s");
		
		
		$TransactionID=rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
		//echo $TransactionID;
		$insert_Payment="insert into tblpayment values(null,'".$_REQUEST['txtCardName']."','".$_REQUEST['txtCardNumber']."','".$_REQUEST['optMonth']."','".$_REQUEST['optYear']."','".$_REQUEST['txtCVV']."',null,'".$_SESSION['ClientID']."','".$_REQUEST['JobID']."','".$Price."',1,'".$date."','".$TransactionID."')";
		//echo $insert_Payment;
		$insert_Payment_Exe=mysqli_query($con,$insert_Payment)or die(mysqli_error($con));

		$Select_Package="select * from tblpackage where PackageID='".$_REQUEST['PackID']."'";
		$Select_Package_Exe=mysqli_query($con,$Select_Package) or die(mysqli_error($con));
		$Select_Package_Fetch=mysqli_fetch_array($Select_Package_Exe);
		$PackageDate=$Select_Package_Fetch['Days'];
		$CalDate= date("Y-m-d", strtotime($date ."+".$PackageDate ."Days"));
		$Update_Date="update tbljobs set IsActive=1,PackageDate='".$date."',ExpiryDate='".$CalDate."',PackageID='".$_REQUEST['PackID']."' where JobID='".$_REQUEST['JobID']."' ";
		if(mysqli_query($con,$Update_Date))
		{
	?>
			 <script type="text/javascript">alert('New and Confirm Password Does not Match.');</script>
<?php
		}






		/*$Select_Pack_Date="select * from tbljobs where jobID='".$_REQUEST['JobID']."'";
		$Select_Pack_Date_Exe=mysqli_query($con,$Select_Pack_Date) or die(mysqli_error($con));			
		$Select_Pack_Date_Fetch=mysqli_fetch_array($Select_Pack_Date_Exe);
		$SelectDate=$Select_Pack_Date_Fetch['PackageDate'];
		$PackageDate=$Select_Package_Fetch['Days'];
		$CalDate= date("Y-m-d", strtotime($SelectDate ."+".$PackageDate ."Days"));

		$Update_IsActive="update tbljobs set IsActive=1 and ExpiryDate='".$CalDate."' where jobID='".$_REQUEST['JobID']."'";
		echo $Update_IsActive;*/
		//$Update_IsActive_Exe=mysqli_query($con,$Update_IsActive) or die(mysqli_error($con));

		

	


		$PackID=$_REQUEST['PackID'];
		$JobID=$_REQUEST['JobID'];
		header("location:postselectpackage.php?JobID=$JobID&PackID=$PackID");


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
					<h2 class="cl-default">Make Your Payment</h2>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
			
			<!-- Accordion Design Start -->
			<form class="billing-form" method="post">
			<section class="accordion" style="margin-left: 450px">
				<div class="container">
					<div class="row">
						
						
						
						<!-- Payment Detail -->
						
						<div class="col-md-6 col-sm-6">
							<div class="sidebar-wrapper">
							
							<div class="sidebar-box-header bb-1">
								<center>	<h4>Debit Card Information</h4></center>
							</div>
							
							
								<div class="row">
									<div class="col-xs-12">
										<label>Name On Card</label>
										<input type="text" class="form-control" name="txtCardName">
									</div>
								</div>
								<div class="row">
									<div class="col-xs-8">
										<label>Card Number</label>
										<input type="text" class="form-control" name="txtCardNumber">
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
					
					<div class="row" style="margin-left: 185px">
						<div >
							<!-- <a href="?JobID=<?php echo $_REQUEST['JobID'];?>&PackID=<?php echo $_REQUEST['PackID']?>" class="btn btn-success" name="btnPayNow">Pay Now</a> -->
							<input type="submit" class="btn btn-success" value="Pay Now" name="btnPayNow" />
							<a href="" class="btn btn-default">Cancel</a>
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