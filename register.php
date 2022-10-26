<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration System</title>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  
<section class="h-100 h-custom" style="background-color: #f2f2f2;">
	<?php include('errors.php') ?>
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8 col-xl-6">
              <div class="card rounded-3">
                <div class="d-flex">
                <img src="./insst.png"
                  class="w-50 m-4" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
                  alt="Sample photo">
                  <img src="./prevecam.png"
                  class="w-50 m-4" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
                  alt="Sample photo">
                </div>
                <div class="card-body p-4 p-md-5">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registro</h3>
      
                  <form class="px-md-2"method="POST" name="registration"  id="form" action="register.php">
      
                    <div class="form-outline mb-4">
                      <input type="text" id="form3Example1q" name="nombre" class="form-control"  required/>
                      <label class="form-label" for="form3Example1q">Nombre</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="text" id="form3Example1q" name="apellidos" class="form-control" required/>
                        <label class="form-label" for="form3Example1q">Apellidos</label>
                      </div>
                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example1q" name="dni" class="form-control" required/>
                        <label class="form-label" for="form3Example1q">DNI/NIE</label>
                      </div>
                      <div class="form-outline mb-4">
                        <input type="number" pattern="(\+34|0034|34)?[ -]*(8|9)[ -]*([0-9][ -]*){8}" id="form3Example1q" name="telefono" class="form-control" required/>
                        <label class="form-label" for="form3Example1q">Teléfono</label>
                      </div>
                      <div class="form-outline mb-4">
                        <input type="email" id="form3Example1q" name="email" class="form-control" required/>
                        <label class="form-label" for="form3Example1q">Email</label>
                      </div>
                      <div class="form-outline mb-4">
                        <input type="pasword" id="form3Example1q" name="password" class="form-control" required/>
                        <label class="form-label" for="form3Example1q">Contraseña</label>
                      </div>
                    <div class="row">
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline datepicker">
                          <label for="exampleDatepicker1" class="form-label">¿En qué idioma desas recibir los emails?</label>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4">
                        <select name="idioma" class="select">
                          <option value="castellano">Castellano</option>
                          <option value="valenciano">Valenciano</option>
                        </select>
                      </div>
                    </div>
      
                   

      
                    <button type="submit" name="reg_user" class="btn btn-success btn-lg mb-1">Submit</button>
      
                  </form>
      
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

</body>

</html>