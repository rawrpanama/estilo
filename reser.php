<?php
session_start();
if (isset($_SESSION['suser'])) {
  $id = $_SESSION['suser'];
  $mueble = $_GET['m'];
  $con = mysqli_connect('127.0.0.1', 'root', '', 'estilo') or die('Error en el servidor'.mysqli_connect($con));
$consulta = "SELECT * FROM mueble where idmueble =" .$mueble;
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
while ($row = mysqli_fetch_array($result)) {?>
<center>
  <div class="container">
    <div class="row">
      <img src="<?php echo $row['img'];?>">
      <p class="flow-text">Este es el mueble que estas apunto de reservar para su fabricación, ¿Seguro que deseas ordernar este mueble?</p>
      <a href="php/reservar.php?id=<?php echo $mueble;?>" class="waves-effect waves-teal btn-flat green-text">Aceptar</a>
    </div>
  </div>
</center>
<?php } ?>

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