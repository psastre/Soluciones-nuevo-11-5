<!-- Inicio de sesión -->
<div style="display:none;" class="logIn wow fadeInUp" id="logIn">
      <div class="title">
        Iniciá sesión
      </div>
      <form action="backend/login.inc.php" method="post" class="login-form">
      <div class="form-input">
        <label>
          <input name="email" type="email" required>
          <span class="placeholder">E-Mail</span>
        </label>
      </div>
      <div class="form-input">
        <label>
          <input name="pwd"type="password" required>
          <span class="placeholder">Contraseña</span>
        </label>
      </div>

      <button type="submit" name="submit" href="#" class="bttn bttn-primary">Entrar</button>
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