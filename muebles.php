<?php
session_start();
if (isset($_SESSION['suser'])) {
  $id = $_SESSION['suser'];
?>
<html>
    <head>
      <title>Estilo</title>
      <?php include("unavbar.html");?>
    </head>
    <body>
      <div class="slider">
        <ul class="slides">
          <li>
            <img src="img/desk.jpg"/>
            <div class="caption center-align">
              <h3>Desktops</h3>
              <h5 class="light grey-text text-lighten-3">You are able to find exclents desktops</h5>
            </div>
          </li>
          <li>
          <img src="img/mesa.jpg"/>
          <div class="caption left-align">
            <h3>Tables</h3>
            <h5 class="light grey-text text-lighten-3">Simple. Beautiful.</h5>
          </div>
        </li>
            <li>
              <img src="img/revista.jpg"/>
              <div class="caption right-align">
                <h3>Bathrooms</h3>
                <h5 class="light grey-text text-lighten-3">Here are some bathrooms furniture</h5>
              </div>
            </li>
            <li>
            <img src="img/cocina.jpg"/>
            <div class="caption center-align">
              <h3>Kitchen</h3>
              <h5 class="light grey-text text-lighten-3">Need some one for your kitchen?</h5>
            </div>
          </li>
        </ul>
      </div>
            <div class="container">
           <div class="row">
             <div class="col s12 m6">
                 <div class="card small">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator responsive-img" src="img/compresion.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Bathroom<i class="mdi-navigation-more-vert right"></i></span>
          <p><a class="activator" href="#">More</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Which you will find in this section? <i class="mdi-navigation-close right"></i></span>
          <p> Does your bathroom to your liking with the different styles we offer. Discover the types of baths and customize them. The elements most fundamental are: <br> * Bath <br> * Toilet. <br> * Washing hands. <br> * Mirror (optional).<br>
              <a href="banos.php">Go</a>
            </p>
        </div>
                </div>
                 </div>

             <div class="col s12 m6">
                 <div class="card small">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator responsive-img" src="img/mesatrabajo.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Office<i class="mdi-navigation-more-vert right"></i></span>
          <p><a class="activator" href="#">More</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Which you will find in this section? <i class="mdi-navigation-close right"></i></span>
          <p>You will find a lot of desktop that you can buy to use it in your office. <br> Also, you will find accesories that can be part of your office<br>
              <a href="oficinas.php">Go</a>

            </p>
        </div>
                </div>
                 </div>

               <div class="col s12 m6">
                 <div class="card small">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator responsive-img" src="img/cocina.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Kitchen<i class="mdi-navigation-more-vert right"></i></span>
          <p><a class="activator" href="#">More</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Which you will find in this section?<i class="mdi-navigation-close right"></i></span>
          <p>In this section you will be able to find kitchens, furnitures for kitchen or piece for a better order in your kitchen<br>
              <a href="cocinas.php">Go</a>
            </p>
        </div>
                </div>
                 </div>
                <div class="col s12 m6">
                 <div class="card small">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator responsive-img" src="img/mesaaa.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Closet<i class="mdi-navigation-more-vert right"></i></span>
          <p><a class="activator" href="#">More</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Which you will find in this section?<i class="mdi-navigation-close right"></i></span>
          <p>We have several styles of closet, you can take one of them and customize them!<br>
              <a href="closets.php">Go</a>
            </p>
        </div>
                </div>
                 </div>
           </div>
        </div>
      <script type="text/javascript" src="js/jquery-2.1.1.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){
          $('.slider').slider({});
        });
      </script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/inicio.js"></script>
    </body>
  </html>
    <?php
}else{
  echo '<script> alert("Usuario no autenticado"); location.href = "index.php"; </script>';
}
  ?>
