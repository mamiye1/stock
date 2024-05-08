<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="index.css">
</head>
<body bgcolor="lightgray">
	<div class="loginbox">
		<img src="image4.jpg" class="avatar">
		  <h1>Login here</h1>
		  <form action="checklogin.php" method="POST">
				<p>Username</p>
				<input type="text" name="user" placeholder="Enter Username">
				<p>Pasword</p>
				<input type="password" name="pass" placeholder="Enter Password">
				<input type="submit" name="btn" value="Login">
				<a href="#">Lost your password</a><br>
				<a href="#">Don't have any account?</a>
			</form>
</div>
</body>
</html>