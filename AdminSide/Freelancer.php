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
              Freelancer Details
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
                            <th>Professional Title</th>
                            <th>Experience Level</th>
                            <th>Category</th>
                            <th>Skill</th>
                            <th>Hourly Rate</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                       $Client_select="select f.*,jc.*,s.* from tblfreelancer f
                        INNER JOIN tbljobCategories jc ON f.CategoryID=jc.CategoryID 
                        INNER JOIN tblSkill s ON f.SkillID=s.SkillID
                       ";
                         /* $Client_select="select f.*,u.*,jc.CategoryName,s.SkillName from tblfreelancer f 
                          INNER JOIN tbluser u ON f.UserID=u.UserID
                          INNER JOIN tbljobCategories jc ON f.CategoryID=jc.CategoryID 
                          INNER JOIN tblSkill s ON f.SkillID=s.SkillID";*/
                          $Client_Exe=mysqli_query($con,$Client_select) or die(mysqli_error());
                          while ($Client_Details=mysqli_fetch_array($Client_Exe)) {
                            
                          
                        ?>
                        <tr>
                            
                            <td><?php echo $Client_Details['F_FirstName']." ".$Client_Details['F_LastName'];?></td>
                            <td><?php echo $Client_Details['ProfessionalTitle']?></td>
                             <td><?php echo $Client_Details['ExperienceLevel']?></td>
                            <td><?php echo $Client_Details['CategoryName']?></td>
                            <td><?php echo $Client_Details['SkillName']?></td>
                             <td><?php echo $Client_Details['HourlyRate']?></td>
                           <td><a href="FreelancerView.php?FID=<?php echo $Client_Details['FreelancerID']?>"><button type="submit" class="btn btn-primary mr-2" value="Submit" name="btnAddAdmin">View</button></a></td>
                           
                           
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
