<?php
session_start();
if (isset($_SESSION['suser']) && $_SESSION['type'] == "admin") {
  $id = $_SESSION['suser'];
?>
<html>
    <head>
      <title>Estilo</title>
      <?php include('navbar.html');?>
    </head>
    <body>
      <div class="container">
        <div class="row">
          <div class="col s4 offset-s4">
            <center>
              <a class="waves-effect waves-light btn-large z-depth-5" href="php/pdf/repieza.php">Pieces report</a>
              <a class="waves-effect waves-blue btn-large cyan lighten-2 z-depth-5" href="php/pdf/repmueble.php">Furnitures report</a>
              <a class="waves-effect waves-blue btn-large blue darken-4 z-depth-5" href="php/pdf/repmateriales.php">Materials report</a>
            </center>
          </div>
        </div>
      </div>
      <script type="text/javascript" src="js/jquery-2.1.1.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/inicio.js"></script>,
    </body>
  </html>
  <?php
}else{
  echo '<script> alert("Unauthenticated user"); location.href = "index.php"; </script>';
}
  ?>