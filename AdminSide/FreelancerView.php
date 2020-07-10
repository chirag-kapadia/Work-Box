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


  

 ?>
 <?php
    $select_freelancer="select f.*,s.*,jc.* from tblFreelancer f 
    INNER JOIN tblSkill s ON f.SkillID=s.SkillID
    INNER JOIN tbljobCategories jc ON f.CategoryID=jc.CategoryID
    where FreelancerID='".$_REQUEST['FID']."'";
    $select_freelancer_Exe=mysqli_query($con,$select_freelancer) or die(mysqli_error());
    $Fetch_freelancer=mysqli_fetch_array($select_freelancer_Exe);
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
          <div class="page-header">
            <h3 class="page-title">
              Freelancer Details
            </h3>
           
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="border-bottom text-center pb-4">
                        <img src="images\faces\face30.png" alt="profile" class="img-lg rounded-circle mb-3">
                        <h3><?php echo $Fetch_freelancer['ProfessionalTitle'];?></h3>
      
                        <h5>Rate per Hours : <?php echo $Fetch_freelancer['HourlyRate'];?></h5>
                         
                        <div class="d-flex justify-content-between">

                          <button class="btn btn-success">Hire Me</button>
                          <button class="btn btn-success">Follow</button>
                        </div>
                      </div>
                      <div class="border-bottom py-2">
                        <p>Skills</p>
                       
                        <div>
                          <label class="badge badge-outline-dark"><?php echo $Fetch_freelancer['SkillName']?></label>

                           
                        </div>                                                               
                      </div>
                      <div class="border-bottom py-2">
                        <p>Category</p>
                       
                        <div>
                          <label class="badge badge-outline-dark"><?php echo $Fetch_freelancer['CategoryName']?></label>

                           
                        </div>                                                               
                      </div>
                      <div class="border-bottom py-2">
                        <p>Experience level</p>
                        
                        <div>
                          <label class="badge badge-outline-dark"><?php echo $Fetch_freelancer['ExperienceLevel'];?></label>

                           
                        </div>                                                               
                      </div>
                     
                      <div class="py-4">

                        <p class="clearfix">
                          <span class="float-left">
                            Status
                          </span>
                          <span class="float-right text-muted">
                            <?php
                              if($Fetch_freelancer['IsActive']==0)
                              {
                              ?>
                                Inactive
                              <?php
                              }
                              else
                              {
                              ?>
                                Active
                              <?php
                              }
                            ?>
                           
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Availability
                          </span>
                          <span class="float-right text-muted">
                            <?php echo $Fetch_freelancer['Availability'];?>
                          </span>
                        </p>
                      
                        <p class="clearfix">
                          <span class="float-left">
                            Phone
                          </span>
                          <span class="float-right text-muted">
                            <?php echo $Fetch_freelancer['ContactNo'];?>
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Email
                          </span>
                          <span class="float-right text-muted">
                            <?php echo $Fetch_freelancer['Email'];?>
                          </span>

                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Created On
                          </span>
                          <span class="float-right text-muted">
                            <?php echo $Fetch_freelancer['CreatedOn'];?>
                          </span>
                          
                        </p>
                        
                        
                      </div>
                      
                    </div>
                    <div class="col-lg-8 pl-lg-5">
                      <div class="d-flex justify-content-between">
                        <div>
                          <h3><?php echo $Fetch_freelancer['F_FirstName']." ".$Fetch_freelancer['F_LastName'];?></h3>
                             <?php 
                                                    if($Fetch_freelancer['Rating']==1)
                                                    { 
                                                        echo "<td><i class='fa fa-star'></i></td>";
                                                    }
                                                    if($Fetch_freelancer['Rating']==2)
                                                    { 
                                                        echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i></td>";
                                                    }
                                                    if($Fetch_freelancer['Rating']==3)
                                                    { 
                                                        echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></td>";
                                                    }
                                                    if($Fetch_freelancer['Rating']==4)
                                                    { 
                                                        echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></td>";
                                                    }
                                                    if($Fetch_freelancer['Rating']==5)
                                                    { 
                                                        echo "<td><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></td>";
                                                    }
                                                  ?>
                        </div>

                        <div>
                          <button class="btn btn-outline-secondary btn-icon">
                            <i class="far fa-envelope"></i>
                          </button>
                          <button class="btn btn-primary">Request</button>
                        </div>
                      </div>
                      <div class="mt-4 py-2 border-top border-bottom">
                        <h5>Details</h5>

                      </div>
                      <div class="profile-feed">
                      
                        <div class="d-flex align-items-start profile-feed-item">
                          <img src="images\faces\face30.png" alt="profile" class="img-sm rounded-circle">
                          <div class="ml-4">
                            <h3>
                              About
                              
                              <small class="ml-4 text-muted"><i class="far fa-clock mr-1"></i>Experience Years : <?php echo $Fetch_freelancer['ExperienceYears']; ?> Years</small>
                            </h3>
                            <br />
                            <h5 style="margin-left: 50px;">
                              <?php echo $Fetch_freelancer['About'];?>
                            </h5>
                            
                          

                           
                            
                          </div>

                        </div>
                      
                       
                      </div>
                      <div class="profile-feed">
                      
                        <div class="d-flex align-items-start profile-feed-item">
                          <img src="images\faces\face30.png" alt="profile" class="img-sm rounded-circle">
                          <div class="ml-4">
                            <h3>
                              Employment History
                              
            
                            </h3>
                            <br />
                            <h5 style="margin-left: 50px;">
                              <?php echo $Fetch_freelancer['EmploymentHistory'];?>
                            </h5>
                            
                          

                           
                            
                          </div>
                          
                        </div>
                      
                       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="far fa-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
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
