<!DOCTYPE HTML>
<!--
	Dopetrope by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>Contact Us | RMES</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta name="description" content="Radon measurementand elimination services in south eastern Wisconsin." />
	<meta name="author" content="Caleb Osborne" />
	<meta name="keywords" content="Radon measurement, Radon Mitigation, Radon elimination, radon services" />
	<link rel="icon" type="image/x-icon" href="images/favicon-32x32.png" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="assets/css/styles.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/92b3784d65.js" crossorigin="anonymous"></script>
</head>

<body class="homepage is-preload">
	<div id="page-wrapper">

		<!-- Header -->
		<section id="header">
						<!-- Nav -->
						<nav class="sticky" id="nav">
							<a href="index.html"><img class="logo-small" src="images/rmes-logo.jpg"></a>
							<a href="index.html#qq"><button class="sticky-button"><i class="fa-solid fa-house"></i> Quick Quote</button></a>
							<ul class="navbar">
								<li><a href="index.html">Home</a></li>
								<li><a href="test.html">Radon Tests</a></li>
								<li><a href="quote.html">Mitigation Quotes</a></li>
								<li><a href="about-radon.html">About Radon</a></li>
								<li class="current"><a href="contact.html">Contact Us</a></li>
							</ul>
						</nav>
						<!-- Mobile Nav -->
						<nav class="sticky-mobile" id="nav-mobile">
							<div class="row" style="justify-content: center; margin:0px;">
								<div class="col-2" style="padding:5px 0px 3px 0px;">
									
								</div>
								<div class="col-8" style="padding:5px 0px 3px 0px; justify-content: center; display:contents;">
									<a href="index.html"><img class="logo-mobile" src="images/rmes-logo-1.png"></a>
								</div>
								<div class="col-2" style="padding:5px 0px 3px 0px; justify-content: center;">
									<a href="#qq"><button class="sticky-button-mobile"><i class="fa-solid fa-house"></i><br> Quick Quote</button></a>
								</div>
							</div>
						</nav>
		</section>

		<!-- Main -->
		<section id="main">
			<div class="container">

				<!-- Content -->
					<section>
						<div class="container">
							<div class="row">
								<div class="col-8 col-12-medium">
									<header>
										<h2>Contact Us</h2>
									</header>

									<h5>
                    <?php
  if (isset($_REQUEST['email'])) { //if "email" variable is filled out, send email
  
  //Set admin email for email to be sent to (use you own MATC email address)
    $admin_email = "osbornc4@gmatc.matc.edu"; 

  //Set PHP variable equal to information completed on the HTML form
    $email = $_REQUEST['email']; //Request email that user typed on HTML form
    $message = $_REQUEST['message']; //Request message that user typed on HTML form
    $name = $_REQUEST['fname'] . " " .  $_REQUEST['lname'];
    $subject = "RMES Contact Form Submission";
	$subjectB = "RMES Message Confirmation";  
	$fName = $_REQUEST['fname']; 
	$rmes = "RMES | Radon Measurement and Elimination Services"; 
  //Start building the email body combining multiple values from HTML form    
    $body  = "From: " . $name . "\n"; 
    $body .= "Email: " . $email . "\n"; //Continue the email body
    $body .= "Message: " . $message; //Continue the email body

	$bodyB  = "Hi " . $fName . "," . "\n" . "\n" . "We have received your message for RMES! Our team will contact you within the next 5-6 business days. If you have any further questions please call 414-000-0000." . "\n" . "\n" . "Thank you," . "\n" . "\n" . "RMES | Radon Measurement and Elimination Services" . "\n" . "\n";
	$bodyB .= "Your Message: " . $message;
  //Create the email headers for the from and CC fields of the email     
    $headers = "From: " . $name . " <" . $email . ">"; //Create email "from"
    $headersB = "From: " . $rmes . " <" . $admin_email . ">"; //Send to visitor
    
  //Actually send the email from the web server using the PHP mail function
  mail($admin_email, $subject, $body, $headers); 
  mail($email, $subjectB, $bodyB, $headersB); 
    
  //Display email confirmation response on the screen
  echo "Thank you for contacting us!"; 
  }
  
  //if "email" variable is not filled out, display an error
  else  { 
     echo "There has been an error!";
        }
?>
</h5>
<br><br>
<a href="contact.html" class="button">Reset Form</a>
								</div>
								<div class="col-4 col-12-medium">
									<section>
										<header>
											<h2>Find us on social media</h2>
										</header>
										<ul class="social">
											<li><a class="icon brands fa-facebook-f" href="https://www.facebook.com/"
													target="_blank"><span class="label">Facebook</span></a></li>
											<li><a class="icon brands fa-linkedin-in" href="https://www.linkedin.com/"
													target="_blank"><span class="label">LinkedIn</span></a></li>
										</ul>
										<ul class="contact">
											<li>
												<h3>Address</h3>
												<p>
													RMES<br />
													1234 Somewhere Road Suite<br />
													Milwaukee, WI 00000-0000
												</p>
											</li>
											<li>
												<h3>Mail</h3>
												<p><a href="contact.html">contact@rmes.com</a></p>
											</li>
											<li>
												<h3>Phone</h3>
												<p>(414) 000-0000</p>
											</li>
										</ul>
									</section>
								</div>
							</div>
						</div>
					</section>
			</div>
		</section>
		<!-- Footer -->
		<section id="footer">
								<div id="intro-b" class="col-12">
									<div class="row">
										<div class="col-4 col-12-medium">
											<a href="https://aarst.org/" target="_blank"><img src="images/aarst-sm.png"></a>
											<a href="https://www.bbb.org/us/wi/elm-grove/profile/radon-mitigation/radon-measurement-elimination-services-0694-44001668" target="_blank"><img src="images/bbb-sm.png"></a>
										</div>
										<div class="col-4 col-12-medium">
											<div id="copyright">
												<ul class="links">
													<li>&copy; 2023 RMES All rights reserved.</li>
												</ul>
											</div>
										</div>
										<div class="col-4 col-12-medium">
										<a href="privacy-policy.html" target="_blank" class="button alt">Privacy Policy</a>
										<a href="privacy-policy.html" target="_blank" class="button alt">Terms of Use</a>
										</div>
										
									</div>
								</div>
					</section>

			<!-- Scripts -->
				<script src="assets/js/jquery.min.js"></script>
				<script src="assets/js/jquery.dropotron.min.js"></script>
				<script src="assets/js/browser.min.js"></script>
				<script src="assets/js/breakpoints.min.js"></script>
				<script src="assets/js/util.js"></script>
				<script src="assets/js/main.js"></script>
				<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
				<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
				<script src="assets/js/header.js"></script>
				<script src="assets/js/scrollFade.js"></script>
				<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
				<script src="faqs.js"></script>
				<script src="assets/js/form-quote.js"></script>
				<script src="assets/js/form-contact.js"></script>
	
		</body>
	</html>