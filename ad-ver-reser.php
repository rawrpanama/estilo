<?php
session_start();
if (isset($_SESSION['suser']) && $_SESSION['type'] == "admin") {
  $id = $_SESSION['suser'];
include("php/conexion.php");
conexion();

$consulta = 'SELECT * FROM reserva';
$result =mysql_query($consulta);

?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>Estilo</title>
</head>
<body>
 <?php
include('navbar.html');
 ?>
 <div class="row">
   <div class="collection col s12 m2" style="background-color: #90CAF9;">
    <a href="adusuarios.php" class="collection-item black-text"><i class="material-icons">contacts</i>User maintenance</a>
    <a href="ad-new-user.php" class="collection-item black-text"><i class="material-icons">perm_identity</i>Add new user</a>
    <a href="ad-new-material.php" class="collection-item black-text"><i class="material-icons">polymer</i>Add new material</a>
    <a href="ad-ver-reser.php" class="collection-item white-text"><i class="material-icons">done</i>Reservations</a>
    <a href="reportes.php" class="collection-item black-text"><i class="material-icons">reorder</i>Reports</a>
   </div>
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
       <?php while($row = mysql_fetch_array($result)) {
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
        <td><a href="ad-ver-pre.php?m=<?php echo $row['idmueble'];?>" class="waves-effect waves-teal btn-flat blue-text">Budget</a></td>
        <td><a href="php/upt.php?id=<?php echo $row['idmueble'];?>" class="waves-effect waves-teal btn-flat green-text">In producction  </a></td>
        <td><a href="php/upt1.php?id=<?php echo $row['idmueble'];?>" class="waves-effect waves-teal btn-flat blue-text">Done</a></td>
        <?php } ?>

      </tr>
    </table>
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
