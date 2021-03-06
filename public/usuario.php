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
    <script src="js/custom2.js"></script>

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target=".mainmenu-area">
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
                        <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="" id="logoMenu"></a>
                    </div>
                    <div class="collapse navbar-collapse navbar-right" id="mainmenu">
                        <ul class="nav navbar-nav navbar-right help-menu">
                            <li><a href="#" id="user-btn"><i class="icofont icofont-user-alt-4"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav primary-menu">
                            <li><a class="active black" href="#">Mi perfil</a></li>
                            <li><a class="black" href="pedidos.html">Mis pedidos</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
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
      <a href="#" id="registrarse">Registrarse</a>
    </div>
    <!-- Inicio de sesi??n -->

    <!-- User management -->
    <section class="section-padding gray-bg" id="servicios-area">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="page-title text-center">
                        
                        <script>userTitle();</script>
                        <?php
                                if(isset($_SESSION["userName"])){
                                    echo "<h1 id='userTitle'>" . $_SESSION["userName"] ." ". $_SESSION["userLastName"]. "</span>";
                                    
                                }
                                else{
                                    echo "<span class='placeholder'>Nombre</span>";
                                }
                                ?>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12" id="userBox">
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-3" id="userMenu">

                          <div class="profilePic">
                            <img src="" alt="">
                          </div>

                          <a href="#generalSpace"> <div id="general-btn" class="menuSection active">General</div> </a>
                          <a href="#misPedidosSpace"> <div id="mis-pedidos-btn" class="menuSection">Mis pedidos</div> </a>
                          <a href="#datosDeFacuracionSpace"> <div id="datos-de-facturacion-btn" class="menuSection">Datos de facturaci??n</div> </a>


                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-9">

                          <div class="userSpace" id="generalSpace">
                            <h2>General</h2>

                            <form action="backend/userEdit.php" method="post">

                            <div class="col-xs-12 col-sm-6 col-md-4">
                              <div class="form-input">
                                <label>
                                
                                  <?php
                                if(isset($_SESSION["userName"])){
                                  echo "<input type='text' name='firstName' value='". $_SESSION["userName"] ."'>";
                                    
                                }
                                else{
                                    echo "<span class='placeholder'>Nombre</span>";
                                }
                                ?>
                                 
                                </label>
                              </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4">
                              <div class="form-input">
                                <label>
                                
                                  <?php
                                if(isset($_SESSION["userLastName"])){
                                  echo "<input type='text' name='lastName' value='". $_SESSION["userLastName"] ."'>";
                                   
                                    
                                  }
                                else{
                                    echo "<span class='placeholder'>Apellido</span>";
                                }
                                ?>
                                </label>
                              </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4">
                              <div class="form-input">
                                <label>
                                  
                                  <?php
                                if(isset($_SESSION["userEmail"])){
                                  echo "<input type='text' name='email' value='". $_SESSION["userEmail"] ."'  readonly>";
                                    
                                  }
                                else{
                                    echo "<span class='placeholder'>Direccion</span>";
                                }
                                ?>
                                </label>
                              </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4">
                              <div class="form-input">
                                <label>
                                
                                  <?php
                                if(isset($_SESSION["userAddressName"])){
                                  echo "<input type='text' name='addressName' value='". $_SESSION["userAddressName"] ."'>";
                                    
                                  }
                                else{
                                    echo "<span class='placeholder'>Direccion</span>";
                                }
                                ?>
                                </label>
                              </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4">
                              <div class="form-input">
                                <label>
                                
                                  <?php
                                if(isset($_SESSION["userAddressNumber"])){
                                  echo "<input type='text' name='addressNumber' value='". $_SESSION["userAddressNumber"] ."'>";
                                }
                                else{
                                    echo "<span class='placeholder'>Numero</span>";
                                }
                                ?>
                                </label>
                              </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-4">
                              <div class="form-input">
                                <label>
                                
                                  <?php
                                if(isset($_SESSION["userFloorNumber"])){
                                  echo "<input type='text' name='floorNumber' value='". $_SESSION["userFloorNumber"] ."'>";
                                }
                                else{
                                    echo "<span class='placeholder'>Piso</span>";
                                }
                                ?>
                                </label>
                              </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-6 ">
                              <div class="form-input">
                                <label>
                                  <?php
                                if(isset($_SESSION["userDeptNumber"])){
                                  echo "<input type='text' name='deptNumber' value='". $_SESSION["userDeptNumber"] ."'>";
                                }
                                else{
                                    echo "<span class='placeholder'>Departamento</span>";
                                }
                                ?>
                                </label>
                              </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-6">
                              <div class="form-input">
                                <label>
                                <input type="text" name="cellphoneNumber">
                                  <?php
                                if(isset($_SESSION["userCellphone"])){
                                  echo "<input type='text' name='cellphoneNumber' value='". $_SESSION["userCellphone"] ."'>";
                                }
                                else{
                                    echo "<span class='placeholder'>Telefono</span>";
                                }
                                ?>
                                </label>
                              </div>
                            </div>
                          </div>
                                <button type="submit" name="submit" class="bttn bttn-primary">Cambiar Datos</button>
                          </form>
                          <div class="userSpace" id="misPedidosSpace">

                            <div class="containerPedidos">
                              <div class="col-md-12 pedidosDiv">

                              </div>
                              <div class="col-md-12 pedidosDiv2">

                              </div>
                              <div class="col-md-12 pedidosDiv">

                              </div>
                              <div class="col-md-12 pedidosDiv2">

                              </div>
                              <div class="col-md-12 pedidosDiv">

                              </div>
                              <div class="col-md-12 pedidosDiv2">

                              </div>
                              <div class="col-md-12 pedidosDiv">

                              </div>
                              <div class="col-md-12 pedidosDiv2">

                              </div>
                              <div class="col-md-12 pedidosDiv">

                              </div>
                              <div class="col-md-12 pedidosDiv2">

                              </div>
                              <div class="col-md-12 pedidosDiv">

                              </div>
                              <div class="col-md-12 pedidosDiv2">

                              </div>
                              <div class="col-md-12 pedidosDiv">

                              </div>
                              <div class="col-md-12 pedidosDiv2">

                              </div>
                            </div>

                          </div>

                          <div class="userSpace" id="datosDeFacuracionSpace">

                          </div>



                        </div>
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
</body>

</html>
