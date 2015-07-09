<?php
session_start();
		$car = $_SESSION['carro'];
		$total=0;
		$numero=0;
		for ($i=0 ; $i < count($car) ; $i++ ) {
			if ($car[$i]['id']==$_POST['id']) {
				$numero=$i;
			}
		}
			$car[$numero]['quanti']=$_POST['quanti'];
			for ($i=0 ; $i < count($car) ; $i++ ) {
				$total =($car[$i]['price']*$car[$i]['quanti'])+$total;
			}
			$_SESSION['carro']=$car;
			echo "$".$total;
?>
