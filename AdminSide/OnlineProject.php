<!DOCTYPE html>
<html lang="en">

<head>
  <!-- meta tags -->
  <?php include_once("meta.php") ?>
  <!-- meta tag end -->
   <!-- Connection -->
  <?php include_once("Connection.php");?>
  <!-- End Connection -->
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
              Online Project Details
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
                            <th>Client Name</th>
                            <th>Category</th>
                            <th>Project Name</th>
                            
                            <th>Active Since</th>
                            <th>Completed</th>

                            <th>Budget</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $Client_select="select c.*,jc.*,jp.*,p.Amount from tblclient c
                          INNER JOIN tbljobCategories jc ON c.CategoryID=jc.CategoryID
                          INNER JOIN tbljobprogress jp ON c.ProgressID=jp.ProgressID
                          INNER JOIN tblPayment p ON c.PaymentID=p.PaymentID";
                          $Client_Exe=mysqli_query($con,$Client_select) or die(mysqli_error());
                          while ($Client_Details=mysqli_fetch_array($Client_Exe)) {
                            
                          
                        ?>
                        <tr>
                            
                            <td><?php echo $Client_Details['C_FirstName']." ".$Client_Details['C_LastName'];?></td>
                            <td><?php echo $Client_Details['CategoryName']?></td>
                             <td><?php echo $Client_Details['NameOfProject']?></td>
                            <td><?php echo $Client_Details['ProjectDuration']?></td>
                            <td><?php
                                  if($Client_Details['IsComplete']==0)
                                  {
                                ?>
                                     <span class="fas fa-times-circle" style="color: red;"></span>
                                   
                                <?php
                                  }
                                  else
                                  {
                                    
                                  ?>
                                       <span class="fas fa-check-circle" style="color: green;"></span>
                                  <?php
                                  }
                                  ?></td>
                           
                            <td><?php echo $Client_Details['Amount']?></td>
                           
                           
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
