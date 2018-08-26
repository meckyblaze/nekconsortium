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
<?php
$sql = "SELECT * FROM service WHERE unique_id = 1 ORDER BY post_date DESC";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();

	$post_title1 = $row['post_title'];
	$post_details1 = $row['post_details'];
	$pic1 = $row['pic'];
?>
<?php
$sql = "SELECT * FROM service WHERE unique_id = 2 ORDER BY post_date DESC";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();

	$post_title2 = $row['post_title'];
	$post_details2 = $row['post_details'];
	$pic2 = $row['pic'];
?>
<?php
$sql = "SELECT * FROM service WHERE unique_id = 3 ORDER BY post_date DESC";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();

	$post_title3 = $row['post_title'];
	$post_details3 = $row['post_details'];
	$pic3 = $row['pic'];
?>
<?php
$sql = "SELECT * FROM service WHERE unique_id = 4 ORDER BY post_date DESC";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();

	$post_title4 = $row['post_title'];
	$post_details4 = $row['post_details'];
	$pic4 = $row['pic'];
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
<title>NEKCONSORTIUM | WHAT WE DO</title>
<link rel="shortcut icon" class="logo" href="images/logo.jpg">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Dream life Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">   
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<link href="css/simpleLightbox.css" rel="stylesheet" type="text/css" />
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
						<h1><a href="index.php" class="logo"></a></a><a href="index.php">NEK | CONSORTIUM</a></h1>
					</div> 
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-left"> 
							<li><a href="index.php" class="btn w3ls-hover">Home</a></li>
							<li><a href="the_team.php" class="btn w3ls-hover">The Team</a></li>
							<li><a href="the_firm.php" class="btn w3ls-hover">The Firm</a></li>   
							<li><a href="services.php" class="w3ls-hover active">What we do</a></li>
							<li><a href="portfolio.php" class="btn w3ls-hover">Portfolio</a></li>
							<li><a href="gallery.php" class="btn w3ls-hover">Gallery</a></li>
							<li><a href="contact.php" class="btn w3ls-hover">Contact</a></li>
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

		<!--sevices-->
	<div class="sevices-w3layouts" id="services">
		<div class="w3-hed-all w3-hed-services">
			<h3>Our Services</h3>
			<div class="alb">
				<div class="alb-1">
					<div class="col-xs-4">
						<div class="cv-lef">
							<h4><b><?php echo $post_title1; ?></b></h4>
							<img src="0x91nekadmin/alonwankwo/staff/<?php echo $pic1; ?>" height="180" width="180" class="service-img" />
						</div>
						<div class="cv-righ"><br />
							<p><?php echo $post_details1; ?></p>
						</div>
					</div>
				</div>
						<div class="alb-1">
							<div class="col-xs-4">
								<div class="cv-lef">
									<h4><b><?php echo $post_title2; ?></b></h4>
										<img src="0x91nekadmin/alonwankwo/staff/<?php echo $pic2; ?>" height="180" width="180" class="service-img" />
									</div>
									<div class="cv-righ"><br />
										<p><?php echo $post_details2; ?></p>
									</div>
								</div>
							</div>
						</div>
						<div class="alb-1" style="margin-left: 42px;">
							<div class="col-xs-4">
								<div class="cv-lef">
									<h4><b><?php echo $post_title3; ?></b></h4>
										<img src="0x91nekadmin/alonwankwo/staff/<?php echo $pic3; ?>" height="180" width="180" class="service-img" />
									</div>
									<div class="cv-righ"><br />
										<p><?php echo $post_details3; ?></p>
									</div>
								</div>
							</div>
						</div>
						<div class="alb-1" style="margin-left: 42px;">
							<div class="col-xs-4">
								<div class="cv-lef">
									<h4><b><?php echo $post_title4; ?></b></h4>
										<img src="0x91nekadmin/alonwankwo/staff/<?php echo $pic4; ?>" height="180" width="180" class="service-img" />
									</div>
									<div class="cv-righ"><br />
										<p><?php echo $post_details4; ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				<div class="clearfix"></div>
		</div>
	</div>
	<!--//sevices--> 
	
<script src="js/jquery-2.2.3.min.js"></script>

    <script src="js/bootstrap.js"></script>
	
	<!-- gallery -->
		<script src="js/simpleLightbox.js"></script>
	<script>
		$('.w3_agile_gallery_grid a').simpleLightbox();
	</script>
	<!-- //gallery -->

	<!-- Flexisel-js for-testimonials -->
<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems:1,
									animationSpeed: 1000,
									autoPlay: false,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:1
										},
										tablet: { 
											changePoint:768,
											visibleItems: 1
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<!-- Flexisel-js for-testimonials -->

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

	
</body>
</html>