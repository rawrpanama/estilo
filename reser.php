<?php
session_start();
if (isset($_SESSION['suser'])) {
  $id = $_SESSION['suser'];
  $mueble = $_GET['m'];
  $con = mysqli_connect('127.0.0.1', 'root', '', 'estilo') or die('An error has ocurred'.mysqli_connect($con));
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
while ($row = mysqli_fetch_array($result)) {
$pg = mysql_query("SELECT precio from mueble where idmueble=".$mueble);
$pj = mysql_fetch_array($pg);
$pre = $pj['precio'];
  ?>
<center>
  <div class="container">
    <div class="row">
      <img src="<?php echo $row['img'];?>">
      <p class="flow-text">This is the piece of furniture that are about to book for their manufacture, are you sure you want to sort this furniture?</p>
      <p><?php echo "Price: $"; echo $pre; ?></p>
      <p><?php echo "Ordered: "; echo date('Y/m/d');?></p>
      <a href="reservar.php?id=<?php echo $mueble;?>" class="waves-effect waves-teal btn-flat green-text">Ok</a>
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
  echo '<script> alert("Unauthenticated user"); location.href = "index.php"; </script>';
}
  ?>