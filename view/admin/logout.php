<?php
	require_once '../../app/class_user.php';
	$user = new User();
	session_start();
	if($user->is_login()!="")
	{
		header("Location:index.php");
	}
	if(isset($_GET['logout']) && $_GET['logout']=="true")
	{
		$user->logout();
		header("Location:login.php");
	}

	?>
