<?php
session_start();
if (isset($_SESSION['suser'])) {
  $id = $_SESSION['suser'];
 $con = mysqli_connect('127.0.0.1', 'root', '', 'estilo') or die('Error en el servidor'.mysqli_connect($con));
$consulta = "select usuario from usuario where iduser = $id";
$result = $con->query($consulta);
?>
<html>
    <head>
      <title>Estilo</title>
      <?php include('unavbar.html');?>
    </head>
    <body class="grey lighten-2">
      <div class="container">
        <div class="row">
          <h3 class="flow-text">Bienvenido, <?php while($row = mysqli_fetch_array($result)){echo $row['usuario'];}?></h3>
          <div class="col s4"><a class="waves-effect waves-light btn-large z-depth-5" href="u-upd-dat.php">Modificar mis datos</a></div>
          <div class="col s4"><a class="waves-effect waves-blue btn-large cyan lighten-2 z-depth-5" href="ad-new-user.php">Ver muebles ordenados</a></div>
          <div class="col s4"><a class="waves-effect waves-blue btn-large blue darken-4 z-depth-5" href="ad-new-material.php">Ponerse en contacto</a></div>
        </div>
      </div>
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