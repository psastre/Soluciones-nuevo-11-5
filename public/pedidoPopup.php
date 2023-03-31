  <?php
    include_once 'backend/countOrders.inc.php';

  ?>


<div id="pruebaPopup" class="modal fade" role="dialog">
                  <div class="modal-dialog" >
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-body">
                        <div class="closePopup"><button class="closePopupButton">x</button></div>
                          <div class="row">
                            <div class="col-sm-6 servicioBox">
                              <img src="img/electricidad.jpg" alt="" class="imgServicioBox">
                            </div>
                            <div class="col-sm-6 servicioBox">
                              
                              <?php
                                if(isset($_SESSION["userEmail"])){
                                  if($_SESSION["activeStatus"] === 0){
                                    echo " <form action='index.php' id='sample'>";
                                  }else{
                                    if($_SESSION["userStatus"] === 1){
                                        echo " <form action='backend/orderCreationSocio.inc.php' method='post' id='sample'>";
                                    }else if($_SESSION["userStatus"] === 0 ){
                                      if($numPedidos > 5){
                                        echo " <form action='index.php' method='post' id='sample'>";
                                      }else{
                                        echo " <form action='backend/orderCreationSocio.inc.php' method='post' id='sample'>";
                                      }
                                }}}else{
                                  echo " <form action='backend/orderCreationNoSocio.inc.php' method='get' id='sample55'>";
                                }
                            
                                ?>
                              <input id="rubroSeleccionado" type="text" name="rubro" readonly>
                              <input  type='text' name='userid' value='" . $_SESSION["userId"] . "' readonly style='display:none'>
                              <?php
                              if(isset($_SESSION["userEmail"])){
                                    echo "<input  type='text' name='userid' value='" . $_SESSION["userId"] . "' readonly style='display:none'>";
                                }
                               
                                ?>
                               
                               
                              
                              <h3 class="precioServicio" style="cursor:auto;">Descripción del trabajo a realizar</h3>
                              <p>Escribi el detalle del pedido lo mas completo posible(esto nos ayuda a elegir al profesional indicado)</p>
                              <textarea name="detalle" class="detallePedido"  rows="5" cols="55"   placeholder="Corte de luz en parte de la casa ..."></textarea>

                              <div class="row">

                                <div class="col-sm-12 btn_pedido_section">
                               
                                    
                                  <button name='submit' type='submit' class='blue-ar-l-rn-none bttn bttn-lg bttn-primary contratarServicio' >Hacer pedido</button>
                                
                                  
                                
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>