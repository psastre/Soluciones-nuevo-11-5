<?php
    session_start();

  require_once 'backend/activeStatusVerification.php'
      

   
?>

<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Soluciones Hogar</title>
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
    
    

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        .bttn-hacer-pedido-nav-index{
            display: none;
        }
       
    </style>
</head>

<body data-spy="scroll" data-target=".mainmenu-area">

    <a href="https://wa.me/1564982059" target="_blank"><div class="whatsapp_container"><img src="images/whatsapp-logo.png" alt=""><p class="whatsapp_text">HABLEMOS POR WHATSAPP</p></div></a>
    <!--Preloader-->
    <div class="preloader">
        <div class="spinner"></div>
    </div>

    <!--Popup para resetear password-->
   
     <?php if(isset($_GET["reset"])){
          if($_GET["reset"]=="sended"){ ?>
          <div class="complete_popup_notice" >
            <div class="section_popup_notice" >
              <img class="tick_popup" src="img/tick.png" alt="">
            <h2>Solicitud de cambio de contraseña enviada</h2>
              <div class="content_popup_order">

                
                <div class="funcionamiento-popup" style="justify-content: center;">
                
                <div class="funcionamiento_popup_order" style="width: 55%;">
                    <img src="img/icon-9.png" alt="">
                    <h4>Se envio un mail a su correo, con un link para reestablecer su contraseña. Si no le llego, puede volver a intentarlo o llamarnos para consultarlo.</h4>
                </div>
                
                
            </div>
              </div>
              <div class="closebar_popup_notice" >
                <button class="closebutton_popup_notice" id="closebutton_popup_notice">Entendido</button>
              </div>
              
            </div>
          </div>
        <?php }};?> 
         <!--Popup para resetear password-->
         <!--Popup de password ya reseteada-->
     <?php if(isset($_GET["reset"])){
          if($_GET["reset"]=="succes"){ ?>
          <div class="complete_popup_notice" >
            <div class="section_popup_notice" >
              <img class="tick_popup" src="img/tick.png" alt="">
            <h2>Se reestablecio la contraseña con exito</h2>
              
              <div class="closebar_popup_notice" >
                <button class="closebutton_popup_notice" id="closebutton_popup_notice">Entendido</button>
              </div>
              
            </div>
          </div>
        <?php }};?> 
      <!--Popup de password ya reseteada-->      
      <!--Popup de socio inactivo-->   
      <?php
            if(isset($_SESSION["userEmail"])){
                if($_SESSION["activeStatus"] === 0){ ?>
                    <div class="complete_popup_notice" >
                      <div class="section_popup_notice" >
                        <img class="tick_popup" src="img/pago-error.png" alt="">
                      <h2>Cuenta inactiva</h2>
                        <div class="content_popup_order">
          
                          
                          <div class="funcionamiento-popup">
                          
                          
                              
                              <h4>Su cuenta de Soluciones Hogar esta inactiva, por favor comuniquese al 5789-1800 para consultarlo</h4>
                          
                         
                          
                      </div>
                        </div>
                        <div class="closebar_popup_notice" >
                          <button class="closebutton_popup_notice" id="closebutton_popup_notice">Entendido</button>
                        </div>
                        
                      </div>
                    </div>
                  <?php }};?>                     
      <!--Popup de socio inactivo-->      
    <!--Header-Area-->
    
                
    <header class="header-area overlay" id="inicio">
        <!-- Mainmenu-Area -->
        <?php include_once("navbar.php"); ?>
            <!-- Mainmenu-Area-/ -->
        <div class="vcenter">
            <div class="container" id="containerHeader">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-8">
                        <div class="header-text">

                            <h2 class="header-title wow fadeInUp">Encontrá todos los servicios técnicos para tu hogar<span class="dot"></span>  </h2>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="buttomcust"class="wow fadeInUp" data-wow-delay="0.7s">
            <a href="servicios-final.php" class="bttn bttn-lg bttn-primary"     >Hacer pedido</a>
        </div>
        <p class="carrouselServicios marquee">
          <span><b>Electricidad</b> - Cerrajería - <b>Albañilería</b> - Carpintería - Pintura - Vidrios - <b>Destapaciones</b> - Plomería - <b>Gas</b> - Empapelado - <b>Calefacción</b> - Restauraciones - <b>Aire acondicionado</b> - Audio, TV, video caseteras y DVD - <b>Jardinería</b> - Computadoras e impresoras - <b>Cocinas, heladeras, lavarropas y microondas</b> - Plomería - <b>Limpieza de alfombras y tapicería</b> - Plaguicidas - Pulido - Plastificado <b>Electricidad</b> - Cerrajería - <b>Albañilería</b> - Carpintería - Pintura - Vidrios - <b>Destapaciones</b> - Cortinas de enrollar - <b>Gas</b> - Empapelado - <b>Calefacción</b> - Restauraciones - <b>Aire acondicionado</b> - Audio, TV, video caseteras, DVD - <b>Jardinería</b> - Computadoras e impresoras - <b>Cocinas, heladeras, lavarropas, microondas</b> - <b>Limpieza de alfombras y tapicería</b> - Plaguicidas - Pulido y plastificado - <b>Electricidad</b> - Cerrajería - <b>Albañilería</b> - Carpintería - Pintura - Vidrios - <b>Destapaciones</b> - Cortinas de enrollar - <b>Gas</b> - Empapelado - <b>Calefacción</b> - Restauraciones - <b>Aire acondicionado</b> - Audio, TV, video caseteras, DVD - <b>Jardinería</b> - Computadoras e impresoras - <b>Cocinas, heladeras, lavarropas, microondas</b> - <b>Limpieza de alfombras y tapicería</b> - Plaguicidas - Pulido - Plastificado - <b>Electricidad</b> - Cerrajería - <b>Albañilería</b> - Carpintería - Pintura - Vidrios - <b>Destapaciones</b> - Cortinas de enrollar - <b>Gas</b> - Empapelado - <b>Calefacción</b> - Restauraciones - <b>Aire acondicionado</b> - Audio, TV, video caseteras, DVD - <b>Jardinería</b> - Computadoras e impresoras - <b>Cocinas, heladeras, lavarropas, microondas</b> - <b>Limpieza de alfombras y tapicería</b> - Plaguicidas - Pulido - Plastificado -&nbsp;</span>
        </p>
        <div class="arrow2 bounce2"></div>
    </header>
    <!--Header-Area-/ -->

    <!-- Qué es -->
    <section class="section-padding gray-bg" id="queEsSoluciones">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12" id="section1Title">
            <h2>Bienvenido a Soluciones Hogar</h2>
          </div>
          <div class="col-xs-12 col-sm-6" id="section1L">
            <p>Soluciones Hogar nace en 1993, pionera en América brindando toda la asistencia al hogar que necesita una persona, familia u oficina, en Capital Federal con la confianza y seguridad que necesitas.               
            </p>
            
            <h4>ACTUALIDAD</h4>
            <p>Hoy hemos implementado una plataforma para que nuestros clientes suscriptos puedan solicitar los pedidos de forma online. 
