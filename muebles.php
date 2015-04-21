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
          <img class="activator" src="img/compresion.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Baño<i class="mdi-navigation-more-vert right"></i></span>
          <p><a href="#">Go</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Que encontrara en esta sección? <i class="mdi-navigation-close right"></i></span>
          <p> Adapta tu baño a tu gusto con los diferentes estilos que ofrecemos. Descubre los tipos de baños y personalizalos. Los elementos mas fundamentales son: <br> * Bañera <br> * Retrete. <br> * Laba Manos. <br> * espejo (opcional).<br>
              <a href="#">Go</a>    
            </p>
        </div>
                </div>
                 </div>
               
             <div class="col s6">
                 <div class="card small">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="img/mesatrabajo.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Escritorio<i class="mdi-navigation-more-vert right"></i></span>
          <p><a href="#">Go</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Que encontrara en esta sección? <i class="mdi-navigation-close right"></i></span>
          <p>Obten tu propio espacio de trabajo, manten tus objetos en orden, coloca tus materiales en su puesto. <br> Tener un mueble que te beneficie, podras trabajar comodamente y saber donde tienes tus materiales de estudio. Personalizalo!<br>
              <a href="#">Go</a>
            
            </p>
        </div>
                </div>
                 </div>
                
               <div class="col s6">
                 <div class="card small">   
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="img/cocina.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Cocina<i class="mdi-navigation-more-vert right"></i></span>
          <p><a href="#">Go</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Que encontrara en esta sección?<i class="mdi-navigation-close right"></i></span>
          <p>Tener tu cocina en orden con todos los utencilios, el mueble de cocina consiste en un modulo, donde puedes guardar todos tus utencilios de cocina en orden, de forma que puedas tener tu cocina más organisada . Personalizalo!<br>
              <a href="#">Go</a>
            </p>
        </div>
                </div>
                 </div>
                <div class="col s6">
                 <div class="card small">   
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="img/mesaaa.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Mesa<i class="mdi-navigation-more-vert right"></i></span>
          <p><a href="#">Go</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">¿Qué encontrara en esta sección?<i class="mdi-navigation-close right"></i></span>
          <p>Tenemos varios estilos de mesas, tu puedes tomar uno de ellos y personalizarlos!<br>
              <a href="#">Go</a>
            
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