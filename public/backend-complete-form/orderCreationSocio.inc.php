<?php

if(isset($_POST["submit"])){
    
    $userid = $_POST["userid"];
    $rubro = $_POST["rubro"];
    $detalle = $_POST["detalle"];

    require_once "dbh.inc.php";
    require_once "function.inc.php";

    if(emptyOrder($detalle) !== false){
        header("location:../servicios-final.php?error=emptyinput");
        exit();
       }
    
       createOrder($conn,$userid, $rubro, $detalle);
       header("location: ../usuario.php");
    }
    else{
        header("location: ../servicios-final.php?error=conexion");
        exit();
    }