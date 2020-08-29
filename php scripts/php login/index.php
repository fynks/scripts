<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>
<!DOCTYPE html>
<html lang=en>
<head>
<meta charset=UTF-8>
<meta name=viewport content="width=device-width, initial-scale=1.0">
<title>Test site</title>
<a href="logout.php">Logout </a>  |  <a href="login.php"> Login </a> 
<style></style>
</head>
<body>
<h1>welcome to PHP Login without IP
</body>
</html>