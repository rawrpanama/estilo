<?php
session_start();
$car = $_SESSION['carro'];
for ($i=0; $i <count($car) ; $i++) {
	if($car[$i]['id']!=$_POST['id']){
		$datosNuevos[] = $arrayName = array(
				'id' =>$car[$i]['id'],
				'name' =>$car[$i]['name'],
				'price' =>$car[$i]['price'],
				'image' =>$car[$i]['image'],
				'quanti' =>$car[$i]['quanti']
			);
	}
}
	if(isset($datosNuevos)){
		$_SESSION['carro']=$datosNuevos;
	}else{
		unset($_SESSION['carro']);
		echo'0';
	}
?>
