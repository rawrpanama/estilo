<?php
//mysql_connect("localhost", "root", "");	
function conexion(){
	$server = "127.0.0.1";
	$user = "root";
	$password = "";
	$base = "estilo";
	$link = mysql_connect($server, $user, $password) or die("Error Conectando la Base de Datos");
	mysql_select_db($base,$link) or die("Error Seleccionando la base de datos");
	return $link;
}
?>