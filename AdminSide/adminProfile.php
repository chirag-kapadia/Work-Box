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


    $Select_Detail="select * from tbladmin where AdminID='".$_SESSION['AdminID']."'";
    $Fetch_Detail=mysqli_query($con,$Select_Detail) or die(mysqli_error());
    $Details=mysqli_fetch_array($Fetch_Detail);
    
    


 ?>
<body class="sidebar-toggle-display sidebar-hidden">
  <div class="container-scroller">
    <!-- Header -->
      <?php include_once("header.php");?>
    <!-- Header End -->
    <div class="container-fluid page-body-wrapper">
    
       <!-- Navigation -->
              <?php include_once("navigation.php")?>
        <!-- Navigation End -->
     
      <div class="main-panel">
        <div class="content-wrapper">

          
          <!-- Write Here -->
             <div class="page-header">
            <h3 class="page-title">
              Profile Information
              
            </h3>
           
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="border-bottom text-center pb-4">
                        <img src="images\faces\face30.png" alt="profile" class="img-lg rounded-circle mb-3">
                        <?php
                            if($Details['IsSuper']==0)
                            {
                          ?>
                              <h6>Sub Admin</h6>
                          <?php
                            }
                            else
                            {
                          ?>
                              <h6>Super Admin</h6>
                          <?php
                        }
                        ?>
                        <div class="border-bottom text-center pb-4">
                         <h3><?php if(isset($Details)) echo $Details['FirstName']."  ".$Details['LastName'];?></h3>
                       </div>
                        <div class="d-flex justify-content-between">
                          <a href="new_Admin.php?AIDD=<?php echo $Details['AdminID'];?>"><button class="btn btn-success">Edit Profile</button></a>
                          <a href="ChangePassword.php?CPID=<?php echo $Details['AdminID'];?>"><button class="btn btn-success">Change Password</button></a>
                        </div>
                      </div>

                     
                     
                      <div class="py-4">
                        <p class="clearfix">
                          <span class="float-left">
                            Status
                          </span>
                          <?php
                            if($Details['IsActive']==1)
                            {
                          ?>
                              <span class="float-right text-muted">
                            Active
                          </span>
                          <?php
                            }
                            else
                            {
                          ?>
                             <span class="float-right text-muted">
                            UnActive
                          </span>
                          <?php
                        }
                        ?>
                         
                        </p>
                       
                        <p class="clearfix">
                          <span class="float-left">
                            Email
                          </span>
                          <span class="float-right text-muted">
                            <?php if(isset($Details)) echo $Details['Email'];?>
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Phone
                          </span>
                          <span class="float-right text-muted">
                            <?php if(isset($Details)) echo $Details['ContactNo'];?>
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                           Created On
                          </span>
                          <span class="float-right text-muted">
                             <?php if(isset($Details)) echo $Details['CreatedOn'];?>
                          </span>
                        </p>
                       
                        <p class="clearfix">
                          <span class="float-left">
                            Created By
                          </span>
                          
                          <span class="float-right text-muted">
                            <?php
                                
                                $select_CreatedBy="select FirstName,LastName from tbladmin where AdminID='".$Details['CreatedBy']."'";
                                $select_Exe=mysqli_query($con,$select_CreatedBy) or die(mysqli_error());
                                while($CreatedDetails=mysqli_fetch_array($select_Exe))
                                {
                                  echo $CreatedDetails['FirstName']." ".$CreatedDetails['LastName'];
                                }
                            ?>
                          </span>
                        </p>
                       
                      </div>
                      <a href="Dashboard.php"><button class="btn btn-primary btn-block">Back to Dashboard</button></a>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          
         
         </div>
        <!-- content-wrapper ends -->
        <!-- footer -->
          <?php include_once("footer.php")?>
        <!-- footer End -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

 <!-- js File -->
    <?php include_once("js_File.php")?>
 <!-- js File End -->
</body>

</html>
