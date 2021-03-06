<?php
session_start();
if (isset($_SESSION['suser']) && $_SESSION['type'] == "admin") {
  $id = $_SESSION['suser'];
include("php/conexion.php");
conexion();

$consulta = 'SELECT * FROM usuario';
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
    <h3 class="light center">Users maintenance</h3>
    <div class="">
      <div class="row">
        <?php include 'sidebar.html'; ?>
      <table class="responsive-table col s12 m10 bordered" style="float: right;">
      <thead>
        <tr>
          <th>Id</th>
          <th>User</th>
          <th>First name</th>
          <th>Last name</th>
          <th>Mail</td>
          <th>Phone</th>
          <th>DUI</th>
          <th>Delete</th>
          <th>Modify</th>
        </tr>
     </thead>
       <?php while($row = mysql_fetch_array($result)) {?>
      <tr>
        <td><input type="hidden" value="<?php echo $row['iduser'];?>"><?php echo $row['iduser'];?></td>
        <td><input type="text" id="user" value="<?php echo $row['usuario'];?>"></td>
        <td><input type="text" id="name" value="<?php echo $row['nombre'];?>" onkeypress="return letras(event)"></td>
        <td><input type="text" id="ape" value="<?php echo $row['apellido'];?>" onkeypress="return letras(event)"></td>
        <td><input type="text" id="mail" value="<?php echo $row['correo'];?>"></td>
        <td><input type="text" id="tel" value="<?php echo $row['telefono'];?>" onkeypress="return num(event)"></td>
        <td><input type="text" id="dui" value="<?php echo $row['dui'];?>" onkeypress="return num(event)"></td>
        <td><button class="eliminar waves-effect waves-light btn" data-id="<?php echo $row['iduser'];?>">Delete</button></td>
        <td><button class="modificar waves-effect waves-light btn" data-id="<?php echo $row['iduser'];?>">Modify</button></td>
        <?php } ?>

      </tr>
    </table>
    </div>
  </div>
      <script type="text/javascript" src="js/validaciones.js"></script>
      <script type="text/javascript" src="js/jquery-2.1.1.js"></script>
      <script type="text/javascript" src="js/modificar.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/inicio.js"></script>
</body>
</html>
 <?php
}else{
  echo '<script> alert("Unauthenticated user"); location.href = "index.php"; </script>';
}
  ?>
