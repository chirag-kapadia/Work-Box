<!DOCTYPE html>
<html lang="en">

<head>
  <!-- meta tags -->
  <?php include_once("meta.php") ?>
  <!-- meta tag end -->

  <?php include_once("Connection.php");?>

  <!-- css File -->
  <?php include_once("css_File.php")?>
  <!-- css File end -->
  
<link rel="shortcut icon" href="images/favicon.png">

</head>
<?php
 
  if(isset($_REQUEST['btnChangePassword']))
  {
     $select_password="select Password from tbladmin where AdminID='".$_REQUEST['CPID']."'";
  $select_Exe=mysqli_query($con,$select_password) or die(mysqli_error());
  $Details=mysqli_fetch_array($select_Exe);
      if($Details['Password']==$_REQUEST['txtCurrPassword'])
      {
          if($_REQUEST['txtNewPassword']==$_REQUEST['txtConfirmPassword'])
          {
            $Update_password="update tbladmin set Password='".$_REQUEST['txtConfirmPassword']."' where AdminID='".$_REQUEST['CPID']."'";
            $Update_Exe=mysqli_query($con,$Update_password) or die(mysqli_error());
            
            header("location:index.php");

          }
          else
          {
            
          ?>

            <script type="text/javascript">alert('New and Confirm Password Does not Match.');</script>
        <?php
          }
    ?>
        
    <?php
      }
      else
      {
    ?>
          <script type="text/javascript">alert('Current Password does not Match.');</script>
    <?php
      }
  }
  if(isset($_REQUEST['btnBack']))
  {
    header("location:adminProfile.php");
  }
  if(isset($_REQUEST['btnHome']))
  {
    header("location:Dashboard.php");
  }

?>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <img src="images\logo.svg" alt="logo">
              </div>
              <h4>Change Password</h4>
              
              <form class="pt-3" method="post">
                 <div class="form-group">
                  <label for="exampleInputEmail">Enter Current Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                         <i class="fa fa-lock text-primary"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-lg border-left-0" id="exampleInputEmail" name="txtCurrPassword" placeholder="Current Password">
                  </div>
                  <div><p style="color: red; size: 14px;" id="error"></p></div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail">Enter New Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                         <i class="fa fa-lock text-primary"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-lg border-left-0" id="exampleInputEmail" name="txtNewPassword" placeholder="New Password">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">Enter Confirm Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-lock text-primary"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" name="txtConfirmPassword" placeholder="Confirm Password">                        
                  </div>
                </div>
               
                <div class="my-3">
                  <button type="Submit" name="btnChangePassword" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Change Password</button>
                </div>
                <div class="mb-2 d-flex">
                  <button type="Submit" name="btnBack" class="btn btn-facebook auth-form-btn flex-grow mr-1">
                    <i class="fas fa-arrow-left mr-2"></i>Back
                  </button>
                  <button type="Submit" name="btnHome" class="btn btn-google auth-form-btn flex-grow ml-1">
                    Home <i class="fas fa-arrow-right mr-2"></i>
                  </button>
                </div>
                
              </form>
            </div>
          </div>
          <div class="col-lg-6 login-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2018  All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
   <!-- js File -->
    <?php include_once("js_File.php")?>
 <!-- js File End -->
</body>

</html>
