<?php
session_start();
if (isset($_SESSION['suser'])) {
  $id = $_SESSION['suser'];
  include("php/conexion.php");
  conexion();
$consulta = "SELECT * FROM reserva where iduser='".$id."'";
$result = mysql_query($consulta);

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
    <h3 class="light center">Furniture Reservation</h3>
    <div class="container">
      <div class="row">
    <table class="responsive-table col s12">
      <thead>
        <tr>
          <th>User</th>
          <th>Furniture</th>
          <th>Date ordered</th>
          <th>Delivery date</th>
          <th>Image</td>
          <th>Total</th>
          <th>Status</th>
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
        <td><p><?php echo $user;?></p></td>
        <td><p><?php echo $mueble;?></p></td>
        <td><p><?php echo $row['fecha_ordenado'];?></p></td>
        <td><p><?php echo $row['fecha_entrega'];?></p></td>
        <td><img src="<?php echo $row['img'];?>" style="width: 85px; height:65px;"></td>
        <td><p><?php echo $row['total'];?></p></td>
        <td><p><?php echo $row['estado'];?></p></td>
        <?php } ?>

      </tr>
    </table>
      </div>
    </div>
      <script type="text/javascript" src="js/jquery-2.1.1.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/inicio.js"></script>
</body>
</html>
 <?php
}else{
  echo '<script> alert("Unauthenticated user "); location.href = "index.php"; </script>';
}
  ?>
