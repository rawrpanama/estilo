<?php 
	mysql_connect('127.0.0.1', 'root', '');
	mysql_select_db('estilo') or die('Error 404: database not found');

	if($_POST['Caso']=="Eliminar"){
		mysql_query("DELETE FROM usuario WHERE iduser=".$_POST['Id']);
		echo 'The user has been delete';
	}
	if($_POST['Caso']=="Modificar"){
       
            mysql_query("UPDATE usuario SET usuario='".$_POST['User']."' where iduser=".$_POST['Id']);
            mysql_query("UPDATE usuario SET nombre='".$_POST['Name']."' where iduser=".$_POST['Id']);
            mysql_query("UPDATE usuario SET apellido='".$_POST['Ape']."' where iduser=".$_POST['Id']);
            $pass = sha1($_POST['Pass']);
            mysql_query("UPDATE usuario SET contra='".$pass."' where iduser=".$_POST['Id']);
            mysql_query("UPDATE usuario SET correo='".$_POST['Correo']."' where iduser=".$_POST['Id']);
            mysql_query("UPDATE usuario SET telefono='".$_POST['Telefono']."' where iduser=".$_POST['Id']);
            mysql_query("UPDATE usuario SET dui='".$_POST['Dui']."' where iduser=".$_POST['Id']);
            mysql_query("UPDATE usuario SET tipo='".$_POST['Tipo']."' where iduser=".$_POST['Id']);
            echo 'The user has been modify';
        
	}

?>