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
                            <th>Feedback #</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created On</th>
                            <th>Rating</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $Feedback_select="select * from tblfeedback";
                          $Feedback_Exe=mysqli_query($con,$Feedback_select) or die(mysqli_error());
                          while ($Feedback_Details=mysqli_fetch_array($Feedback_Exe)) {
                            
                          
                        ?>
                        <tr>
                            <td><?php echo $Feedback_Details['Feedback']?></td>
                            <td><?php echo $Feedback_Details['Name']?></td>
                            <td><?php echo $Feedback_Details['Email']?></td>
                            <td><?php echo $Feedback_Details['CreatedOn']?></td>
                            <?php 
                                                    if($Feedback_Details['Rating']==1)
                                                    { 
                                                        echo "<td><i class='fa fa-star'></i></td>";
                                                    }
                                                    if($Feedback_Details['Rating']==2)
                                                    { 
                                                        echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i></td>";
                                                    }
                                                    if($Feedback_Details['Rating']==3)
                                                    { 
                                                        echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></td>";
                                                    }
                                                    if($Feedback_Details['Rating']==4)
                                                    { 
                                                        echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></td>";
                                                    }
                                                    if($Feedback_Details['Rating']==5)
                                                    { 
                                                        echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></td>";
                                                    }
                                                  ?>
                           
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
