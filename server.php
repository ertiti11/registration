<?php 
session_start();

$username = "";
$email	  = "";
$errors   = array();

$db = mysqli_connect('localhost', 'root', '', 'web');

if (isset($_POST['reg_user'])) {

	$email	    = mysqli_real_escape_string($db, $_POST['email']);
	$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
	// PAFvP4zpPj_2(r~k
	// checking filled


	if (empty($email)) {
		array_push($errors, "-Email is required");
	}
	if (empty($password_1)) {
		array_push($errors, "-Password is required");
	}



	

	$user_check_query = "SELECT * FROM datos WHERE EMAIL='$email' LIMIT 1";
	$result = mysqli_query($db, $user_check_query);
	$user = mysqli_fetch_assoc($result);

	// Checking user in database
	if ($user) {
		if ($user['email'] === $email) {
			array_push($errors, "Email already exists");
		}
	}

	echo "Total error: " . count($errors);

	// Insert New Data
	if (count($errors) == 0) {
		$password = $password_1;

		$query = "INSERT INTO datos (EMAIL, PASSWORD) VALUES ('$email', '$password')";
		mysqli_query($db, $query);
		$_SESSION['success']  = "Te has suscrito correctamente";
		header('location: index.php');
	}

}

// Click Login
if (isset($_POST['login_user'])) {
	$username = mysqli_real_escape_string($db, $_POST['email']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	if (empty($username)) {
		array_push($errors, "Username is required");
	}

	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	if (count($errors) == 0) {
		$password = $password;

		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results) == 1) {
			$_SESSION['username'] = $username;
			$_SESSION['success']  = "You are now logged in";
			header('location: index.php');
		} else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}

?>