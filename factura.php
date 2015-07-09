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
    $fecha_entre = "2015-07-23";
    $l = mysql_query("INSERT INTO reserva (total, fecha_ordenado, fecha_entrega, img, iduser, idmueble, estado, orden, canti) values ('".$total."','".$fecha."', '".$fecha_entre."', '".$car[$i]['image']."', '".$id."', '".$car[$i]['id']."', 'queued', '".$cod."', '".$car[$i]['quanti']."')") or die(mysql_error());
  }
if ($l == true) {
  require_once("php/dompdf/dompdf_config.inc.php");
  $codigoHTML='
<!doctype html">
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
        <td bgcolor="#0099FF"><strong>Name</strong></td>
        <td bgcolor="#0099FF"><strong>Delivered date</strong></td>
        <td bgcolor="#0099FF"><strong>Price($)</strong></td>
        <td bgcolor="#0099FF"><strong>Quantity</strong></td>
        <td bgcolor="#0099FF"><strong>Subtotal($)</strong></td>
      </tr>';

        $consulta=mysql_query("SELECT * FROM reserva WHERE orden ='".$cod."'") or die(mysql_error());
        while($dato=mysql_fetch_array($consulta)){
          $q=mysql_query("SELECT nombre FROM mueble WHERE idmueble=".$dato['idmueble']) or die(mysql_error());
          $w=mysql_fetch_array($q);
          $idmueble = $w['nombre'];
          $e=mysql_query("SELECT precio FROM mueble WHERE idmueble=".$dato['idmueble']) or die(mysql_error());
          $r=mysql_fetch_array($e);
          $precio = $r['precio'];
$codigoHTML.='
      <tr>
        <td>'.$dato['orden'].'</td>
        <td>'.$idmueble.'</td>
        <td>'.$dato['fecha_entrega'].'</td>
        <td>'.$precio.'</td>
        <td>'.$dato['cantidad'].'</td>
        <td>'.$dato['total'].'</td>
      </tr>';
      }
$codigoHTML.='
    </table>
    <p>Por favor llevar esté comprobante de su reserva*</p>
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
