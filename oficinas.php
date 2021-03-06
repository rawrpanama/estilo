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
              <img src="img/muebles/prueba2.png">
              <span class="card-title">Desk</span>
            </div>
            <div class="card-content">
              <p>Desktop in the form of L.</p>
            </div>
            <div class="card-action">
              <a class="green-text" href="3D/mueble5.php">3D</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/muebles/mueble6txt2.png">
              <span class="card-title">Office Furniture</span>
            </div>
            <div class="card-content">
              <p>Multipurpose Furniture.</p>
            </div>
            <div class="card-action">
              <a class="green-text" href="3D/mueble6.php">3D</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/muebles/mueble11txt4.png">
              <span class="card-title">Office Furniture</span>
            </div>
            <div class="card-content">
              <p>Furniture for organize files and recopilate paper </p>
            </div>
            <div class="card-action">
              <a class="green-text" href="3D/mueble11.php">3D</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/muebles/mueble12txt3.png">
              <span class="card-title">Office Furniture</span>
            </div>
            <div class="card-content">
              <p>Office furniture to order the books, documents, paperwork and files.</p>
            </div>
            <div class="card-action">
              <a class="green-text" href="3D/mueble12.php">3D</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/muebles/mueble7txt2.png">
              <span class="card-title">Stylish Office Furniture</span>
            </div>
            <div class="card-content">
              <p>Stylish Office Furniture to organize files and papers</p>
            </div>
            <div class="card-action">
              <a class="green-text" href="3D/mueble7.php">3D</a>
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
