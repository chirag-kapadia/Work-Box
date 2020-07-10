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
					<h1>Payment Portfolio</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
			
			<!-- Browse Resume List Start -->
			<section class="manage-company">
				<div class="container">
					<!-- Company Searrch Filter Start -->
					 
					<!-- Company Searrch Filter End -->
					<?php
						$Payment_portfolio="SELECT tblclient.ClientID,tblfreelancer.*,tblpayment.*,tbljobs.*,tbljobassign.*
									FROM tblpayment
									INNER JOIN tblclient ON tblpayment.ClientID = tblclient.ClientID
									INNER JOIN tblfreelancer ON tblpayment.FreelancerID = tblfreelancer.FreelancerID
									INNER JOIN tbljobs ON tblpayment.JobID=tbljobs.JobID
									INNER JOIN tbljobassign ON tblpayment.FreelancerID=tbljobassign.FreelancerID
									WHERE tblclient.ClientID=".$_SESSION['ClientID'];
							$Payment_portfolio_Exe=mysqli_query($con,$Payment_portfolio);
							while($Payment_portfolio_fetch=mysqli_fetch_array($Payment_portfolio_Exe))
							{


					?>
					
						<article>
							<div class="brows-resume">
								<div class="row no-mrg">
									<div class="col-md-2 col-sm-2">
										<div class="brows-resume-pic">
											<img src="assets\img\can-1.png" class="img-responsive" alt="">
										</div>
									</div>
									<div class="col-md-4 col-sm-4">
										<div class="brows-resume-name">
											<h3><?php echo $Payment_portfolio_fetch["F_FirstName"]." ".$Payment_portfolio_fetch["F_LastName"]?></h3>
											<span class="brows-resume-designation"><?php echo $Payment_portfolio_fetch ['ProfessionalTitle']?></span>
											<p>Hired On: <?php echo $Payment_portfolio_fetch ['AssignOn']?></p>
										</div>
									</div>
									<div class="col-md-4 col-sm-4">
										<div class="brows-resume-location">
											<p><h4>Work : <?php echo $Payment_portfolio_fetch ['jobTitle']?></h4> </p>
											<p><h5>Payment Status :
												<?php
													if($Payment_portfolio_fetch['IsPaid']==0)
													{
												?>
														Pending
												<?php
													}
													else
													{
												?>
														Paid
												<?php
													}
												?>
											</h5> </p>
										</div>
									</div>
									<div class="col-md-2 col-sm-2">
										<div class="browse-resume-rate">
											<span><i class="fa fa-money"></i>Amount: ₹ <?php echo $Payment_portfolio_fetch['Amount']?></span>
										</div></br>
										<?php
											if($Payment_portfolio_fetch['IsPaid']==0)
											{


										?>
										<div class="detail-pannel-footer-btn pull-right">
											<a href="payment.php"  class="footer-btn grn-btn" title="">Pay Now</a>
									</div>
									<?php
										}
									?>
								</div>
								
							</div>
						</article>
						<?php
							}
						?>
					
					
						
					
					
					
					
				</div>
			</section>
			<!-- Browse Resume List End -->
			
			<!-- Footer Section Start -->
				<?php include_once("footer.php");?>
			<div class="clearfix"></div>
			<!-- Footer Section End -->
			
			<!-- Sign Up Window Code -->
			<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-body">
							<div class="tab" role="tabpanel">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#login" role="tab" data-toggle="tab">Sign In</a></li>
								<li role="presentation"><a href="#register" role="tab" data-toggle="tab">Sign Up</a></li>
							</ul>
							<!-- Tab panes -->
							<div class="tab-content" id="myModalLabel2">
								<div role="tabpanel" class="tab-pane fade in active" id="login">
									<img src="assets\img\logo.png" class="img-responsive" alt="">
									<div class="subscribe wow fadeInUp">
										<form class="form-inline" method="post">
											<div class="col-sm-12">
												<div class="form-group">
													<input type="email" name="email" class="form-control" placeholder="Username" required="">
													<input type="password" name="password" class="form-control" placeholder="Password" required="">
													<div class="center">
													<button type="submit" id="login-btn" class="submit-btn"> Login </button>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>

								<div role="tabpanel" class="tab-pane fade" id="register">
								<img src="assets\img\logo.png" class="img-responsive" alt="">
									<form class="form-inline" method="post">
											<div class="col-sm-12">
												<div class="form-group">
													<input type="text" name="email" class="form-control" placeholder="Your Name" required="">
													<input type="email" name="email" class="form-control" placeholder="Your Email" required="">
													<input type="email" name="email" class="form-control" placeholder="Username" required="">
													<input type="password" name="password" class="form-control" placeholder="Password" required="">
													<div class="center">
													<button type="submit" id="subscribe" class="submit-btn"> Create Account </button>
													</div>
												</div>
											</div>
										</form>
								</div>
							</div>
							</div>
						</div>
						</div>
				</div>
			</div>   
			<!-- End Sign Up Window -->
			
			
			<!-- Scripts
			================================================== -->
			<script type="text/javascript" src="assets\plugins\js\jquery.min.js"></script>
			<script type="text/javascript" src="assets\plugins\js\viewportchecker.js"></script>
			<script type="text/javascript" src="assets\plugins\js\bootstrap.min.js"></script>
			<script type="text/javascript" src="assets\plugins\js\bootsnav.js"></script>
			<script type="text/javascript" src="assets\plugins\js\select2.min.js"></script>
			<script type="text/javascript" src="assets\plugins\js\wysihtml5-0.3.0.js"></script>
			<script type="text/javascript" src="assets\plugins\js\bootstrap-wysihtml5.js"></script>
			<script type="text/javascript" src="assets\plugins\js\datedropper.min.js"></script>
			<script type="text/javascript" src="assets\plugins\js\dropzone.js"></script>
			<script type="text/javascript" src="assets\plugins\js\loader.js"></script>
			<script type="text/javascript" src="assets\plugins\js\owl.carousel.min.js"></script>
			<script type="text/javascript" src="assets\plugins\js\slick.min.js"></script>
			<script type="text/javascript" src="assets\plugins\js\gmap3.min.js"></script>
			<script type="text/javascript" src="assets\plugins\js\jquery.easy-autocomplete.min.js"></script>
			<!-- Custom Js -->
			<script src="assets\js\custom.js"></script>
			<script src="assets\js\jQuery.style.switcher.js"></script>
			<script type="text/javascript">
				$(document).ready(function() {
					$('#styleOptions').styleSwitcher();
				});
			</script>
			<script>
				function openRightMenu() {
					document.getElementById("rightMenu").style.display = "block";
				}

				function closeRightMenu() {
					document.getElementById("rightMenu").style.display = "none";
				}
			</script>
		</div>
	</body>
</html>