<?php
    session_start();

?>
<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Registro - Soluciones Hogar</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    


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
      @media only screen and (max-width: 767px) {
        .mainmenu-area #mainmenu ul.nav.navbar-nav li a{color:#ffffff;}
      }
    </style>
</head>

<body data-spy="scroll" data-target=".mainmenu-area" >

<a href="https://wa.me/1136453576" target="_blank"><div class="whatsapp_container"><img src="images/whatsapp-logo.png" alt=""><p class="whatsapp_text">HABLEMOS POR WHATSAPP</p></div></a>



    <!--Preloader-->
    

    <!-- Mainmenu-Area -->
    
    
    <!-- Mainmenu-Area-/ -->
    
    <?php include_once("navbar.php"); ?>
    
  <!--POP UP SOCIO NO registrado-->
 
        
            <section class="section-padding gray-bg" id="como-asociarse" >
            <h1 class="title-cel" style="text-align: left;">Completa el formulario para hacer tu pedido y empeza tu mes gratis.</h1>
                <div class="container" id="container-form">
               
                    <div class="row"> 
                        
                        <div class="col-xs-12 col-md-12" id="conteneder-form">
                            <div class="contact-form contact-form-registro">
                            
                            <h4>Revisa que tus datos esten correctos y hace la consulta que quieras. Te estaremos llamando para contarte mejor nuestro servicio </h4>
                            <form action="backend/userActivationRequest.php" method="post">
                           
                                  <input  type='text' name='userid' value="<?php  echo $_SESSION['userId']  ?>" readonly style='display:block'>
                              
                                <div class="form_inputs_hacersocio">
                                    <input type="text" name="telefono" value="<?php echo $_SESSION["userTelephone"]; ?>">                               
                                    <input type="text" name="email" value="<?php echo $_SESSION["userEmail"]; ?>">                               
                                    <textarea class="hacer_socio_text"name="consulta" placeholder="Escribinos tu consulta acá"></textarea>
                                </div>
                              
                                
                                <button name="submit" type="submit"  class="btn_prueba">Enviar</button>
                              
                              
                            
                            </form>
                            </div>
                          
                            
                        </div>
    
                        <!--<div style="margin-top:50px;" class="btnLogin">
                            <div class="contact-form-registro">
                                <p>¿Ya estás registrado?</p>
                                <a class="bttn bttn-primary" href="iniciar-sesion.html">Iniciar sesión</a>
                            </div>
                        </div>
                        -->
                    </div>
                    
                </div>

                <div class="col-xs-12 col-sm-8 col-sm-offset-2" id="info-form" >
                <div style="height:100%;">
                <div class="page-title text-center">
                                <h1 class="title" style="text-align: left;">Conoce los beneficios que vas a tener asociandote</h1>
                            </div>
                            
                            <ul>
                                <li>Un Centro de Atención permanente</li>
                                <li>Técnicos profesionales rigurosamente evaluados y monitoreados </li>
                                <li>Presupuestos gratuitos</li>
                                <li>Garantía de 3 meses en todos los trabajos Domiciliarios de reparación</li>
                                <li>Un departamento técnico que lleva a cabo una constante evaluación de precios y prestaciones</li>
                            </ul>
                </div>
                <h3 style="font-size: 1.5rem;margin:25px 0 0 0;">Funcionamiento una vez hecho el pedido:</h3><br/>
                <div class="funcionamiento-form">
                
                    <div class="funcionamiento-form-element">
                        <img src="img/icon-11.png" alt="">
                        <h4>El tecnico se comunicara con usted para coordinar dia y horaria de la visita.</h4>
                    </div>
                    <div class="funcionamiento-form-element">
                        <img src="img/icon-10.png" alt="">
                        <h4>El tecnico realizara y cobrara el trabajo que pidio.</h4>
                    </div>
                    <div class="funcionamiento-form-element">
                        <img src="img/icon-3.png" alt="">
                        <h4>El centro de atencion de Soluciones hara un seguimiento de su trabajo.</h4>
                    </div>
                    
                </div>
                           
                        </div>
               
            </section>

           

              <!-- Registro -->
    
        
    
<!-- Registro -->


    <!-- Como asociarse -->
    <!--
    <div class="explicacion-primer-pedido">
    <div class="row titulo_registro">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2" style="margin: 0;">
                    <div class="page-title text-center">
                        <h1 style="font-size: 3rem;">Primera vez?</h1>
                        <h2 class="title subtitle-registro" >Soluciones Hogar es un servicio por suscripcion
 en el que te garantizamos que todos tus trabajos  se realizaran con exito, pero porque ?</h2>

                    </div>
                </div>
            </div>

            <div class="row beneficio_registro">
              <div class="col-sm-2 pasos-como">
                <img src="img/icon-9.png" alt="">
                <h4>Centro de Atención especializado  un servicio de Emergencias las 24 horas.</h4>
              </div>

              <div class="col-sm-2 pasos-como">
                <img src="img/icon-10.png" alt="">
                <h4>Doble garantía de 3 meses, una por parte del profesional y otra por parte de Soluciones.</h4>
              </div>

              <div class="col-sm-2 pasos-como">
                <img src="img/icon-11.png" alt="">
                <h4>Cubrimos mas de 30 rubros</h4>
              </div>

              <div class="col-sm-2 pasos-como">
                <img src="img/icon-5.png" alt="">
                <h4>Los mejores profesionales independientes seleccionados por su honestidad y capacidades.</h4>
              </div>

              <div class="col-sm-2 pasos-como">
                <img src="img/icon-12.png" alt="">
                <h4>Una vez finalizado el trabajo, el profesional es quien te cobra y factura.</h4>
              </div>

              <div class="col-sm-2 pasos-como">
                <img src="img/icon-13.png" alt="">
                <h4>Presupuestos sin cargo en tu domicilio.</h4>
              </div>
            </div>
        
    </div>
   -->
 <!-- Footer-Area -->
 <?php include_once("footer.php"); ?>
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
    <script src="js/custom.js"></script>
    
    
    <script src="js/custom22.js"></script>
    
</body>

</html>
