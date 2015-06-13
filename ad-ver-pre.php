<?php
session_start();
if (isset($_SESSION['suser'])  && $_SESSION['type'] == "admin") {
  $id = $_SESSION['suser'];
  $mueble = $_GET['m'];
  $con = mysqli_connect('127.0.0.1', 'root', '', 'estilo') or die('An error has ocurred'.mysqli_connect($con));
$consulta = "SELECT * FROM mueble where idmueble =" .$mueble;
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
  <script type="text/javascript" src="js/modificar.js"></script>
  <script type="text/javascript" src="js/validaciones.js"></script>
</head>
<body>
 <?php
include('navbar.html');
while ($row = mysqli_fetch_array($result)) {
  $sql = mysql_query("SELECT * FROM pieza WHERE idmueble=".$mueble);
  ?>

  <div class="container">
    <div class="row">
    <center>
    <div class="col s12 m12">
      <img src="<?php echo $row['img'];?>">
      <p class="text">This is the piece of furniture that will be build. Those are the pieces that the furniture contains: </p>
      <a href="php/reservar.php?id=<?php echo $mueble;?>" class="waves-effect waves-teal btn-flat green-text">Accept</a>
      </div>
      </center>
      <div>
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