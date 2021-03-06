<html>
    <head>
      <meta charset="utf-8">
      <link type="text/css" rel="stylesheet" href="css/style.css" media="screen, projection"/>
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
      <link rel="icon" href="img/Logo.png"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
      <meta name="theme-color" content="#00bcd4">
      <script type="text/javascript" src="js/validaciones.js"></script>
      <script type="text/javascript" src="js/jquery-2.1.1.js"></script>
      <script type="text/javascript" src="js/typed.js"></script>
      <script>
       $(function(){
      $(".mp").typed({
        strings: ["Max Panamá. ^1000 Web developer. ^1000 Front-end."],
        typeSpeed: 30
      });
      $(".cm").typed({
        strings: ["Carlos Marín. ^1000 Web developer. ^1000 3D-developer"],
        typeSpeed: 30
      });
      $(".am").typed({
        strings: ["Andrés Mata. ^1000 Web developer. ^1000 Back-end."],
        typeSpeed: 30
      });

  });
      </script>
      <style>
      .typed-cursor{
    opacity: 1;
    -webkit-animation: blink 0.7s infinite;
    -moz-animation: blink 0.7s infinite;
    animation: blink 0.7s infinite;
      }
      @keyframes blink{
          0% { opacity:1; }
          50% { opacity:0; }
          100% { opacity:1; }
      }
      @-webkit-keyframes blink{
          0% { opacity:1; }
          50% { opacity:0; }
          100% { opacity:1; }
      }
      @-moz-keyframes blink{
          0% { opacity:1; }
          50% { opacity:0; }
          100% { opacity:1; }
      }
      </style>
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
                <h2 class="col s12 m12 center">What is <i>Estilo</i>?</h2>
                <div class="col s12 m8 offset-m2 flow-text"><p class="header light">Style is a web page that allows to the user to personalize its own furniture from already established designs.</p></div>
              </div>
          </div>
        </div>
        <div class="section">
          <div class="container">
            <div class="row">
              <h4 class="center light flow-text">Start customizing your own furniture, the only thing you have to do is sign in or sign up if you don't have an user.</h4>
                <!-- Botón modal -->
              <a class="waves-effect waves-light btn modal-trigger blue col s12" href="#regis-ml">Sign up</a>
              <a class="waves-effect waves-light btn modal-trigger blue col s12" href="#ini-ml">Sign in</a>
            <!-- Modal que abre -->

            <div id="ini-ml" class="modal">
                <div class="modal-content">
                  <h5 class="center">Sign in</h4>
                  <h4 class="center light">Type your data</h4>
                  <div class="row">
                    <form action="php/comprobar.php" method="POST" class="col s12">
                      <div class="row">
                        <div class="input-field col s8 m8 offset-m2">
                          <i class="mdi-action-account-circle prefix"></i>
                          <input type="text" id="user" name="user" required="required">
                          <label for="user">User</label>
                        </div>
                        <div class="input-field col s8 m8 offset-m2">
                          <i class="mdi-action-lock prefix"></i>
                          <input type="password" id="pass" name="pass" class="validate" required="required">
                          <label for="pass">Password</label>
                        </div>
                      </div>

                <div class="modal-footer">
                  <button class="waves-effect waves-green btn-flat" type="submit">Sign in
                  <i class="mdi-content-send right"></i>
                </button>
                  <!--<a href="#" class="waves-effect waves-green btn-flat modal-action green-text">Iniciar Sesión</a>-->
                  </form>
                  <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close red-text">Cancel</a>
              </div>
              </div>
               </div>
                </div>

              <div id="regis-ml" class="modal">
                <div class="modal-content">
                  <h5 class="center">Register </h5>
                  <h4 class="center light">Type your information</h4>
                  <div class="row">
                    <form action="php/insertar.php" method="POST" class="col s12">
                      <div class="row">
                        <div class="input-field col s12 m6">
                          <i class="mdi-action-account-circle prefix"></i>
                          <input type="text" id="user" name="user"  class="validate tooltipped" data-position="bottom" data-delay="50" data-tooltip="It must contain at least 6 characters" pattern=".{6,}" required title="It must contain at least 6 characters" required="required">
                          <label for="user">User</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <i class="mdi-action-accessibility prefix"></i>
                          <input type="text" id="name" name="name"  class="validate" required="required" onkeypress="return letras(event)">
                          <label for="name">Name</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <i class="mdi-action-accessibility prefix"></i>
                          <input type="text" id="ape" name="ape" required="required" onkeypress="return letras(event)">
                          <label for="ape">Last name</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <i class="mdi-action-lock prefix"></i>
                          <input type="password" id="pass1" name="pass1" class="validate tooltipped" data-position="bottom" data-delay="50" data-tooltip="You must use letters, numbers and symbols" required="required" onkeyup="pass(); return false;">
                          <label for="pass1">Password</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <i class="mdi-communication-email prefix"></i>
                          <input type="email" id="email" name="email" class="validate" required="required">
                          <label for="email">e-mail</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <i class="mdi-action-lock prefix"></i>
                          <input type="password" id="pass2" name="pass2" class="validate tooltipped" data-position="bottom" data-delay="50" data-tooltip="Repype your Password" required="required" onkeyup="pass(); return false;">
                          <label for="pass2">Confirm Password</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <i class="mdi-communication-phone prefix"></i>
                          <input type="text" onkeyup="mascara(this,'-',uno,true)" id="cel" name="cel" class="validate" required="required" onkeypress="return num(event)" maxlength="9">
                          <label for="cel">Phone</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <i class="mdi-action-credit-card prefix"></i>
                          <input type="text" onkeyup="mascara(this,'-',dos,true)" id="dui" name="dui" class="validate" required="required" onkeypress="return num(event)" maxlength="10">
                          <label for="dui">DUI</label>
                        </div>
                      </div>
					  </div>
                      <blockquote id="msg"></blockquote>

                <div class="modal-footer">
                  <button class="waves-effect waves-green btn-flat" type="submit">Register
                  <i class="mdi-content-send right"></i>
                </button>
                </form>
                  <a href="" class="waves-effect waves-red btn-flat modal-action modal-close red-text">Cancel</a>
                </div>
                  </div>
                </div>

              </div>
              </form>
			  </div>
			  </div>


        <div class="parallax-container valign-wrapper">
          <div class="parallax"><img src="img/desk.jpg"></div>
            <div class="valign-wrapper">
              <h5 class="header flow-text">Give life to your spaces</h5>
            </div>
        </div>
        <div class="section">
          <div class="container">
        <div class="row">
          <h3 class="center-align flow-text">Meet the team:</h3>
          <div class="col s4">
          <img class="img-responsive circle" style="width:85%; height: 50%;"src="img/031790.jpg">
          <h5><span class="am"></span></h5>
          </div>
          <div class="col s4">
          <img class="img-responsive circle" style="width:85%; height: 50%;"src="img/20130215.jpg">
          <h5><span class="mp"></span></h5>
          </div>
          <div class="col s4">
          <img class="img-responsive circle" style="width:85%; height: 50%;"src="img/20120117.jpg">
          <h5><span class="cm"></span></h5>
          </div>
        </div>
      </div>
        </div>
        </div></div></body>
        <script type="text/javascript">
          function pass(){
            p1 = document.getElementById('pass1');
            p2 = document.getElementById('pass2');
            msg = document.getElementById('msg');
            if (p1.value != p2.value) {
              msg.innerHTML="Password don't match";
            }else{
              msg.innerHTML="Password match";
            }
            if(pass2.value ==""){
              msg.innerHTML="";
            }
          };
        </script>
        <script type="text/javascript">
  var uno = new Array(4,4);
  var dos = new Array(8,1);
      function mascara(d,sep,pat,nums){
          if(d.valant != d.value){
              val = d.value
              largo = val.length
              val = val.split(sep)
              val2 = ''
              for(r=0;r<val.length;r++){
                  val2 += val[r]
              }
              if(nums){
                  for(z=0;z<val2.length;z++){
                      if(isNaN(val2.charAt(z))){
                          letra = new RegExp(val2.charAt(z),"g")
                          val2 = val2.replace(letra,"")
                      }
                  }
              }
              val = ''
              val3 = new Array()
              for(s=0; s<pat.length; s++){
                  val3[s] = val2.substring(0,pat[s])
                  val2 = val2.substr(pat[s])
              }
              for(q=0;q<val3.length; q++){
                  if(q ==0){
                    val = val3[q]
                  }else{
                      if(val3[q] != ""){
                          val += sep + val3[q]
                      }
                  }
              }
                  d.value = val
                  d.valant = val
          }
}
</script>
        </script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/inicio.js"></script>

    </body>
  </html>
