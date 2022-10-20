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
        <th scope="col">ID</th>
        <th scope="col">email</th>
        <th scope="col">Password</th>
        </tr>';

		while ($row = $resultado->fetch_array()) {
	    $id = $row['ID'];
	    $email = $row['EMAIL'];
        $password = $row['PASSWORD'];
        
	    
        echo "<tr>";
        echo "<td class='p-3'>" . $row['ID'] . "</td>";
        echo "<td>" . $row['EMAIL'] . "</td>";
        echo "<td>" . $row['PASSWORD'] . "</td>";
        echo "</tr>";
	    }
      echo "</table>";
      echo "</div>";
      
	}
}
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">