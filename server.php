<?php 
require("config.php");
session_start();

$username = "";
$email	  = "";
$errors   = array();





if (isset($_POST['reg_user'])) {


	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$dni = $_POST['dni'];
	$telefono = $_POST['telefono'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$idioma = $_POST['idioma'];






	// PAFvP4zpPj_2(r~k
	// checking filled
	if (empty($nombre)) {
		array_push($errors, "-Nombre is required");
	}
	if (empty($apellidos)) {
		array_push($errors, "-Apellidos is required");
	}
	if (empty($dni)) {
		array_push($errors, "-DNI/NIE is required");
	}
	if (empty($telefono)) {
		array_push($errors, "-Teléfono is required");
	}
	if (empty($email)) {
		array_push($errors, "-Email is required");
	}
	if (empty($password)) {
		array_push($errors, "-Password is required");
	}
	if (empty($idioma)) {
		array_push($idioma, "-idioma is required");
	}



	

	// $user_check_query = "SELECT * FROM datos WHERE EMAIL='$email' LIMIT 1";
	// $result = mysqli_query($db, $user_check_query);
	// $user = mysqli_fetch_assoc($result);

	// Checking user in database
	// if ($user) {
	// 	if ($user['email'] === $email) {
	// 		array_push($errors, "Email already exists");
	// 	}
	// }

	echo "Total error: " . count($errors);


	// Insert New Data

	if (count($errors) == 0) {
		try {
			$stmt = $connect->prepare("INSERT INTO datos (nombre, apellidos, dni, telefono, email, password, idioma) VALUES (:nombre,:apellidos,:dni, :telefono, :email, :password, :idioma)");
			$stmt->execute(array(
				':nombre' => $nombre,
				':apellidos' => $apellidos,
				':dni' => $dni,
				':telefono' => $telefono,
				':email' => $email,
				':password' => $password,
				':idioma' => $idioma,


				));
			$_SESSION['success']  = "Te has suscrito correctamente";
			header('location: index.php');
			exit;
		}
		catch(PDOException $e) {
			echo $e->getMessage();
		}
	}




	
}

// // Click Login
// if (isset($_POST['login_user'])) {
// 	$username = mysqli_real_escape_string($db, $_POST['email']);
// 	$password = mysqli_real_escape_string($db, $_POST['password']);

// 	if (empty($username)) {
// 		array_push($errors, "Username is required");
// 	}

// 	if (empty($password)) {
// 		array_push($errors, "Password is required");
// 	}

// 	if (count($errors) == 0) {
// 		$password = $password;

// 		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
// 		$results = mysqli_query($db, $query);
// 		if (mysqli_num_rows($results) == 1) {
// 			$_SESSION['username'] = $username;
// 			$_SESSION['success']  = "You are now logged in";
// 			header('location: index.php');
// 		} else {
// 			array_push($errors, "Wrong username/password combination");
// 		}
// 	}
// }

?>