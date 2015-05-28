<?php
$conexion = mysql_connect('localhost', 'root', '');

$idm = $_GET['id'];
echo $idm;

if ($conexion){
	mysql_select_db('estilo');
	$estado = "En producción";
	$sql = "UPDATE reserva set estado='$estado' where idmueble = '$idm'";
	$usu = mysql_query($sql);
	echo "<script>Alert('Modificado con exito')</script>";
	header("location: ../ad-ver-reser.php");
}

?>