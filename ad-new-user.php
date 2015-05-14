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
                          <i class="mdi-action-account-circle prefix"></i>
                          <input type="text" id="user" name="user"  class="validate tooltipped" data-position="bottom" data-delay="50" data-tooltip="Debe contener por lo menos 6 carácteres" required="required">
                          <label for="user">Usuario</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <i class="mdi-action-accessibility prefix"></i>
                          <input type="text" id="name" name="name"  class="validate" required="required" onkeypress="return letras(event)">
                          <label for="name">Nombre</label>
                        </div>
                        <div class="input-field col s12 m6"> 
                          <i class="mdi-action-accessibility prefix"></i>
                          <input type="text" id="ape" name="ape" required="required" onkeypress="return letras(event)">
                          <label for="ape">Apellido</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <i class="mdi-action-lock prefix"></i>
                          <input type="password" id="pass1" name="pass1" class="validate tooltipped" data-position="bottom" data-delay="50" data-tooltip="Debes usar letras, números y símbolos" required="required">
                          <label for="pass1">Contraseña</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <i class="mdi-communication-email prefix"></i>
                          <input type="email" id="email" name="email" class="validate" required="required">
                          <label for="email">Correo Electrónico</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <i class="mdi-action-lock prefix"></i>
                          <input type="password" id="pass2" name="pass2" class="validate tooltipped" data-position="bottom" data-delay="50" data-tooltip="Confirma tu contraseña" required="required">
                          <label for="pass2">Confirmar contraseña</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <i class="mdi-communication-phone prefix"></i>
                          <input type="text" id="cel" name="cel" class="validate" required="required" onkeypress="return num(event)">
                          <label for="cel">Número de teléfono</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <i class="mdi-action-credit-card prefix"></i>
                          <input type="text" id="dui" name="dui" class="validate" required="required" onkeypress="return num(event)">
                          <label for="dui">DUI</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <select name="tipo" id="tipo">
                            <option value="admin">Administrador</option>
                            <option value="user">Usuario</option>
                          </select>
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