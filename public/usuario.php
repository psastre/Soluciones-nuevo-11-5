<?php 
  session_start();

  


include_once 'backend/dbh.inc.php';
if(isset($_SESSION["userEmail"])){
  $userid= $_SESSION["userId"];

  $useridquery = "SELECT category, detail, date FROM pedidos WHERE userid = '$userid'";
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

    <!-- Inicio de sesión -->
    <div class="logIn wow fadeInUp" id="logIn">
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
      <a href="#" id="registrarse">Registrarse</a>
    </div>
    <!-- Inicio de sesión -->

    <!-- User management -->
    <section class="section-padding gray-bg" id="servicios-area">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12" >
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

                          <a href="#"> <div id="general-btn" class="menuSection active">General</div> </a>
                          <a href="#"> <div id="mis-pedidos-btn" class="menuSection">Mis pedidos</div> </a>
                          


                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-9 info_dashboard">

                          <div class="userSpace" id="generalSpace">
                            <h2>Información General</h2>

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
                            <button type="submit" name="submit" class="bttn bttn-primary">Cambiar Datos</button>
                          </form>
                          </div>
                               

                          <!--PEDIDOS-->
                          <div class="userSpace" id="misPedidosSpace">
                          <h2>Ultimos pedidos</h2>

                            <div class="containerPedidos">
                              <?php 
                                foreach($userPedidosList as $pedido){
                                  
                              ?>
                              <div class="col-md-12 pedidosDiv" style="display: flex;">
                                <p> <?php echo $pedido['category'];?></p>
                                <p> <?php echo $pedido['detail'];?></p>
                                <p> <?php echo $pedido['date'];?></p>

                              </div>
                              <?php } ?>
                            </div>

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
