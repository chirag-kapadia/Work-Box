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

         
          <!-- Write Here -->
             <div class="row">
                <div class="col-12">
                    <div class="card">
                    <div class="card-body">
                        <div class="row">
                        <div class="col-12">
                        
                            <div class="row portfolio-grid">
                                <?php
            $select_Skill="select * from tblSkill";
            $Skill_Exe=mysqli_query($con,$select_Skill) or die(mysqli_error());
            while($Skill_Details=mysqli_fetch_array($Skill_Exe))
            {
          ?>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">

                                <figure class="effect-text-in">
                                <img src="images\samples\300x300\1.jpg" alt="image">
                                <figcaption>
                                    <h4><?php echo $Skill_Details['SkillName']?></h4>
                                    
                                </figcaption>
                                </figure>
                              
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
