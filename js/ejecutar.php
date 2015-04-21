<?php 
	mysql_connect('127.0.0.1', 'root', '');
	mysql_select_db('estilo') or die('Error escogiendo base de datos');

	if($_POST['Caso']=="Eliminar"){
		mysql_query("DELETE FROM usuario WHERE iduser=".$_POST['Id']);
		echo 'The user has been deleted';
	}
	if($_POST['Caso']=="Modificar"){
       /* $sql = "SELECT count(*) FROM usuario WHERE usuario ='".$_POST['User'];
        $lol = mysql_query($sql);
        $row = mysql_fetch_row($lol);
        if($row[0]== 1){*/
            mysql_query("update usuario set usuario='".$_POST['User']."' where iduser=".$_POST['Id']);
            mysql_query("update usuario set nombre='".$_POST['Name']."' where iduser=".$_POST['Id']);
            mysql_query("update usuario set apellido='".$_POST['Ape']."' where iduser=".$_POST['Id']);
            $pass = sha1($_POST['Pass']);
            mysql_query("update usuario set contra='".$pass."' where iduser=".$_POST['Id']);
            mysql_query("update usuario set correo='".$_POST['Correo']."' where iduser=".$_POST['Id']);
            mysql_query("update usuario set telefono='".$_POST['Telefono']."' where iduser=".$_POST['Id']);
            mysql_query("update usuario set dui='".$_POST['Dui']."' where iduser=".$_POST['Id']);
            mysql_query("update usuario set tipo='".$_POST['Tipo']."' where iduser=".$_POST['Id']);
            echo 'The user has been changed';
        /*}else{
            echo "El usuario que se trato de ingresar ya existe, ningún cambio ha sido realizado.";
        }*/
	}

?>