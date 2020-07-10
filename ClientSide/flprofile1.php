<!doctype html>
<html lang="en">
<head>
	<!-- Basic Page Needs
	================================================== -->
	<?php
		include_once("loadfiles.php");
		include_once("Connection.php");
	?>
    
	</head>
	<?php 
		$select_Details="select * from tblfreelancer where FreelancerID='".$_REQUEST['FreeID']."'";
		$select_Details_Exe=mysqli_query($con,$select_Details) or die(mysqli_error());
		$select_Details_fetch=mysqli_fetch_array($select_Details_Exe);
	?>
	<body>
		<form method="post">
		<div class="Loader"></div>
		<div class="wrapper">  
			
			<!-- Start Navigation -->
			<?php
				include_once("navbar.php");
			?>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			
			<!-- Title Header Start -->
			<section class="inner-header-title" style="background-image:url(assets/img/banner-10.jpg);">
				<div class="container">
					<h1>Freelancer Profile</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
		
		<!-- Candidate Profile Start -->
		
        <section class="detail-desc advance-detail-pr gray-bg">
            <div class="container white-shadow">
			
                <div class="row">
                    <div class="detail-pic"><img src="assets\img\can-1.png" class="img" alt=""><a href="#" class="detail-edit" title="edit"></a></div>
                    
                </div>
				
                <div class="row bottom-mrg">
                    <div class="col-md-12 col-sm-12">
                        <div class="advance-detail detail-desc-caption">
                            <h2><?php echo $select_Details_fetch['F_FirstName']." ".$select_Details_fetch['F_LastName']?></h2><span class="designation"><?php echo $select_Details_fetch['ProfessionalTitle'];?></span>
                            <ul>
                            	<?php
                            	/*select count(*) as countIsComIsAbor from tbljobprogress where IsComplete=0 and IsAborted=0*/
                            		$select_jobCom="select count(*) as countCompeleted from tbljobprogress where FreelancerID='".$_REQUEST['FreeID']."'";
                            		//echo $select_jobCom;
                            		$select_jobCom_Exe=mysqli_query($con,$select_jobCom) or die(mysqli_error($con));
                            		$select_jobCom_fetch=mysqli_fetch_array($select_Details_Exe);
                            		//echo $select_jobCom_fetch['countCompeleted'];
                            		

                            	?>
                                <li><strong class="j-view"> <?php echo $select_jobCom_fetch['countCompeleted'];?></strong>Job Completed</li>
                                <li><strong class="j-applied">110</strong>Job Applied</li>
                                <li><strong class="j-shared">120</strong>Invitation</li>
                            </ul>
                        </div>
                    </div>
                </div>
				<?php
					if(isset($_REQUEST['btnHire']))
					{
						$insert_Request="insert into tbljobrequest value(null,'".$_SESSION['ClientID']."','".$_REQUEST['FID']."',null,0)";
						echo $insert_Request;
						$insert_Request_Exe=mysqli_query($con,$insert_Request) or die(mysqli_error($con));
						$FID=$_REQUEST['FID'];
						header("location:posthire.php?FID=$FID");

					}
				?>
				
                <div class="row no-padd">
                    <div class="detail pannel-footer">
                        <div class="col-md-5 col-sm-5">
                            
                        </div>
                        <div class="col-md-7 col-sm-7">
                            <div class="detail-pannel-footer-btn pull-right">
                            <?php
                            	if(isset($_SESSION['ClientID']))
                            	{
                            ?>
                            		<input type="submit" class="btn btn-primary" title="" name="btnHire" value="Hire Now" /> 
                            		<input type="submit" class="btn btn-primary" title="" name="btnHire" value="Hire Now" /> 
                            		<input type="Submit" name="" value="Blu" />
                            		<!-- 
                            		<a href="" class="btn btn-primary" title="">Hire Now</a> -->
                            		<a href="#" class="footer-btn blu-btn" title="">Reject</a>
                            <?php		
                            	}
                            ?>
                            
                            </div>
                        </div>
                    </div>
                </div>
         	
            </div>
        </section>
   
		
        <section class="full-detail-description full-detail gray-bg">
            <div class="container">
                <div class="col-md-12 col-sm-12">
                    <div class="full-card">
                      <div class="deatil-tab-employ tool-tab">
							<ul class="nav simple nav-tabs" id="simple-design-tab">
								<li class="active"><a href="#about">About</a></li>
								<li><a href="#workhistory">Work History</a></li>
								<li><a href="#skills">Skills</a></li>
								
								<li><a href="#messages">Notification <span class="info-bar">6</span></a></li>
								<li><a href="#settings">Edit Profile</a></li>
							</ul>
							
							<!-- Start All Sec -->
							<div class="tab-content">
								<div id="about" class="tab-pane fade in active">
									<h3>About</h3>
									<p><?php echo $select_Details_fetch['About'];?></p>
									
								</div>
								<!-- End About Sec -->
								
								<!-- Start Address Sec -->
								<div id="workhistory" class="tab-pane fade">
									<h3>Work History</h3>
									<p><?php echo $select_Details_fetch['EmploymentHistory'];?></p>
								</div>
								<!-- End Address Sec -->
								
								<!-- Start Job List -->
								<div id="skills" class="tab-pane fade">
									<h3>Skills</h3>
									<div class="row">
									</div>
									
									<div class="row">
										 <?php
                                        $select_Skill="select * from tblskill where SkillID='".$select_Details_fetch['SkillID']."'";
                                        $select_Skill_Exe=mysqli_query($con,$select_Skill) or die(mysqli_error());
                                        $select_Skill_Fetch=mysqli_fetch_array($select_Skill_Exe);
                                    ?>
                                    <ul>
                                        <li><?php echo $select_Skill_Fetch['SkillName']?></li>
                                        
                                        
                                    </ul>
									</div>
								</div>
								<!-- End Job List -->
								
								
								
								<!-- Start Message -->
								<div id="messages" class="tab-pane fade">
									<div class="inbox-body inbox-widget">
										<div class="mail-card">
											<header class="card-header cursor-pointer collapsed" data-toggle="collapse" data-target="#full-message" aria-expanded="false">
												<div class="card-title flexbox">
												  <img class="img-responsive img-circle avatar" src="assets\img\can-1.png" alt="...">
												  <div>
													<h6>Daniel Duke</h6>
													<small>Today at 07:34 AM</small>
													<small><a class="text-info collapsed" href="#detail-view" data-toggle="collapse" aria-expanded="false">View Detail</a></small>

													<div class="no-collapsing cursor-text collapse" id="detail-view" aria-expanded="false" style="height: 0px;">
													  <small class="d-inline-block">From:</small>
													  <small>theadmin@thetheme.io</small>
													  <br>
													  <small class="d-inline-block">To:</small>
													  <small>subscriber@yahoo.com</small>
													</div>
												  </div>
												</div>
											</header>
											<div class="collapse" id="full-message" aria-expanded="false" style="height: 0px;">
												<div class="card-body">
												  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</p>
												  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
												</div>
											</div>
										</div>
										
										<div class="mail-card unread">
											<header class="card-header cursor-pointer collapsed" data-toggle="collapse" data-target="#meaages-2" aria-expanded="false">
												<div class="card-title flexbox">
												  <img class="img-responsive img-circle avatar" src="assets\img\can-2.png" alt="...">
												  <div>
													<h6>Daniel Duke</h6>
													<small>Today at 07:34 AM</small>
													<small><a class="text-info collapsed" href="#detail-view1" data-toggle="collapse" aria-expanded="false">View Detail</a></small>

													<div class="no-collapsing cursor-text collapse" id="detail-view1" aria-expanded="false" style="height: 0px;">
													  <small class="d-inline-block">From:</small>
													  <small>theadmin@thetheme.io</small>
													  <br>
													  <small class="d-inline-block">To:</small>
													  <small>subscriber@yahoo.com</small>
													</div>
												  </div>
												</div>
											</header>
											<div class="collapse" id="meaages-2" aria-expanded="false" style="height: 0px;">
												<div class="card-body">
												  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</p>
												  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
												</div>
											</div>
										</div>
										
										<div class="mail-card">
											<header class="card-header cursor-pointer collapsed" data-toggle="collapse" data-target="#meaages-3" aria-expanded="false">
												<div class="card-title flexbox">
												  <img class="img-responsive img-circle avatar" src="assets\img\can-1.png" alt="...">
												  <div>
													<h6>Daniel Duke</h6>
													<small>Today at 07:34 AM</small>
													<small><a class="text-info collapsed" href="#detail-view2" data-toggle="collapse" aria-expanded="false">View Detail</a></small>

													<div class="no-collapsing cursor-text collapse" id="detail-view2" aria-expanded="false" style="height: 0px;">
													  <small class="d-inline-block">From:</small>
													  <small>theadmin@thetheme.io</small>
													  <br>
													  <small class="d-inline-block">To:</small>
													  <small>subscriber@yahoo.com</small>
													</div>
												  </div>
												</div>
											</header>
											<div class="collapse" id="meaages-3" aria-expanded="false" style="height: 0px;">
												<div class="card-body">
												  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</p>
												  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
												</div>
											</div>
										</div>
										
										<div class="mail-card">
											<header class="card-header cursor-pointer collapsed" data-toggle="collapse" data-target="#meaages-4" aria-expanded="false">
												<div class="card-title flexbox">
												  <img class="img-responsive img-circle avatar" src="assets\img\can-3.png" alt="...">
												  <div>
													<h6>Daniel Duke</h6>
													<small>Today at 07:34 AM</small>
													<small><a class="text-info collapsed" href="#detail-view3" data-toggle="collapse" aria-expanded="false">View Detail</a></small>

													<div class="no-collapsing cursor-text collapse" id="detail-view3" aria-expanded="false" style="height: 0px;">
													  <small class="d-inline-block">From:</small>
													  <small>theadmin@thetheme.io</small>
													  <br>
													  <small class="d-inline-block">To:</small>
													  <small>subscriber@yahoo.com</small>
													</div>
												  </div>
												</div>
											</header>
											<div class="collapse" id="meaages-4" aria-expanded="false" style="height: 0px;">
												<div class="card-body">
												  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</p>
												  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
												</div>
											</div>
										</div>
										
										<div class="mail-card unread">
											<header class="card-header cursor-pointer collapsed" data-toggle="collapse" data-target="meaages-5" aria-expanded="false">
												<div class="card-title flexbox">
												  <img class="img-responsive img-circle avatar" src="assets\img\can-4.png" alt="...">
												  <div>
													<h6>Daniel Duke</h6>
													<small>Today at 07:34 AM</small>
													<small><a class="text-info collapsed" href="#detail-view4" data-toggle="collapse" aria-expanded="false">View Detail</a></small>

													<div class="no-collapsing cursor-text collapse" id="detail-view4" aria-expanded="false" style="height: 0px;">
													  <small class="d-inline-block">From:</small>
													  <small>theadmin@thetheme.io</small>
													  <br>
													  <small class="d-inline-block">To:</small>
													  <small>subscriber@yahoo.com</small>
													</div>
												  </div>
												</div>
											</header>
											<div class="collapse" id="meaages-5" aria-expanded="false" style="height: 0px;">
												<div class="card-body">
												  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</p>
												  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
												</div>
											</div>
										</div>
										
										<div class="mail-card">
											<header class="card-header cursor-pointer">
												<div class="card-title flexbox">
												  <img class="img-responsive img-circle avatar" src="assets\img\can-4.png" alt="...">
												  <div>
													<h6>Daniel Duke</h6>
													<small>Today at 07:34 AM</small>
													<small><a class="text-info collapsed" href="#detail-view-6" data-toggle="collapse" aria-expanded="false">View Detail</a></small>

													<div class="no-collapsing cursor-text collapse" id="detail-view-6" aria-expanded="false" style="height: 0px;">
													  <small class="d-inline-block">From:</small>
													  <small>theadmin@thetheme.io</small>
													  <br>
													  <small class="d-inline-block">To:</small>
													  <small>subscriber@yahoo.com</small>
													</div>
												  </div>
												</div>
											</header>
											
										</div>
										
									</div>
								</div>
								<!-- End Message -->
								
								<!-- Start Settings -->
								<div id="settings" class="tab-pane fade">
									<div class="row no-mrg">
										<h3>Edit Profile</h3>
										<div class="edit-pro">
											<div class="col-md-4 col-sm-6">
												<label>First Name</label>
												<input type="text" class="form-control" placeholder="Matthew">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Middle Name</label>
												<input type="text" class="form-control" placeholder="Else">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Last Name</label>
												<input type="text" class="form-control" placeholder="Dana">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Email</label>
												<input type="email" class="form-control" placeholder="dana.mathew@gmail.com">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Phone</label>
												<input type="text" class="form-control" placeholder="+91 258 475 6859">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Zip / Postal</label>
												<input type="text" class="form-control" placeholder="258 457 528">
											</div>
											<!-- <div class="col-md-4 col-sm-6">
												<label>Address</label>
												<input type="text" class="form-control" placeholder="204 Lowes Alley">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Address 2</label>
												<input type="text" class="form-control" placeholder="Software Developer">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Organization</label>
												<input type="text" class="form-control" placeholder="Software Developer">
											</div> -->
											<div class="col-md-4 col-sm-6">
												<label>City</label>
												<input type="text" class="form-control" placeholder="Chandigarh">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>State</label>
												<input type="text" class="form-control" placeholder="Punjab">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Country</label>
												<input type="text" class="form-control" placeholder="India">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Old Password</label>
												<input type="password" class="form-control" placeholder="*********">
											</div>
											<div class="col-md-4 col-sm-6">
												<label>New Password</label>
												<input type="password" class="form-control" placeholder="*********">
											</div>
											<!-- <div class="col-md-4 col-sm-6">
												<label>Old Password</label>
												<input type="password" class="form-control" placeholder="*********">
											</div> -->
											<div class="col-md-4 col-sm-6">
												<label>About you</label>
												<textarea class="form-control" placeholder="Write Something"></textarea>
											</div>
											<div class="col-md-4 col-sm-6">
												<label>Upload Profile Pic</label>
												<!-- <form action="/upload-target" class="dropzone dz-clickable profile-pic"> --> 


													<div class="dz-default dz-message">
														<i class="fa fa-cloud-upload"></i>
														<span>Drop files here to upload</span>
													</div>
												<!-- </form> -->
											</div>
											<!-- <div class="col-md-4 col-sm-6">
												<label>Upload Profile Cover</label>
												<form action="/upload-target" class="dropzone dz-clickable profile-cover">
													<div class="dz-default dz-message">
														<i class="fa fa-cloud-upload"></i>
														<span>Drop files here to upload</span>
													</div>
												</form>
											</div> -->
											<div class="col-sm-12">
												<button type="button" class="update-btn">Update Now</button>
											</div>
										</div>
									</div>
								</div>
								<!-- End Settings -->
							</div>
							<!-- Start All Sec -->
						</div>  
                    </div>
                </div>
            </div>
        </section>
		<!-- Candidate Profile End -->
		
			<!-- Footer Section Start -->
			<?php
				include_once("footer.php");
			?>
			<div class="clearfix"></div>
			<!-- Footer Section End -->
			
			
			
			<!-- Scripts
			================================================== -->
			<?php
				include_once("javascript.php");
			?>
		</div>
	</body>
	   </form>
			
</html>