Si no estas suscripto podes probar un mes totalmente gratis.
</p>
            <!--<a href="como-asociarse.html" target="_blank">Más información</a><img src="img/right-arrow.svg" alt="">-->
            <a href="quienes-somos.php" class="bttn bttn-lg bttn-primary" style="margin-right: 45px;">Mas Informacion</a>
        </div>
          <div class="col-xs-12 col-sm-6" id="section1R">
            <img src="images/mockuplaptoplow.jpg" alt="">
            <img src="images/mockupcelu.png" alt="">
          </div>
        </div>
      </div>
    </section>
    <!-- Qué es -->
     <!-- BENEFICIOS -->
     <section class="section-padding gray-bg beneficios-screen" id="que-es">
        <div class="container">
            <div class="row" >
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <div class="page-title text-center">
                    <h2 class="title">Un sistema diferente</h2>
                    <br/>
                </div>
            </div>
        </div>
            <div class="row" style="padding-bottom: 20px;">
                <div class="col-xs-12 col-sm-6">
                    <div class="video-box">
                        <img id="servicio-home" src="img/Servicios.jpg" alt="">
                        <img id="confianza-home" src="img/Confianza.jpg" alt="">
                        <img id="transparencia-home" src="img/Transparencia.jpg" alt="">
                        <img id="tranquilidad-home" src="img/Tranquilidad.jpg" alt="">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1  fadeInUp"style="visibility: visible;">
                    <div class="page-title">
                        <ul class="tabs-list">
                            <li class="active active_motion"><a id="servicio-home-btn" data-toggle="pill" href="#variedad">Servicio</a></li>
                            <li><a id="confianza-home-btn" data-toggle="pill" href="#confianza">Confianza</a></li>
                            <li><a id="transparencia-home-btn" data-toggle="pill" href="#transparencia">Transparencia</a></li>
                            <li><a id="tranquilidad-home-btn" data-toggle="pill" href="#tranquilidad">Tranquilidad</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div id="variedad" class="tab-pane fade in active">
                            <p>Cubre la mayor variedad de servicios técnicos necesarios en tu hogar, desde plomero, electricista, pintor, gasista…. y más de 30 rubros.</p>
                            <br/>
                        </div>
                        <div id="confianza" class="tab-pane fade">
                            <p>Los  mejores profesionales independientes son seleccionados y están a tu disposición. <span style="font-weight: 600">Es importante conocer quién entra en tu casa.</span></p>
                            <br/>
                        </div>
                        <div id="transparencia" class="tab-pane fade">
                            <p>Contamos con un listado de precios sugeridos y siempre obtendrás un presupuesto antes de realizar cada trabajo.</p>
                            <br/>
                        </div>
                        <div id="tranquilidad" class="tab-pane fade">
                            <p>Contamos con un centro de atención especializado que recibe tus pedidos de lunes a viernes de 8 a 21hs y un departamento técnico que analiza todo comentario relacionado al servicio.</p>
                            <br/>
                        </div>
                    </div>
                    <div style="width:100%; display:flex; justify-content:center;"><a href=""><button class="bttn bttn-mesgratis" >Prueba un mes gratis</button></a></div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- BENEFICIOS -->

