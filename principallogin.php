<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="btn"><h3>Anand Vishwa Gurukul Sr. Night College</h3></div>
	<div><a href="home.php">Home</a></div>
	<div class="header">
		<h2>Principals Login</h2>
	</div>
	
	<form method="post" action="principallogin.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="pusername" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="ppassword">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_pricipal">Login</button>
		</div>
		
	</form></body></html>