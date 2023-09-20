<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="public/registro.css">
    <title>Registro Usuario</title>
  </head>
  <body>
  
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
          <div class="card-img-left d-none d-md-flex">
            
          </div>
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Registro</h5>
            <?php 
                      include("conexion.php");
                      include "controladorlogin/controladorregistro.php"?>
            <form action="" method="post">

              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre" >
                <label for="Nombre">Nombre</label>
              </div>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="Correo" name="Correo" placeholder="Correo" >
                <label for="Correo">Correo</label>
              </div>

              <hr>

              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="Clave"  name="Clave" placeholder="Clave"  minlength="10">
                <label for="Contraseña">contraseña (10 caracteres)</label>
              </div>

            

              <div class="d-grid mb-2">
                <input class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" name="registrobutton" type="submit" value="Registrar">
              </div>

              <a class="d-block text-center mt-2 small" href="index.php">Ya tienes cuenta? inicia sesion aqui</a>

              <hr class="my-4">

              

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>