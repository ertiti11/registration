<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<title>Registration System</title>
	<link rel="stylesheet" type="text/css" href="./style.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<div class="header a">
		<h2>Register</h2>
	</div>

	<form method="post"  id="form" action="register.php">
		<?php include('errors.php') ?>
		<div class="input-group">
			<label>Nombre</label>
			<input type="text" id="nombre" maxlength="30" name="nombre" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Apellidos</label>
			<input type="text"  maxlength="30" name="apellidos" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>DNI/NIE</label>
			<input type="text"  maxlength="30" name="dni" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>telefono</label>
			<input type="text"  maxlength="30" name="telefono" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email"  maxlength="30" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password"  maxlength="30" name="password">
		</div>

		<label for="idioma">En que idioma quieres recibir los emails?</label><br>

		<select name="idioma" id="cars">
			<option name="idioma" value="español">Español</option>
			<option name="idioma" value="valenciano">Valenciano</option>
		</select>

		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>

	</form>
	<script src="./validation.js"> </script>

</body>

</html>