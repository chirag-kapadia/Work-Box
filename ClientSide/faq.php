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
				include_once("navbar1.php");
			?>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			
			<!-- Title Header Start -->
			<section class="inner-header-title" style="background-image:url(assets/img/banner-10.jpg);">
				<div class="container">
					<h1>FAQ</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
			
			<!-- Accordion Design Start -->
			<section class="accordion">
				<div class="container">
					<div class="col-md-12 col-sm-12">
						<div class="simple-tab">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingOne">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											   If your application to join is declined?
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
										<div class="panel-body">
											<p>An application is required to join . Once submitted, we typically take 24 hours to review your application and we will notify you via email if your application is approved or declined. If we find that our marketplace doesn't have opportunities for you based on your combination of skills and experience, your application to join won't be accepted.You need to update your profile </p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingTwo">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												What is the eligibility to join?
											</a>
										</h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
										<div class="panel-body">
											<p>With a few exceptions, most everyone over the age of 18 who has an Internet connection can apply to join. Although not all applications are approved, we're proud to support a thriving network of global freelancers.</p>
										</div>
									</div>
								</div>
								
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingThree">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												Get Started with us
											</a>
										</h4>
									</div>
									<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
										<div class="panel-body">
											<p>Once your application to join is accepted.<br>
												1.Complete the Getting Started Checklist (on the Find Jobs page).<br>
												2.Complete your freelancer profile (including skills, portfolio, and certifications), which serves as your resume and is your most powerful tool for getting hired.
											
</p>
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingFour">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
												How to contact WorkBox customer support?
											</a>
										</h4>
									</div>
									<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
										<div class="panel-body">
											<p>Go to contact us page to contact us.</p>
										</div>
									</div>
								</div>
								
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingFive">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
												How to  read feedback from clients?
											</a>
										</h4>
									</div>
									<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
										<div class="panel-body">
											<p>To see your feedback for any contract.<br>
1.Go to My Jobs > All Contracts.<br>
2.Check the Include closed contracts box and then click the title of the contract to get to the details page.<br>
3.Click Terms & Settings to view the feedback.</p><br>
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingSix">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
												Multiple Account Types
											</a>
										</h4>
									</div>
									<div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
										<div class="panel-body">
											<p>You can still only have one account on WorkBox, but you cannot use that same account as a freelancer, client, and agency. 
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingEight">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
												How to change your password or ask a security question?
											</a>
										</h4>
									</div>
									<div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
										<div class="panel-body">
											<p>It is recommended that you change your password every 90 days and use a strong password that includes uppercase, lowercase, numbers, and symbols. Your security answer should be something memorable for you, but not easy for someone to guess or find online. Do not share your password or security answer with anyone, and never allow others to log into your account. 
										</div>
									</div>
								</div>


								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingNine">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
												How to edit account informaton?
											</a>
										</h4>
									</div>
									<div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
										<div class="panel-body">
											<p>You may update the following anytime<br>
1.Freelancer profile – including your education, employment history, skills, title, and portfolio<br>
2.Security question<br>
3.Personal and security email addresses – Be sure to use an address you check frequently. If you change your personal email address in your account, you will need to accept a confirmation message.<br>
4.Address, phone number, and time zone <br>
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingTen">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
												How to manage notifications?
											</a>
										</h4>
									</div>
									<div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
										<div class="panel-body">
											<p>By default, we automatically send you notifications about your activity on WorkBox. You can choose to not receive desktop, mobile and email notifications at any time.
										</div>
									</div>
								</div>


								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingEleven">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
												Essential items for your profile
											</a>
										</h4>
									</div>
									<div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">
										<div class="panel-body">
											<p>Creating a winning profile is the first step to becoming a successful freelancer.For information and tips on some of the essential items in your profile please see tips below.<br>
												1.Create You profile title and URL<br>
												2.Add profile photo<br>
												3.Add profile overview<br>
												4.Add hourly rate<br>
												5.Add skills<br>
												6.Set your english proficiency<br>
												7.Add Employement history<br>
												8.Add Education<br>
												9.Set your experience level<br>
												10.Set your service categories<br>

										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingTwelve">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
												Government Id verification
											</a>
										</h4>
									</div>
									<div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwelve">
										<div class="panel-body">
											<p>You will need to take a picture of your government-issued ID in order to verify your identity. The acceptable forms of ID vary by country and will be listed on the form. Don't crop, rotate, touch up, adjust colors, or alter the images in any way.
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingThirteen">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
												Add Skills
											</a>
										</h4>
									</div>
									<div id="collapseThirteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThirteen">
										<div class="panel-body">
											<p>To add skills to your profile<br>
