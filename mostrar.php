<?php
	session_start();

	if (!isset($_SESSION['success'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
    if ($_SESSION['token'] != "kjhd23·$5Dgs_;5%3$"){
        $_SESSION['msg'] = "You must log in first";
		header('location: login.php');
    }

?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<?php 
$conex = mysqli_connect("localhost","root","","web"); 
if ($conex) {
	$consulta = "SELECT * FROM datos";
	$resultado = mysqli_query($conex,$consulta);
	if ($resultado) {
    echo '
        <h1 style="text-align:auto;">Datos de usuarios registrados</h1>
        <div class="tabla m-auto w-100 ">
        <table  class="table table-striped w-100">
        <tr>
        <th scope="col">Nombre</th>
        <th scope="col">apellidos</th>
        <th scope="col">DNI/NIE</th>
        <th scope="col">teléfono</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        </tr>';

		while ($row = $resultado->fetch_array()) {

        
	    
        echo "<tr>";
        echo "<td class='p-3'>" . $row['nombre'] . "</td>";
        echo "<td class='p-3'>" . $row['apellidos'] . "</td>";
        echo "<td class='p-3'>" . $row['dni'] . "</td>";
        echo "<td class='p-3'>" . $row['telefono'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['password'] . "</td>";
        echo "</tr>";
	    }
      echo "</table>";
      echo "</div>";
      
	}
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