<!-- Funcionamiento 
<section class="section-padding" id="funcionamiento">
    <div class="container" style="width:80%;">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <div class="page-title text-center">
                    <h2 class="title">Funcionamiento</h2>
                    <p>Conocé cómo es el proceso de funcionamiento de Soluciones</p>
                </div>
            </div>
        </div>
        <div class="row process text-center" style="background-size:80%;margin:0 auto;">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="single-process">
                    <div class="process-icon">
                        <img src="img/script.svg" alt="">
                    </div>
                    <h3>Seleccioná el servicio</h3>
                    <p>
                      - Seleccioná el servicio que estás necesitando.<br>
                      - Completá tus datos personales.<br>
                    </p>
                    
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="single-process">
                    <div class="process-icon">
                        <img src="img/support.svg" alt="">
                    </div>
                    <h3>Pedido</h3>
                    <p>
                      - Soluciones recibe el pedido, selecciona y asigna el profesional adecuado.<br>
                      
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="single-process">
                    <div class="process-icon">
                        <img src="img/hired.svg" alt="">
                    </div>
                    <h3>Contacto</h3>
                    <p>
                      - El profesional se contactará a la brevedad para combinar horario y fecha de visita adecuado a tu necesidad.<br>
                      - El profesional se presenta en fecha y hora acordada, presupuesta el trabajo, lo realiza y él es quien cobra y factura por el mismo.
                    </p>
                </div>
            </div>
        </div>
        <div class="btnFuncionamiento">
          <a href="servicios.html" target="_blank" class="bttn bttn-sm bttn-default">Hacer pedido</a>
        </div>
    </div>

