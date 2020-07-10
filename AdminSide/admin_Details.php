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
  if(isset($_REQUEST['Deactive']))
  {
    $Update_IsActive="update tbladmin set IsActive='".$_REQUEST['Deactive']."' where AdminID='".$_REQUEST['UID']."'";
    mysqli_query($con,$Update_IsActive);
  }
   if(isset($_REQUEST['Active']))
  {
    $Update_IsActive="update tbladmin set IsActive='".$_REQUEST['Active']."' where AdminID='".$_REQUEST['UID']."'";
    mysqli_query($con,$Update_IsActive);
  }
   if(isset($_REQUEST['Super']))
  {
    $Update_IsSuper="update tbladmin set IsSuper='".$_REQUEST['Super']."' where AdminID='".$_REQUEST['UID']."'";
    mysqli_query($con,$Update_IsSuper);
  }
   if(isset($_REQUEST['NoSuper']))
  {
    $Update_NoSuper="update tbladmin set IsSuper='".$_REQUEST['NoSuper']."' where AdminID='".$_REQUEST['UID']."'";
    mysqli_query($con,$Update_NoSuper);
  }
  if(isset($_REQUEST['NoInsert']))
  {
    $Update_NoInsert="update tbladmin set IsInsert='".$_REQUEST['NoInsert']."' where AdminID='".$_REQUEST['UID']."'";
    mysqli_query($con,$Update_NoInsert);
  }
  if(isset($_REQUEST['Insert']))
  {
    $Update_Insert="update tbladmin set IsInsert='".$_REQUEST['Insert']."' where AdminID='".$_REQUEST['UID']."'";
    mysqli_query($con,$Update_Insert);
  }
  if(isset($_REQUEST['Update']))
  {
    $Update_Update="update tbladmin set IsUpdate='".$_REQUEST['Update']."' where AdminID='".$_REQUEST['UID']."'";
    mysqli_query($con,$Update_Update);
  }
  if(isset($_REQUEST['NoUpdate']))
  {
    $Update_NoUpdate="update tbladmin set IsUpdate='".$_REQUEST['NoUpdate']."' where AdminID='".$_REQUEST['UID']."'";
    mysqli_query($con,$Update_NoUpdate);
  }
  if(isset($_REQUEST['Delete']))
  {
    $Update_Delete="update tbladmin set IsDelete='".$_REQUEST['Delete']."' where AdminID='".$_REQUEST['UID']."'";
    mysqli_query($con,$Update_Delete);
  }
  if(isset($_REQUEST['NoDelete']))
  {
    $Update_NoDelete="update tbladmin set IsDelete='".$_REQUEST['NoDelete']."' where AdminID='".$_REQUEST['UID']."'";
    mysqli_query($con,$Update_NoDelete);
  }
  if(isset($_REQUEST['DID']))
  {
    $Delete_Admin="Delete from tbladmin where AdminID='".$_REQUEST['DID']."'";
    mysqli_query($con,$Delete_Admin);
    
  }
?>
<?php  
  if($_SESSION['IsSuper']==1)
  {
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
              Admin Details
            </h3>
           
          </div>
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>Admin #</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>IsSuper</th>
                            <th>IsActive</th>
                            <th>IsInsert</th>
                            <th>IsUpdate</th>
                            <th>IsDelete</th>
                            <th>View</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $select_Detail="select * from tbladmin";
                          $select_Exe=mysqli_query($con,$select_Detail) or die(mysqli_error());
                          while($Fetch_detail=mysqli_fetch_array($select_Exe))
                          {

                        ?>
                        <tr>
                            <td><?php echo $Fetch_detail['AdminID']?></td>
                            <td><?php echo $Fetch_detail['FirstName'],$Fetch_detail['LastName'];?></td>
                            <td><?php echo $Fetch_detail['Email']?></td>
                            <td>
                              <?php
                                  if($Fetch_detail['IsSuper']==1)
                                  {

                                ?>
                                    <a href="?UID=<?php echo $Fetch_detail['AdminID']?>&NoSuper=0"><i class="fas fa-check-circle" style="font-size: 27px; color: green;"></i></a>
                              <?php
                                  }
                                  else
                                  {
                              ?>
                                    <a href="?UID=<?php echo $Fetch_detail['AdminID']?>&Super=1"><i class="fas fa-times-circle" style="font-size: 27px; color: red;"></i></a>
                              <?php

                                  }
                              ?>
                            </td>
                            <td>
                              <?php
                                  if($Fetch_detail['IsActive']==1)
                                  {

                                ?>
                                    <a href="?UID=<?php echo $Fetch_detail['AdminID']?>&Deactive=0"><i class="fas fa-check-circle" style="font-size: 27px; color: green;"></i></a>
                              <?php
                                  }
                                  else
                                  {
                              ?>
                                    <a href="?UID=<?php echo $Fetch_detail['AdminID']?>&Active=1"><i class="fas fa-times-circle" style="font-size: 27px; color: red;"></i></a>
                              <?php

                                  }
                              ?>
                            </td>
                            <td>
                              <?php
                                  if($Fetch_detail['IsInsert']==1)
                                  {

                                ?>
                                    <a href="?UID=<?php echo $Fetch_detail['AdminID']?>&NoInsert=0"><i class="fas fa-check-circle" style="font-size: 27px; color: green;"></i></a>
                              <?php
                                  }
                                  else
                                  {
                              ?>
                                    <a href="?UID=<?php echo $Fetch_detail['AdminID']?>&Insert=1"><i class="fas fa-times-circle" style="font-size: 27px; color: red;"></i></a>
                              <?php

                                  }
                              ?>
                            </td>
                             <td>
                              <?php
                                  if($Fetch_detail['IsUpdate']==1)
                                  {

                                ?>
                                    <a href="?UID=<?php echo $Fetch_detail['AdminID']?>&NoUpdate=0"><i class="fas fa-check-circle" style="font-size: 27px; color: green;"></i></a>
                              <?php
                                  }
                                  else
                                  {
                              ?>
                                    <a href="?UID=<?php echo $Fetch_detail['AdminID']?>&Update=1"><i class="fas fa-times-circle" style="font-size: 27px; color: red;"></i></a>
                              <?php

                                  }
                              ?>
                            </td>
                             <td>
                              <?php
                                  if($Fetch_detail['IsDelete']==1)
                                  {

                                ?>
                                    <a href="?UID=<?php echo $Fetch_detail['AdminID']?>&NoDelete=0"><i class="fas fa-check-circle" style="font-size: 27px; color: green;"></i></a>
                              <?php
                                  }
                                  else
                                  {
                              ?>
                                    <a href="?UID=<?php echo $Fetch_detail['AdminID']?>&Delete=1"><i class="fas fa-times-circle" style="font-size: 27px; color: red;"></i></a>
                              <?php

                                  }
                              ?>
                            </td>
                             <td>
                               
                               <!-- <a href="?DID=<?php echo $Fetch_detail['AdminID']?>"><button class="btn btn-outline-danger">Delete</button></a> -->
                               <a href="Profile.php?AID=<?php echo $Fetch_detail['AdminID']?>"><button type="submit" class="btn btn-primary mr-2" value="Submit" name="btnAddAdmin">View</button></a>
                            </td>
                           
                        </tr>
                      <?php
                        }
                      ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
         
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
       
        <!-- partial -->
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
<?php
}
else
{
    echo "Contact Super Admin to Access this Page.";
  }
?>

</html>
