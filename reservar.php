<?php
session_start();
if (isset($_SESSION['suser'])) {
  $id = $_SESSION['suser'];
  include("php/conexion.php");
  conexion();

if (isset($_SESSION['carro'])) {
  if (isset($_GET['id'])){
    $car = $_SESSION['carro'];
    $find = false;
    $num = 0;

    for ($i=0; $i < count($car); $i++) {
      if ($car[$i]['id']==$_GET['id']) {
        $find=true;
        $num=$i;
      }
    }
    if ($find==true) {
      $car[$num]['quanti']=$car[$num]['quanti']+1;
      $_SESSION['carro']=$car;
    }else{
      $nombre="";
      $tipo="";
      $precio=0;
      $img="";
      $q = mysql_query("SELECT * FROM furniture WHERE idmueble=".$_GET['id']);
      while ($row = mysql_fetch_array($q)) {
        $nombre=$row['nombre'];
        $tipo=$row['tipo'];
        $precio=$row['precio'];
        $img=$row['img'];
      }
      $car2= array('id' => $_GET['id'], 'name' =>$nombre , 'type' => $tipo , 'price' => $precio , 'image' => $img, 'quanti' => 1 );
      array_push($car, $car2);
      $_SESSION['carro']=$car;
    }
  }
}else{
  if (isset($_GET['id'])) {
    $nombre="";
    $tipo="";
    $precio=0;
    $img="";
    $q = mysql_query("SELECT * FROM furniture WHERE idmueble=".$_GET['id']);
    while ($row = mysql_fetch_array($q)) {
      $nombre=$row['nombre'];
      $tipo=$row['tipo'];
      $precio=$row['precio'];
      $img=$row['img'];
    }
    $car[]= array('id' => $_GET['id'], 'name' =>$nombre , 'type' => $tipo , 'price' => $precio , 'image' => $img, 'quanti' => 1 );
    $_SESSION['carro'] = $car;
  }
}
/*$sql = "SELECT precio FROM mueble where idmueble =" .$mueble;
$lol = mysql_query($sql);
$pro = mysql_fetch_array($lol);
$precio = $pro['precio'];
$sql1 = "SELECT img FROM mueble where idmueble =" .$mueble;
$lal = mysql_query($sql1);
$pre = mysql_fetch_array($lal);
$img = $pre['img'];
$fecha = date('Y/m/d');
$fecha_entre = "2015-06-25";
$esta = "En cola";

if (isset($mueble)) {
	$query = "INSERT INTO reserva (total, fecha_ordenado, fecha_entrega, img, iduser, idmueble, estado) VALUES ('".$precio."', '".$fecha."', '".$fecha_entre."', '".$img."','".$id."', '".$mueble."','".$esta."')";
	mysql_query($query);*/
	?>
<html lang="es">
<head>
  <meta charset="utf-8">
  <link type="text/css" rel="stylesheet" href="css/style.css" media="screen, projection"/>
  <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
  <link rel="icon" href="img/Logo.png"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <meta name="theme-color" content="00acc1">
  <title>Estilo</title>
  <script type="text/javascript" src="js/validaciones.js"></script>
</head>
<body>
 <?php
include('unavbar.html');
  ?>
<center>
  <div class="container">
    <div class="row">
          <?php
          $total = 0;
          if(isset($_SESSION['carro'])){
          $total = 0;
          $datos = $_SESSION['carro'];
           for($i=0; $i< count($datos); $i++){ ?>
             <div class="col s12 m4 blue lighten-4" style="border: 1px #2196f3 solid; margin-bottom: 1%; heigh: 150px;">
                <img src="<?php echo $datos[$i]['image']; ?>"class="responsive-img col s12 m12"/>
                <span class="flow-text"><?php echo $datos[$i]['name']; ?></span><br>
                <span><?php echo $datos[$i]['type']; ?></span><br>
                <span><?php echo "$"; echo $datos[$i]['price']; ?></span><br>
                <span><input type="text" name="nam" value="<?php echo $datos[$i]['quanti'];?>" data-precio="<?php echo $datos[$i]['price']; ?>" data-id="<?php echo $datos[$i]['id']; ?>" class="cantidad"></span><br>
                <span class="subtotal<?php echo $datos[$i]['id']; ?>">Subtotal: <?php echo "$"; echo $datos[$i]['quanti']*$datos[$i]['price']; ?></span>
                <center><a class="eliminar waves-effect btn-flat red-text" data-id="<?php echo $datos[$i]['id'] ?>" href="#">Delete</a></center>
            </div>
          <?php
          $total = ($datos[$i]['price']*$datos[$i]['quanti'])+$total;
          $_SESSION['total']=$total;
          }
        }else{
          echo '<center><span class="flow-text">The cart is empty</span></center>';
        }
        ?>
      </div>
      <center><span id="total" class="flow-text">The total is: $<?php echo $total;?></span></center>
      <a class="waves-effect waves-teal btn-flat green-text" href="factura.php">Get your ticket!</a>
      <center><a class="waves-effect btn-flat red-text" href="php/vaciar.php">Delete</a></center>
  </div>
</center>
      <script type="text/javascript" src="js/jquery-2.1.1.js"></script>
      <script type="text/javascript">
          var inicio=function() {
          $(".cantidad").keyup(function(e){
            if($(this).val()!=''){
              if(e.keyCode==13){
                var id=$(this).attr('data-id');
                var precio=$(this).attr('data-precio');
                var cantidad=$(this).val();
                $(this).parentsUntil('.col s12 m4 blue lighten-4s').find('.subtotal'+id).text('Subtotal: $'+(precio*cantidad));
                $.post('./php/modify.php',{
                  id:id,
                  price:precio,
                  quanti:cantidad
                },function(e){
                    $("#total").text('Total: '+e);
                });
              }
            }
          });
           $(".eliminar waves-effect btn-flat red-text").click(function(e){
            		e.preventDefault();
            		var id=$(this).attr('data-id');
            		$(this).parentsUntil('.col s12 m4 blue lighten-4s').remove();
            		$.post('php/delete.php',{
            			id: id
            		},function(a){
            			if (a=='0') {
            				location.href="reservar.php";
            			};
            		});
            	});
            }
  $(document).on('ready',inicio);
      </script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/inicio.js"></script>
</body>
</html>
<?php
//}

}else{
	  echo '<script> alert("Unauthenticated user"); location.href = "index.php"; </script>';
}
?>