</section>
 Funcionamiento -->
<!--Funcionamiento Prueba2 -->
    <section class="section-padding" id="funcionamiento2">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3" style="margin-left: 0; width:100%;">
                <div class="page-title text-center">
                    <h2 class="title">Funcionamiento</h2>
                    
                </div>
            </div>
        </div>

        <div class="funcionamiento_pasos">
            <div class="funcionamiento_paso paso_uno funcionamiento_open funcionamiento_start_open">
                <div class="funcionamiento_detalle">
                <div class="funcionamiento_num_title">
                        <h3 class="funcionamiento_detalle_numero">1</h3>
                        <h4>Selecciona el servicio</h4>
                    </div>
                    <p class="funcionamiento_detalle_texto">Selecciona el rubro y escribi el detalle de tu pedido a realizar</p>
                    
                </div>
            </div>
            <div class="funcionamiento_paso paso_dos">
                <div class="funcionamiento_detalle">
                    <div class="funcionamiento_num_title">
                        <h3>2</h3>
                        <h4>Recepcion de pedidos</h4>
                    </div>
                    
                    <p class="funcionamiento_detalle_texto">Soluciones recibe el pedido, selecciona y asigna el profesional adecuado.</p>
                </div>
            </div>
            <div class="funcionamiento_paso paso_tres">
                <div class="funcionamiento_detalle">
                    <div class="funcionamiento_num_title">  
                        <h3>3</h3>
                        <h4>Trabajo realizado</h4>
                    </div>
                    <p class="funcionamiento_detalle_texto">El profesional se contactará a la brevedad para combinar horario y fecha de visita adecuado a tu necesidad que luego  presupuesta el trabajo, lo realiza y él es quien cobra y factura por el mismo.
                    
                    </p>
                </div>
            </div>
            <div class="funcionamiento_paso paso_cuatro">
                <div class="funcionamiento_detalle">
                    <div class="funcionamiento_num_title"> 
                            <h3>4</h3>
                            <h4>Garantia</h4>
                    </div>
                    <p class="funcionamiento_detalle_texto">Una garantía doble en cada trabajo Domiciliario, ofrecida por cada técnico y por la Empresa.</p>
                </div>
            </div>
        </div>
    </section>

<!--Funcionamiento Prueba2 -->
    
<!--
    <-- Guia de precios ->
    <section class="section-padding gray-bg" id="precios-sugeridos">
      <div class="container">
        <div class="row">
          <div class="page-title text-center">
              <h2 class="page-title">Guía de precios sugeridos</h2>
          </div>
          <div class="col-md-6 col-xs-12" id="serviciosGuia">
            <p> .</p>
            <p>Instalación de termotanque a gas</p>
            <p>Instalación de aire acondicionado split de menos de 3000 frigorías</p>
            <p>Colocación de ventilador de techo</p>
            <p>Colocación porcellanato por m2</p>
            <p>Pintura interior por m2</p>
          </div>

          <div class="col-md-6 col-xs-12">
            <div class="guiaPrecioText">
              $0 $1000 $2500 $3500
            </div>
            <div class="guiaPrecio">
              <div class="rangoPrecio" id="rangoPrecio1">

              </div>
            </div>
            <p class="precioDefinido">Entre $1800 y $2300</p>

            <div class="guiaPrecio">
              <div class="rangoPrecio" id="rangoPrecio2">

              </div>
            </div>
            <p class="precioDefinido">Entre $2800 y $3500</p>

            <div class="guiaPrecio">
              <div class="rangoPrecio" id="rangoPrecio3">

              </div>
            </div>
            <p class="precioDefinido">Entre $800 y $1000</p>

            <div class="guiaPrecio">
              <div class="rangoPrecio" id="rangoPrecio4">

              </div>
            </div>
            <p class="precioDefinido">Entre $350 y $500</p>

            <div class="guiaPrecio">
              <div class="rangoPrecio" id="rangoPrecio5">

              </div>
            </div>
            <p class="precioDefinido">Entre $220 y $270</p>
          </div>

          <div class="col-md-12">
            <div class="btnFuncionamiento">
                <a href="guia-precios.html" target="_blank" class="bttn bttn-sm bttn-default">Ver listado completo</a>
              </div>
          </div>
        </div>
      </div>
    </section>
    <-- Guia de precios/ ->
