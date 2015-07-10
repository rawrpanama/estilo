<?php
session_start();
$car = $_SESSION['carro'];
for ($i=0; $i <count($car) ; $i++) {
	if($car[$i]['id']==$_POST['id']){
		$new=array(
				'id' =>$car[$i]['id'],
				'name' =>$car[$i]['name'],
				'type' =>$car[$i]['type'],
				'price' =>$car[$i]['price'],
				'image' =>$car[$i]['image'],
				'quanti' =>$car[$i]['quanti']
			);
	}
}
	if(isset($new)){
		$_SESSION['carro']=$new;
	}else{
		unset($_SESSION['carro']);
		echo'0';
	}
?>
