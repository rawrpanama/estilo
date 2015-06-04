<?php 
//require_once("conexion.php");
if(!isset($_SESSION)){
session_start();
}

//$l = conexion();
$conexion = mysql_connect('localhost', 'root', '');
mysql_select_db('estilo');

$user = $_POST["user"];
$pass = sha1($_POST["pass"]);

$sql = "select count(*) from usuario where usuario = '".$user."' and contra = '".$pass."'";
$sql2 = "select tipo from usuario where usuario = '".$user."' and contra = '".$pass."'"; 
$sql3 = "select * from usuario where usuario = '".$user."' and contra = '".$pass."'";

$r = mysql_query($sql);
$row = mysql_fetch_row($r);
$tip = mysql_query($sql2);
$row2 = mysql_fetch_row($tip);
$lol = mysql_query($sql3);

$var = mysql_fetch_array($lol);

if($row[0] == 1){
	if($row2[0] == 'admin'){
		$_SESSION['suser'] = $var['iduser'];
		$_SESSION['type'] = "admin";
 		?>
		<SCRIPT LANGUAGE="javascript"> location.href = "../adindex.php"; </SCRIPT>
		<?php
	}else{
		$_SESSION['suser'] = $var['iduser'];
		$_SESSION['type'] = "user";
		?>
		<script type="text/javascript">location.href="../muebles.php";</script>
		<?php
	}
}else{
	echo '<script> alert("User or password is incorrect");
			location.href="../index.php";</script>';
}		
?>