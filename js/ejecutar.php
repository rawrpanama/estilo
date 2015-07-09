<?php
	include("../php/conexion.php");
conexion();

	if($_POST['Caso']=="Eliminar"){
		mysql_query("DELETE FROM usuario WHERE iduser=".$_POST['Id']);
		echo 'The user has been deleted';
	}
	if($_POST['Caso']=="Modificar"){
            mysql_query("UPDATE usuario SET usuario='".$_POST['User']."' where iduser=".$_POST['Id']);
            mysql_query("UPDATE usuario SET nombre='".$_POST['Name']."' where iduser=".$_POST['Id']);
            mysql_query("UPDATE usuario SET apellido='".$_POST['Ape']."' where iduser=".$_POST['Id']);
            mysql_query("UPDATE usuario SET correo='".$_POST['Correo']."' where iduser=".$_POST['Id']);
            mysql_query("UPDATE usuario SET telefono='".$_POST['Telefono']."' where iduser=".$_POST['Id']);
            mysql_query("UPDATE usuario SET dui='".$_POST['Dui']."' where iduser=".$_POST['Id']);
            echo 'The user has been modified';
	}
	if($_POST['Caso']=="Delete"){
		mysql_query("DELETE FROM furniture WHERE idmueble=".$_POST['Idm']);
		echo 'The furntiure has been deleted';
	}
	if($_POST['Caso']=="Modify"){
            mysql_query("UPDATE furniture SET nombre='".$_POST['Name']."' where idmueble=".$_POST['Idm']);
            mysql_query("UPDATE furniture SET descri='".$_POST['Descri']."' where idmueble=".$_POST['Idm']);
            mysql_query("UPDATE furniture SET tipo='".$_POST['Tipo']."' where idmueble=".$_POST['Idm']);
            mysql_query("UPDATE furniture SET precio='".$_POST['Precio']."' where idmueble=".$_POST['Idm']);
            mysql_query("UPDATE furniture SET vis='".$_POST['Vis']."' where idmueble=".$_POST['Idm']);
            echo 'The furniture has been modified';
					}
?>
