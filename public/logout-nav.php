<!-- Inicio de sesión -->
<div style="display:none;" class="logIn wow fadeInUp" id="logIn">
      <div class="title">
        <?php echo $_SESSION["userName"] . " " . $_SESSION["userLastName"]?>
      </div>
      

      <a type="submit" name="submit" href="backend/logout.inc.php" class="bttn bttn-primary">Salir</a>
    
      
    </div>
    <!-- Inicio de sesión -->