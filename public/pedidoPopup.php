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
                              <h1 class="tituloServicio"></h1>
                              <?php
                                if(isset($_SESSION["userEmail"])){
                                    if($_SESSION["userStatus"] === 1){
                                        echo " <form action='backend/orderCreationSocio.inc.php' method='post' id='sample'>";
                                    }else if($_SESSION["userStatus"] === 0){
                                        echo " <form action='backend/orderCreationNoSocio.inc.php' method='get' id='sample'>";
                                }
                            }
                                ?>
                              <input id="rubroSeleccionado" type="text" name="rubro" readonly>
                              <?php
                              if(isset($_SESSION["userEmail"])){
                                    
                                    echo "<input  type='text' name='userid' value='" . $_SESSION["userId"] . "' readonly>";
                                   
                                }
                                else{
                                    echo "<span class='placeholder'>No registrado</span>";
                                }
                                ?>
                              
                              <a href="guia-precios.html" target="_blank" class="precioServicio">Descripci??n del trabajo a realizar</a>
                              <p>Escribi el detalle del pedido lo mas completo posible(esto nos ayuda a elegir al profesional indicado)</p>
                              <textarea name="detalle" class="detallePedido" form="sample" rows="5" cols="55"  form="usrform" placeholder="Corte de luz en parte de la casa ..."></textarea>

                              <div class="row">

                                <div class="col-sm-12">
                                <?php
                                if(isset($_SESSION["userEmail"])){
                                    
                                  echo "<button name='submit' type='submit' class='blue-ar-l-rn-none bttn bttn-lg bttn-primary contratarServicio' >Hacer pedido</button>";
                                }
                                else{
                                  echo "<a href='contratar.php' class='blue-ar-l-rn-none bttn bttn-lg bttn-primary contratarServicio' >Hacer pedido</a>";
                                }
                                ?>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>