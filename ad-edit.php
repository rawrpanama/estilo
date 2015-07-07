<?php
session_start();
if (isset($_SESSION['suser']) && $_SESSION['type'] == "admin") {
  $id = $_SESSION['suser'];
  $m = $_GET['m'];
include("php/conexion.php");
conexion();
$sql = 'SELECT * FROM furniture WHERE idmueble='.$m;
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
                <div class="col s12 m7">
                  <div class="card">
                    <div class="card-image">
                      <img src="<?php echo $row['img'];?>" class="responsive-img">
                      <div class="input-field col s12 m6 card-title">
                        <input type="text" id="name" name="name"  class="validate" required="required" value="<?php echo $row['nombre'] ?> " onkeypress="return letras(event)">
                        <label for="name">Name</label>
                      </div>
                    </div>
                    <div class="card-content">
                      <div class="input-field col s12 m6 card-title">
                        <textarea id="textarea1" class="materialize-textarea">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
                        <label for="textarea1">Textarea</label>
                      </div>
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
