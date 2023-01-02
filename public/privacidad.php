<?php 
  session_start();

  


include_once 'backend/dbh.inc.php';
if(isset($_SESSION["userEmail"])){
  $userid= $_SESSION["userId"];

  $useridquery = "SELECT  rubros.rubro, pedidos.detail, pedidos.createDate FROM pedidos 
                  INNER JOIN rubros
                  ON pedidos.codigoRubro = rubros.codigoRubro
                   WHERE pedidos.userid = '$userid'" ;
  $useridquery_result = mysqli_query($conn,$useridquery);
  
  
  $userPedidosList = array();
  if(mysqli_num_rows($useridquery_result) > 0){
      while($row = mysqli_fetch_assoc($useridquery_result)){
          $userPedidosList[] = $row;
      }
  }
  
  }

  
  ?>
<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title id="userPageTitle"> - Soluciones Hogar</title>
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
    <script src="js/custom.js"></script>
    <script src="js/custom22.js"></script>

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      .speech-bubble {color: #9e9e9e;}
      .mainmenu-area #mainmenu ul.nav.navbar-nav.primary-menu li.active a,
      .mainmenu-area #mainmenu ul.nav.navbar-nav.primary-menu li a:hover {
        border-bottom: 2px solid #9e9e9e;
      }
      .mainmenu-area #mainmenu ul.nav.navbar-nav li a{color:#9e9e9e;}
      #menuFijo{position: static;}
    </style>
</head>

<body data-spy="scroll" data-target=".mainmenu-area">
    
   
        
      

    <!--Preloader-->
    <div class="preloader">
        <div class="spinner"></div>
    </div>

    <!-- Mainmenu-Area -->
    <?php include_once("navbar.php"); ?>
    <!-- Mainmenu-Area-/ -->

   <!--POPUP consulta sobre sistema--> 
   <section class="section-padding gray-bg popup_consulta" id="servicios-area">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12" >
                 

                    <div class="col-xs-12 col-sm-12 col-md-12 userBox_privacidad" id="userBox">
                    <div class="close_popup_privacidad">
                        <button class="close_popup_privacidad_button">X</button>
                     </div>
                     <div class="popup_privacidad_form">
                            <h4>Consulta general sobre el sistema de Soluciones Hogar</h4>
                            <form action="backend/changeInfoRequest.php" method="post">
                            <?php
                              if(isset($_SESSION["userEmail"])){
                                    echo "<input  type='text' name='userid' value='" . $_SESSION["userId"] . "' readonly style='display:none'>";
                                }
                                ?>                                
                                <textarea name="detalle" cols="100" rows="10"></textarea>
                                <button name='submit' type="submit" name="reset-request-submit" class="bttn bttn-primary">Enviar</button>
                            </form>

                     </div>
                      
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--POPUP consulta sobre sistema--> 
   <!--POPUP solicitar cambio de info--> 
   <section class="section-padding gray-bg popup_cambio_info" id="servicios-area">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12" >
                 

                    <div class="col-xs-12 col-sm-12 col-md-12 userBox_privacidad" id="userBox">
                    <div class="close_popup_privacidad">
                        <button class="close_popup_privacidad_button">X</button>
                     </div>
                     <div class="popup_privacidad_form">
                            <h4>Escribinos que informacion queres cambiar de tu perfil</h4>
                            <form  action="backend/changeInfoRequest.php" method="post">
                            <?php
                              if(isset($_SESSION["userEmail"])){
                                    echo "<input  type='text' name='userid' value='" . $_SESSION["userId"] . "' readonly style='display:none'>";
                                }
                                ?>                               
                                 <textarea name="detalle" cols="100" rows="10"></textarea>
                                <button name='submit' type="submit" name="reset-request-submit" class="bttn bttn-primary">Enviar</button>
                            </form>

                     </div>
                      
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--POPUP solicitar cambio de info--> 
     <!--POPUP solicitar baja--> 
   <section class="section-padding gray-bg popup_baja" id="servicios-area">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12" >
                 

                    <div class="col-xs-12 col-sm-12 col-md-12 userBox_privacidad" id="userBox" >
                    <div class="close_popup_privacidad">
                        <button class="close_popup_privacidad_button">X</button>
                     </div>
                     <div class="popup_privacidad_form">
                            <h4>Es una lastima, pero nos podrias escribir porque pedis labaja. Esto nos ayuda a mejorar</h4>
                            <form  action="backend/unsubscribeUser.php" method="post">
                            <?php
                              if(isset($_SESSION["userEmail"])){
                                    echo "<input  type='text' name='userid' value='" . $_SESSION["userId"] . "' readonly style='display:none'>";
                                }
                                ?>                                
                                <textarea name="detalle" cols="100" rows="10"></textarea>
                                <button name='submit' type="submit" name="reset-request-submit" class="bttn bttn-primary">Enviar</button>
                            </form>

                     </div>
                      
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--POPUP solicitar baja--> 
        

    <!-- User management -->
    <section class="section-padding gray-bg" id="servicios-area" style="margin-top: 0;">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12" >
                 

                    <div class="col-xs-12 col-sm-12 col-md-12 userBox_privacidad" id="userBox">
                      <div class="privacidad_tab consulta_general">
                        <h4>Consulta general sobre el sistema de Soluciones Hogar</h4>
                        <p>Si no entendiste algun punto sobre nuestro servicio podes hacerla aca y estaremos felices de aclararla</p>
                      </div>
                      <div class="privacidad_tab solicitud_cambio_info">
                        <h4>Solicitar cambio de informacion personal</h4>
                        <p>Para hacer un cambio en tu informacion personal de Soluciones Hogar, es necesario que lo verifique un representante para validarlo. Segun el caso pueden que lo llamen para confirmar</p>
                      </div>
                      <div class="privacidad_tab solicitud_baja">
                        <h4>Cancelar tu cuenta</h4>
                        <p>Podés cancelar tu cuenta de Soluciones Hogar cuando quieras, y seguiras teniendo el servicio disponible los meses correspondientes a tu ultimo pago</p>
                      </div>
                      
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- User management -->

    <!-- Footer-Area -->
    <footer class="footer-area">
        <div class="footer-top section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <div class="footer-text">
                            <h4 class="upper">Soluciones Hogar</h4>
                            <p>Encontrá todos los servicios técnicos para tu hogar.</p>
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
                                <li><a href="#">Qué es Soluciones</a></li>
                                <li><a href="#">Funcionamiento</a></li>
                                <li><a href="#">Beneficios</a></li>
                                <li><a href="#">Ser técnico</a></li>
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
</body>

</html>
