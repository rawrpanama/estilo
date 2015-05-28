<?php

mysql_connect('127.0.0.1', 'root', '');
mysql_select_db('estilo') or die('Error choosing a database');

$ruta = '../img/materiales';
$rutatmp = $_FILES['img']['tmp_name'];
$nombre_img = $_FILES['img']['name'];
$ruta_dest = $ruta.'/'.$nombre_img;
copy($rutatmp, $ruta_dest);

$material = $_POST['material'];
$tipo = $_POST['tipo'];
$price = $_POST['price'];
$code = $_POST['codi'];

$sql = "INSERT INTO material (material, tipo, precio, codigo, img) VALUES('".$material."', '".$tipo."', '".$price."', '".$code."', '".$ruta_dest."')";
$consul = mysql_query($sql);

if ($consul) {
	echo "Se ha insertado correctamente";
}else{
	echo "Ha ocurrido un error";
}

?>