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
  
<link rel="shortcut icon" href="images/favicon.png">
</head>
<?php 
  if(isset($_REQUEST['btnAddAdmin']))
  {
    if(isset($_REQUEST['AIDD']))
    {
        $Update_Details="update tbladmin set FirstName='".$_REQUEST['txtFName']."',LastName='".$_REQUEST['txtLName']."',ContactNo='".$_REQUEST['txtContactNo']."' where AdminID='".$_REQUEST['AIDD']."'";
        //echo $Update_Details;
        $Update_Exe=mysqli_query($con,$Update_Details) or die(mysqli_error());
        header("location:adminProfile.php");

    }
    else
    {
      $date=date("Ymdhis");
      $insert_Admin="insert into tbladmin values('Null','".$_REQUEST['txtFName']."','".$_REQUEST['txtLName']."','".$_REQUEST['txtEmail']."','".$_REQUEST['txtContactNo']."','".$_REQUEST['txtPassword']."',0,0,0,0,0,'".$date."','".$_SESSION['AdminID']."')"; 
      //echo $insert_Admin;
      $insert_Exe=mysqli_query($con,$insert_Admin) or die(mysqli_error());
      header("location:admin_Details.php");
    }
  }
  if(isset($_REQUEST['AID']))
  {
    $Select_Detail="select * from tbladmin where AdminID='".$_REQUEST['AID']."'";
    $Fetch_Detail=mysqli_query($con,$Select_Detail);
    $Fetch_Detail1=mysqli_fetch_array($Fetch_Detail);
    //echo $_REQUEST['AID'];
  }


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
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                   <div class="page-header">
                      <h3 class="page-title">
                        <?php
                          if(isset($_REQUEST['AIDD']))
                          {
                        ?>
                            Update Details
                        <?php
                          }
                          else
                          {
                        ?>
                            Add New Admin
                        <?php
                          }
                        ?>
                        

                      </h3>
           
                    </div>
                 
                  <form class="forms-sample" method="post">
                    
                      <div class="form-group">
                      <label>First Name</label>
                      <input type="text" class="form-control" name="txtFName" placeholder="First Name">
                    </div>
                    

                     <div class="form-group">
                      <label for="exampleInputName1">Last Name</label>
                      <input type="text" class="form-control" name="txtLName" placeholder="Last Name">
                    
                    </div>
                   
                    <div class="form-group">
                      <label for="exampleInputEmail3">Email address</label>
                      <?php if(isset($_REQUEST['AIDD']))
                     {
                      ?>
                       <input type="email" class="form-control" disabled="" name="txtEmail" placeholder="Email">
                        <?php
                     }
                     else
                     {
                    ?>
                        <input type="email" class="form-control" name="txtEmail" placeholder="Email">
                    <?php
                     }
                     ?>
                      
                    </div>
                     <div class="form-group">
                      <label for="exampleInputEmail3">Contact No</label>
                      <input type="text" class="form-control" name="txtContactNo" placeholder="Contact No">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Password</label>
                      <?php if(isset($_REQUEST['AIDD']))
                     {
                      ?>
                       <input type="password" class="form-control" disabled="" name="txtPassword" placeholder="Password">
                        <?php
                     }
                     else
                     {
                    ?>
                       <input type="password" class="form-control" name="txtPassword" placeholder="Password">
                    <?php
                     }
                     ?>
                      
                    </div>
                     <div class="form-group">
                      <label for="exampleInputPassword4">Confirm Password</label>
                      <?php if(isset($_REQUEST['AIDD']))
                     {
                      ?>
                      <input type="password" class="form-control" disabled="" name="txtConfirmPassword" placeholder="Confirm Password">
                        <?php
                     }
                     else
                     {
                    ?>
                      <input type="password" class="form-control" name="txtConfirmPassword" placeholder="Confirm Password">
                    <?php
                     }
                     ?>
                      
                    </div>
                    
                    <Button type="submit" class="btn btn-primary mr-2" value="Submit" name="btnAddAdmin">Submit</Button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
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
