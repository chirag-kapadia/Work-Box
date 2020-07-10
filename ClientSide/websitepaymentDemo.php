
<!doctype html>
<html lang="en">
<head>
	<?php
		include_once("loadfiles.php");
		include_once("Connection.php");
/**/

  $merchant_key  = "gtKFFx";//"gtKFFx";
    $salt          = "eCwWELxi";
    $payu_base_url = "https://test.payu.in"; // For Test environment
    $action        = '';
    $currentDir    = 'http://localhost/ClientSide/';
    $posted = array();
    if(!empty($_POST)) {
      foreach($_POST as $key => $value) {    
        $posted[$key] = $value; 
      }
    }
    //print_r($posted["productinfo"]); 
    //$posted["productinfo"] = array()
    $formError = 0;
    if(empty($posted['txnid'])) {
      $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
    } else {
      $txnid = $posted['txnid'];
    }

    $hash         = '';
    $hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";

    if(empty($posted['hash']) && sizeof($posted) > 0) {
      if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
      ){
        $formError = 1;

      } else {
        $hashVarsSeq = explode('|', $hashSequence);
        $hash_string = '';  
        foreach($hashVarsSeq as $hash_var) {
          $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
          $hash_string .= '|';
        }
        $hash_string .= $salt;
        $hash = strtolower(hash('sha512', $hash_string));
        $action = $payu_base_url . '/_payment';
      }
    } elseif(!empty($posted['hash'])) {
      $hash = $posted['hash'];
      $action = $payu_base_url . '/_payment';
    }
