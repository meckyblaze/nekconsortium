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
<title>NEKCONSORTIUM | GALLERY</title>
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
						<h1><a href="index.php" class="logo"></a></a><a href="index.php">NEK | CONSORTIUM</a></h1>
					</div> 
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-left"> 
							<li><a href="index.php" class=" btn w3ls-hover">Home</a></li>
							<li><a href="the_team.php" class="btn w3ls-hover">The Team</a></li>
							<li><a href="the_firm.php" class="btn w3ls-hover">The Firm</a></li>   
							<li><a href="services.php" class="btn w3ls-hover">What we do</a></li>
							<li><a href="portfolio.php" class="btn w3ls-hover">Portfolio</a></li>
							<li><a href="gallery.php" class="w3ls-hover active">Gallery</a></li>
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
		</div>
		<!-- //banner -->
		<!-- /coming soon -->
		<div class="portfolio">
			<div class="container">
				<div class="w3-hed-all">
					<h3>Gallery</h3>
			    </div>
			    <?php 
						$limit = 12;
	     
					    if(isset($_GET['page'])){
					        $page = $_GET['page'];
					    } else {
					        $page = 1;
					    }
					 	
					    $start = (($page-1) * $limit);
					    $sql = "SELECT * FROM gallery";
					    $result = $conn->query($sql);
					    $total = $result->num_rows;
					    $tpages = ceil($total / $limit);
					    $sql = "SELECT * FROM gallery ORDER BY post_date DESC LIMIT $start, $limit";
					    $result = $conn->query($sql);
						?>
						<?php
	                    while($row = $result->fetch_array()) {
	                               
	                    $post_title = $row['post_title']; 
	                    $post_details = $row['post_details'];
	                    $pic = $row['pic'];
	                    ?>
				<div class="col-md-4">
					<div class="agile">
			    	<h3><a href="read/gallery.php?post_details=<?php echo $post_details; ?>" style="color: #333;"><?php echo $post_title; ?></a></h3>
						<div class="agile_gallery_grid">
							<a href="read/gallery.php?post_details=<?php echo $post_details; ?>"><img src="0x91nekadmin/alonwankwo/uploads/<?php echo $pic; ?>" style="min-height: 240px; max-height: 240px;" class="img-responsive"></a>	
						</div>
						<p><a href="read/gallery.php?post_details=<?php echo $post_details; ?>" style="color: #333;"><?php echo mb_strimwidth("$post_details", 0, 100, "..."); ?></a></p>
					</div>
				</div>
			<?php } ?>
			</div>
		</div>
		<ul class="pagination" style="float: right;">
            <?php
            	
            if ($page <= 1) {
            	for($i=1;$i<=$tpages;$i++) {
            	echo "<li><a href=gallery.php?page=".$i.">".$i."</a></li>";
            }
        
            	echo "<li><a href='gallery.php?page=".($page+1)."' class='button'>NEXT</a></li>";
            }
            else
            if ($page == $tpages) {
            	echo "<li><a href='gallery.php?page=".($page-1)."' class='button'>Previous</a></li>";
            for($i=1;$i<=$tpages;$i++) {
            	echo "<li><a href=gallery.php?page=".$i.">".$i."</a></li>";
            }
            }else{
            	echo "<li><a href='gallery.php?page=".($page-1)."' class='button'>Previous</a></li>";
            	for($i=1;$i<=$tpages;$i++) {
            	echo "<li><a href=gallery.php?page=".$i.">".$i."</a></li>";
            }
            echo "<li><a href='gallery.php?page=".($page+1)."' class='button'>NEXT</a></li>";
            }
            ?>
            </ul>
			
     
	<!-- // coming soon --> 
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