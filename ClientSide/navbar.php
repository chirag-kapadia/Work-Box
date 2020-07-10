
<!-- Navigation Bar -->
<?php

    
    include_once("Connection.php");
?>
    <nav class="navbar navbar-default navbar-fixed white bootsnav">
            <div class="container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"><i class="fa fa-bars"></i></button>
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php"><img src="assets\img\l1.png" class="logo logo-display" alt=""><img src="assets\img\l1.png" class="logo logo-scrolled" alt=""></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <?php
                            if(isset($_SESSION['ClientID']))
                            {
                                $select_Name="select * from tblclient where ClientID='".$_SESSION['ClientID']."'";
                                $select_Name_Exe=mysqli_query($con,$select_Name) or die(mysqli_error());
                                $Fetch_select_Name=mysqli_fetch_array($select_Name_Exe); 
                                  
                            }
                            if(isset($_SESSION['FreelancerID']))
                            {
                                $select_FName="select * from tblfreelancer where FreelancerID='".$_SESSION['FreelancerID']."'";
                                $select_FName_Exe=mysqli_query($con,$select_FName) or die(mysqli_error());
                                $Fetch_select_FName=mysqli_fetch_array($select_FName_Exe); 
                                  
                            }
                            
                        ?>
                        <?php
                            if(empty($_SESSION['ClientID']) && empty($_SESSION['FreelancerID']))
                            {
                        ?>
                        <li class="left-br"><a href="signinsignup.php" class="signin">SignIn/SignIp</a></li>
                         <?php
                            }
                        ?>

                        <?php
                            if(isset($_SESSION['ClientID']))
                            {
                        ?>
                        
                        <li class="left-br"><a href="#" class="signin"><?php if(isset($_SESSION['ClientID'])) echo $Fetch_select_Name['C_FirstName']." ".$Fetch_select_Name['C_LastName']?></a></li>
                        <li class="left-br"><a href="Logout.php" class="signin">Logout</a></li>
                        <?php
                            }
                        ?>
                        <!-- Freelancer -->
                       

                        <?php
                            if(isset($_SESSION['FreelancerID']))
                            {
                        ?>
                        
                        <li class="left-br"><a href="#" class="signin"><?php if(isset($_SESSION['FreelancerID'])) echo $Fetch_select_FName['F_FirstName']." ".$Fetch_select_FName['F_LastName']?></a></li>
                        <li class="left-br"><a href="Logout.php" class="signin">Logout</a></li>
                        <?php
                            }
                        ?>

                    </ul>
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="dropdown megamenu-fw"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Brows</a>
                            <?php
                               
                                if(isset($_SESSION["ClientID"]) || isset($_SESSION["FreelancerID"]))
                                {
                            ?>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <?php
                                            if($_SESSION["UserType"]=='freelancer')

                                            {

                                        ?>
                                        <div class="col-menu col-md-4">
                                            <h6 class="title">For Freelancer</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="browsejobs.php">Browse Jobs</a></li>
                                                    <li><a href="browsecompany.php">Browse Companies</a></li>
                                                    <?php
                                                        $select_IsActive="select * from tblfreelancer where FreelancerID='".$_SESSION['FreelancerID']."'";
                                                        $select_IsActive_Exe=mysqli_query($con,$select_IsActive) or die(mysqli_error($con));
                                                        $select_IsActive_fetch=mysqli_fetch_array($select_IsActive_Exe);
                                                        if($select_IsActive_fetch['IsActive']==0)
                                                        {
                                                    ?>
                                                            <li><a href="createresume.php">Create Resume</a></li>
                                                    <?php
                                                        }
                                                    ?>
                                                    
                                                   
                                                    <li><a href="flprofile.php?FLID=<?php echo $_SESSION['FreelancerID']?>">Candidate Profile</a></li>
                                                        <?php
                                                            $select_redeem="select * from tbljobassign where FreelancerID='".$_SESSION['FreelancerID']."' AND IsAssign=1";
                                                            $select_redeem_Exe=mysqli_query($con,$select_redeem);
                                                            $select_redeem_fetch=mysqli_fetch_array($select_redeem_Exe);
                                                            if($select_redeem_fetch['IsAssign']==1)
                                                            {
                                                        ?>
                                                                <li><a href="myappliedjobs.php">My Applied jobs</a></li>
                                                        <?php
                                                            }
                                                        ?>

                                                     
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                        <?php
                                      }
                                        if($_SESSION['UserType']=='client')
                                        {
                                      ?>
                                        <div class="col-menu col-md-4">
                                            <h6 class="title">For Employer</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="createjob.php">Create Job</a></li>
                                                    <li><a href="browsefreelancers.php">Browse Freelancers</a></li>
                                                    <li><a href="viewfreelancers.php">View My Freelancers</a></li>
                                                    <li><a href="clprofile.php?ClientID=<?php echo $_SESSION['ClientID']?>">Client Profile</a></li>
                                                    <li><a href="myjobs.php">My Jobs</a></li>
                                                    <li><a href="payment.php">Payments</a></li>
                                                    <li><a href="paymentportfolio.php">Payments Portfolio</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <?php
                                            }
                                        ?>
                                       
                                        
                                         
                                    </div>
                                </li>
                            </ul>
                            <?php
                                }
                                    else

                                {
                            ?>
                                <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-4">
                                            <h6 class="title">For Freelancer</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="browsejobs.php">Browse Jobs</a></li>
                                                    <li><a href="browsecompany.php">Browse Companies</a></li>
                                                    <?php
                                                        if(isset($_SESSION["ClientID"]))
                                                        {
                                                    ?>
                                                             <li><a href="createresume.php">Create Resume</a></li>
                                                   
                                                    <li><a href="flprofile.php">Candidate Profile</a></li>
                                                     <li><a href="accountdetail.php">Account Details</a></li>

                                                    <li><a href="postredeem.php">Redeem Payments</a></li>
                                                    <?php
                                                        }
                                                    ?>
                                                    
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                      
                                        <div class="col-menu col-md-4">
                                            <h6 class="title">For Employer</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <?php
                                                        if(isset($_SESSION["FreelancerID"]))
                                                        {
                                                    ?>
                                                            <li><a href="createjob.php">Create Job</a></li>
                                                    <?php
                                                        }
                                                    ?>
                                                    
                                                    <li><a href="browsefreelancers.php">Browse Freelancers</a></li>
                                                    <?php
                                                        if(isset($_SESSION["FreelancerID"]))
                                                        {
                                                    ?>
                                                            <li><a href="viewfreelancers.php">View my Freelancers</a></li>
                                                    <li><a href="clprofile.php">Client Profile</a></li>
                                                    <li><a href="myjobs.php">My Jobs</a></li>
                                                    <li><a href="payment.php">Payments</a></li>
                                                    <li><a href="paymentportfolio.php">Payments Portfolio</a></li>
                                                    <?php
                                                        }
                                                    ?>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                       
                                        
                                         
                                    </div>
                                </li>
                            </ul>
                            <?php
                                }
                            ?>
                            
                        </li>
                       </ul> 
                       
                </div>
            </div>
        </nav>