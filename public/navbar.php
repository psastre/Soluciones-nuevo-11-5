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
                        <div class="speech-bubble wow fadeInUp">
                          <div class="arrow bounce"></div>
                          <p class="header1">28 años</p>
                          <p class="header2">ofreciendo confianza y seguridad</p>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse navbar-right" id="mainmenu">
                        <ul class="nav navbar-nav navbar-right help-menu">
                            <li><a href="#" onclick="myFunction()"><i class="icofont icofont-user-alt-4"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav primary-menu">
                            <li><a href="quienes-somos.html">¿Qué es Soluciones?</a></li>
                            <?php
                                if(isset($_SESSION["userEmail"])){
                                    echo"<li><a href='usuario.php'>" . $_SESSION["userName"] ."</a></li>";
                                }
                                else{
                                    echo "<li><a onclick='myFunction()'>Registrarse</a></li>";
                                }
                                ?>
                            <li><a id="user-btn" onclick="myFunction()"><img src="img/user-white.png" alt=""></a></li>
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