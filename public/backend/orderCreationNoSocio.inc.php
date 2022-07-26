<?php

if(isset($_GET["submit"])){

    $userid = $_GET["userid"];
    $rubro = $_GET["rubro"];
    $detalle = $_GET["detalle"];

    header("Location: ../contratar.php?userid=" . $userid . "&rubro=" . $rubro ."&detalle=". $detalle);

}
