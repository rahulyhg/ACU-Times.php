<?php require_once 'autoload.php'; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>ACU Times | Contact Us</title>
		<?php require_once("Header.php"); ?>
	</head>
	<body>
		<?php include ("Navbar.php"); ?>
		<div class="container">
			<!------------------------ Header ------------------------>
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Contact <small>US</small></h1>
				</div>
			</div>
			<!------------------------ /Header ------------------------>

			<div class="row">
				<div class="col-md-8">
					<!------------------------ Embedded Google Map ------------------------>
					<iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJmUInXWj_WBQRt8Xjrq9pO0c&key=..."></iframe>
				</div>
				<!------------------------ Contact Details Column ------------------------>
				<div class="col-md-4">
					<h3>Contact Details</h3>
					<p>
						4th Industrial Zone, Banks Complex,<br>6th OF OCTOBER, Giza Governorate
					</p>
					<p><i class="fa fa-phone"></i> 
						<abbr title="Phone">Phone</abbr>: +20 123 45678</p>
					<p><i class="fa fa-envelope-o"></i> 
						<abbr title="Email">Email</abbr>: <a href="mailto:name@example.com">example@acu.edu.net</a>
					</p>
					<ul class="list-unstyled list-inline list-social-icons">
						<li>
							<a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-instagram fa-2x"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-youtube-play fa-2x"></i></a>
						</li>
					</ul>
				</div>
			</div>

			<!------------------------ Contact Form ------------------------>
			<div class="row">
				<div class="col-md-8">
					<h3>Send us a Message</h3>
					<form name="sentMessage" id="contactForm" method="post" action="ContactUs.php">
						<div class="control-group form-group">
							<div class="controls">
								<label>Full Name:</label>
								<input type="text" class="form-control" id="name" name="name" required>
								<p class="help-block"></p>
							</div>
						</div>
						<div class="control-group form-group">
							<div class="controls">
								<label>Phone Number:</label>
								<input type="tel" class="form-control" id="phone" name="phone" required>
							</div>
						</div>
						<div class="control-group form-group">
							<div class="controls">
								<label>Email Address:</label>
								<input type="email" class="form-control" id="email" name="email" required>
							</div>
						</div>
						<div class="control-group form-group">
							<div class="controls">
								<label>Message:</label>
								<textarea rows="10" cols="100" class="form-control" id="message" name="message" required maxlength="999" style="resize:none"></textarea>
							</div>
						</div>
						<button type="submit" class="btn btn-primary">Send Message</button>
					</form>
				</div>

			</div>
		</div>
		<?php include ("Footer.php"); ?>
	</body>
</html>