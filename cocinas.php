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
              <img src="img/muebles/mueble6txt5.png">
              <span class="card-title">Kitchen Cabinet</span>
            </div>
            <div class="card-content">
              <p>Kitchen Cabinet has 8 drawers and 1 in a horizontal way.</p>
            </div>
            <div class="card-action">
              <a class="green-text" href="3D/mueble6txt5.php">3D</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/muebles/mueble10txt7.png">
              <span class="card-title">Kitchen Island</span>
            </div>
            <div class="card-content">
              <p>Kitchen island, it is possible to use to eat in her, or to serve the meal.</p>
            </div>
            <div class="card-action">
              <a class="green-text" href="3D/mueble10.php">3D</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/muebles/mueble18txt2.png">
              <span class="card-title">Stand</span>
            </div>
            <div class="card-content">
              <p>This cabinet has two drawers, in which you can place the covered, 2 shelves in horizontal form, and a drawer vertical formS.</p>
            </div>
            <div class="card-action">
              <a class="green-text" href="3D/mueble18txt2.php">3D</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4 offset-m2">
          <div class="card">
            <div class="card-image">
              <img src="img/muebles/mueble19.png">
              <span class="card-title">Stand</span>
            </div>
            <div class="card-content">
              <p>This large cabinet contains 8 drawers, which 3 are horizontally and the other 5 in vertical.</p>
            </div>
            <div class="card-action">
              <a class="green-text" href="3D/mueble19.php">3D</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/muebles/mueble1txt2.png">
              <span class="card-title">Stand</span>
            </div>
            <div class="card-content">
              <p>Elegant kitchen module with doors in vertical and some pretty pullings.</p>
            </div>
            <div class="card-action">
              <a class="green-text" href="3D/mueble1.php">3D</a>
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