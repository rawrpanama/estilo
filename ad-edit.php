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
        ?>
        <table class="responsive-table col s12 m10 bordered" style="float: right;">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Type</th>
            <th>Price</td>
            <th>Vis</th>
          </tr>
       </thead>
        <?php
        while ($row = mysql_fetch_array($q)) {
        ?>
        <tr>
          <td><input type="text" id="idm" value="<?php echo $row['idmueble'];?>"></td>
          <td><input type="text" id="name" value="<?php echo $row['nombre'];?>" onkeypress="return letras(event)"></td>
          <!--<td><input type="text" id="ape" value="" onkeypress="return letras(event)"></td>-->
          <td><div class="input-field col s12">
          <textarea id="descri" class="materialize-textarea"><?php  echo $row['descri'];?></textarea>
          <label for="textarea1">Textarea</label>
        </div></td>
          <td><input type="text" id="tipo" value="<?php echo $row['tipo'];?>"></td>
          <td><input type="text" id="precio" value="<?php echo $row['precio'];?>" onkeypress="return num(event)"></td>
          <td><input type="text" id="vis" value="<?php echo $row['vis'];?>" onkeypress="return num(event)"></td>
          <td><button class="delete waves-effect waves-light btn" data-id="<?php echo $row['idmueble'];?>">Delete</button></td>
          <td><button class="modify waves-effect waves-light btn" data-id="<?php echo $row['idmueble'];?>">Modify</button></td>
        </tr>
        <?php
            }
        ?>
   </table>
      </div>
      <script type="text/javascript" src="js/validaciones.js"></script>
      <script type="text/javascript" src="js/jquery-2.1.1.js"></script>
      <script type="text/javascript" src="js/modificar.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/inicio.js"></script>
    </body>
  </html>
  <?php
}else{
  echo '<script> alert("Unauthenticated user"); location.href = "index.php"; </script>';
}
  ?>
