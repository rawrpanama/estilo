<?php
session_start();
if (isset($_SESSION['suser'])) {
  $id = $_SESSION['suser'];
$con = mysqli_connect('127.0.0.1', 'root', '', 'estilo') or die('Error en el servidor'.mysqli_connect($con));

$consulta = 'SELECT * FROM usuario';
$result = $con->query($consulta);

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
              <img src="img/muebles/prueba4.png">
              <span class="card-title">Stand</span>
            </div>
            <div class="card-content">
              <p>Simple and practical stand for bathrooms, has 5 spaces in vertical, 2 drawers and 2 empty spaces horizontally.</p>
            </div>
            <div class="card-action">
              <a class="green-text" href="#">Ver 3D</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/muebles/prueba6.png">
              <span class="card-title">Stand</span>
            </div>
            <div class="card-content">
              <p>Practical and simple stand for bathrooms, has 1 spaces in horizontally.</p>
            </div>
            <div class="card-action">
              <a class="green-text" href="#">Ver 3D</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/muebles/prueba8.png">
              <span class="card-title">Stand</span>
            </div>
            <div class="card-content">
              <p>Practical and simple stand for bathrooms, has 4 spaces horizontally and 4 drawers in horizontal.</p>
            </div>
            <div class="card-action">
              <a class="green-text" href="#">Ver 3D</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4 offset-m2">
          <div class="card">
            <div class="card-image">
              <img src="img/muebles/prueba9.png">
              <span class="card-title">Stand</span>
            </div>
            <div class="card-content">
              <p>Practical and simple stand for bathrooms, has 3 shelves in horizontally.</p>
            </div>
            <div class="card-action">
              <a class="green-text" href="#">Ver 3D</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/muebles/prueba10.png">
              <span class="card-title">Furniture</span>
            </div>
            <div class="card-content">
              <p>Practical and simple stand for bathrooms, also has 2 drawers and shelves in a horizontally.</p>
            </div>
            <div class="card-action">
              <a class="green-text" href="#">Ver 3D</a>
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