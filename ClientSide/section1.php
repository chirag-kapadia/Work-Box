<?php
        include_once("Connection.php");
    ?>
<section>
            <div class="container">
                <div class="row">
                    <div class="main-heading">
                        <p>200 New Jobs</p>
                        <h2>New & Random <span>Jobs</span></h2></div>
                </div>
                <div class="row extra-mrg">
                    <!-- <a href="jobdetails.php"> -->
                        <?php
                            $select_jobs="select * from tbljobs where IsActive=1";
                            $select_jobs_Exe=mysqli_query($con,$select_jobs) or die(mysqli_error($con));
                            while($select_jobs_Fetch=mysqli_fetch_array($select_jobs_Exe))
                            {

                       
                        ?>
                    <div class="col-md-3 col-sm-6" >
                        <div class="grid-view brows-job-list">
                            <div class="brows-job-company-img"><img src="assets\JobProfile\<?php echo $select_jobs_Fetch['jobProfile'];?>" class="img-responsive" alt=""></div>
                            <div class="brows-job-position">
                                <h3><a href="jobdetails.php?JBID=<?php echo $select_jobs_Fetch['JobID'];?>"><?php echo $select_jobs_Fetch['jobTitle'];?></a></h3>
                                <p><span><?php echo $select_jobs_Fetch['companyName'];?></span></p>
                            </div>
                            
                            
                            <ul class="grid-view-caption">
                                <li>
                                    <div class="brows-job-location">
                                        <p><i class="fa fa-map-marker"></i><?php echo $select_jobs_Fetch['companyLocation'];?></p>
                                    </div>
                                </li>
                                <li>
                                    <p><span class="brows-job-sallery"><i class="fa fa-money"></i>₹<?php echo $select_jobs_Fetch['MinWage'];?> - <?php echo $select_jobs_Fetch['MaxWage'];?></span></p>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <?php
                  
                        }
                    ?>
                <!-- </a> -->
                 
                </div>
            </div>
        </section>