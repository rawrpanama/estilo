<?php
session_start();
if (isset($_SESSION['suser']) && $_SESSION['type'] == "admin") {
  $id = $_SESSION['suser'];
include("php/conexion.php");
conexion();
$sql = 
?>
<html>
    <head>
      <title>Estilo</title>
      <?php include('navbar.html');?>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <div class="row">
          <div class="collection col s12 m2" style="background-color: #90CAF9;">
           <a href="adusuarios.php" class="collection-item black-text"><i class="material-icons">contacts</i>User maintenance</a>
           <a href="ad-new-user.php" class="collection-item black-text"><i class="material-icons">perm_identity</i>Add new user</a>
           <a href="ad-new-material.php" class="collection-item white-text"><i class="material-icons">polymer</i>Add new material</a>
           <a href="ad-ver-reser.php" class="collection-item black-text"><i class="material-icons">done</i>Reservations</a>
           <a href="reportes.php" class="collection-item black-text"><i class="material-icons">reorder</i>Reports</a>
          </div>


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
