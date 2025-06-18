<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="btn"><h3>Anand Vishwa Gurukul Sr. Night College</h3><h3 align="right"><a href="unotifi.php">NOTIFICATIONS
	</a></h3></div>
	<div><a href="home.php">Home</a></div>
	<div class="header">
		<h2>User Login</h2>
	</div>
	
	<form method="post" action="userlogin.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="pass">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>
	</body></html>