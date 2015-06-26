<?php
session_start();
if (isset($_SESSION['suser']) && $_SESSION['type'] == "admin") {
  $id = $_SESSION['suser'];
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
          <form action="php/subir_img.php" method="POST" class="col s10" enctype="multipart/form-data">
                        <div class="input-field col s12 m6">
                          <input type="text" id="material" name="material"  class="validate" required="required">
                          <label for="material">Material</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <input type="text" id="tipo" name="tipo"  class="validate" required="required">
                          <label for="tipo">Type</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <input type="text" id="price" name="price" required="required">
                          <label for="price">Price</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <input type="text" id="codi" name="codi" class="validate" required="required">
                          <label for="codi">Code</label>
                        </div>
                        <!--<div class="input-field col s12 m6">
                          <i class="mdi-communication-email prefix"></i>-->
                           <input type="file" name="img" placeholder="Imagen" required="required"/><br><br>
                         <!-- <label for="img">Image</label>-->

                  <button class="waves-effect waves-green btn-flat" type="submit">Add<i class="mdi-content-send right"></i>
                </button>
                <a href="adindex.php" class="waves-effect waves-red red-text">Go Back</a>
                </form>
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
