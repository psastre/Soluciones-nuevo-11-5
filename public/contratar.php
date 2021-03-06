<?php
require __DIR__ .  '/vendor/autoload.php';

MercadoPago\SDK::setAccessToken('TEST-1263645313893250-071807-15130eb1238f9c7772f52ddfefa8e3c4-211426020');


$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->id = '0001';
$item->title = 'Servicio de Soluciones';
$item->quantity = 1;
$item->unit_price = 500.00;
$item->currency_id = "ARS";
$preference->items = array($item);
$preference-> back_url = array(
  "success" => "http://localhost/Soluciones-firebase/public/index.php",
  "failure" => "http://localhost/Soluciones-firebase/public/index.php"
);


$preference->save();
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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://sdk.mercadopago.com/js/v2"></script>

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target=".mainmenu-area">
  <!--<div class="backLogInPopup">
  <div class="logInPopup">
    <div class="usuario-desconocido">
      <div class="title">
        Iniciá sesión
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
          <span class="placeholder">Contraseña</span>
        </label>
      </div>

      <a href="#" class="bttn bttn-primary">Entrar</a>

      <p>¿Todavía no estás registrado?</p>
      <a href="registrarse.html" id="registrarse">Registrarse</a>
    </div>

  </div>
</div>
    <!--Preloader-->
    <div class="preloader">
        <div class="spinner"></div>
    </div>

    <!-- Mainmenu-Area -->
    <nav class="navbar mainmenu-area" id="menuFijo" data-spy="affix" data-offset-top="197">
        <div class="container" id="navbar1">
            <div class="row">
                <div class="col-xs-12">

                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="navbar-header smoth">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainmenu">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" id="logoMenu" href="index.php"><img src="img/logo.png" alt=""></a>
                    </div>
                    <div class="collapse navbar-collapse navbar-right" id="mainmenu">
                        <ul class="nav navbar-nav navbar-right help-menu">
                            <li><a href="#" onclick="myFunction()"><i class="icofont icofont-user-alt-4"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav primary-menu">
                            <li><a href="#" onclick="myFunction()"><img src="img/user-black.png" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Mainmenu-Area-/ -->


        <!-- Inicio de sesión -->
        <div style="display:none;" class="logIn wow fadeInUp" id="logIn">
          <div class="usuario-desconocido">
            <div class="title">
              Iniciá sesión
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
                <span class="placeholder">Contraseña</span>
              </label>
            </div>

            <a href="#" class="bttn bttn-primary">Entrar</a>

            <p>¿Todavía no estás registrado?</p>
            <a href="registrarse.html" id="registrarse">Registrarse</a>
          </div>

          <div class="usuario-registrado">
            <div class="row">

              <div class="col-sm-12">
                <h4>Juan Pérez</h4>
              </div>

              <div class="col-sm-12">
                <a href="#">Mi perfil</a>
              </div>

              <div class="col-sm-12">
                <a href="#">Mis pedidos</a>
              </div>

              <div class="col-sm-12">
                <a href="#">Configuración</a>
              </div>

              <div class="col-sm-12">
                <a href="#">Cerrar sesión</a>
              </div>
            </div>

          </div>

        </div>
        <!-- Inicio de sesión -->

    <!-- Como asociarse -->
    <section class="section-padding gray-bg" id="como-asociarse">
      <div class="titulo-form">
        <h1 class="title" >Estás a un paso de confirmar tu pedido </h1>
        <h3 style="font-size:15px;">Por favor llená los siguientes datos para continuar</h3>
      </div>
      
        <div class="container">
          <div class="form-conprecio">
            <div class="row compl-form">
                <div class="col-xs-12 col-sm-12 col-sm-offset-0">
                    <div class="page-title ">
                        
                        <!--<div class="row">
                          <div class="col-sm-6">
                            <h4>Categoría:</h4>
                          </div>

                          <div class="col-sm-6">
                            <form action="/action_page.php">
                            <select name="cars" class="selecServicio">
                              <option value="volvo">Volvo</option>
                              <option value="saab">Saab</option>
                              <option value="opel">Opel</option>
                              <option value="audi">Audi</option>
                            </select>
                            </form>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-sm-6">
                            <h4 class="text-center">Servicio:</h4>
                          </div>

                          <div class="col-sm-6">
                            <form action="/action_page.php">
                            <select name="cars" class="selecServicio">
                              <option value="volvo">Volvo</option>
                              <option value="saab">Saab</option>
                              <option value="opel">Opel</option>
                              <option value="audi">Audi</option>
                            </select>
                            </form>
                          </div>
                        </div>-->
                        
                    </div>
                </div>
                <div class="col-md-12 imgPago ">
                  <form action="backend/signup.inc.php" method="post" class="form-pedido">
                    <div class="campo"><h4>Nombre </h4><input type="text" name="firstName"></div>
                    <div class="campo"><h4>Apellido </h4><input type="text" name="lastName"></div>
                    <div class="campo"><h4>Dirección </h4><input type="text" name="addressName"><br></div>
                    <div class="campo campoe">
                      <div class="campoi"><h4>Numero </h4><input type="text" name="addressNumber"></div>
                      <div class="campoi"><h4>Piso </h4><input type="text" name="floorNumber"></div>
                      <div class="campoi"><h4>Depto. </h4><input type="text" name="deptNumber"><br></div>
                    </div>
                    <div class="campo"><h4>Celular </h4><input type="text" name="cellphoneNumber"><br></div>
                    <div class="campo campoe">
                     
                      <div class="campoi"><h4>Telefono </h4><input type="text" name="telephoneNumber"></div>
                      <div class="campoi"><h4>  </h4><input type="text" name="lname"></div>
                     
                    </div>
                    <div class="campo"><h4>Mail</h4><input type="text" name="email"><br></div>
                    <div class="campo"><h4>Contraseña </h4><input type="password" name="password" id="password"/>
                   
                      <i class="bi bi-eye-slash" id="togglePassword"></i><br></div>
                      <div class="campo"><h4>Repetir Contraseña </h4><input type="passwordRepeat" name="passwordRepeat" id="password"/></div>

                    <button type="submit" name="submit" >Submit</button>
                    

                    

                  </form>
                  <div class="MLButton"></div>


                   <!--Script MERCADO PAGO VIEJO
                     <a mp-mode="dftl" href="https://www.mercadopago.com/mla/checkout/start?pref_id=72429612-a05f0849-5831-4f91-b9e0-f760857f4f18" name="MP-payButton" class='blue-ar-l-rn-none bttn bttn-lg bttn-primary bttn-pagar' style="margin-top:30px;">Pagar</a>
                    <script type="text/javascript">
                    (function(){function $MPC_load(){window.$MPC_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;})();}window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})();
                    </script>
                    -->

                    <script>
                    const mp = new MercadoPago('TEST-8565ea6f-8218-4d00-a455-f0ce09e4d4e8', {
                      locale:'es-AR',
                    });
                    mp.checkout({
                        preference: {
                          id: '<?php echo $preference->id; ?>'
                        },
                        render: {
                          container: ".MLButton", // Indica el nombre de la clase donde se mostrará el botón de pago
                          label: "Pagar", // Cambia el texto del botón de pago (opcional)
                        },
                      });
                    </script>
                </div>
                
            </div>
            <div class="precios">
              <div class="precio">Costo operativo <br/> <span>$350</span></div>
              <div class="razon-precio">Todo primer  pedido tiene un costo operativo  que se abona con tu tarjeta de crédito, para asegurar la visita tanto para el cliente como para el tecnico.
                Si despues te suscribis, se descontara de la primera cuota. </div><br/>
                <a class="conoce-mas">Conoce mas</a>
  
            </div>
            </div>

           
            
            <h3 class="subt-quienes">¿Cómo es el funcionamiento para el pedido de los servicios técnicos domiciliarios?</h3>

              <div class="row">
                <div class="col-sm-2 pasos-como">
                  <img src="img/icon-9.png" alt="">
                  <h4>Hacé tu pedido telefónicamente o vía web.</h4>
                </div>

                <div class="col-sm-2 pasos-como">
                  <img src="img/icon-16.png" alt="">
                  <h4>Aboná $120 de costo operativo.</h4> <a class="blue-ar-l-rn-none bttn bttn-lg bttn-primary" id="btnAsociarse" href="#">¿No querés pagar por cada pedido? ¡Asociate!</a>
                </div>

                <div class="col-sm-2 pasos-como">
                  <img src="img/icon-11.png" alt="">
                  <h4>El profesional se comunica a tu teléfono para concretar horario y día.</h4>
                </div>

                <div class="col-sm-2 pasos-como">
                  <img src="img/icon-5.png" alt="">
                  <h4>Antes de realizar el trabajo, el técnico ofrecerá un presupuesto de acuerdo a la tarea.</h4>
                </div>

                <div class="col-sm-2 pasos-como">
                  <img src="img/icon-12.png" alt="">
                  <h4>Una vez finalizado el trabajo, el profesional es quien te cobra y factura.</h4>
                </div>

                <div class="col-sm-2 pasos-como">
                  <img src="img/icon-13.png" alt="">
                  <h4>Todos tus pedidos quedarán registrados en tu historial.</h4>
                </div>
              </div>
        </div>
    </section>
    <!-- Como asociarse -->

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
    <script src="js/eyepassword.js"></script>
</body>

</html>
