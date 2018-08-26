<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nekconsortium";
$date = date("d-m-Y H:m:s");
//create coonection
$conn = new mysqli($servername, $username, $password, $dbname);
//check conntion
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>NEKCONSORTIUM | CONTACT</title>
<link rel="shortcut icon" class="logo" href="images/logo.jpg">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Dream life Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">   
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" property="" />   
<link rel="stylesheet" href="css/jquery-ui.css" />
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<!-- //js -->
<!-- web-fonts --> 
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- //web-fonts --> 
</head>
<body>
<!-- banner -->
	<div class="banner-1">  
		<div class="header agileinfo-header"><!-- header -->
			<nav class="navbar navbar-default">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a href="index.php" class="logo"></a><a href="index.php">NEK | CONSORTIUM</a></h1>
					</div> 
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-left"> 
							<li><a href="index.php" class="btn w3ls-hover">Home</a></li>
							<li><a href="the_team.php" class="btn w3ls-hover">The Team</a></li>
							<li><a href="the_firm.php" class="btn w3ls-hover">The Firm</a></li>   
							<li><a href="services.php" class="btn w3ls-hover">What we do</a></li>
							<li><a href="portfolio.php" class="btn w3ls-hover">Portfolio</a></li>
							<li><a href="gallery.php" class="btn w3ls-hover">Gallery</a></li>
							<li><a href="contact.php" class="w3ls-hover active">Contact</a></li>
						</ul>	   
						<div class="social-icon">
							<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
							<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a> 
							<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>  
						</div> 
						<div class="clearfix"> </div>
					</div><!-- //navbar-collapse --> 
				</div><!-- //container-fluid -->
			</nav>
		</div><!-- //header -->	
	</div>
	<!-- //banner --> 
	<!-- contact -->
	<div class="w3ls-contact" id="contact">
		<div class="container">
			<div class="w3-hed-all">
			<h3>Contact us</h3>
		    </div>
				<div class="col-md-6 contact-left-w3ls">
					<div class="mail contact-grid-agileinfo">
						<div class="col-md-4 col-sm-4 col-xs-4 contact-icon-wthree">
							<h4>Abuja</h4>
						</div>
						<div class="col-md-8 col-sm-8 col-xs-8 contact-text-agileinfo">
							<p><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>17 First Avenue FHA Estate Gwarinpa Abuja, Nigeria.
							</p>
							<p><span><i class="fa fa-phone" aria-hidden="true"></i></span>+234 8033141532</p>
							<p><span><i class="fa fa-phone" aria-hidden="true"></i></span>+234 8037379002</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="call contact-grid-agileinfo">
						<div class="col-md-4 col-sm-4 col-xs-4 contact-icon-wthree">
							<h4>Accra</h4>
						</div>
						<div class="col-md-8 col-sm-8 col-xs-8 contact-text-agileinfo">
							<p><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>PO Box AN 8227 Accra North, Accra<br> Ghana.
							</p>
							<p><span><i class="fa fa-phone" aria-hidden="true"></i></span>+233 549721197</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="contact-grid-agileinfo">
						<div class="col-md-4 col-sm-4 col-xs-4 contact-icon-wthree">
							<h4>Enugu</h4>
						</div>
						<div class="col-md-8 col-sm-8 col-xs-8 contact-text-agileinfo">
							<p><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>70 Nza Street Independence Layout PO Box 1069 Enugu, Enugu State<br> Nigeria.
							</p>
							<p><span><i class="fa fa-phone" aria-hidden="true"></i></span>+234 8033141532</p>
							<p><span><i class="fa fa-phone" aria-hidden="true"></i></span>+234 7015456392</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="visit wthree-social-icons contact-grid-agileinfo">
						<div class="col-md-4 col-sm-4 col-xs-4 contact-icon-wthree">
							<h4>London</h4>
						</div>
						<div class="col-md-8 col-sm-8 col-xs-8 contact-text-agileinfo">
							<p><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>Unit 2, 166 Middleton Road Morden SM4 6RW London.
							</p>
							<p><span><i class="fa fa-phone" aria-hidden="true"></i></span>+44 7950320540</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-6">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3939.542642478262!2d7.415120414344522!3d9.105360393467917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e755d6fcff77b%3A0x9c798f2c8b24c096!2s17+1st+Avenue%2C+Gwarinpa%2C+Abuja!5e0!3m2!1sen!2sng!4v1527239141411" scrolling="no"></iframe>
				<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d31767.08543114748!2d-0.2417490606214792!3d5.583911940901243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sAN+8227+Accra+North%2C+Accra!5e0!3m2!1sen!2sng!4v1527239845931" scrolling="no"></iframe>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3964.555638324269!2d7.527424!3d6.4510472!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1044a408d7f07d6b%3A0x1936fa9e3c2acc39!2s70+Nza+St%2C+Independence+Layout%2C+Enugu!5e0!3m2!1sen!2sng!4v1527238710457" scrolling="no"></iframe>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2489.7645647724107!2d-0.18677028451416333!3d51.38900497961589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876062ad4f4258b%3A0x845dccc46ce5ec8a!2s2%2C+166+Middleton+Rd%2C+Morden+SM4+6RW%2C+UK!5e0!3m2!1sen!2sng!4v1527239610067" scrolling="no"></iframe>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //contact -->
	<!-- contact -->
