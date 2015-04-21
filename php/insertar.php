<?php
$conexion = mysql_connect('localhost', 'root', '');

$uno = $_POST['user'];
$dos = $_POST['name'];
$tres = $_POST['ape'];
$cuatro = sha1($_POST['pass1']);
$cinco = sha1($_POST['pass2']);
$seis = $_POST['email'];
$siete = $_POST['cel'];
$ocho = $_POST['dui'];
$diez = "user";


if ($conexion) {
	mysql_select_db('estilo');
	$sql = "SELECT * FROM usuario where usuario = '$uno'";
	$usu = mysql_query($sql);
	if(mysql_num_rows($usu)>0){
		echo "<script>alert('Usuario ya registrado, intente con otro');
				location.href='../index.php';</script>";

	}else{

		if ($cuatro == $cinco) {

			mysql_query("INSERT INTO usuario (usuario, nombre, apellido, contra, correo, telefono, dui, tipo) VALUES ('".$uno."', '".$dos."', '".$tres."', '".$cuatro."', '".$seis."', '".$siete."', '".$ocho."', '".$diez."')");
                header("Location: ../adindex.php");
		}else{
			echo "Error, los valores no han sido insertados";
			header("Location: ../login.php");
		}

}}

?>