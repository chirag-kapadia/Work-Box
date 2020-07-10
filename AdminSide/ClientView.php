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
              Client Details
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
                        
                        <div class="d-flex justify-content-between">
                          <button class="btn btn-success">Hire Me</button>
                          <button class="btn btn-success">Follow</button>
                        </div>
                      </div>
                      <div class="border-bottom py-4">
                        <p>Skills</p>
                        <?php 
                        $select_skill="select c.*,s.* from tblclient c 
                        INNER JOIN tblskill s ON c.SkillID=s.SkillID
                         where ClientID='".$_REQUEST['CID']."'";
                         /* $select_skill="select c.*,s.*,u.* from tblclient c
                          INNER JOIN tbluser u ON c.UserID=u.UserID 
                          INNER JOIN tblskill s ON c.SkillID=s.SkillID";*/
                          $select_skill_Exe=mysqli_query($con,$select_skill) or die(mysqli_error());
                          $Fetch_Skill=mysqli_fetch_array($select_skill_Exe);

                        ?>
                        <div>
                          <label class="badge badge-outline-dark"><?php echo $Fetch_Skill['SkillName']?></label>
                           
                        </div>                                                               
                      </div>
                     
                      <div class="py-4">

                        <p class="clearfix">
                          <span class="float-left">
                            Status
                          </span>
                          <span class="float-right text-muted">
                            <?php
                              if($Fetch_Skill['IsActive']==0)
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
                            Phone
                          </span>
                          <span class="float-right text-muted">
                            <?php echo $Fetch_Skill['ContactNo'];?>
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Email
                          </span>
                          <span class="float-right text-muted">
                            <?php echo $Fetch_Skill['Email'];?>
                          </span>
                        </p>
                        
                        
                      </div>
                      
                    </div>
                    <div class="col-lg-8 pl-lg-5">
                      <div class="d-flex justify-content-between">
                        <div>
                          <h3><?php echo $Fetch_Skill['C_FirstName']." ".$Fetch_Skill['C_LastName'];?></h3>
                          
                        </div>
                        <div>
                          <button class="btn btn-outline-secondary btn-icon">
                            <i class="far fa-envelope"></i>
                          </button>
                          <button class="btn btn-primary">Request</button>
                        </div>
                      </div>
                      <div class="mt-4 py-2 border-top border-bottom">
                        <h5>Projects</h5>

                      </div>
                      <div class="profile-feed">
                        <?php
                            $select_project="select c.*,f.*,p.*,jp.* from tblclient c
                            INNER JOIN tblFreelancer f ON c.FreelancerID=f.FreelancerID
                            INNER JOIN tblPayment p ON c.PaymentID=p.PaymentID
                            INNER JOIN tbljobprogress jp ON c.ProgressID=jp.ProgressID
                            where ClientID='".$_REQUEST['CID']."'";
                            $select_project_Exe=mysqli_query($con,$select_project) or die(mysqli_error());
                            while($Fetch_Project=mysqli_fetch_array($select_project_Exe))
                            {
                        ?>
                        <div class="d-flex align-items-start profile-feed-item">
                          <img src="images\faces\face30.png" alt="profile" class="img-sm rounded-circle">
                          <div class="ml-4">
                            <h6>
                              <?php echo $Fetch_Project['NameOfProject'];?>
                              <small class="ml-4 text-muted"><i class="far fa-clock mr-1"></i>Duration : <?php echo $Fetch_Project['ProjectDuration'];?></small>
                            </h6>
                            <p>
                              <?php echo $Fetch_Project['ProjectDescription'];?>
                            </p>
                            <p class="small text-muted mt-2 mb-0" style="background: #f2f2f2">
                              <span class="ml-2">
                                <b>Freelancer Name :</b> <?php echo $Fetch_Project['F_FirstName']." ".$Fetch_Project['F_LastName'];?>
                              </span>
                              <span class="ml-2">
                                <b>Freelancer Hired :</b> --
                              </span>
                              
                               <span class="ml-2">
                                <b>Budget :</b> <?php echo $Fetch_Project['Amount'];?>                              </span>
                            </p>
                            <p class="small text-muted mt-2 mb-0" style="background: #f2f2f2">
                              <span class="ml-2">
                                <b>Experience Required :</b> <?php echo $Fetch_Project['ExperienceRequired'];?>
                              </span>
                            </p>
                           

                            <div class="py-4">
                               
                        <p class="clearfix">
                          <span class="float-left">
                            Date assigned
                          </span>
                          <span class="float-right text-muted">
                            <?php echo $Fetch_Project['StartedOn'];?>
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Completed On
                          </span>
                          <span class="float-right text-muted">
                            <?php echo $Fetch_Project['CompletedOn'];?>
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Aborted
                          </span>
                          <span class="float-right text-muted">
                              <?php
                                  if($Fetch_Project['IsAborted']==0)
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
                                  ?>
                             
                            
                          </span>
                        </p>
                        <p class="clearfix">
                          <span class="float-left">
                            Aborted On
                          </span>
                          <span class="float-right text-muted">
                           <?php echo $Fetch_Project['AbortedOn'];?>
                          </span>
                        </p>
                       
                      </div>
                            
                          </div>
                        </div>
                       <?php
                        }
                       ?>
                       
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
