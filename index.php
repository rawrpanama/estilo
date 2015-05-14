<html>
    <head>
      <meta charset="utf-8">
      <link type="text/css" rel="stylesheet" href="css/style.css" media="screen, projection"/>
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
      <link rel="icon" href="img/Logo.png"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
      <meta name="theme-color" content="00acc1">
      <script type="text/javascript" src="js/validaciones.js"></script>
      <title>Estilo</title>
    </head>
    <body>
        <div class="parallax-container">
          <br><br>
          <div class="parallax"><img src="img/md.jpg"></div>
            <div class="container">
              <div class="row center">
                <img src="img/logo.png" style="width: 35%; height:40%;" class="responsive-img">
              </div>
              <div class="row">
                <h2 class="col s12 m12 center">¿Qué es <i>Estilo</i>?</h2>
                <div class="col s12 m8 offset-m2 flow-text"><p class="header light">Estilo es una página web que le permite al usuario personalizar sus propios muebles a partir de diseños ya establecidos.</p></div>
              </div>
          </div>
        </div>
        <div class="section">
          <div class="container">
            <div class="row">
              <h4 class="center light flow-text">Empieza a personalizar tu propio mueble, lo único que tienes que hacer es iniciar sesión o registrase si no tienes un usuario.</h4>
              <div class="col s6 offset-m3">
                <!-- Botón modal -->
                <center>
              <a class="waves-effect waves-light btn modal-trigger blue" href="#regis-ml">Registrarse</a>
              <a class="waves-effect waves-light btn modal-trigger blue" href="#ini-ml">Iniciar sesión</a>
            </center>
            <!-- Modal que abre -->
            <div id="ini-ml" class="modal">
                <div class="modal-content">
                  <h5 class="center">Iniciar sesión</h4>
                  <h4 class="center light">Ingresa tus datos</h4>
                  <div class="row">
                    <form action="php/comprobar.php" method="POST" class="col s12">
                      <div class="row">
                        <div class="input-field col s8 m8 offset-m2">
                          <i class="mdi-action-account-circle prefix"></i>
                          <input type="text" id="user" name="user" required="required">
                          <label for="user">Usuario</label>
                        </div>
                        <div class="input-field col s8 m8 offset-m2">
                          <i class="mdi-action-lock prefix"></i>
                          <input type="password" id="pass" name="pass" class="validate" required="required">
                          <label for="pass">Contraseña</label>
                        </div>
                      </div>
                 
                <div class="modal-footer">
                  <button class="waves-effect waves-green btn-flat" type="submit">Iniciar Sesión
                  <i class="mdi-content-send right"></i>
                </button>
                  <!--<a href="#" class="waves-effect waves-green btn-flat modal-action green-text">Iniciar Sesión</a>-->
                  </form>
                  <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close red-text">Cancelar</a>
              </div>
              </div>
               </div>
                </div>

              <div id="regis-ml" class="modal">
                <div class="modal-content">
                  <h5 class="center">Registrarse </h4>
                  <h4 class="center light">Ingresa tu información</h4>
                  <div class="row">
                    <form action="php/insertar.php" method="POST" class="col s12">
                      <div class="row">
                        <div class="input-field col s12 m6">
                          <i class="mdi-action-account-circle prefix"></i>
                          <input type="text" id="user" name="user"  class="validate tooltipped" data-position="bottom" data-delay="50" data-tooltip="Debe contener por lo menos 6 carácteres" required="required" maxlength="20">
                          <label for="user">Usuario</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <i class="mdi-action-accessibility prefix"></i>
                          <input type="text" id="name" name="name"  class="validate" required="required" onkeypress="return letras(event)" maxlength="20">
                          <label for="name">Nombre</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <i class="mdi-action-accessibility prefix"></i>
                          <input type="text" id="ape" name="ape" required="required" onkeypress="return letras(event)" maxlength="20">
                          <label for="ape">Apellido</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <i class="mdi-action-lock prefix"></i>
                          <input type="password" id="pass1" name="pass1" class="validate tooltipped" data-position="bottom" data-delay="50" data-tooltip="Deberías usar letras, números y símbolos" required="required">
                          <label for="pass1">Contraseña</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <i class="mdi-communication-email prefix"></i>
                          <input type="email" id="email" name="email" class="validate" required="required">
                          <label for="email">Correo</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <i class="mdi-action-lock prefix"></i>
                          <input type="password" id="pass2" name="pass2" class="validate tooltipped" data-position="bottom" data-delay="50" data-tooltip="Repite tu contraseña" required="required">
                          <label for="pass2">Confirmar contraseña</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <i class="mdi-communication-phone prefix"></i>
                          <input type="text" id="cel" name="cel" class="validate" required="required" onkeypress="return num(event)" maxlength="8">
                          <label for="cel">Teléfono</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <i class="mdi-action-credit-card prefix"></i>
                          <input type="text" id="dui" name="dui" class="validate" required="required" onkeypress="return num(event)" maxlength="9">
                          <label for="dui">DUI</label>
                        </div>
                      </div>
                    
                <div class="modal-footer">
                  <button class="waves-effect waves-green btn-flat" type="submit">Registrarse
                  <i class="mdi-content-send right"></i>
                </button>
                </form>
                  <a href="" class="waves-effect waves-red btn-flat modal-action modal-close red-text">Cancel</a>
                </div>
                  </div>
                </div>
              </div>
              </div>
        <!--
        <div class="parallax-container">
          <div class="parallax"><img src="img/mesa.jpg"></div>
            <div class="container">
              <h1>Soy un ejemplo</h1>
              <div class="row">
            <div class="col s6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt ullam minima dolorum laborum, cupiditate ad distinctio eligendi maiores similique nemo dicta quasi placeat amet sit unde magni aperiam ut accusamus.</div>
          </div>
        </div>
      </div>
        -->
        <script type="text/javascript" src="js/jquery-2.1.1.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/inicio.js"></script>
    </body>
  </html>