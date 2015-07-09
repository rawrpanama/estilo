<?php
session_start();
if (isset($_SESSION['suser'])  && $_SESSION['type'] == "admin") {
  $id = $_SESSION['suser'];
  $mueble = $_GET['m'];
  include("php/conexion.php");
conexion();
$consulta = "SELECT * FROM mueble where idmueble =" .$mueble;
$result = mysql_query($consulta);
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Estilo</title>
  <script type="text/javascript" src="js/modificar.js"></script>
  <script type="text/javascript" src="js/validaciones.js"></script>
</head>
<body>
 <?php
include('navbar.html');
while ($row = mysql_fetch_array($result)) {
  $sql = mysql_query("SELECT * FROM pieza WHERE idmueble=".$mueble);
  ?>
  <div class="container">
    <div class="row">
    <center>
    <div class="col s12 m12">
      <img src="<?php echo $row['img'];?>">
      <p class="text">This is the piece of furniture that will be built. Those are the pieces that the furniture contains: </p>
      <a href="ad-ver-reser.php" class="waves-effect waves-teal btn-flat green-text">Back</a>
      </div>
      </center>
      <div class="col s12">
        <table>
        <thead>
          <tr>
              <th data-field="id">Name</th>
              <th data-field="quatity">Item Quantity</th>
              <th data-field="price">Item Price</th>
              <th data-field="total">Item Total</th>
          </tr>
        </thead>
        <tbody>
        <?php  while($arr = mysql_fetch_array($sql)){?>
          <tr>
            <td><?php echo $arr['nombre']; ?></td>
            <td><?php echo $arr['cantidad']; ?></td>
            <td><?php echo "$"; echo $arr['precio']; ?></td>
            <td><?php echo "$"; echo $arr['precio']*$arr['cantidad']; ?></td>
          </tr>
          <?php }  ?>
        </tbody>
      </table>
      <p class="center">*Handwork is already include</p>
      </div>
    </div>
  </div>
<?php }  ?>

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
