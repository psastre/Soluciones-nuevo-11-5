<div id="myModal2" class="modal fade" role="dialog" >
    <div class="modal-dialog sectionSocioNoregPopup" >
    <div class="modal-content socioNoregPopup">
      <!-- Modal content-->
      <div class="closePopup"><button class="closePopupButton closeSocioNoReg">x</button></div>
    <form action="backend/reset-request.inc.php" method="post">
      <p>Escribi tu mail con el que estas registrado en el sistema, y recibiras un mail con un link para establecer tu contrasena</p>
      
      <input type="text" name="email" placeholder="Mail">
      <button type="submit" name="reset-request-submit" class="bttn bttn-primary">Enviar</button>

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

  