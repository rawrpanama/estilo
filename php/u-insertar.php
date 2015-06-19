<?php
include("conexion.php");
conexion();

if (isset($_GET['iduser'])){
    mysql_query("update usuario set nombre='".$_GET['name']."' where iduser=".$_GET['iduser']);
    mysql_query("update usuario set apellido='".$_GET['ape']."' where iduser=".$_GET['iduser']);
    mysql_query("update usuario set correo='".$_GET['email']."' where iduser=".$_GET['iduser']);
    mysql_query("update usuario set dui='".$_GET['dui']."' where iduser=".$_GET['iduser']);
    mysql_query("update usuario set telefono='".$_GET['cel']."' where iduser=".$_GET['iduser']);
    echo "<script>alert('Datos insertados correctamente');
				location.href='../u-upd-dat.php';</script>";
}else{
	 echo "<script>alert('An error has ocurred');
				location.href='../u-upd-dat.php';</script>";
}
?>