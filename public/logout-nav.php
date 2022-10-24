<!-- Inicio de sesión -->
<div style="display:none;" class="logIn wow fadeInUp" id="logIn">
      <div class="title">
        <?php echo $_SESSION["userName"] . " " . $_SESSION["userLastName"]?>
      </div>
      

      <a type="submit" name="submit" href="usuario.php" class="bttn bttn-primary">Mi perfil</a>
      <a type="submit" name="submit" href="usuario.php" class="bttn bttn-primary">Mis pedidos</a>
      <a type="submit" name="submit" href="backend/logout.inc.php" class="bttn bttn-primary">Salir de mi perfil</a>
    
      
    </div>
    <!-- Inicio de sesión -->