<div class="about-bottom">
	<div class="col-md-6 w3l_about_bottom_left">
		<img src="" alt="">
	</div>
	<div class="col-md-6 w3l_about_bottom_right one">
		<div class="abt-w3l">
			<div class="header-w3l">
				<h2 style="color: #101;">Contact Form</h2>
				<h4>send us a mail</h4>
				<form action="#" method="post" class="mod2">
					<div class="col-md-6 col-xs-6 w3l-left-mk">
						<ul>
							<li class="text"><i class="fa fa-user"> Name  :  </i></li>
							<li class="agileits-main"></i><input name="name" type="text" required=""></li>
							<li class="text"><i class="fa fa-envelope"> Email  :  </i></li>
							<li class="agileits-main"></i><input name="email" type="email" required=""></li>
						</ul>
					</div>
					<div class="col-md-6 col-xs-6 w3l-right-mk">
						<ul>
							<li class="text"><i class="fa fa-mobile"> Mobile  :  </i></li>
							<li class="agileits-main"><input name="mobile" type="text" required=""></li>
							<li class="text"><i class="fa fa-envelope-o"> Message  :  </i></li>
							<li class="agileits-main"><textarea placeholder="Type your message here" name="message" style="width: 260px;"></textarea></li>
						</ul>
					</div>
					<div class="clearfix"></div>
					<div class="agile-submit">
						<input type="submit" value="submit">
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
</div>
<!-- //contact -->
	<!-- footer start here -->
	<div class="footer-agile">
		<div class="container">
			<div class="footer-btm-agileinfo">
				<div class="col-md-3 col-xs-3 footer-grid w3social">
					<h3>Our Links</h3>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="the_firm.php" >About</a></li>
						<li><a href="portfolio.php">Portfolio</a></li>
						<li><a href="contact.php">Contact Us</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-xs-3 footer-grid">
					<h3>Contact Info</h3>
					<ul>
						<li><i class="fa fa-map-marker"></i>70 Nza street Independence layout Enugu, Enugu state, Nigeria. </li>
						<li><i class="fa fa-mobile"></i>+234 8033141532</li>
						<li><i class="fa fa-mobile"></i>+234 7015456392</li>
						<li><i class="fa fa-envelope-o"></i><a href="mailto:info@nekconsortium.com">info@nekconsortium.com</a></li>
					</ul>
				</div>
				<div class="col-md-6 col-xs-6 footer-grid footer-review">
					<h3>About us</h3>
					<p>WE BELIEVE that our job as designers is to shape the environment meaningfully for every facet of human activity.  To be  successful at this, our design solutions must derive logically from a thorough understanding of the social, climatic, economic, political, historical, and technological factors of our  time and “environment”.  It is  against the background of these competing factors that posterity will judge our success or failure in environmental design efforts.  Our task in the Nigerian setting increases in complexity and scope year after year.</p>
					
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="footer-agilem">
				<div class="col-sm-8 col-xs-9 copy-w3lsright">
					<p>© 2018 Nekconsortium. All rights reserved. | Design by <a href="http://mectechnologies.com" target="_blank"> mectechnologies.</a></p>
				</div>
				<div class="col-sm-4 col-xs-3 social-w3licon">
					<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
					<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a>
					<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>
					<a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //footer end here -->

	<!-- FlexSlider --> 
	<script defer src="js/jquery.flexslider.js"></script>
		<script type="text/javascript">
			$(window).load(function(){
			  $('.flexslider').flexslider({
				animation: "slide",
				start: function(slider){
				  $('body').removeClass('loading');
				}
			  });
			});
		</script>
	<!-- End-slider-script --> 
	<!-- Calendar -->
<script src="js/jquery-ui.js"></script>
	<script>
	  $(function() {
		$( "#datepicker" ).datepicker();
	 });
	</script>
<!-- //Calendar -->	

	<!-- start-smooth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- //end-smooth-scrolling -->	
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->   
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>