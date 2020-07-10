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
	<body>
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
					<h1>Browse Companies</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
			
			
			
			<!-- Browse Company List Start -->
			<section class="browse-company">
				<div class="container">
					
					<!-- Company Searrch Filter Start -->
					<div class="row extra-mrg">
						<div class="wrap-search-filter">
							
						</div>
					</div>
					<!-- Company Searrch Filter End -->
					
					<!-- Single Browse Company -->
					<?php
					$select_company="select * from tbljobs";
					$select_company_Exe=mysqli_query($con,$select_company) or die(mysqli_error($con));
					while($select_company_fetch=mysqli_fetch_array($select_company_Exe))
					{


						?>
						<a href="joblist.php?JBID=<?php echo $select_company_fetch['JobID']?>&CName=<?php echo $select_company_fetch['companyName']?>">
							<div class="item-click" >
								<article>
									<div class="brows-company">
										<div class="col-md-2 col-sm-2">
											<div class="brows-company-pic">
												<img src="assets\JobProfile\<?php echo $select_company_fetch['jobProfile']?>" class="img-responsive" alt="">
											</div>
										</div>
										<div class="col-md-4 col-sm-4">
											<div class="brows-company-name">
												<a href="joblist.php?JBID=<?php echo $select_company_fetch['JobID']?>&CName=<?php echo $select_company_fetch['companyName']?>"><h4><?php echo $select_company_fetch['companyName']?></h4></a>
												
											</div>
										</div>
										<div class="col-md-3 col-sm-3">
											<div class="brows-company-location">
												<p><i class="fa fa-map-marker"></i> <?php echo $select_company_fetch['companyLocation']?></p>
											</div>
										</div>
										<div class="col-md-3 col-sm-3">
											<div class="brows-company-position">
												<ul class="detail-footer-social">
													<li><a target="_blank" href="<?php echo $select_company_fetch['facebookLink'];?>"><i class="fa fa-facebook"></i></a></li>
													
													<li><a target="_blank" href="<?php echo $select_company_fetch['twitterLink'];?>"><i class="fa fa-twitter"></i></a></li>
													<li><a target="_blank" href="<?php echo $select_company_fetch['instagramLink'];?>"><i class="fa fa-instagram"></i></a></li>
													<li><a target="_blank" href="<?php echo $select_company_fetch['linkedinLink'];?>"><i class="fa fa-linkedin"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</article>
							</div>
						</a>
						<?php
					}
					?>
					
					<div class="row">
						<ul class="pagination">
							<li><a href="#">&laquo;</a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li> 
							<li><a href="#">4</a></li> 
							<li><a href="#"><i class="fa fa-ellipsis-h"></i></a></li> 
							<li><a href="#">&raquo;</a></li> 
						</ul>
					</div>
					
				</div>
			</section>
			<!-- Browse Company List End -->
			
			<!-- Footer Section Start -->
			<?php
			include_once("footer.php");
			?>
			<div class="clearfix"></div>
			<!-- Footer Section End -->
			
			<!-- Sign Up Window Code -->
			
			
			<!-- End Sign Up Window -->
			
			<?php
			include_once("sidebar.php");
			?>
			
			<!-- Scripts
				================================================== -->
				<?php
				include_once("javascript.php");
				?>
			</div>
		</body>
		</html>