-->
    <!-- Contact-Area -->
    <section class="section-padding" id="contact-area" style="padding-top: 0; margin-bottom:200px">
        <div class="contact-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title">
                            <h3 class="bar-title">Si queres pertenecer al sistema como asociado o tenes alguna duda, contactanos...</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-8">
                        <div class="contact-form">

                        <!--CONTACT FORM-->
                            <form action="contactForm.php" id="contact-form" method="post">
                                <div class="form-double">
                                    <input type="text" id="form-name" name="form-name" placeholder="Nombre" >
                                    <input type="number" name="phone" id="form-phone"placeholder="Teléfono">
                                </div>
                                <div class="form-double">
                                    <input type="text" name="form-email" name="email" id="form-email" placeholder="Correo Electrónico" >
                                    <textarea name="message"  id="form-message" rows="2"  placeholder="Mensaje" style="resize: none;"></textarea>
                                </div>
                               
                                <button name="submit" id="form-submit" class="bttn bttn-primary">Enviar</button>
                                <div class="contact-form-message"></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="contact-info">
                            <ul class="info">
                                <li>
                                    <span class="info-icon">
                                        <img src="img/placeholder.svg" alt="">
                                    </span> Larrea 687 <br /> C1056 CABA
                                </li>
                                <li>
                                    <span class="info-icon">
                                        <img src="img/phone-receiver.svg" alt="">
                                    </span> (011) 5789-1800
                                </li>
                                <li>
                                    <span class="info-icon">
                                        <img src="img/envelope.svg" alt="">
                                    </span> info@solucioneshogar.com
                                </li>
                                <li>
                                    <a href="quienes-somos.php" style="color:white;">
                                    <span class="info-icon">
                                        <img src="img/question.svg" alt="">
                                    </span> Conocer mas del servicio
                                    </a>
                                </li>
                            </ul>
                            <div class="socialmedia_menu">
                                <a href="https://es-la.facebook.com/solucioneshogar/" target="_blank"><img src="img/facebook.svg" alt=""></a>
                                <a href="https://www.instagram.com/solucioneshogar/" target="_blank"><img src="img/instagram.svg" alt=""></a>
                                <a href="https://www.linkedin.com/search/results/all/?fetchDeterministicClustersOnly=false&heroEntityKey=urn%3Ali%3Aorganization%3A20501165&keywords=soluciones%20hogar&origin=RICH_QUERY_SUGGESTION&position=0&searchId=f9c63556-804d-40ec-a3fa-bd1e9f1133f2&sid=Eto" target="_blank"><img src="img/linkedin.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-Area / -->
    <!--
    <div id="maps"></div>
    -->  

    <!-- Footer-Area -->
    <?php include_once("footer.php"); ?>
    <!-- Footer-Area / -->


    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    
    
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <!--Main-active-JS-->
    <script src="js/main.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXZ3vJtdK6aKAEWBovZFe4YKj1SGo9V20&callback=initMap"></script>
    <script src="js/maps.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <script src="scrollAnimation.js"></script>
    <script src="js/custom22.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/contactValidations.js"></script>
    
</body>

</html>
