<?php
include("conexion.php");
$conexion = conexion();

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
	$sql = "SELECT * FROM usuario where usuario = '$uno'";
	$usu = mysql_query($sql);
	if(mysql_num_rows($usu)>0){
		echo "<script>alert('This user already exist, try with another one');
				location.href='../index.php';</script>";

	}else{

		if ($cuatro == $cinco) {

			mysql_query("INSERT INTO usuario (usuario, nombre, apellido, contra, correo, telefono, dui, tipo) VALUES ('".$uno."', '".$dos."', '".$tres."', '".$cuatro."', '".$seis."', '".$siete."', '".$ocho."', '".$diez."')");
                header("Location: ../muebles.php");
                $lol = mysql_query("SELECT * FROM usuario WHERE usuario ='".$uno."' and contra ='".$cuatro."'");
                $var = mysql_fetch_array($lol);
                session_start();
                $_SESSION['suser'] = $var['iduser'];
                $_SESSION['type'] = "user";
		}else{
			echo "An error has ocurred";
			header("Location: ../login.php");
		}

}}

?>