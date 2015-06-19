<?php
session_start();
if (isset($_SESSION['suser'])) {
  $id = $_SESSION['suser'];
mysql_connect('127.0.0.1', 'root', '');
mysql_select_db('estilo') or die('Error 404: database not found');

$mueble = $_GET['id'];
$sql = "SELECT precio FROM mueble where idmueble =" .$mueble;
$lol = mysql_query($sql);
$pro = mysql_fetch_array($lol);
$precio = $pro['precio'];
$sql1 = "SELECT img FROM mueble where idmueble =" .$mueble;
$lal = mysql_query($sql1);
$pre = mysql_fetch_array($lal);
$img = $pre['img'];
$fecha = date('Y/m/d');
$fecha_entre = "2015-06-25";
$esta = "En cola";

if (isset($mueble)) {
	$query = "INSERT INTO reserva (total, fecha_ordenado, fecha_entrega, img, iduser, idmueble, estado) VALUES ('".$precio."', '".$fecha."', '".$fecha_entre."', '".$img."','".$id."', '".$mueble."','".$esta."')";
	//mysql_query($query);
	?>
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
<center>
  <div class="container">
    <div class="row">
      <img src="">
      <p class="flow-text">You order has been complete. Here are the details:</p>
      <table class="striped">
        <thead>
          <tr>
              <th>Total price</th>
              <th>Ordered date</th>
              <th>Delivery date</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php echo $precio;?></td>
            <td><?php echo $fecha;?></td>
            <td><?php echo $fecha_entre;?></td>
          </tr>
         </tbody>
      </table>
    </div>
  </div>
    <a class="waves-effect waves-teal btn-flat green-text" href="php/pdf/pru.php?u=<?php echo $id;?>">Get your ticket!</a>
</center>
      <script type="text/javascript" src="js/jquery-2.1.1.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/inicio.js"></script>
</body>
</html>
<?php
}	
}else{
	  echo '<script> alert("Unauthenticated user"); location.href = "index.php"; </script>';
}
?>