<!-- Sidebar Start-->
<?php
		include_once("Connection.php");
		$select_jobDetails="select * from tbljobs where JobID='".$_REQUEST['JobID11']."'";
		$select_jobDetails_Exe=mysqli_query($con,$select_jobDetails) or die(mysqli_error($con));
		$select_jobDetails_fetch=mysqli_fetch_array($select_jobDetails_Exe);
	?>
					<div class="col-md-4 col-sm-4">
						
						<!-- Job Detail -->
						<div class="sidebar-container">
							<div class="sidebar-box">
								
								
								<div class="sidebar-inner-box">
									<div class="sidebar-box-thumb">
										<img src="assets\JobProfile\<?php echo $select_jobDetails_fetch['jobProfile']?>" class="img-responsive" alt="">
									</div>
									<div class="sidebar-box-detail">
										<h4><?php
									echo $select_jobDetails_fetch['companyName'];?></h4>
										
									</div>
								</div>
								<div class="sidebar-box-extra">
									<ul>
											<?php
                                        $job_Category="select * from tbljobcategories where CategoryID='".$select_jobDetails_fetch['CategoryID']."'";
                                        $job_Category_Exe=mysqli_query($con,$job_Category) or die(mysqli_error());
                                        while($job_Category_Fetch=mysqli_fetch_array($job_Category_Exe))
                                        {


                                    ?>
										<li><?php echo $job_Category_Fetch['CategoryName']?></li>
										<?php
											}
										?>
										
									</ul>
								
								</div>
							</div>
							<a href="companydetail.php?JobID14=<?php echo $select_jobDetails_fetch['JobID']?>&CName1=<?php echo $select_jobDetails_fetch['companyName']?>&ClientID=<?php echo $select_jobDetails_fetch['ClientID']?>" class="btn btn-sidebar bt-1 bg-success">Company Info</a>
						</div>
						
						<!-- Share This Job -->
						
						
					</div>
					<!-- End Sidebar -->