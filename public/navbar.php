<nav class="navbar mainmenu-area" id="menuFijo" data-spy="affix" data-offset-top="197">
        <div class="container" id="navbar1">
            <div class="row">
                <div class="col-xs-12">

                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 navbar-section">
                    <div class="navbar-header smoth">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainmenu">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" id="logoMenu" href="index.php"><img src="img/logo.png" alt=""></a>
                        <div class="speech-bubble wow fadeInUp">
                          <div class="arrow bounce"></div>
                          <p class="header1">30 años</p>
                          <p class="header2">ofreciendo confianza y seguridad</p>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse navbar-right" id="mainmenu">
                        <ul class="nav navbar-nav navbar-right help-menu">
                           
                        </ul>
                        <ul class="nav navbar-nav primary-menu">

                           
                            <?php


                                if(isset($_SESSION["userEmail"])){
                                    if($_SESSION["userStatus"] === 1){
                                        echo " <a href='servicios-final.php'><button class='bttn bttn-mesgratis bttn-hacer-pedido-nav-index' >Hacer Pedido</button></a>";
                                    }else if($_SESSION["userStatus"] === 0 ){
                                    /*CONDICION DE SI TIENE MAS DE TRES PEDIDOS ESTE USUARIO LLEVA A PAG CON CARTEL*/
                                    echo " <a href='quienes-somos.php'><button class='bttn bttn-mesgratis'  >Hacerme Socio</button></a>";
                                }}else{
                                    echo " <a href='quienes-somos.php'><button class='bttn bttn-mesgratis'  >Prueba mes gratis</button></a>";
                                }

                                echo  "<li><a href='quienes-somos.php'>¿Qué es Soluciones?</a></li>";


                                if(isset($_SESSION["userEmail"])){
                                    echo"<li><a href='usuario.php'>" . $_SESSION["userName"] ."</a></li>";
                                    echo "<li><a id='user-btn' onclick='myFunction()'>Perfil</a></li>";
                                }
                                else{
                                    echo "<li><a  href='registrarse.php'>Registrarse</a></li>";
                                    echo "<li><a id='user-btn' onclick='myFunction()'>Iniciar sesión</a></li>";
                                }
                                ?>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    

    <?php
        if(isset($_SESSION["userEmail"])){

            include_once('logout-nav.php');
            
            }
            else{
                include_once('login-nav.php');
            }
            ?>