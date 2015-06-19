<?php
session_start();
if (isset($_SESSION['suser'])) {
    $id = $_SESSION['suser'];
?>
<html>
<head>
<?php include('unavbar.html');?>
</head>
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta charset="utf-8">
<center>
<h1>Contac Us</h1>
</center>
</head>
<body>
  <section class="formulario">
    <form action="contactenos.php" method="post">
    	<div class="container">
	<div class="row">
  <form class="col s12">
    <div class="row">
      <div class="input-field col s6">
      	<label for="first_name">First Name</label>
        <input id="first_name" type="text" class="validate">
      </div>
    </div>
    <div class="row">
         <div class="input-field col s6">
        <label for="last_name">Last Name</label>
        <input id="last_name" type="text" class="validate">
    </div>
      </div>
    <div class="row">
      <div class="input-field col s6">
      	<label for="email">Email</label>
        <input id="email" type="email" class="validate">
        
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
      	<label for="Message">Message</label>
        <input id="msg" type="text" class="validate">
    <a class="waves-effect waves-light btn" id="submit" type="submit" name="submit" />Send</a>
    <a class="waves-effect waves-light btn" id="submit" name="back" href="my-profile.php ?>" />Back</a>
      </div>
    </div>
  </form>
</div>
</div>
</form>
</section>
  

  </form>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
  <?php
}else{
  echo '<script> alert("Unauthenticated user"); location.href = "index.php"; </script>';
}
  ?>