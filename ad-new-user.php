<?php
session_start();
if (isset($_SESSION['suser']) && $_SESSION['type'] == "admin") {
  $id = $_SESSION['suser'];
?>
<html>
    <head>
        <script type="text/javascript" src="js/validaciones.js"></script>
      <title>Estilo</title>
      <?php include('navbar.html');?>
    </head>
    <body>
        <div class="row">
          <?php include 'sidebar.html'; ?>
          <form action="php/ad-insertar.php" method="POST" class="col s10">
                      <div class="row">
                        <div class="input-field col s12 m6">
                          <i class="mdi-action-account-circle prefix"></i>
                          <input type="text" id="user" name="user"  class="validate tooltipped" data-position="bottom" data-delay="50" data-tooltip="Debe contener por lo menos 6 carácteres" required="required">
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
                          <input type="password" id="pass1" name="pass1" class="validate tooltipped" data-position="bottom" data-delay="50" data-tooltip="Debes usar letras, números y símbolos" required="required">
                          <label for="pass1">Password</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <i class="mdi-communication-email prefix"></i>
                          <input type="email" id="email" name="email" class="validate" required="required">
                          <label for="email">E-mail</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <i class="mdi-action-lock prefix"></i>
                          <input type="password" id="pass2" name="pass2" class="validate tooltipped" data-position="bottom" data-delay="50" data-tooltip="Confirma tu contraseña" required="required">
                          <label for="pass2">Confirm Password</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <i class="mdi-communication-phone prefix"></i>
                          <input type="text" onkeyup="mascara(this,'-',dos,true)" id="cel" name="cel" class="validate" required="required" onkeypress="return num(event)" maxlength="9">
                          <label for="cel">Phone number</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <i class="mdi-action-credit-card prefix"></i>
                          <input type="text" onkeyup="mascara(this,'-',uno,true)" id="dui" name="dui" class="validate" required="required" onkeypress="return num(event)" maxlength="10">
                          <label for="dui">DUI</label>
                        </div>
                        <div class="input-field col s12 m6">
                          <select name="tipo" id="tipo">
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                          </select>
                        </div>
                      </div>
                  <button class="waves-effect waves-green btn-flat" type="submit">Agregar<i class="mdi-content-send right"></i>
                </button>
                <a href="adindex.php" class="waves-effect waves-red red-text">Atrás</a>
                </form>
        </div>
        <script type="text/javascript">
  var dos = new Array(4,4);
  var uno = new Array(8,1);
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
