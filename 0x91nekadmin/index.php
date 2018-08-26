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
   		die("connection failed: " . $connect_error);
   	}

   	if (isset($_POST['sign_in'])) {
   		$email = $_POST['email'];
   		$pass = $_POST['pass'];

   		$sql = "SELECT email, pass FROM admin WHERE email='$email' AND pass='$pass'";
   			$result = $conn->query($sql);
   			if ($result->num_rows == 0) {
   				$fmsg = "Wrong login details";
   			}else{
   				$_SESSION["email"] = "$email";
   				header('Refresh:3; url=alonwankwo/index.php');
   				$smsg = "Login Successful, redirectring... please wait";
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
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
</head> 
<body class="login-bg">
		<div class="login-body">
			<div class="login-heading">
				<h1>Login</h1>
			</div>
			<div class="login-info">
				<form action="" method="POST">
					<input type="text" class="user" name="email" placeholder="Email" required="">
					<input type="password" name="pass" class="lock" placeholder="Password">
					<input type="submit" name="sign_in" value="Login">
				</form>
				<center>
					<?php if (isset($smsg)) {?><div class="alert alert-success" role="alert"><?php echo $smsg; ?></div> <?php } ?>
					<?php if (isset($fmsg)) {?><div class="alert alert-danger" role="alert"><?php echo $fmsg; ?></div> <?php } ?>
				</center>
			</div>
		</div>
		<div class="go-back login-go-back">
				<a href="index.php">Go To Home</a>
			</div>
		
</body>
</html>