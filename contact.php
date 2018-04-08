<!doctype html>
<html lang="en">
	<head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CMH Retro | Contact</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<header>
			<nav class="navbar navbar-inverse">
  			  <div class="container">
  				<div class="navbar-header">
  				  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  				  </button>
  				  <a class="navbar-brand" href="#">CMH Retro</a>
  				</div>
  				<div class="collapse navbar-collapse" id="myNavbar">
  				  <ul class="nav navbar-nav navbar-right">
  					<li><a href="index.php">Home</a></li>
  					<li><a href="news.php">News</a></li>
  					<li class="active"><a href="contact.php">Contact</a></li>
  					<li><a href="shop.php">Shop</a></li>
  				  </ul>
  				</div>
  			  </div>
  			</nav>
		</header>
		<main>
			<section>
				<div class="parallax4 gOverlay">
					<div class="parallaxText">
						<h1>Contact Title</h1>
					</div>
				</div>
			</section>
			<section id="contact">
				<div class="wSkew2"></div>
				<div class="contact">
					<form method="post" action="contact.php#alert" id="contact" class="form-horizontal  text-left">
						<div class="form-group text-left">
							<label for="name">Full Name:</label>
							<input name="name" type="name" class="form-control" id="name" placeholder= "First Name, Last Name">
						</div>
						<div class="form-group text-left">
							<label for="email">Email:</label>
							<input name="email" type="email" class="form-control" id="email" placeholder= "example@email.com">
						</div>
						<div class="form-group text-left">
							<label for="subject">Subject:</label>
							<input name="subject" type="text" class="form-control" id="subject" placeholder= "What is your email about?">
						</div>
						<div class="form-group text-left">
							<label for="message">Message:</label>
							<textarea class="form-control" rows="4" cols="50" id="message" name="message" style="width:100%" placeholder= "Type message here..." ></textarea>
						</div>
						<input id="sendButton" class="button" type="submit" value="Send" name="submit">
					</form>
				</div>
			</section>
		</main>
		<footer>
			<div class="container">
				<div class="mainFooterDiv">
					<div class="footerDiv pages">
						<h4>My site</h4>
						<a href="#">Home</a>
						<a href="#">News</a>
						<a href="#">Contact</a>
						<a href="#">Shop</a>
					</div>
					<div class="footerDiv connect">
						<h4>Connect with me</h4>
						<div class="sMedia">
							<a href="#">Facebook</a>
							<a href="#">Instagram</a>
							<a href="#">Twitter</a>
						</div>
						<div class="contactInfo">
							<p>cmhretro@gmail.com</p>
							<p>1.562.457.8934</p>
						</div>
						<div class="back-to-top">
							<a href="#">Back to top^^^</a>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright">
				<p>&copy; <?php echo date('Y'); ?> CMH Retro.<br>All rights reserved.</p>
			</div>
		</footer>
	</body>
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
</html>