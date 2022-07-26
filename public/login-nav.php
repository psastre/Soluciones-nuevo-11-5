<!-- Inicio de sesión -->
<div style="display:none;" class="logIn wow fadeInUp" id="logIn">
      <div class="title">
        Iniciá sesión
      </div>
      <form action="backend/login.inc.php" method="post">
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
      <a href="registrarse.html" id="registrarse">Registrarse</a>
    </div>
    <!-- Inicio de sesión -->