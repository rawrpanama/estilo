<?php
session_start();
if (isset($_SESSION['suser']) && $_SESSION['type'] == "admin") {
  $id = $_SESSION['suser'];
$con = mysqli_connect('127.0.0.1', 'root', '', 'estilo') or die('An error has ocurred'.mysqli_connect($con));

$consulta = 'SELECT * FROM reserva';
$result = $con->query($consulta);

?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <link type="text/css" rel="stylesheet" href="css/style.css" media="screen, projection"/>
  <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
  <link rel="icon" href="img/Logo.png"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <meta name="theme-color" content="00acc1">
  <title>Estilo</title>
</head>
<body>
 <?php
include('navbar.html');
 ?>
    <h3 class="light center">Furniture Reservations</h3>
    <table class="responsive-table col s12">
      <thead>
        <tr>
          <th>Id</th>
          <th>User</th>
          <th>Furniture</th>
          <th>Date orderedr</th>
          <th>Delivery date</th>
          <th>Image</td>
          <th>Total</th>
          <th>Status</th>
          <th colspan="2">Change status</th>
        </tr>
     </thead>
       <?php while($row = mysqli_fetch_array($result)) {
        $sql = mysql_query("SELECT usuario FROM usuario WHERE iduser= '".$row['iduser']."'");
        $dato = mysql_fetch_array($sql);
        $user = $dato['usuario'];
        $sql0 = mysql_query("SELECT nombre FROM mueble WHERE idmueble= '".$row['idmueble']."'");
        $dato0 = mysql_fetch_array($sql0);
        $mueble = $dato0['nombre'];
        ?>
      <tr>
        <td><input type="hidden" value="<?php echo $row['idreserva'];?>"><?php echo $row['idreserva'];?></td>
        <td><p><?php echo $user;?></p></td>
        <td><p><?php echo $mueble;?></p></td>
        <td><p><?php echo $row['fecha_ordenado'];?></p></td>
        <td><p><?php echo $row['fecha_entrega'];?></p></td>
        <td><img src="<?php echo $row['img'];?>" style="width: 85px; height:65px;"></td>
        <td><p><?php echo $row['total'];?></p></td>
        <td><p><?php echo $row['estado'];?></p></td>
        <td><a href="php/upt.php?id=<?php echo $row['idmueble'];?>" class="waves-effect waves-teal btn-flat green-text">In producction  </a></td>
        <td><a href="php/upt1.php?id=<?php echo $row['idmueble'];?>" class="waves-effect waves-teal btn-flat blue-text">Done</a></td>
        <?php } ?>
        
      </tr>
    </table>
      <script type="text/javascript" src="js/jquery-2.1.1.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/inicio.js"></script>
</body>
</html>
 <?php
}else{
  echo '<script> alert("Unauthenticated user"); location.href = "index.php"; </script>';
}
  ?>