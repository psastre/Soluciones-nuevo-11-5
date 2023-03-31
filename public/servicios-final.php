<?php
    session_start();
    include_once 'backend/rubrosList.inc.php'
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
    
   
   
    
    <!--Preloader-->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!--
    <div class="alert">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
      <strong>Atención!</strong> Usted no es socio de Soluciones, pagará $100 por cada pedido.<a href="#" style="color: #00ace3; font-size: 15px; margin-left: 15px;">HACERME SOCIO</a>
    </div>
  -->

    
        <!-- Modal content-->
        

      </div>
    </div>
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
   <?php include_once('popup-importante.php') ?>
    <!--Header-Area-->

    <header class="header-area overlay" id="headerServicios">
        
        
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
        <a href="registrarse.html" id="registrarse">Registrarse</a>
      </div>
      <!-- Inicio de sesión -->

    
        <div class="vcenter">
            <div class="container" id="containerHeader">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="header-text">

                            <h2 id="service_page_title" class="header-title wow fadeInUp" style="text-align:center; margin-bottom: 50px;">BUSCA EL SERVICIO QUE NECESITAS</h2>
                            <div  class="container-error-busqueda" > <p class="error-busqueda">Tenes que seleccionar uno de los rubro ofrecidos antes de hacer el pedido</p> </div>
                            <form>

                              <input list="browser" class="browser" placeholder="Buscar..." id="datalistValue">
                                  <datalist id="browser">
                                    <?php   
                                        foreach($rubros as $rubro){
                                            if($rubro['id'] <= 26){
                                    ?>

                                      <option value="<?php echo $rubro['rubro'];?>" style="text-transform: uppercase;"></option>
                                    
                                    <?php
                                        }}
                                    ?>


                                    
                                  </datalist>
                                  
                            <a class="bttn bttn-lg bttn-primary top-service popupLogicDatalist" style="display: block; margin: 40px auto 0;  cursor:pointer;">Hacer pedido</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="arrow2 bounce2"></div>
    </header>
    <!--Header-Area-/ -->

    <!-- Portfolio-Area -->
    <section class="section-padding gray-bg" id="servicios-area">
    
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                    <div class="page-title text-center service_title-reparaciones">
                        <h2 class="title">Reparaciones tecnicas comunes </h2>
                        <p>Para estos servicios  ofrecemos la visita del técnico dentro de las 24hs.</p>
                    </div>
                </div>
            </div>
            <div class="row box-servicios" id="filtering">

                <!-- Reparaciones -->
                <?php   
                    foreach($rubros as $rubro){
                        if($rubro['id'] <= 6) {
                ?>               
                
                <!-- Box Electricidad -->
                <div class="col-xs-6 col-sm-4 col-md-3 mix reparaciones popupLogic" data-type="<?php echo $rubro['rubro'];?>" id="electricidad">
                <h5 class="rubro_logica_js rubro_titulo_img" data-type="<?php echo $rubro['rubro'];?>"><?php echo $rubro['rubro'];?></h5>
                <div class="filter-box">
                        <div class="filter-image">
                            <img class="servicio-imagen" src="img/<?php echo $rubro['rubro'];?>.jpg" alt="">
                        </div>
                        <div class="filter-hover">
                            
                            <p id="minimizarElectricidad"></p>
                            <a href="img/electricidad.jpg" data-effect="mfp-zoom-in"></a>
                        </div>
                    </div>
                </div>
                <!-- Box Electricidad -->

                 <?php }} ?>
               
                 
               
               
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
            <?php   
                    foreach($rubros as $rubro){
                        if($rubro['id'] > 6 && $rubro['id'] <= 12) {
                ?> 

            <a class="col-md-6  servicios-extra popupLogic" data-type="tecnico-general"><h4 class="rubro_logica_js" data-type="<?php echo $rubro['rubro'];?>"><?php echo $rubro['rubro'];?></h4></a>
            <a class="popupLogicGeneral"></a>              
            <?php }} ?>


           

            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <div class="page-title text-center">
                    <h3 class="title">Mantenimiento</h3>
                </div>
            </div>

            <?php   
                    foreach($rubros as $rubro){
                        if($rubro['id'] > 12 && $rubro['id'] <= 26 ) {
                ?> 

            <a class="col-md-6  servicios-extra popupLogic" data-type="tecnico-general"><h4 class="rubro_logica_js" data-type="<?php echo $rubro['rubro'];?>"><?php echo $rubro['rubro'];?></h4></a>
          
            <?php }} ?>

            
      </div>
    <!-- Portfolio-Area / -->

    
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