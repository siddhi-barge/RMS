<?php 
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'project');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = ($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO users (username, email, password) 
					  VALUES('$username', '$email', '$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['pass']);
		$_SESSION['username']=$username;
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = ($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) { 
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}

	}


 	//ADMIN LOGIN


	if (isset($_POST['login_admin'])) {
		$ausername = mysqli_real_escape_string($db, $_POST['ausername']);
		$apassword = mysqli_real_escape_string($db, $_POST['apass']);

		if (empty($ausername)) {
			array_push($errors, "Username is required");
		}
		if (empty($apassword)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$apassword = ($apassword);
			$query = "SELECT * FROM admin WHERE ausername='$ausername' AND apassword='$apassword'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) { 
				$_SESSION['ausername'] = $ausername;
				$_SESSION['success'] = "You are now logged in";
				header('location: index1.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}


	//PRINCIPAL LOGIN



	if (isset($_POST['login_pricipal'])) {
		$username = mysqli_real_escape_string($db, $_POST['pusername']);
		$password = mysqli_real_escape_string($db, $_POST['ppassword']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$ppassword = ($password);
			$pquery = "SELECT * FROM pricipal WHERE pusername='$username' AND ppassword='$password'";
			$presults = mysqli_query($db, $pquery);

			if (mysqli_num_rows($presults) == 1) { 
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index2.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

	//ACCOUNTANTS LOGIN

  

	if (isset($_POST['login_accountant'])) {
		$acusername = mysqli_real_escape_string($db, $_POST['acusername']);
		$acpassword = mysqli_real_escape_string($db, $_POST['acpassword']);
	
		if (empty($acusername)) {
			array_push($errors, "Username is required");
		}
		if (empty($acpassword)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$acpassword = ($acpassword);
			$query = "SELECT * FROM accountant WHERE acusername='$acusername' AND acpassword='$acpassword'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) { 
				$_SESSION['username'] = $acusername;
				$_SESSION['success'] = "You are now logged in";
				header('location: index3.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}

	}
?>