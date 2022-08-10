<?php

if(isset($_GET["submit"])){

    
    $rubro = $_GET["rubro"];
    $detalle = $_GET["detalle"];

    $url = "Location: ../registrarse.php?&rubro=" . $rubro ."&detalle=" . $detalle;
    
   
    header($url);

}
