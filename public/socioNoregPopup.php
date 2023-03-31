<div id="myModal2" class="modal fade" role="dialog" >
    <div class="modal-dialog sectionSocioNoregPopup" >
    <div class="modal-content socioNoregPopup">
      <!-- Modal content-->
      <div class="closePopup"><button class="closePopupButton closeSocioNoReg">x</button></div>
    <form action="backend/reset-request.inc.php" method="post" id="resetpwd-form">
      <p>Escribi tu mail con el que estas registrado en el sistema, y recibiras un mail con un link para establecer tu contrasena</p>
      <p class="resetpwd-form-message"></p>
      <input type="text" name="email" placeholder="Mail" id="resetpwd-email">
      <button type="submit" name="reset-request-submit" class="bttn bttn-primary" id="resetpwd-submit">Enviar</button>

    </form>
    <?php
      if(isset($_GET["reset"])){
        if ($_GET["reset"] == "success"){
          echo'<p class="signupsuccess">Se envio el mail</p>';
        }
      }
      ?>
    </div>
    </div>
  </div>
  <script src="js/resetPwdValidation.js"></script>

  