1.Go to Find Work > Profile.<br>
2.Scroll down to the Skills section and click the Edit button (pencil icon).<br>
3.Start typing the name of a skill, then select the best match from the list provided. If you want to enter more skills, repeat this step for each.<br>
4.You can rank or order your skills by moving the tags in the editor window. This order is how they will appear in your profile.<br>
5.Click the Save button.<br>
										</div>
									</div>
								</div>


								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingFourteen">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
												Freelancer program and perks
											</a>
										</h4>
									</div>
									<div id="collapseFourteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFourteen">
										<div class="panel-body">
											<p>WorkBox has three programs that offer eligible freelancers special perks and opportunities. The purpose of each program is a little different:<br>

											1.Rising Talent: To help you build your business reputation on WorkBox more quickly<br>
											2.Top Rated: To highlight your impressive reputation on WorkBox and help you continue your success<br>
											3.Premium Services: To provide the highest prioritization by WorkBox when we highlight freelancers for projects (when project criteria have been met)
										</div>
									</div>
								</div>


								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingFifteen">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
												Feedback removal
											</a>
										</h4>
									</div>
									<div id="collapseFifteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFifteen">
										<div class="panel-body">
											<p>As a Top Rated freelancer or agency, you can request to remove feedback from your Job Success Score (JSS) for one ended contract at a time. Additionally, you can choose whether to remove a client's public rating and comment (if any) from your profile.
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="heading16">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse16" aria-expanded="false" aria-controls="collapse16">
												How to add certifications?
											</a>
										</h4>
									</div>
									<div id="collapse16" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading16">
										<div class="panel-body">
											<p>To add a certification<br>
												1.Go to Find Work > Profile<br>
												2.Scroll down to the Certifications section and click the Add button<br>
												3.Select a verifiable certification from the list and follow the instructions provided.<br>
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="heading17">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse17" aria-expanded="false" aria-controls="collapse17">
											  Job success score
											</a>
										</h4>
									</div>
									<div id="collapse17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading17">
										<div class="panel-body">
											<p>Your Job Success Score (JSS) is a measure of your client's satisfaction with your work and success. Talented freelancers who deliver high-quality work to their clients find that the scores on their profiles help them promote their freelance businesses in the marketplace and win new clients.


										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="heading18">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse18" aria-expanded="false" aria-controls="collapse18">
												Edit freelancer profile
											</a>
										</h4>
									</div>
									<div id="collapse18" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading18">
										<div class="panel-body">
											<p>To edit most information on your freelancer profile, go to your Profile. Each section has an Edit or Add button.
										</div>
									</div>
								</div>

								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="heading19">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse19" aria-expanded="false" aria-controls="collapse19">
												Change your profile name
											</a>
										</h4>
									</div>
									<div id="collapse19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading19">
										<div class="panel-body">
											<p>1.Changing your name to anything other than a recognized name variation (for example James to Jim) will require ID verification<br>
											2.To set up payment to your bank account, your name in Upwork must match your name on your bank account<br>
											3.You can't transfer accounts from one person to another<br>
										</div>
									</div>
								</div>


								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="heading20">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse20" aria-expanded="false" aria-controls="collapse20">
												Earnings on your profile
											</a>
										</h4>
									</div>
									<div id="collapse20" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading20">
										<div class="panel-body">
											<p>Contracts take about 24 hours to appear on your profile after your client pays at least $1.00. Contracts not meeting this minimum are hidden from your profile and excluded from your work and feedback history.
										</div>
									</div>
								</div>


                                <div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingSeven">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
											Give your feedback
											</a>
										</h4>
									</div>
									<div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
										<div class="panel-body">
											<p>When a contract ends, clients usually leave you feedback as part of that process. As a freelancer, you also can leave public feedback about your experience with the client.</p>
										</div>
									</div>
								</div>


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