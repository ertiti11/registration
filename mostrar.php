<?php 
$conex = mysqli_connect("localhost","root","","web"); 
if ($conex) {
	$consulta = "SELECT * FROM datos";
	$resultado = mysqli_query($conex,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $id = $row['ID'];
	    $email = $row['EMAIL'];
        $password = $row['PASSWORD'];
        
	    
        $salida = "
        <table class='table'>
        <thead>
          <tr>
            <th scope='col'>ID</th>
            <th scope='col'>email</th>
            <th scope='col'>password</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope='row'>$id</th>
            <td> $email</td>
            <td> $password</td>
            
          </tr>
          
        </tbody>
      </table>";
	    echo $salida;
	    }
	}
}
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>