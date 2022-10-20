<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>

	<form method="post" action="register.php">
		<?php include('errors.php') ?>
		<div class="input-group">
			<label>Email</label>
			<input type="email"  maxlength="30" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password"  maxlength="30" name="password_1">
		</div>

		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>

	</form>
</body>
</html>