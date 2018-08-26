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
if (isset($_POST['add'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$cpass = $_POST['cpass'];
	$pic = $_FILES['pic']['name'];
	$tmp_name = $_FILES['pic']['tmp_name'];

	$loc = "staff/";
	move_uploaded_file($tmp_name, $loc.$pic);

	if ($pass != $cpass) {
		$xmsg = "Password don't match, try again";
	}else{
		$sql = "SELECT * FROM admin WHERE email='$email'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			$emsg = "Email already in use, plesse try another...";
		}else{

	$sql = "INSERT INTO admin(name, email, pass, cpass, pic)VALUES('$name', '$email', '$pass', '$cpass', '$pic')";
	if ($conn->query($sql) === TRUE) {
		header('Refresh:5; url = ../index.php');
		$smsg = "Registration successfully, please login to continue...";
	}else{
		$fmsg = "oops, something went wrong, please try again";
	}
}
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
				<h1>Add User</h1>
			</div>
			<div class="login-info">
				<center>
					<?php if (isset($smsg)) {?><div class="alert alert-success" role="alert"><?php echo $smsg; ?></div> <?php } ?>
					<?php if (isset($fmsg)) {?><div class="alert alert-danger" role="alert"><?php echo $fmsg; ?></div> <?php } ?>
					<?php if (isset($xmsg)) {?><div class="alert alert-danger" role="alert"><?php echo $xmsg; ?></div> <?php } ?>
					<?php if (isset($emsg)) {?><div class="alert alert-warning" role="alert"><?php echo $emsg; ?></div> <?php } ?>
				</center>
				<form action="" method="post" enctype="multipart/form-data">
					<input type="text" class="user" name="name" placeholder="Name" required="">
					<input type="text" class="user" name="email" placeholder="Email" required="">
					<input type="password" name="pass" class="lock" placeholder="Password" required="">
					<input type="password" name="cpass" class="lock" placeholder="Confirm Password" required="">
					<input type="file" name="pic" class="" required="">
					<input type="submit" name="add" value="Add">
					<div class="signup-text">
						<a href="index.php">Go to Home</a>
					</div>
				</form>
			</div>
		</div>
		<div class="go-back login-go-back">
			</div>
		
</body>
</html>