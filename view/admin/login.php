<!DOCTYPE HTML>
<html>
<head>
<title>Welcome To Admin Page TrustMedis</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
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
</head>
<body>
		<!-- main content start-->
<div class="login-bg">
	<div class="main-page login-page vertical-center ">
		<div class="widget-shadow">
			<div class="login-top">
				<img  src="images/logo.png" alt="logo">
				<h4>Welcome To Admin Page</h4>
			</div>
			<div class="login-body">
				<form method="post">
					<input type="text" class="user" name="username" placeholder="Enter your email" required="">
					<input type="password" name="password" class="lock" placeholder="password">
					<input type="submit" name="btn_login" value="Sign In">
				</form>
			</div>
		</div>
		<footer>
			<p>&copy; 2017 Trust Medis. All Rights Reserved</p>
		</footer>
	</div>
</div>
</body>
</html>

<?php
require_once '../../app/class_user.php';
$user = new User();
session_start();
if ($user->is_login()!="") {
	header("Location:index.php");
}
if (isset($_POST['btn_login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	if ($user->login($username,$password)) {
		header("Location:index.php");
	}else {
		echo "<script>alert('Gagal Login')</script>";
	}
}
?>
