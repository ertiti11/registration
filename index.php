<?php
	session_start();

	if (!isset($_SESSION['success'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: register.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<div class="content">
	<?php if (isset($_SESSION['success'])) : ?>
		<div class="error success">
			<h3>
				<?php 
					echo $_SESSION['success'];
					unset($_SESSION['success']);
				?>
			</h3>
		</div>
	<?php endif ?>
</div>

</body>
</html>