/**/
	?>

	  <script>
        var hash = '<?php echo $hash ?>';
        function submitPayuForm() {
          if(hash == '') {
            return;
          }
          var payuForm = document.forms.payuForm;
          payuForm.submit();
        }
      </script>
	</head>
	<?php
									
		$Billing_info="select * from tblclient where ClientID='".$_REQUEST['CID13']."'";
		$Billing_info_Exe=mysqli_query($con,$Billing_info);
		$Billing_info_fetch=mysqli_fetch_array($Billing_info_Exe);
	?>
	<body onload="submitPayuForm()">
		
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
			<section class="accordion">
				<!--  <h2>PayU Form</h2>
    <br/> -->
    <!-- <?php if($formError) { ?>
      <span style="color:red">Please fill all mandatory fields.</span>
      <br/>
      <br/>
    <?php } ?> -->
    <form action="<?php echo $action; ?>" method="post" name="payuForm">
      <input type="hidden" name="key" value="<?php echo $merchant_key ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
				<div class="container">
					<div class="row">
						
						<!-- Billing Address -->
						<div class="col-md-6 col-sm-6"  style="margin-left: 300px;">
							<div class="sidebar-wrapper">
							
							<div class="sidebar-box-header bb-1">
								<h4>Billing Information</h4>
							</div>
							
							
								<div class="row">
									<div class="col-xs-12">
										<label>Full Name</label>
										<input type="text" class="form-control" value="<?php echo $Billing_info_fetch['C_FirstName']." ".$Billing_info_fetch['C_LastName']?>" disabled="">
									</div>
								</div>
								<div>
									<div class="row">
										<div class="col-xs-12">
											<label>Email ID</label>
											<input type="text" class="form-control" value="<?php echo $Billing_info_fetch['Email']?>" disabled="">
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
										<input type="text" class="form-control" value="<?php echo $Billing_job_fetch['jobTitle']?>" disabled="">
									</div>
								</div>

								<div class="row">
									<div class="col-xs-12">
										<label>Job Budget</label>
										<input type="text" class="form-control" value="<?php echo $Billing_job_fetch['MaxWage'];?>" disabled="">
									</div>
								</div>
								<table>
                       <!--  <tr>
                          <td><b>Mandatory Parameters</b></td>
                        </tr> -->
                       <!--  <tr>
                          <td>Amount <span class="mand">*</span>: </td>
                          <td><input name="amount" type="hidden" value="<?php echo $FetchMP['Price'];?>" readonly="" /></td>
                        </tr> -->
                          <!-- <td>First Name <span class="mand">*</span>: </td>
                          <td> --><input type="hidden" name="firstname" id="firstname" value="hello" /><!-- </td>
                        </tr>
                        <tr>
                          <td>Email <span class="mand">*</span>: </td>
                          <td> --><input type="hidden" name="email" id="email" value="NestSeekers@gmail.com" /><!-- </td>
                          <td>Phone <span class="mand">*</span>: </td>
                          <td> --><input type="hidden" name="phone" value="1234567891" /><!-- </td>
                        </tr>
                        <tr>
                          <td>Product Info <span class="mand">*</span>: </td>
                          <td colspan="3"> --><textarea name="productinfo" hidden="hidden">WorkBox</textarea><!-- </td>
                        </tr>
                        <tr>
                          <td>Success URL <span class="mand">*</span>: </td>
                          <td colspan="3"> --><input type="hidden" name="surl" value="<?php echo (empty($posted['surl'])) ? $currentDir.'success.php' : $posted['surl'] ?>" size="64" /><!-- </td>
                        </tr>
                        <tr>
                          <td>Failure URL <span class="mand">*</span>: </td>
                          <td colspan="3"> --><input type="hidden" name="furl" value="<?php echo (empty($posted['furl'])) ? $currentDir.'failure.php' : $posted['furl'] ?>" size="64" /><!-- </td>
                        </tr>

                        <tr>
                          <td colspan="3"><input type="hidden" name="service_provider" value="" size="64" /></td>
                        </tr>

                        <tr>
                          <td><b>Optional Parameters</b></td>
                        </tr>
                        <tr>
                          <td>Last Name: </td>
                          <td><input type="text" name="lastname" id="lastname" value="<?php echo (empty($posted['lastname'])) ? '' : $posted['lastname']; ?>" /></td>
                          <td>Cancel URI: </td>
                          <td><input type="text" name="curl" value="" /></td>
                        </tr>
                        <tr>
                          <td>Address1: </td>
                          <td><input type="text" name="address1" value="<?php echo (empty($posted['address1'])) ? '' : $posted['address1']; ?>" /></td>
                          <td>Address2: </td>
                          <td><input type="text" name="address2" value="<?php echo (empty($posted['address2'])) ? '' : $posted['address2']; ?>" /></td>
                        </tr>
                        <tr>
                          <td>City: </td>
                          <td><input type="text" name="city" value="<?php echo (empty($posted['city'])) ? '' : $posted['city']; ?>" /></td>
                          <td>State: </td>
                          <td><input type="text" name="state" value="<?php echo (empty($posted['state'])) ? '' : $posted['state']; ?>" /></td>
                        </tr>
                        <tr>
                          <td>Country: </td>
                          <td><input type="text" name="country" value="<?php echo (empty($posted['country'])) ? '' : $posted['country']; ?>" /></td>
                          <td>Zipcode: </td>
                          <td><input type="text" name="zipcode" value="<?php echo (empty($posted['zipcode'])) ? '' : $posted['zipcode']; ?>" /></td>
                        </tr>
                        <tr>
                          <td>UDF1: </td>
                          <td><input type="text" name="udf1" value="<?php echo (empty($posted['udf1'])) ? '' : $posted['udf1']; ?>" /></td>
                          <td>UDF2: </td>
                          <td><input type="text" name="udf2" value="<?php echo (empty($posted['udf2'])) ? '' : $posted['udf2']; ?>" /></td>
                        </tr>
                        <tr>
                          <td>UDF3: </td>
                          <td><input type="text" name="udf3" value="<?php echo (empty($posted['udf3'])) ? '' : $posted['udf3']; ?>" /></td>
                          <td>UDF4: </td>
                          <td><input type="text" name="udf4" value="<?php echo (empty($posted['udf4'])) ? '' : $posted['udf4']; ?>" /></td>
                        </tr>
                        <tr>
                          <td>UDF5: </td>
                          <td><input type="text" name="udf5" value="<?php echo (empty($posted['udf5'])) ? '' : $posted['udf5']; ?>" /></td>
                          <td>PG: </td>
                          <td><input type="text" name="pg" value="<?php echo (empty($posted['pg'])) ? '' : $posted['pg']; ?>" /></td>
                        </tr> -->
                        <!-- <tr>
                          <?php if(!$hash) { ?>
                            <td colspan="4"><input type="submit" value="Submit" /></td>
                          <?php } ?>
                        </tr> -->
                    </table>
								
							
							</div>
						</div>
						
					
						
					</div>
					
					<div class="row">
						<div class="col-md-12 text-center">
							 <?php if(!$hash) { ?>
                                        <button type="submit" class="btn btn-md button-theme" value="" onclick="submitPayuForm();">Confirm Payment</button>
                                        <?php } ?>
							<a href="#" class="btn btn-success">Proceed...</a>
							<a href="" class="btn btn-default">Cancel</a>
						</div>
					</div>
				</div>
				</form>
							
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