<?php
include("conexion.php");
conexion();

$idm = $_GET['id'];
echo $idm;

if (isset($idm)){
	$estado = "Production";
	$sql = "UPDATE reserva set estado='$estado' where idmueble = '$idm'";
	$usu = mysql_query($sql);
	echo "<script>Alert('modified successfully')</script>";
	header("location: ../ad-ver-reser.php");
}else{
	echo "An error has ocurred";
}

?>
