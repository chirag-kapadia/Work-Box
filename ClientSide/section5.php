
<form method="post">
<section class="pricing">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-heading">
                           
                            <h2>Hire <span>Freelancer</span></h2></div>
                    </div>
                </div>
                <div class="row">
                    <?php
                        include_once("Connection.php");
                        $select_freelancer="select * from tblfreelancer LIMIT 3";
                        $select_freelancer_Exe=mysqli_query($con,$select_freelancer) or die(mysqli_error());
    
                        while($select_freelancer_Fetch=mysqli_fetch_array($select_freelancer_Exe))
                        {
                    ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="freelance-container style-2">





                            <div class="freelance-box"><span class="freelance-status">Available</span>
                            <!-- <span class="freelance-status bg-warning">At Work</span> -->




                                <h4 class="flc-rate">₹<?php echo $select_freelancer_Fetch['HourlyRate'];?>/hr</h4>
                                <div class="freelance-inner-box">
                                    <div class="freelance-box-thumb"><img src="assets\img\can-5.jpg" class="img-responsive img-circle" alt=""></div>
                                    <div class="freelance-box-detail">
                                        <h4><?php echo $select_freelancer_Fetch['F_FirstName']." ".$select_freelancer_Fetch['F_LastName']?></h4><span class="location"><?php echo $select_freelancer_Fetch['ProfessionalTitle'];?></span></div>
                                    <div class="rattings">
                                         <?php
                                            if($select_freelancer_Fetch['Rating']==1)
                                            {
                                        ?>
                                                <i class="fa fa-star fill"></i>
                                        <?php        
                                            }
                                             if($select_freelancer_Fetch['Rating']==2)
                                             {
                                            ?>
                                                <i class="fa fa-star fill"></i><i class="fa fa-star fill"></i>
                                        <?php
                                             }
                                             if($select_freelancer_Fetch['Rating']==3)
                                             {
                                        ?>
                                                <i class="fa fa-star fill"></i><i class="fa fa-star fill"></i><i class="fa fa-star fill"></i>
                                        <?php
                                             }
                                             if($select_freelancer_Fetch['Rating']==4)
                                             {
                                            ?>
                                                <i class="fa fa-star fill"></i><i class="fa fa-star fill"></i><i class="fa fa-star fill"></i><i class="fa fa-star fill"></i>
                                        <?php
                                             }
                                             if($select_freelancer_Fetch['Rating']==5)
                                             {
                                        ?>
                                                 <i class="fa fa-star fill"></i><i class="fa fa-star fill"></i><i class="fa fa-star fill"></i><i class="fa fa-star fill"></i><i class="fa fa-star fill"></i>
                                        <?php
                                             }
                                        ?>
                                        <!-- <i class="fa fa-star fill"></i><i class="fa fa-star fill"></i><i class="fa fa-star fill"></i><i class="fa fa-star-half fill"></i><i class="fa fa-star"></i>-->
                                    </div>
                                </div>
                                <div class="freelance-box-extra">
                                    <?php
                                        $select_Skill="select * from tblskill where SkillID='".$select_freelancer_Fetch['SkillID']."'";
                                        $select_Skill_Exe=mysqli_query($con,$select_Skill) or die(mysqli_error());
                                        $select_Skill_Fetch=mysqli_fetch_array($select_Skill_Exe);
                                    ?>
                                    <ul>
                                        <li><?php echo $select_Skill_Fetch['SkillName']?></li>
                                        
                                        
                                    </ul>
                                </div>
                                
                                 <!-- <a href="flprofile.php?FreeID=<?php echo $select_freelancer_Fetch['FreelancerID'];?>" class="btn btn-freelance-two bg-default">Profile</a> -->
                                 <!-- <a href="posthire.php?Free2134ID=<?php echo $select_freelancer_Fetch['FreelancerID'];?>" class="btn btn-freelance-two bg-default">Profile</a> -->

                                 <a href="flprofile.php?FLID=<?php echo $select_freelancer_Fetch['FreelancerID'];?>" class="btn btn-freelance-two bg-default">Profile</a>
                                 <?php
                                   // print_r($select_freelancer_Fetch['FreelancerID']);
                                 ?>

                                 
                                <!-- <input type="Submit" name="btnProfile" class="btn btn-freelance-two bg-default" value="Profile11"> -->
                                <a href="#" class="btn btn-freelance-two bg-info">Hire Now</a></div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                    
                   
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="text-center"><a href="browsefreelancers.php" class="btn btn-primary">Load More</a></div>
                    </div>
                </div>
            </div>
        </section>
    </form>