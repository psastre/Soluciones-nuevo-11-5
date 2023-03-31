<!-- Inicio de sesión -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="js/loginValidations.js"></script>
<div style="display:none;" class="logIn wow fadeInUp" id="logIn">
    <div class="login_closePopup"><button class="login_closePopupButton" onclick='myFunction()' >x</button></div>
      <div class="title" >
        Iniciá sesión
        
      </div>
      <form action="backend/login.inc.php" method="post" class="login-form" id="login-form" >
        <p class="login-form-message"></p>
      <div class="form-input">
        <label>
          <input id="login_email" name="email" type="text" >
          <span class="placeholder">E-Mail</span>
        </label>
      </div>
      <div class="form-input">
        <label>
        
          <input id="login_password" name="pwd"type="password" >
          <span class="placeholder">Contraseña</span>
         
          
        </label>
      </div>
      <div class="login_buttons">
        <a class="password_forgot">Olvide mi contraseña</a>
      <button type="submit" name="submit" href="#" id="form-login" class="bttn bttn-primary" style="width: 25%;">Entrar</button>
      </div>
    </form>
      <p>¿Todavía no estás registrado?</p>
      <!--<a href="registrarse.php" id="registrarse">Registrarse</a>-->
      <div class="btndifer-login">
      <a href="registrarse.php" class="btndif btndif-login nosocioBtndif"> <span> Es mi 1er pedido</span><br/>Es la primera vez que hago un pedido a Soluciones.</a>
    <a href="#" class="btndif btndif-login socioBtndif"><span>Soy cliente registrado</span><br/>Ya era cliente y ahora quiero hacer pedido de forma online</a>
      </div>
    
    </div>
    <!-- Inicio de sesión -->

    <?php include_once("socioNoregPopup.php"); ?>