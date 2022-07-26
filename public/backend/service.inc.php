<?php

if(isset($_POST["submit"])){

    $userid = $_POST["userid"];
    $rubro = $_POST["rubro"];
    $detalle = $_POST["detalle"];

    require_once "dbh.inc.php";
    require_once "function.inc.php";

    if(emptyOrder($detalle) !== false){
        header("location:../contratar.php?error=emptyinput");
        exit();
       }
    
       createOrder($conn,$userid, $rubro, $detalle);
    }
    else{
        header("location: ../login.php");
        exit();
    }