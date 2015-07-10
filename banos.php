<?php
session_start();
if (isset($_SESSION['suser'])) {
  $id = $_SESSION['suser'];
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <link type="text/css" rel="stylesheet" href="css/style.css" media="screen, projection"/>
  <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
  <link rel="icon" href="img/Logo.png"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <meta name="theme-color" content="00acc1">
  <title>Estilo</title>
  <script type="text/javascript" src="js/modificar.js"></script>
  <script type="text/javascript" src="js/validaciones.js"></script>
</head>
<body>
 <?php
include('unavbar.html');
 ?>
 <div class="container">
   <div class="row">
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/muebles/mueble3.png">
              <span class="card-title">Stand</span>
            </div>
            <div class="card-content">
              <p>Small piece of furniture for the bathroom, with a horizontal drawer  and two doors in vertical, all with handles, with a texture of Melamine color Wengue Teak.</p>
            </div>
            <div class="card-action">
              <a class="green-text" href="3D/mueble3.php">3D</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/muebles/mueble14txt2.png">
              <span class="card-title">Stand</span>
            </div>
            <div class="card-content">
              <p>Simple for bathroom furniture, with 4 drawers, 2 large and two small, with handles, with a texture of Melamine Color Birch.</p>
            </div>
            <div class="card-action">
              <a class="green-text" href="3D/mueble14.php">3D</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/muebles/mueble16txt7.png">
              <span class="card-title">Stand</span>
            </div>
            <div class="card-content">
              <p>Simple for bathroom furniture, with 4 drawers, 4 doors, with handles, with a texture of Melamine Color Fresno.</p>
            </div>
            <div class="card-action">
              <a class="green-text" href="3D/mueble16.php">3D</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/muebles/mueble17txt2.png">
              <span class="card-title">Stand</span>
            </div>
            <div class="card-content">
              <p>Practical and simple stand for bathrooms, has 2 drawers with a texture of Melamine Color Birch.</p>
            </div>
            <div class="card-action">
              <a class="green-text" href="3D/mueble17.php">3D</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/muebles/mueble15txt2.png">
              <span class="card-title">Furniture</span>
            </div>
            <div class="card-content">
              <p>Simple for bathroom furniture, with 2 drawers, 2 doors, with handles, with a texture of melamine Color Birch.</p>
            </div>
            <div class="card-action">
              <a class="green-text" href="3D/mueble15.php">3D</a>
            </div>
          </div>
        </div>
      </div>
    </div>

      <script type="text/javascript" src="js/jquery-2.1.1.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/inicio.js"></script>
</body>
</html>
 <?php
}else{
  echo '<script> alert("Usuario no autenticado"); location.href = "index.php"; </script>';
}
  ?>
