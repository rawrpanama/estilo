<?php

session_start();
if(isset($_SESSION['suser']) && $_SESSION['type']) {
  $id = $_SESSION['suser'];
  }
$con = mysqli_connect('127.0.0.1', 'root', '', 'estilo') or die('An error has ocurred'.mysqli_connect($con));
$consulta = 'SELECT * FROM mueble ORDER BY vis DESC LIMIT 10';
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
   <div class="row">
       <?php
       while($row = mysqli_fetch_array($result)){
        ?>
        <div class="col s12 m3 ">
            <div class="card medium">
          <div class="card">
            <div class="card-image">
                <?php
                echo "<img src='".$row['img']."'>";
                ?>
                <span class="card-title activator grey-text text-darken-4">Kitchen Cabinet</span>
            </div>
              <?php
            echo "Precio: $".$row['precio'];
           ?>
            <div class="card-content">
                <?php
                echo $row['Descricpion'];
                ?>
              <div class="card-action">
              <a class="green-text" href="3D/mueble6txt5.php">3D</a>
            </div>
          </div>
            </div>
        </div>
        </div>
       <?php
       } 
       ?> 
     </div>
    </div>
      <script type="text/javascript" src="js/jquery-2.1.1.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/inicio.js"></script>
</body>
</html>