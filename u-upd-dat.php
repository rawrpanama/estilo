<?php
session_start();
if (isset($_SESSION['suser'])) {
  $id = $_SESSION['suser'];
  include("php/conexion.php");
  conexion();
$consulta = "SELECT * FROM usuario WHERE iduser ='".$id."'";
$result = mysql_query($consulta);

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
include('unavbar.html');
 ?>
    <h3 class="light center">Modify my data</h3>
    <?php while ($row = mysql_fetch_array($result)) {?>
   <div class="container">
        <div class="row">
          <form action="php/u-insertar.php" method="GET" class="col s12">
                      <input type="hidden" value="<?php echo $row['iduser'];?>" name="iduser">
                      <div class="row">
                        <div class="input-field col s12 m6">
                          <i class="mdi-action-account-circle prefix"></i>
                          <input type="text" id="user" name="user" value="<?php echo $row['usuario'];?>" class="validate tooltipped" disabled data-position="bottom" data-delay="50" data-tooltip="Debe contener por lo menos 6 carácteres" required="required">
                          <label for="user">User</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <i class="mdi-action-accessibility prefix"></i>
                          <input type="text" id="name" name="name" value="<?php echo $row['nombre'];?>" class="validate" required="required" onkeypress="return letras(event)">
                          <label for="name">Name</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <i class="mdi-action-accessibility prefix"></i>
                          <input type="text" id="ape" name="ape" value="<?php echo $row['apellido'];?>"required="required" onkeypress="return letras(event)">
                          <label for="ape">Last name</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <i class="mdi-communication-email prefix"></i>
                          <input type="email" id="email" name="email" value="<?php echo $row['correo'];?>"class="validate" required="required">
                          <label for="email">e-mail</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <i class="mdi-communication-phone prefix"></i>
                          <input type="text" id="cel" name="cel" value="<?php echo $row['telefono'];?>" class="validate" required="required" onkeypress="return num(event)">
                          <label for="cel">Phone number</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <i class="mdi-action-credit-card prefix"></i>
                          <input type="text" id="dui" name="dui" value="<?php echo $row['dui'];?>" class="validate" required="required" onkeypress="return num(event)">
                          <label for="dui">DUI</label>
                        </div>
                      </div>
                  <button class="waves-effect waves-green btn-flat" type="submit">Modify<i class="mdi-content-send right"></i>
                </button>
                <a href="my-profile.php" class="waves-effect waves-red red-text">Back</a>
                </form>
        </div>
      </div>
      <?php } ?>
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
