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

    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="js/custom.js"></script>

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

<body data-spy="scroll" data-target=".mainmenu-area" >




    <!--Preloader-->
    <div class="preloader">
        <div class="spinner"></div>
    </div>

    <!-- Mainmenu-Area -->
    
    
    <!-- Mainmenu-Area-/ -->
    <?php 
    if(isset($_SESSION["userEmail"])){
       
    }
    else{
        include_once('btndifer.php');
    }
    ?>
    <?php include_once("navbar.php"); ?>
  <!--POP UP SOCIO NO registrado-->
  

    <!-- Como asociarse -->
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
    <section class="section-padding gray-bg" id="como-asociarse" style="padding: 0;">
        <div class="container">
        
            <section class="section-padding gray-bg" id="como-asociarse" >
                <div class="container">
               
                    <div class="row">
                        
                        <div class="col-xs-12 col-md-12">
                            <div class="contact-form contact-form-registro">
                            <div class="col-xs-12 col-sm-8 col-sm-offset-2" style="width: 100%;margin:0">
                            <div class="page-title text-center">
                                <h1 class="title">Completa el formulario y empeza tu mes gratis</h1>
                            </div>
                        </div>
                                <form action="backend/signup.inc.php" method="post" id="contact-form" >
                                    <div class="form-double">
                                        <input type="text" id="form-name" name="firstName" class="firstName" placeholder="Nombre" required="required">
                                        <input type="text" name="lastName" class="lastName" placeholder="Apellido">
                                    </div>
                                    
                                    <div class="form-double">
                                      <input type="text" name="telephoneNumberCode" class="telephoneNumberCode" id="phone" placeholder="Codigo" required="required">
                                      <input type="text" name="telephoneNumber" class="telephoneNumber" id="phone" placeholder="Celular" required="required" >
                                      <input type="text" name="cellphoneNumberCode" class="cellphoneNumberCode" id="phone" placeholder="Codigo" required="required">
                                        <input type="text" name="cellphoneNumber" class="cellphoneNumber" id="phone" placeholder="Teléfono" required="required">
                                    </div>
                                    <div class="form-double">
                                        <input type="text"  name="addressName" class="addressName" id="form-email" placeholder="Direccion" required="required" >
                                        <input type="text" name="addressNumber" class="addressNumber"id="phone" placeholder="Numero " required="required" >
                                        <input type="text" name="floorNumber" class="floorNumber"id="phone" placeholder="Piso" required="required">
                                        <input type="text"  name="deptNumber" class="deptNumber"id="phone" placeholder="Depto." required="required">
                                        <!--<select style="width: 40%; margin: 0 auto;" class="form-control" placeholder="Barrio">
                                                    <option value="barrio" disabled selected>Barrio</option>    
                                                    <option>Agronomía</option>
                                                    <option>Almagro</option>
                                                    <option>Balvanera</option>
                                                    <option>Barracas</option>
                                                    <option>Belgrano</option>
                                                    <option>Boedo</option>
                                                    <option>Caballito</option>
                                                    <option>Chacarita</option>
                                                    <option>Coghlan</option>
                                                    <option>Colegiales</option>
                                                    <option>Constitución</option>
                                                    <option>Flores</option>
                                                    <option>Floresta</option>
                                                    <option>La Boca</option>
                                                    <option>La Paternal</option>
                                                    <option>Liniers</option>
                                                    <option>Mataderos</option>
                                                    <option>Monte Castro</option>
                                                    <option>Montserrat</option>
                                                    <option>Nueva Pompeya</option>
                                                    <option>Núñez</option>
                                                    <option>Palermo</option>
                                                    <option>Parque Avellaneda</option>
                                                    <option>Parque Chacabuco</option>
                                                    <option>Parque Chas</option>
                                                    <option>Parque Patricios</option>
                                                    <option>Puerto Madero</option>
                                                    <option>Recoleta</option>
                                                    <option>Retiro</option>
                                                    <option>Saavedra</option>
                                                    <option>San Cristóbal</option>
                                                    <option>San Nicolás</option>
                                                    <option>San Telmo</option>
                                                    <option>Velez Sársfield</option>
                                                    <option>Versalles</option>
                                                    <option>Villa Crespo</option>
                                                    <option>Villa del Parque</option>
                                                    <option>Villa Devoto</option>
                                                    <option>Villa General Mitre</option>
                                                    <option>Villa Lugano</option>
                                                    <option>Villa Luro</option>
                                                    <option>Villa Ortúzar</option>
                                                    <option>Villa Pueyerredón</option>
                                                    <option>Villa Real</option>
                                                    <option>Villa Riachuelo</option>
                                                    <option>Villa Santa Rita</option>
                                                    <option>Villa Soldati</option>
                                                    <option>Villa Urquiza</option>
                                                  </select> -->
                                    </div>
                                    <div class="form-double">
                                        <input type="email"  name="email" class="email-input"id="form-email" placeholder="Correo Electrónico" required="required" >
                                    </div>
                                    <div class="form-double">
                                        <input type="password" id="password" class="password-input" name="password" placeholder="Contraseña" required="required">
                                        <input type="password" id="password" class="password-input" name="passwordRepeat" placeholder="Confirmar contraseña" required="required">
                                    </div>
                                    
                                    <!--<div class="col-md-12">
                                            <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                                            <label style="margin-bottom:20px;" class="custom-control-label" for="defaultUnchecked">Acepto los <a style="color:#034783;" href="terminos-y-condiciones.html">términos y condiciones</a></label>
                                    </div>-->
                                    
                                    <button type="submit" name="submit" class="bttn bttn-primary" style="margin:20px 45% 25px 45%;">Enviar</button>
                                    
    
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
            </section>

           

              <!-- Registro -->
    
        
    </div>
</section>
<!-- Registro -->

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
    <script src="js/custom.js"></script>
    
    <script src="js/custom22.js"></script>
</body>

</html>
