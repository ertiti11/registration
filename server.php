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



	try{
		$stmt = $connect->prepare("SELECT * FROM datos WHERE email=:email LIMIT 1");
		$stmt->execute(array(
			':email' => $email,
			));	
		if( $stmt->rowCount() > 0 )  {
			
			array_push($errors, "El usuario ya ha sido registrado");
				
			}
		
	}catch(PDOException $e){
		echo $e->getMessage();
	}


	//Checking user in database


	// echo "Total error: " . count($errors);


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
			$_SESSION['success']  = "Gracias por registrarte en nuestra plataforma. En breve nos pondremos en contacto con contigo mediante correo electrónico.";
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