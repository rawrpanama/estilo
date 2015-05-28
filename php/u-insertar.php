<?php
$conexion = mysql_connect('localhost', 'root', '');

if ($conexion == true){
	mysql_select_db('estilo');
    mysql_query("update usuario set nombre='".$_GET['name']."' where iduser=".$_GET['iduser']);
    mysql_query("update usuario set apellido='".$_GET['ape']."' where iduser=".$_GET['iduser']);
    mysql_query("update usuario set correo='".$_GET['email']."' where iduser=".$_GET['iduser']);
    mysql_query("update usuario set dui='".$_GET['dui']."' where iduser=".$_GET['iduser']);
    mysql_query("update usuario set telefono='".$_GET['cel']."' where iduser=".$_GET['iduser']);
    echo "<script>alert('Datos insertados correctamente');
				location.href='../u-upd-dat.php';</script>";
}else{
	 echo "<script>alert('Ha ocurrido un error');
				location.href='../u-upd-dat.php';</script>";
}
?>