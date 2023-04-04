<?php 
  session_start();

  


include_once 'backend/dbh.inc.php';
if(isset($_SESSION["userEmail"])){
  $userid= $_SESSION["userId"];

  $useridquery = "SELECT  rubros.rubro, pedidos.detail, pedidos.createDate FROM pedidos 
                  INNER JOIN rubros
                  ON pedidos.codigoRubro = rubros.codigoRubro
                   WHERE pedidos.userid = '$userid'
                   ORDER BY pedidos.id" ;
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
    <!-- POPUP PEDIDO REALIZADO-->
      
        
        <?php if(isset($_GET["pedido"])){
          if($_GET["pedido"]=="realizado"){ ?>
          <div class="complete_popup_notice" >
            <div class="section_popup_notice" >
              <img class="tick_popup" src="img/tick.png" alt="">
            <h2>Pedido Realizado</h2>
              <div class="content_popup_order">

                
                <div class="funcionamiento-popup">
                
                <div class="funcionamiento_popup_order">
                    <img src="img/icon-11.png" alt="">
                    <h4>El tecnico se comunicara con usted para coordinar dia y horaria de la visita.</h4>
                </div>
                <div class="funcionamiento_popup_order">
                    <img src="img/icon-10.png" alt="">
                    <h4>El tecnico realizara y cobrara el trabajo que pidio.</h4>
                </div>
                <div class="funcionamiento_popup_order">
                    <img src="img/icon-3.png" alt="">
                    <h4>El centro de atencion de Soluciones hara un seguimiento de su trabajo.</h4>
                </div>
                
            </div>
              </div>
              <div class="closebar_popup_notice" >
                <button class="closebutton_popup_notice" id="closebutton_popup_notice">Entendido</button>
              </div>
              
            </div>
          </div>
        <?php }};?> 
        <?php if(isset($_GET["usuario"])){
          if($_GET["usuario"]=="realizado"){ ?>
          <div class="complete_popup_notice" >
            <div class="section_popup_notice" >
              <img class="tick_popup" src="img/tick.png" alt="">
            <h2>Bienvenido <?php echo $_SESSION["userName"]; ?></h2>
              <div class="content_popup_order">

                
                <div class="funcionamiento-popup" style="justify-content: center;">
                
                <div class="funcionamiento_popup_order">
                    <img src="img/icon-11.png" alt="">
                    <h4>Dentro de los proximos minutos un representanste se estara comunicando con vos.</h4>
                </div>
               
                
            </div>
              </div>
              <div class="closebar_popup_notice" >
                <button class="closebutton_popup_notice" id="closebutton_popup_notice">Entendido</button>
              </div>
              
            </div>
          </div>
        <?php }};?> 

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
    <section class="section-padding gray-bg" id="servicios-area" style="margin-top: 0;">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12" >
                 

                    <div class="col-xs-12 col-sm-12 col-md-12" id="userBox" style="height: 560px;">
                      <div class="row"  id="userRow">
                        <div class="col-xs-12 col-sm-12 col-md-3" id="userMenu">

                         

                          <a href="#"> <div id="general-btn" class="menuSection active">General</div> </a>
                          <a href="#"> <div id="mis-pedidos-btn" class="menuSection">Mis pedidos</div> </a>
                          


                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-9 info_dashboard" style="width: 100%;">

                          <div class="userSpace" id="generalSpace">
                            <h2>Información General</h2>
                            <div class="user_info_general">
                              <div class="user_info_row">
                                <div class="user_info_name">
                                  <p>Nombre</p>
                                  <h4><?php echo $_SESSION["userName"]; ?></h4>
                                </div>
                                <div class="user_info_lastname">
                                  <p>Apellido</p>
                                  <h4><?php echo $_SESSION["userLastName"]; ?></h4>
                                </div>
                              
                              
                              <div class="user_info_address">
                                  <p>Dirección</p>
                                  <?php
                                if(isset($_SESSION["userAddressName"])){?>
                                  <h4><?php echo $_SESSION["userAddressName"]; ?>  <?php echo $_SESSION["userAddressNumber"]; ?>  <?php echo $_SESSION["userFloorNumber"]; ?></h4>
                                <?php }
                                else{?>
                                  <h4>-</h4>                                
                                <?php }?>
                                 
                                </div>
                                </div>
                              
                              <div class="user_info_row">
                              <div class="user_info_name">
                                  <p>Mail</p>
                                  <h4><?php echo $_SESSION["userEmail"]; ?></h4>
                                </div>
                                <div class="user_info_lastname">
                                  <p>Teléfono</p>
                                  <h4><?php echo $_SESSION["userTelephone"]; ?></h4>
                                </div>
                              </div>
                            </div>

                          
                          </div>
                               

                          <!--PEDIDOS-->
                          <div class="userSpace" id="misPedidosSpace">
                          <h2>Ultimos pedidos</h2>
                            <div class="containerPedidos" style="height: fit-content; overflow:auto;">
                            <div class="col-md-12 pedidosDiv" style="display: flex;">
                            <div class="columna_pedidos columna_rubro"><p> RUBRO</p></div>
                                <div class="columna_pedidos columna_detalle"><p class="listado_detalle">DETALLE</p></div>
                                <div class="columna_pedidos columna_fecha" > <p> FECHA</p></div>
                            </div>
                            </div>

                            <div class="containerPedidos">
                              <?php 
                                foreach($userPedidosList as $pedido){
                                  
                              ?>
                              <div class="col-md-12 pedidosDiv historicoPedidos" style="display: flex;">
                                <div class="columna_pedidos columna_rubro"><p> <?php echo $pedido['rubro'];?></p></div>
                                <div class="columna_pedidos columna_detalle"><p class="listado_detalle"> <?php echo $pedido['detail'];?></p></div>
                                <div class="columna_pedidos columna_fecha" > <p> <?php echo $pedido['createDate'];?></p></div>
                                <div class="columna_pedidos columna_flecha"  > <img src="images/uparrow.png" alt=""></div>
                                  
                              </div>
                              <?php } ?>
                            </div>

                          </div>

                         



                        </div>
                      </div>
                      <div class="privacidad-section">
                          <a href="privacidad.php">Privacidad</a><a type="submit" name="submit" href="backend/logout.inc.php" class="logout_bottom" style="border-radius: 0 0 20px 20px ;">Salir de mi perfil</a>
                      
                      </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- User management -->

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
</body>

</html>
