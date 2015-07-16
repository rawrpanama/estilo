<?php
session_start();
if (isset($_SESSION['suser']) && $_SESSION['type'] == "admin") {
  $id = $_SESSION['suser'];
/*include("php/conexion.php");
$con = conexion();*/
$con = mysqli_connect('127.0.0.1','root','','estilo') or die('Error seleccionando la base de datos');
mysql_query("UPDATE usuario SET count = 0 WHERE iduser=7");
$consulta = 'SELECT idreserva FROM reserva';
$result =mysql_query($consulta);

require_once('php/zebra_pagination.php');
$res = $con->query($consulta);
$num_reg = mysqli_num_rows($res);
$rpp = 4;

$pag = new Zebra_Pagination();
$pag->records($num_reg);
$pag->records_per_page($rpp);
$consul = 'SELECT * FROM reserva LIMIT '.(($pag->get_page() -1) * $rpp). ',' .$rpp;
$ya = $con->query($consul);
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Estilo</title>
</head>
<body>
 <?php
include('navbar.html');
 ?>
 <div class="row">
   <?php include 'sidebar.html'; ?>
  <h3 class="light center">Furniture Reservations</h3>
    <table class="responsive-table col s12 m10">
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
          <th>Budget</th>
          <th>Change status</th>
        </tr>
     </thead>
       <?php while($row = mysqli_fetch_array($ya)) {
        $sql = mysql_query("SELECT usuario FROM usuario WHERE iduser= '".$row['iduser']."'");
        $dato = mysql_fetch_array($sql);
        $user = $dato['usuario'];
        $sql0 = mysql_query("SELECT nombre FROM mueble WHERE idmueble= '".$row['idmueble']."'");
        $dato0 = mysql_fetch_array($sql0);
        $mueble = $dato0['nombre'];
        $fecha = strtotime(date('Y-m-d'));
        ?>
      <tr>
        <td><input type="hidden" value="<?php echo $row['idreserva'];?>"><?php echo $row['idreserva'];?></td>
        <td><p><?php echo $user;?></p></td>
        <td><p><?php echo $mueble;?></p></td>
        <td><p><?php echo $row['fecha_ordenado'];?></p></td>
        <td><p><?php echo $row['fecha_entrega'];?></p></td>
        <td><img src="<?php echo $row['img'];?>" style="width: 85px; height:65px;"></td>
        <td><p><?php echo $row['total'];?></p></td>
        <td><p><?php if($fecha<strtotime($row['fecha_p'])){echo $row['estado'];}else{echo "canceled";};?></p></td>
        <td><a href="ad-ver-pre.php?m=<?php echo $row['idmueble'];?>" class="waves-effect waves-teal btn-flat blue-text">Budget</a></td>
        <td><a href="php/upt.php?id=<?php echo $row['idmueble'];?>" class="waves-effect waves-teal btn-flat green-text">In producction  </a></td>
        <td><a href="php/upt1.php?id=<?php echo $row['idmueble'];?>" class="waves-effect waves-teal btn-flat blue-text">Done</a></td>
        <?php } ?>

      </tr>
    </table>
    <?php $pag->render();?>
  </div>
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
