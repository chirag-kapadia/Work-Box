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
         <!--  <div class="page-header">
            <h3 class="page-title">
              Dashboard
            </h3>
          </div> -->
           <!-- Dashboard Score -->
              <?php include_once("dashboard_Score.php")?>
            <!-- Dashboard Score End -->

             <div class="row">
             <!--Sales Details -->
               <?php include_once("JobDetails.php")?>
            <!--Sales Details End -->
            
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
