<!-- Inicio de sesión -->
<div style="display:none; padding:20px 0 0 0;" class="logIn wow fadeInUp perfil-popup" id="logIn" >
      <div class="logout_title">
        <?php echo $_SESSION["userName"] . " " . $_SESSION["userLastName"]?>
      </div>
      
      <div class="logout_options">
        <a type="submit" name="submit" href="usuario.php" class="logout_bottom">Mi perfil</a>
        <a type="submit" name="submit" href="usuario.php" class="logout_bottom">Mis pedidos</a>
        <a type="submit" name="submit" href="backend/logout.inc.php" class="logout_bottom" style="border-radius: 0 0 20px 20px ;">Salir de mi perfil</a>
      </div>
      
    </div>
    <!-- Inicio de sesión -->