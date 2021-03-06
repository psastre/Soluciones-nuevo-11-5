<?php
    session_start()
?>

<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Servicios - Soluciones Hogar</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/ico" href="img/favicon.png" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/icofont.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.css">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target=".mainmenu-area">
    <?php
    if(isset($_SESSION["userEmail"])){
       
    }
    else{
        include_once('btndifer.php');
    }
    ?>
  <div id="myModal" class="modal fade" role="dialog" style="justify-content:center;">
    <div class="modal-dialog" style="width:70%; margin: auto;">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">IMPORTANTE</h4>
        </div>
        <div class="modal-body">
          <div class="row">

            <div class="col-sm-4">
              <img class="img-modal" src="img/icon-14.png" alt="">
              <h4 class="texto-modal">Nuestro servicio se brinda en toda la Capital Federal.</h4>
            </div>

            <div class="col-sm-4">
              <img class="img-modal" src="img/icon-17.png" alt="">
              <h4 class="texto-modal">Recepcion de pedidos, de lunes a viernes de 8 a 20hs</b></h4>
            </div>

            <div class="col-sm-4">
              <img class="img-modal" src="img/icon-1.png" alt="">
              <h4 class="texto-modal">El primer pedido tiene un costo operativo de $500 .
                Conoce mas -></h4>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Entendido</button>
        </div>
      </div>

    </div>
  </div>

  <!--POP UP SOCIO NO registrado-->
    <?php
      include_once("socioNoregPopup.php");
    ?>

    
    <!--Preloader-->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!--
    <div class="alert">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
      <strong>Atenci??n!</strong> Usted no es socio de Soluciones, pagar?? $100 por cada pedido.<a href="#" style="color: #00ace3; font-size: 15px; margin-left: 15px;">HACERME SOCIO</a>
    </div>
  -->

    
        <!-- Modal content-->
        

      </div>
    </div>

    <!--Header-Area-->
    <header class="header-area overlay" id="headerServicios">
        
        
      <!-- Mainmenu-Area -->
      <?php include_once("navbar.php"); ?>
      <!-- Mainmenu-Area-/ -->

      <!-- Inicio de sesi??n -->
      <div class="logIn wow fadeInUp" id="logIn">
        <div class="title">
          Inici?? sesi??n
        </div>
        <div class="form-input">
          <label>
            <input type="email" required>
            <span class="placeholder">E-Mail</span>
          </label>
        </div>
        <div class="form-input">
          <label>
            <input type="password" required>
            <span class="placeholder">Contrase??a</span>
          </label>
        </div>

        <a href="#" class="bttn bttn-primary">Entrar</a>

        <p>??Todav??a no est??s registrado?</p>
        <a href="registrarse.html" id="registrarse">Registrarse</a>
      </div>
      <!-- Inicio de sesi??n -->

        <div class="vcenter">
            <div class="container" id="containerHeader">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="header-text">

                            <h2 class="header-title wow fadeInUp" style="text-align:center; margin-bottom: 50px;">SERVICIOS PARA EL HOGAR</h2>

                            <form action="/action_page.php">

                              <input list="browser" class="browser" placeholder="Buscar..." id="datalistValue">
                                  <datalist id="browser">
                                    
                                      <option value="Plomero"></option>
                                      <option value="Gasista"></option>
                                      <option value="Electricista"></option>
                                      <option value="Destapacion"></option>
                                      <option value="Persianas"></option>
                                      <option value="Cerrajeria"></option>
                                      <option value="Vidrios">Vidrios</option>
                                      <option value="Heladera">Heladera</option>
                                      <option value="Cocina"></option>
                                      <option value="Lavadora"></option>
                                      <option value="Tv"></option>
                                      <option value="Service electronico"></option>
                                      <option value="Computadora"></option>
                                      <option value="Herreria"></option>
                                      <option value="Empapelado"></option>
                                      <option value="Toldos"></option>
                                      <option value="Enlozado"></option>
                                      <option value="Pulido y plastificado"></option>
                                      <option value="Plaguicidas"></option>
                                      <option value="Tapiceria"></option>
                                      <option value="Jardineria"></option>
                                      <option value="Limpieza de alfombras"></option>
                                      <option value="Lustrado de muebles"></option>
                                  </datalist>
                                  
                            <a class="bttn bttn-lg bttn-primary top-service popupLogicDatalist" style="display: block; margin: 40px auto 0;  cursor:pointer;">Hacer pedido</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Header-Area-/ -->

    <!-- Portfolio-Area -->
    <section class="section-padding gray-bg" id="servicios-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                    <div class="page-title text-center">
                        <h2 class="title">Reparaciones tecnicas comunes </h2>
                        <p>Para estos servicios  ofrecemos la visita del t??cnico dentro de las 24hs.</p>
                    </div>
                </div>
            </div>
            <div class="row box-servicios" id="filtering">

                <!-- Reparaciones -->

                
                <!-- Box Electricidad -->
                <div class="col-xs-6 col-sm-4 col-md-3 mix reparaciones popupLogic" data-type="Electricidad" id="electricidad">
                    <div class="filter-box">
                        <div class="filter-image">
                            <img src="img/electricidad.jpg" alt="">
                        </div>
                        <div class="filter-hover">
                            <h5>Electricidad</h5>
                            <p id="minimizarElectricidad"></p>
                            <a href="img/electricidad.jpg" data-effect="mfp-zoom-in"></a>
                        </div>
                    </div>
                </div>
                <!-- Box Electricidad -->

                 
               
                <!-- Box plomeria -->
                <div class="col-xs-6 col-sm-4 col-md-3 mix reparaciones popupLogic" data-type="Plomeria" id="Plomeria">
                    <div class="filter-box">
                        <div class="filter-image">
                            <img src="img/plomeria.jpg" alt="">
                        </div>
                        <div class="filter-hover">
                            <h5>Plomer??a</h5>
                            <a href="img/plomeria.jpg" data-effect="mfp-zoom-in"></a>
                        </div>
                    </div>
                </div>
                <!-- Box Alba??iler??a -->

               
                <!-- Box Gas -->
                <div class="col-xs-6 col-sm-4 col-md-3 mix reparaciones popupLogic" data-type="Gas" id="gas">
                    <div class="filter-box">
                        <div class="filter-image">
                            <img src="img/gas.jpg" alt="">
                        </div>
                        <div class="filter-hover">
                            <h5>Gas</h5>
                            <a href="img/gas.jpg" data-effect="mfp-zoom-in"></a>
                        </div>
                    </div>
                </div>
                <!-- Box Gas -->

              

               
                <!-- Box Destapacion -->
                <div class="col-xs-6 col-sm-4 col-md-3 mix reparaciones popupLogic" data-type="Destapacion" id="destapacion">
                    <div class="filter-box">
                        <div class="filter-image">
                            <img src="img/destapaciones.jpg" alt="">
                        </div>
                        <div class="filter-hover">
                            <h5>Destapacion</h5>
                            <a href="img/destapacion.jpg" data-effect="mfp-zoom-in"></a>
                        </div>
                    </div>
                </div>
                <!-- Box  Destapacion -->

                

                <!-- Box Persiana -->
                <div class="col-xs-6 col-sm-4 col-md-3 mix reparaciones popupLogic" data-type="Persiana" id="persiana">
                    <div class="filter-box">
                        <div class="filter-image">
                            <img src="img/persiana.jpg" alt="">
                        </div>
                        <div class="filter-hover">
                            <h5>Persiana</h5>
                            <a href="img/persiana.jpg" data-effect="mfp-zoom-in"></a>
                        </div>
                    </div>
                </div>
                <!-- Box Persiana -->

               

                <!-- Box Cerrajer??a -->
                <div class="col-xs-6 col-sm-4 col-md-3 mix reparaciones popupLogic" data-type="Cerrajeria" id="cerrajeria">
                    <div class="filter-box">
                        <div class="filter-image">
                            <img src="img/cerrajeria.jpg" alt="">
                        </div>
                        <div class="filter-hover">
                            <h5>Cerrajer??a</h5>
                            <a href="img/cerrajeria.jpg" data-effect="mfp-zoom-in"></a>
                        </div>
                    </div>
                </div>
               
                <!---------PRUIEBA -->
                <?php include_once 'pedidoPopup.php'?>

                  </div>
                </div>
                <!---------PRUIEBA -->
            </div>
        </div>
    </section>

    <section>
      <div class="row">
        
            <div class="container">

            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <div class="page-title text-center">
                    <h3 class="title">Service</h3>
                </div>
            </div>
            

            <a class="col-md-6  servicios-extra popupLogic" data-type="Heladera"><h4>Heladera</h4></a>
            <a class="col-md-6  servicios-extra popupLogic"  data-type="Cocina"><h4>Cocina</h4></a>
            <a class="col-md-6  servicios-extra popupLogic"  data-type="Aire acondicionado"><h4>Aire acondicionado</h4></a>
            <a class="col-md-6  servicios-extra popupLogic"  data-type="Lavarropa"><h4>Lavarropa</h4></a>
            <a class="col-md-6  servicios-extra popupLogic"  data-type="TV"><h4>TV</h4></a>
            <a class="col-md-6  servicios-extra popupLogic"  data-type="Service electronico"><h4>Service electronico</h4></a>
            <a class="col-md-6  servicios-extra popupLogic"  data-type="Computadora"><h4>Computadora</h4></a>
            



           

            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <div class="page-title text-center">
                    <h3 class="title">Mantenimiento</h3>
                </div>
            </div>

            <a class="col-md-6  servicios-extra"><h4>Herrer??a</h4></a>
            <a class="col-md-6  servicios-extra"><h4>Carpinter??a</h4></a>
            <a class="col-md-6  servicios-extra"><h4>Alba??ileria</h4></a>
            <a class="col-md-6  servicios-extra"><h4>Pintura</h4></a>
            <a class="col-md-6  servicios-extra"><h4> Empapelado</h4></a>
            <a class="col-md-6  servicios-extra"><h4>Toldos</h4></a>
            <a class="col-md-6  servicios-extra"><h4>Enlozado</h4></a>
            <a class="col-md-6  servicios-extra"><h4>Pulido y plastificado</h4></a>
            <a class="col-md-6  servicios-extra"><h4>Plaguicidas</h4></a>
            <a class="col-md-6  servicios-extra"><h4>Tapicer??a</h4></a>
            <a class="col-md-6  servicios-extra"><h4>Jardiner??a</h4></a>
            <a class="col-md-6  servicios-extra"><h4>Lustrado de muebles</h4></a>
            <a class="col-md-6  servicios-extra"><h4>Limpieza de alfombras
            </h4></a>

            
      </div>
    <!-- Portfolio-Area / -->

    <!-- Footer-Area -->
    <footer class="footer-area">
        <div class="footer-top section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <div class="footer-text">
                            <h4 class="upper">Soluciones Hogar</h4>
                            <p>Encontr?? todos los servicios t??cnicos para tu hogar.</p>
                            <div class="social-menu">
                                <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                <a href="#"><i class="icofont icofont-social-google-plus"></i></a>
                                <a href="#"><i class="icofont icofont-social-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4" style="text-align: right;">
                        <div class="footer-single">
                            <h4 class="upper">Inicio</h4>
                            <ul>
                                <li><a href="#">Qu?? es Soluciones</a></li>
                                <li><a href="#">Funcionamiento</a></li>
                                <li><a href="#">Beneficios</a></li>
                                <li><a href="#">Ser t??cnico</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-4" style="text-align: right;">
                        <div class="footer-single">
                            <h4 class="upper">Asociarse</h4>
                            <ul>
                                <li><a href="#">Precios</a></li>
                                <li><a href="#">Asociarse</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <p class="copyright">Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer-Area / -->


    <!--Vendor-JS-->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <!--Plugin-JS-->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/bars.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/counterup.min.js"></script>
    <script src="js/easypiechart.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/contact-form.js"></script>
    <script src="js/scrollUp.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="js/wow.min.js"></script>
    <!--Main-active-JS-->
    <script src="js/main.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXZ3vJtdK6aKAEWBovZFe4YKj1SGo9V20&callback=initMap"></script>
    <script src="js/maps.js"></script>
    <script src="js/multiLogic.js"></script>
    <script src="js/custom.js"></script>
    
    <script src="js/custom22.js"></script>
    
    

    <script>
      $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
      });
    </script>
</body>

</html>