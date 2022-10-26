<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration System</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  
<section class="" style="height:100vh; width:100%;">
	<?php include('errors.php') ?>
        <div class="py-5  h-100">
          <div class="row d-flex justify-content-center align-items-center w-100 h-100">
            <div class="col-lg-8 col-sm-12 col-xl-6 h-100">
              <div id="mobile" class="card rounded-3">
                <div class="d-flex">
                <img src="./insst.png"
                  class="w-50 m-4" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
                  alt="Sample photo">
                  <img src="./prevecam.png"
                  class="w-50 m-4" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
                  alt="Sample photo">
                </div>
                <div class="card-body p-4 p-md-5">
                 
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">CURSO PREVENCIÓN DE RIESGOS LABORALES EN EL PUESTO DE TRABAJO NIVEL I.</h3>
                  <h4 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2"> Personal interno Excmo. Ayuntamiento. Sede II.</h4>
                 
                  <h1 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registro</h1>
                  <form class="px-md-2" method="POST" name="registration"  id="form" action="register.php">
      
                    <div class="form-outline mb-4">
                    <label class="form-label m-2" for="">Nombre</label>
                      <input type="text"  name="nombre" class="form-control"  required/>
                    </div>


                    <div class="form-outline mb-4">
                    <label class="form-label" for="">Apellidos</label>
                        <input type="text"  name="apellidos" class="form-control" required/>
                      </div>


                      <div class="form-outline mb-4">
                      <label class="form-label" for="">DNI/NIE</label>
                        <input type="text"  name="dni" class="form-control" required/>
                      </div>

                      
                      <div class="form-outline mb-4">
                      <label class="form-label" for="">Teléfono</label>
                        <input type="number" pattern="(\+34|0034|34)?[ -]*(8|9)[ -]*([0-9][ -]*){8}"  name="telefono" class="form-control" required/>
                      </div>


                      <div class="form-outline mb-4">
                      <label class="form-label" for="">Email</label>
                        <input type="email" id="email" name="email" class="form-control" required/>
                      </div>


                      <div class="form-outline mb-4">
                      <p id="pass_control"></p>
                        <label class="form-label" for="" >Contraseña</label>                        
                        <input type="password" id="password" name="password" class="form-control" required/>
                        <p>Tu contraseña debe tener, al menos, seis caracteres e incluir una combinación de números, letras y caracteres especiales (!$@%).</p>
                      </div>


                      <div class="form-outline mb-4">
                        <p id="pass_control"></p>
                        <label class="form-label" for="" >Confirmar Contraseña</label>
                        <input type="password" id="password_confirm" name="password_confirm"   class="form-control" required/>
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
      <script src="./valid.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
 
</body>

</html>