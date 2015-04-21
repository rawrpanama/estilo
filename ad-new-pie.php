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
          <form action="php/ad-insertar.php" method="POST" class="col s12">
                      <div class="row">
                        <div class="input-field col s12 m6">
                          <input type="text" id="user" name="user"  class="validate" required="required">
                          <label for="user">Nombre</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <input type="text" id="name" name="name"  class="validate" required="required" onkeypress="return num(event)">
                          <label for="name">Alto</label>
                        </div>
                        <div class="input-field col s12 m6"> 
                          <input type="text" id="ape" name="ape" required="required" onkeypress="return num(event)">
                          <label for="ape">Ancho</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <input type="password" id="pass1" name="pass1" class="validate" required="required">
                          <label for="pass1">Precio</label>
                        </div>
                      </div>
                  <button class="waves-effect waves-green btn-flat" type="submit">Agregar<i class="mdi-content-send right"></i>
                </button>
                <a href="adindex.php" class="waves-effect waves-red red-text">Atrás</a>
              </form>
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