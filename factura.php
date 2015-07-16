<?php
include 'php/conexion.php';
conexion();
session_start();
if (isset($_SESSION['suser'])) {
  $id = $_SESSION['suser'];
  $car=$_SESSION['carro'];
  $cod = rand(1, 9999999999);
  for ($i=0; $i <count($car) ; $i++) {
    $total = $car[$i]['price']*$car[$i]['quanti'];
    $fecha = date('Y/m/d');
    $fecha_entre = "2015-07-24";
    $fecha_p = $fecha+5;
    $fecha_p = "2015-07-20";
    $l = mysql_query("INSERT INTO reserva (total, fecha_ordenado, fecha_entrega, img, iduser, idmueble, estado, orden, canti, fecha_p) values ('".$total."','".$fecha."', '".$fecha_entre."', '".$car[$i]['image']."', '".$id."', '".$car[$i]['id']."', 'queued', '".$cod."', '".$car[$i]['quanti']."','".$fecha."')") or die(mysql_error());
    $kjg= "SELECT count FROM usuario where iduser = 7";
    $lel = mysql_query($kjg);
    while($fila = mysql_fetch_array($lel)){
    mysql_query("UPDATE usuario SET count = ".$fila['count']."  + 1 WHERE iduser= 7");
  }
}
if ($l == true) {
  require_once("php/dompdf/dompdf_config.inc.php");
  $codigoHTML='
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lista</title>
</head>
<body>
<img src="img/ticket.png" width="100%"/>
<p>This document shows the furnitures that you have ordered in our company, you must present this ticket to give you your furnitures.</p>
<h5>These are your furnitures: </h5>
<div align="center">
    <table width="95%" border="1">
      <tr>
        <td bgcolor="#0099FF"><strong>ID</strong></td>
        <td bgcolor="#0099FF"><strong>ID-furniture</strong></td>
        <td bgcolor="#0099FF"><strong>Delivered date</strong></td>
        <td bgcolor="#0099FF"><strong>Price($)</strong></td>
        <td bgcolor="#0099FF"><strong>Quantity</strong></td>
        <td bgcolor="#0099FF"><strong>Subtotal($)</strong></td>
      </tr>';

        $query = mysql_query("SELECT * FROM reserva WHERE orden ='".$cod."'");
        while($row=mysql_fetch_array($query)){
        /*  $q= mysql_query("SELECT nombre FROM furniture WHERE idmueble=".$row['idmueble']) or die(mysql_error());
          $w= mysql_fetch_array($q);
          $name = $w['nombre'];
          $e= mysql_query("SELECT precio FROM furniture WHERE idmueble=".$row['idmueble']) or die(mysql_error());
          $r= mysql_fetch_array($e);
          $precio = $r['precio'];*/
$codigoHTML.='
      <tr>
        <td>'.$row['orden'].'</td>
        <td>'.$row['idmueble'].'</td>
        <td>'.$row['fecha_entrega'].'</td>
        <td>'.$total.'</td>
        <td>'.$row['canti'].'</td>
        <td>'.$row['total'].'</td>
      </tr>';
      }
$codigoHTML.='
    </table>
</div>
</body>
</html>';

$codigoHTML=utf8_decode($codigoHTML);
$dompdf=new DOMPDF();
$dompdf->load_html($codigoHTML);
ini_set("memory_limit","128M");
$dompdf->render();
$dompdf->stream("ticket.pdf");
}else{
  echo "An error has ocurred";
}
}else{
    echo '<script> alert("Unauthenticated user"); location.href = "index.php"; </script>';
  }
?>
