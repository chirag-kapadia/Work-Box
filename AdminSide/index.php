<!DOCTYPE html>
<html lang="en">

<head>
  <!-- meta tags -->
  <?php include_once("meta.php") ?>

  <!-- meta tag end -->

  <!-- Connection -->
  <?php include_once("Connection.php");?>
  <!-- End Connection -->

  <!-- css File -->
  <?php include_once("css_File.php")?>
  <!-- css File end -->

</head>
  <?php
        if(isset($_REQUEST['btnSubmit']))
        {
            $str="select * from tbladmin where Email='".$_REQUEST['txtEmail']."' and Password='".$_REQUEST['txtPassword']."'";
            $rs=mysqli_query($con,$str) or die(mysqli_error());
            if(mysqli_num_rows($rs)>0)
            {
                $res=mysqli_fetch_array($rs);
                $_SESSION["AdminID"]=$res["AdminID"];
                $_SESSION["IsSuper"]=$res["IsSuper"];
                $_SESSION["IsInsert"]=$res["IsInsert"];
                $_SESSION["IsUpdate"]=$res["IsUpdate"];
                $_SESSION["IsDelete"]=$res["IsDelete"];
                header("Location:Dashboard.php");
            }
            else
            {
    ?>
               <!--  <div class="col-sm-6 col-12">
                        <button type="button" class="btn btn-danger btn-raised btn-block mb-5" id="type-error" >Error</button>
                    </div> -->
                <script type="text/javascript" id="error">alert('Invalid Email / Password');</script>
    <?php
            }
        }
    ?>


<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                <img src="images\logo.svg" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="txtEmail" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="txtPassword" placeholder="Password">
                </div>
                 <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="Submit" name="btnSubmit">SIGN IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <a href="ForgotPassword.php" class="auth-link text-black">Forgot password?</a>
                </div>
            
              </form>
            </div>
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
