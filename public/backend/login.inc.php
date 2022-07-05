<?php

if(isset($_POST["submit"])){

    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    require_once "dbh.inc.php";
    require_once "function.inc.php";

    if(emptyInputLogin($email, $pwd) !== false){
        header("location:../contratar.php?error=emptyinput");
        exit();
       }
    
       loginUser($conn, $email, $pwd);
    }
    else{
        header("location: ../login.php");
        exit();
    }



