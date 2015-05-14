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
          <form action="php/subir_img.php" method="POST" class="col s12" enctype="multipart/form-data">
                      <div class="row">
                        <div class="input-field col s12 m6">
                          <input type="text" id="material" name="material"  class="validate" required="required">
                          <label for="material">Material</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <input type="text" id="tipo" name="tipo"  class="validate" required="required">
                          <label for="tipo">Tipo</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <input type="text" id="price" name="price" required="required" onkeypress="return num(event)">
                          <label for="price">Precio</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <input type="text" id="codi" name="codi" class="validate" required="required">
                          <label for="codi">Código</label>
                        </div>
                        <!--<div class="input-field col s12 m6">
                          <i class="mdi-communication-email prefix"></i>-->
                           <input type="file" name="img" placeholder="Imagen" required="required"/>      
                         <!-- <label for="img">Image</label>-->
                        </div>
                        
                      </div>
                  <button class="waves-effect waves-green btn-flat" type="submit">Agregar<i class="mdi-content-send right"></i>
                </button>
                <a href="adindex.php" class="waves-effect waves-red red-text">Atrás</a>
                </form>
        </div>
      </div>
      <script type="text/javascript" src="js/validaciones.js"></script>
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