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
            <div class="container">
           
           <div class="row">
               
             <div class="col s6">
                 <div class="card small">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator responsive-img" src="img/compresion.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Bathroom<i class="mdi-navigation-more-vert right"></i></span>
          <p><a class="activator" href="#">See more</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Which you will find in this section? <i class="mdi-navigation-close right"></i></span>
          <p> Does your bathroom to your liking with the different styles we offer. Discover the types of baths and customize them. The elements most fundamental are: <br> * Bath <br> * Toilet. <br> * Washing hands. <br> * Mirror (optional).<br>
              <a href="banos.php">Ir</a>    
            </p>
        </div>
                </div>
                 </div>
               
             <div class="col s6">
                 <div class="card small">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator responsive-img" src="img/mesatrabajo.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Escritorio<i class="mdi-navigation-more-vert right"></i></span>
          <p><a class="activator" href="#">Ver más</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Which you will find in this section? <i class="mdi-navigation-close right"></i></span>
          <p>Obten tu propio espacio de trabajo, manten tus objetos en orden, coloca tus materiales en su puesto. <br> Tener un mueble que te beneficie, podras trabajar comodamente y saber donde tienes tus materiales de estudio. Personalizalo!<br>
              <a href="escritorios.php">Ir</a>
            
            </p>
        </div>
                </div>
                 </div>
                
               <div class="col s6">
                 <div class="card small">   
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator responsive-img" src="img/cocina.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Kitchen<i class="mdi-navigation-more-vert right"></i></span>
          <p><a class="activator" href="#">See more</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Which you will find in this section?<i class="mdi-navigation-close right"></i></span>
          <p>Tener tu cocina en orden con todos los utencilios, el mueble de cocina consiste en un modulo, donde puedes guardar todos tus utencilios de cocina en orden, de forma que puedas tener tu cocina más organisada . Personalizalo!<br>
              <a href="cocinas.php">Ir</a>
            </p>
        </div>
                </div>
                 </div>
                <div class="col s6">
                 <div class="card small">   
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator responsive-img" src="img/mesaaa.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Closet<i class="mdi-navigation-more-vert right"></i></span>
          <p><a class="activator" href="#">Ver más</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Which you will find in this section?<i class="mdi-navigation-close right"></i></span>
          <p>We have several styles of closet, you can take one of them and customize them!<br>
              <a href="mesas.php">Ir</a>
            
            </p>
        </div>
                </div>
                 </div>
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