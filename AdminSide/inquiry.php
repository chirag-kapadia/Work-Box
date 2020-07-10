<!DOCTYPE html>
<html lang="en">

<head>
  <!-- meta tags -->
  <?php include_once("meta.php") ?>
  <!-- meta tag end -->
  <!-- meta tags -->
  <?php include_once("Connection.php") ?>
  <!-- meta tag end -->

  <!-- css File -->
  <?php include_once("css_File.php")?>
  <!-- css File end -->
  
<link rel="shortcut icon" href="images/favicon.png">
</head>
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
              Feedback Details
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
                            <th>Name</th>
                            <th>Subject</th>
                            <th>Email</th>
                            <th>Created On</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $Inquiry_select="select * from tblinquiry";
                          $Inquiry_Exe=mysqli_query($con,$Inquiry_select) or die(mysqli_error());
                          while ($Inquiry_Details=mysqli_fetch_array($Inquiry_Exe)) {
                            
                          
                        ?>
                        <tr>
                            
                            <td><?php echo $Inquiry_Details['Name']?></td>
                            <td><?php echo $Inquiry_Details['Subject']?></td>
                            <td><?php echo $Inquiry_Details['Email']?></td>
                            <td><?php echo $Inquiry_Details['CreatedOn']?></td>
                            <td><button type="submit" class="btn btn-primary mr-2" value="Submit" name="btnAddAdmin">Reply</button></td>
                           
                           
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

</html>
