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
 <script type="text/javascript">
      function EmailCheck(Email) 
{
  var xhttp = new XMLHttpRequest();
  var Url = "Forgetfindemail.php?EID="+Email;
  //alert(Url);
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("lblForPass").innerHTML = this.responseText;
     
    }
  };
  xhttp.open("GET", Url, true);
  xhttp.send();
}

  </script>
  
</head>
<?php
  if(isset($_REQUEST['btnFPassword']))
    {
      $select="select Password from tbladmin where Email='".$_REQUEST['txtForgetEmail']."'";
        //echo $select;
        $select_qry=mysqli_query($con,$select);
        //echo $select_qry;
         $res=mysqli_fetch_array($select_qry);
          $Password=$res['Password'];
          $to=$_REQUEST['txtForgetEmail'];
          $subject = "Forget Password";   
          $message = " We have sent your Password Below. \n Email : ".$_REQUEST['txtForgetEmail']."\n Password : ".$Password;
          $from = "chiragbroz4diu@gmail.com";
          $headers = "From:" . $from;
          $set=mail($to,$subject,$message,$from);
        header("location:index.php");
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
              <h4>Forgot Password</h4>
              
              <form class="pt-3" method="post">
                 <div class="form-group">
                  <label for="exampleInputEmail">Enter Email</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                         <i class="far fa-envelope-open text-primary"></i>
                      </span>
                    </div>
                    <input type="Email" class="form-control form-control-lg border-left-0" name="txtForgetEmail" id="txtForPass" placeholder="Your Email Address" onblur = "EmailCheck(this.value);">
                  </div>
                 <label id="lblForPass" style="color: red;"></label>
                </div>
              
                
               
                <div class="my-3">
                  <button type="Submit" name="btnFPassword" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" >Forget Password</button>
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
