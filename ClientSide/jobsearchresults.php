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
			<section class="inner-header-page">
				<div class="container">
					
					<h2>Search Results</h2>
					<p>The top freelancing website trusted by over 5 million businesses.</p>
					
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
			
			<!-- Accordion Design Start -->
			<section class="accordion">
				<div class="container">
					
					<!-- search filter -->
					<div class="row extra-mrg">
						<div class="wrap-search-filter">
							<form>
								<div class="col-md-3 col-sm-3">
									<input type="text" class="form-control" placeholder="Anywhere...">
								</div>
								<div class="col-md-3 col-sm-3">
									<input type="text" class="form-control" placeholder="Keyword. Design, Seo..">
								</div>
								<div class="col-md-3 col-sm-3">
									<select class="form-control" id="j-category">
										<option value="">&nbsp;</option>
										<option value="1">Information Technology</option>
										<option value="2">Mechanical</option>
										<option value="3">Hardware</option>
										<option value="4">Hospitality & Tourism</option>
										<option value="5">Education & Training</option>
										<option value="6">Government & Public</option>
										<option value="7">Architecture</option>
									</select>

								</div>
								<div class="col-md-3 col-sm-3">
									<button type="submit" class="btn btn-primary full-width">Filter</button>
								</div>
							</form>
						</div>
					</div>
					<!-- search filter End -->
					
					<!-- Freelancers Start -->
					<div class="row">
						
						<!-- Single Freelancer & Premium job -->
						<div class="col-md-4 col-sm-6">
							<div class="popular-jobs-container">
								<div class="popular-jobs-box">
									<span class="popular-jobs-status bg-success">hourly</span>
									<h4 class="flc-rate">$17/hr</h4>
									<div class="popular-jobs-box">
										<div class="popular-jobs-box-detail">
											<h4>Google Inc</h4>
											<span class="desination">Software Designer</span>
										</div>
									</div>
									<div class="popular-jobs-box-extra">
										<ul>
											<li>Php</li>
											<li>Android</li>
											<li>Html</li>
											<li class="more-skill bg-primary">+3</li>
										</ul>
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
									</div>
								</div>
								<a href="popular-jobsr-detail.html" class="btn btn-popular-jobs bt-1">View Detail</a>
							</div>
						</div>
						
						<!-- Single Freelancer & Premium job -->
						<div class="col-md-4 col-sm-6">
							<div class="popular-jobs-container">
								<div class="popular-jobs-box">
									<span class="popular-jobs-status bg-warning">Monthly</span>
									<h4 class="flc-rate">$570/Mo</h4>
									<div class="popular-jobs-box">
										<div class="popular-jobs-box-detail">
											<h4>Duff Beer</h4>
											<span class="desination">Marketting</span>
										</div>
									</div>
									<div class="popular-jobs-box-extra">
										<ul>
											<li>Php</li>
											<li>Android</li>
											<li>Html</li>
											<li class="more-skill bg-primary">+3</li>
										</ul>
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
									</div>
								</div>
								<a href="popular-jobsr-detail.html" class="btn btn-popular-jobs bt-1">View Detail</a>
							</div>
						</div>
						
						<!-- Single Freelancer & Premium job -->
						<div class="col-md-4 col-sm-6">
							<div class="popular-jobs-container">
								<div class="popular-jobs-box">
									<span class="popular-jobs-status bg-info">Weekly</span>
									<h4 class="flc-rate">$200/We</h4>
									<div class="popular-jobs-box">
										<div class="popular-jobs-box-detail">
											<h4>Cyberdyne Systems</h4>
											<span class="desination">Human Resource</span>
										</div>
									</div>
									<div class="popular-jobs-box-extra">
										<ul>
											<li>Php</li>
											<li>Android</li>
											<li>Html</li>
											<li class="more-skill bg-primary">+3</li>
										</ul>
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
									</div>
								</div>
								<a href="popular-jobsr-detail.html" class="btn btn-popular-jobs bt-1">View Detail</a>
							</div>
						</div>
						
						<!-- Single Freelancer & Premium job -->
						<div class="col-md-4 col-sm-6">
							<div class="popular-jobs-container">
								<div class="popular-jobs-box">
									<span class="popular-jobs-status bg-danger">Yearly</span>
									<h4 class="flc-rate">$2000/Pa</h4>
									<div class="popular-jobs-box">
										<div class="popular-jobs-box-detail">
											<h4>Wayne Enterprises</h4>
											<span class="desination">App Designer</span>
										</div>
									</div>
									<div class="popular-jobs-box-extra">
										<ul>
											<li>Php</li>
											<li>Android</li>
											<li>Html</li>
											<li class="more-skill bg-primary">+3</li>
										</ul>
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
									</div>
								</div>
								<a href="popular-jobsr-detail.html" class="btn btn-popular-jobs bt-1">View Detail</a>
							</div>
						</div>
						
						<!-- Single Freelancer & Premium job -->
						<div class="col-md-4 col-sm-6">
							<div class="popular-jobs-container">
								<div class="popular-jobs-box">
									<span class="popular-jobs-status bg-warning">monthly</span>
									<h4 class="flc-rate">$480/Mo</h4>
									<div class="popular-jobs-box">
										<div class="popular-jobs-box-detail">
											<h4>Gekko & Co</h4>
											<span class="desination">Data Analysist</span>
										</div>
									</div>
									<div class="popular-jobs-box-extra">
										<ul>
											<li>Php</li>
											<li>Android</li>
											<li>Html</li>
											<li class="more-skill bg-primary">+3</li>
										</ul>
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
									</div>
								</div>
								<a href="popular-jobsr-detail.html" class="btn btn-popular-jobs bt-1">View Detail</a>
							</div>
						</div>
						
						<!-- Single Freelancer & Premium job -->
						<div class="col-md-4 col-sm-6">
							<div class="popular-jobs-container">
								<div class="popular-jobs-box">
									<span class="popular-jobs-status bg-success">hourly</span>
									<h4 class="flc-rate">$17/hr</h4>
									<div class="popular-jobs-box">
										<div class="popular-jobs-box-detail">
											<h4>Ollivander's Shop</h4>
											<span class="desination">Graphic Designer</span>
										</div>
									</div>
									<div class="popular-jobs-box-extra">
										<ul>
											<li>Php</li>
											<li>Android</li>
											<li>Html</li>
											<li class="more-skill bg-primary">+3</li>
										</ul>
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
									</div>
								</div>
								<a href="popular-jobsr-detail.html" class="btn btn-popular-jobs bt-1">View Detail</a>
							</div>
						</div>
						
						<!-- Single Freelancer & Premium job -->
						<div class="col-md-4 col-sm-6">
							<div class="popular-jobs-container">
								<div class="popular-jobs-box">
									<span class="popular-jobs-status bg-info">weekly</span>
									<h4 class="flc-rate">$178/We</h4>
									<div class="popular-jobs-box">
										<div class="popular-jobs-box-detail">
											<h4>Stark Industries</h4>
											<span class="desination">Project Manager</span>
										</div>
									</div>
									<div class="popular-jobs-box-extra">
										<ul>
											<li>Php</li>
											<li>Android</li>
											<li>Html</li>
											<li class="more-skill bg-primary">+3</li>
										</ul>
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
									</div>
								</div>
								<a href="popular-jobsr-detail.html" class="btn btn-popular-jobs bt-1">View Detail</a>
							</div>
						</div>
						
						<!-- Single Freelancer & Premium job -->
						<div class="col-md-4 col-sm-6">
							<div class="popular-jobs-container">
								<div class="popular-jobs-box">
									<span class="popular-jobs-status bg-success">hourly</span>
									<h4 class="flc-rate">$17/hr</h4>
									<div class="popular-jobs-box">
										<div class="popular-jobs-box-detail">
											<h4>Acme Corp</h4>
											<span class="desination">Web Designer</span>
										</div>
									</div>
									<div class="popular-jobs-box-extra">
										<ul>
											<li>Php</li>
											<li>Android</li>
											<li>Html</li>
											<li class="more-skill bg-primary">+3</li>
										</ul>
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
									</div>
								</div>
								<a href="popular-jobsr-detail.html" class="btn btn-popular-jobs bt-1">View Detail</a>
							</div>
						</div>
						
						<!-- Single Freelancer & Premium job -->
						<div class="col-md-4 col-sm-6">
							<div class="popular-jobs-container">
								<div class="popular-jobs-box">
									<span class="popular-jobs-status bg-danger">yearly</span>
									<h4 class="flc-rate">$2700/Pa</h4>
									<div class="popular-jobs-box">
										<div class="popular-jobs-box-detail">
											<h4>Wonka Industries</h4>
											<span class="desination">Manager</span>
										</div>
									</div>
									<div class="popular-jobs-box-extra">
										<ul>
											<li>Php</li>
											<li>Android</li>
											<li>Html</li>
											<li class="more-skill bg-primary">+3</li>
										</ul>
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
									</div>
								</div>
								<a href="popular-jobsr-detail.html" class="btn btn-popular-jobs bt-1">View Detail</a>
							</div>
						</div>
						
						<!-- More -->
						<div class="col-md-12 col-sm-12">
							<div class="text-center">
								<a href="#" class="btn btn-primary">Load More</a>
							</div>
						</div>
						
					</div>
						
				</div>
			</section>
			<!-- Accordion Design End -->
			
			<!-- Footer Section Start -->
			<?php
				include_once("footer.php");
			?>
			<div class="clearfix"></div>
			<!-- Footer Section End -->
			
			<!-- Sign Up Window Code -->
			
			<!-- End Sign Up Window -->
			<button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()"><i class="spin fa fa-cog" aria-hidden="true"></i></button>
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