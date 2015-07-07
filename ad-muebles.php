<?php
session_start();
if (isset($_SESSION['suser']) && $_SESSION['type'] == "admin") {
  $id = $_SESSION['suser'];
include("php/conexion.php");
conexion();
$sql = 'SELECT * FROM furniture';
$q = mysql_query($sql);
?>
<html>
    <head>
      <title>Estilo</title>
      <?php include('navbar.html');?>
    </head>
    <body>
        <div class="row">
  <?php include 'sidebar.html';
  while ($row = mysql_fetch_array($q)) {
  ?>
        <div class="col s12 m3">
          <div class="card small">
            <div class="card-image">
              <img src="<?php echo $row['img'];?>" class="responsive-img" style="width: 100%; height: 100%;">
              <span class="card-title"><?php echo $row['nombre'];?></span>
            </div>
            <div class="card-content">
              <p><?php echo $row['descri'];?></p>
            </div>
            <div class="card-action">
              <a href="ad-edit.php?m=<?php echo $row['idmueble']; ?>">Edit</a>
            </div>
          </div>
        </div>
  <?php
      }
  ?>
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
