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
              Payment Details
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
                            <th>TransactionID #</th>
                            <th>Card Name</th>
                            <th>Card Number</th>
                            <th>Expiration Month</th>
                            <th>Expiration Year</th>
                             <th>CVV</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $Payment_select="select * from tblpayment";
                          $Payment_Exe=mysqli_query($con,$Payment_select) or die(mysqli_error());
                          while ($Payment_Details=mysqli_fetch_array($Payment_Exe)) {
                            
                          
                        ?>
                        <tr>
                            <td><?php echo $Payment_Details['TransactionID']?></td>
                            <td><?php echo $Payment_Details['CardName']?></td>
                            <td><?php echo $Payment_Details['CardNumber']?></td>
                            <td><?php echo $Payment_Details['ExpirationMonth']?></td>
                            <td><?php echo $Payment_Details['ExpirationYear']?></td>
                            <td><?php echo $Payment_Details['CVV']?></td>
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
