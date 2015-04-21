<?php
session_start();
if (isset($_SESSION['suser'])) {
  $id = $_SESSION['suser'];
$con = mysqli_connect('127.0.0.1', 'root', '', 'estilo') or die('Error en el servidor'.mysqli_connect($con));

$consulta = 'SELECT * FROM usuario';
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
 ?>
    <h3 class="light center">Mantenimiento de usuarios</h3>
    <table class="responsive-table col s12">
      <thead>
        <tr>
          <th>Id</th>
          <th>Usuario</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Contraseña</th>
          <th>Correo</td>
          <th>Teléfono</th>
          <th>DUI</th>
          <th>Tipo</th>
          <th>Borrar</th>
          <th>Modificar</th>
        </tr>
     </thead>
       <?php while($row = mysqli_fetch_array($result)) {?>
      <tr>
        <td><input type="hidden" value="<?php echo $row['iduser'];?>"><?php echo $row['iduser'];?></td>
        <td><input type="text" id="user" value="<?php echo $row['usuario'];?>"></td>
        <td><input type="text" id="name" value="<?php echo $row['nombre'];?>" onkeypress="return letras(event)"></td>
        <td><input type="text" id="ape" value="<?php echo $row['apellido'];?>" onkeypress="return letras(event)"></td>
        <td><input type="text" id="pass" value="<?php echo $row['contra'];?>"></td>
        <td><input type="text" id="mail" value="<?php echo $row['correo'];?>"></td>
        <td><input type="text" id="tel" value="<?php echo $row['telefono'];?>" onkeypress="return num(event)"></td>
        <td><input type="text" id="dui" value="<?php echo $row['dui'];?>" onkeypress="return num(event)"></td>
        <td><input type="text" id="tipo" value="<?php echo $row['tipo'];?>"></td>
        <td><button class="eliminar waves-effect waves-light btn" data-id="<?php echo $row['iduser'];?>">Borrar</button></td>
        <td><button class="modificar waves-effect waves-light btn" data-id="<?php echo $row['iduser'];?>">Modificar</button></td>
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
  echo '<script> alert("Usuario no autenticado"); location.href = "index.php"; </script>';
}
  ?>