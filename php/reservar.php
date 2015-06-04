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
$fecha_entre = "2015-05-03";
$esta = "En cola";

if (isset($mueble)) {
	$query = "INSERT INTO reserva (total, fecha_ordenado, fecha_entrega, img, iduser, idmueble, estado) VALUES ('".$precio."', '".$fecha."', '".$fecha_entre."', '".$img."','".$id."', '".$mueble."','".$esta."')";
	mysql_query($query);
	echo "The reservation has been successful";
}	
}else{
	  echo '<script> alert("Unauthenticated user"); location.href = "index.php"; </script>';
}
?>