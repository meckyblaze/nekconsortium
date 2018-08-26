<?php 
session_start();
?>





<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nekconsortium";
$date = date('d-m-Y H:m:s');
//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if ($conn->connect_error) {
	die("Connection failed... " . $conn->connect_error);
}

?>

<?php 

$email = $_SESSION["email"];
if (!$email) {
	header("Location: ../index.php");
}

?>

<?php
if (isset($_POST['post'])) {
	$post_details = $_POST['post_details'];
	$authur = $_POST['authur'];
	$pic = $_FILES['pic'] ['name'];
	$tmp_name = $_FILES['pic'] ['tmp_name'];

	$loc = "staff/";
	move_uploaded_file($tmp_name, $loc.$pic);

			$sql = "INSERT INTO the_firm(post_details, authur, pic, post_date)VALUES('$post_details', '$authur', '$pic', NOW())";
			if ($conn->query($sql) === TRUE) {
				$smsg = "Post uploaded successfully...";
			}else{
				$fxmsg = "Something went wrong, post was not uploaded...";
		}
			
}


?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>NEK | ADMIN</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Baxster Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link rel="icon" href="favicon.ico" type="image/x-icon" >
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
<!-- charts -->
<link rel="stylesheet" href="css/barChart.css" />
<!-- //charts -->
<link href="css/fabochart.css" rel="stylesheet" type="text/css">
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		<div class="sidebar" role="navigation">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right dev-page-sidebar mCustomScrollbar _mCS_1 mCS-autoHide mCS_no_scrollbar" id="cbp-spmenu-s1">
					<div class="scrollbar scrollbar1">
						<ul class="nav" id="side-menu">
							<li>
								<a href="index.php"><i class="fa fa-home nav_icon"></i>Dashboard</a>
							</li>
							<li>
								<a href="the_team.php"><i class="fa fa-cogs nav_icon"></i>The Team<span class=""></span></a>
								<!-- /nav-second-level -->
							</li>
							<li>
								<a href="the_firm.php"><i class="fa fa-book nav_icon"></i>The Firm <span class=""></span></a>
								<!-- /nav-second-level -->
							</li>
							<li>
								<a href="service.php"><i class="fa fa-th-large nav_icon"></i>What we do</a>
							</li>
							
							<li>
								<a href="portfolio.php"><i class="fa fa-check-square-o nav_icon"></i>Portfolio<span class=""></span></a>
								<!-- //nav-second-level -->
							</li>
							<li>
								<a href="gallery.php"><i class="fa fa-envelope nav_icon"></i>Gallery<span class=""></span></a>
								<!-- //nav-second-level -->
							</li>
							<li>
								<a href="logout.php"><i class="fa fa-sign-out nav_icon"></i>Logout<span class=""></span></a>
							</li>
						</ul>
					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--logo -->
				<div class="logo">
					<a href="index.php">
						<ul>	
							<li><img src="images/logo.jpg" alt="" /></li>
							<li><h1>nekconsortium</h1></li>
							<div class="clearfix"> </div>
						</ul>
					</a>
				</div>
				<!--//logo-->
				<div class="header-right header-right-grid">
					<div class="profile_details_left"><!--notifications of menu start -->
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				
				<!--notification menu end -->
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img src="images/team-1.jpg" alt=""> </span> 
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="edit.php"><i class="fa fa-cog"></i> Edit details</a> </li> 
								<li> <a href="add.php"><i class="fa fa-user"></i> Add user</a> </li> 
								<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- main content start-->
		<div id="page-wrapper">
				<div class="row">
					<div class="col-md-6">
						<div class="panel panel-widget">
							<div class="panel-title">
								The firm
							  <ul class="panel-tools">
								<li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
								<li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
								<li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
							  </ul>
							</div>
							<div class="panel-body">
								<!-- //candlestick -->
								<form action="" method="post" enctype="multipart/form-data">
								<div class="col-md-12">
					              <textarea placeholder="Details about the firm" rows="6" style="width: 100%;" name="post_details" required="" /></textarea><br /><br />
					               <input type="text" name="authur" placeholder="Authur's name" style="width: 100%;" required="" /><br /><br /><br />
					              <?php if (isset($smsg)) {?><div class="alert alert-success" role="alert"><?php echo $smsg; ?></div><?php }?>
					              <?php if (isset($fmsg)) {?><div class="alert alert-warning" role="alert"><?php echo $fmsg; ?></div><?php }?>
					              <?php if (isset($fxmsg)) {?><div class="alert alert-danger" role="alert"><?php echo $fxmsg; ?></div><?php }?>
					              <?php if (isset($xmsg)) {?><div class="alert alert-warning" role="alert"><?php echo $xmsg; ?></div><?php }?>
					                <label for="photo" style="background-color: blue; width: 65px; border-radius: 5px; height: 27px; font-weight: normal; color: white;">BROWSE</label>
					                <input type="submit" name="post" value="POST" class="pull-right" style="background-color: green; width: 65px; border-radius: 5px; height: 27px; font-weight: normal; color: white;">
					              </span>
					            </div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="panel panel-widget">
							<div class="panel-title">
							 Post-Image
							  <ul class="panel-tools">
								<li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
								<li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
								<li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
							  </ul>
							</div>
							<div class="panel-body">
								<div class="lines-points">
									<div id="example-4"></div>
									<span class="fileinput-button pull left" ng-class="{disabled: disabled}">
					                <input type="file" name="pic" id="photo" class="hidden" onchange="readURL(this);" ng-disabled="disabled" type="file" title="Change Cover Picture"  />
					                <img src="images/up.png" class="img-responsive" id="ShowImage">
					              </span>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</form>
				<!--//row-->
		<!--footer-->
		 <div class="dev-page">
	 
			<!-- page footer -->   
			<!-- dev-page-footer-closed dev-page-footer-fixed -->
            <div class="dev-page-footer dev-page-footer-fixed"> 
				<!-- container -->
				<div class="container">
					<div class="copyright">
						<p>© 2018 nekconsortium. All Rights Reserved. Design by <a href="http://mectechnologies.com/">mectechnologies</a></p> 
					</div>
                </div>
				<!-- //container -->
            </div>
            <!-- /page footer -->
		</div>
        <!--//footer-->
	</div>
	<!-- Classie -->
	<script type="text/javascript">
                function readURL(input) {
                  if (input.files && input.files[0]) {
                          var reader = new FileReader();

                      reader.onload = function (e) {
                        $('#ShowImage')
                            .attr('src', e.target.result)
                            .width(200)
                            .height(200);
                            };
                      reader.readAsDataURL(input.files[0]);
                    }
                  
                  }
                </script>
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- Bootstrap Core JavaScript --> 
		
        <script type="text/javascript" src="js/bootstrap.min.js"></script>

        <script type="text/javascript" src="js/dev-loaders.js"></script>
        <script type="text/javascript" src="js/dev-layout-default.js"></script>
		<script type="text/javascript" src="js/jquery.marquee.js"></script>
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<script type="text/javascript" src="js/jquery.jqcandlestick.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/jqcandlestick.css" />
		
		<!--max-plugin-->
		<script type="text/javascript" src="js/plugins.js"></script>
		<!--//max-plugin-->
		
		<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
</body>
</html>