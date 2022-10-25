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
  
    <form id="form1" runat="server">  
        <div class="container py-3">  
            <h4 class="text-center text-uppercase">How to check password strength in jquery</h4>  
            <div class="row">  
                <div class="col-md-12">              
                    <div class="row">  
                        <div class="col-md-6 mx-auto">  
                            <div class="card border-secondary">  
                                <div class="card-header">  
                                    <h3 class="mb-0 my-2">Sign Up</h3>  
                                </div>  
                                <div class="card-body">  
                                    <div class="form-group">  
                                        <label>Name</label>  
                                        <div class="input-group">  
                                            <div class="input-group-prepend">  
                                                <span class="input-group-text"><i class="fa fa-user"></i></span>  
                                            </div>  
                                            <asp:TextBox ID="txtFirstName" runat="server" CssClass="form-control"></asp:TextBox>  
                                        </div>  
                                    </div>  
                                    <div class="form-group">  
                                        <label>Phone Number</label>  
                                        <div class="input-group">  
                                            <div class="input-group-prepend">  
                                                <span class="input-group-text"><i class="fa fa-phone"></i></span>  
                                            </div>  
                                            <asp:TextBox ID="txtPhoneNumber" runat="server" CssClass="form-control"></asp:TextBox>  
                                        </div>  
                                    </div>  
                                    <div class="form-group">  
                                        <label>Email</label>  
                                        <div class="input-group">  
                                            <div class="input-group-prepend">  
                                                <span class="input-group-text"><i class="fa fa-envelope"></i></span>  
                                            </div>  
                                            <asp:TextBox ID="txtEmail" runat="server" CssClass="form-control"></asp:TextBox>  
                                        </div>  
                                    </div>  
                                    <div class="form-group">  
                                        <label>Password</label>  
                                        <div class="input-group">  
                                            <div class="input-group-prepend">  
                                                <span class="input-group-text"><i class="fa fa-lock"></i></span>  
                                            </div>  
                                            <asp:TextBox ID="txtPassword" runat="server" TextMode="Password" CssClass="form-control"></asp:TextBox>  
                                        </div>  
                                        <div id="strengthMessage"></div>  
                                    </div>  
                                    <div class="form-group">  
                                        <label>Confirm Password</label>  
                                        <div class="input-group">  
                                            <div class="input-group-prepend">  
                                                <span class="input-group-text"><i class="fa fa-lock"></i></span>  
                                            </div>  
                                            <asp:TextBox ID="txtConfirmPassword" runat="server" TextMode="Password" CssClass="form-control"></asp:TextBox>  
                                        </div>  
                                    </div>  
                                    <div class="form-group">  
                                        <button type="submit" class="btn btn-success float-right rounded-0">Register</button>  
                                    </div>  
                                </div>  
                            </div>  
                        </div>  
                    </div>  
                </div>  
            </div>  
        </div>  
    </form>  

	{{/*  <div class="header a">
		<h2>Register</h2>
	</div>

	<form method="POST" name="registration"  id="form" action="register.php">
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
			<input type="tel"  maxlength="30" name="telefono" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email"  maxlength="30" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" id="password"  maxlength="30" name="password">
		</div>
		<div class="input-group">
			<label>Password Confirm</label>
			<input type="password"  maxlength="30" id="password_confirm" name="password_confirm">
		</div>

		<label for="idioma">En que idioma quieres recibir los emails?</label><br>

		<select name="idioma" id="cars">
			<option name="idioma" value="español">Español</option>
			<option name="idioma" value="valenciano">Valenciano</option>
		</select>

		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>  */}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
	<script src="./validation.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.2/underscore-min.js"></script>
	<script rel="stylesheet" src="jquery-password-validator.js"></script>	
</form>	
	

</body>

</html>