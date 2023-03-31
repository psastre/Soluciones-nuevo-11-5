<?php



if(isset($_POST["submit"])){
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    
    $userid = $_POST["userid"];
    $rubro = "Socio no activo internet";
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];
    $consulta = $_POST["consulta"];

    $detalle = 'cliente inactivo esta interesado en ser socio, pide que lo llamen al ' . $telefono . ' o al mail '. $email . ' con la consulta '. $consulta . '.';


    
    $createDate = new DateTime();
    $createDate -> setTimezone(new DateTimeZone('America/Argentina/Buenos_Aires'));
    $createTime = new DateTime();
    $createTime -> setTimezone(new DateTimeZone('America/Argentina/Buenos_Aires'));
    $createDate = $createDate->format('d/m/Y') . PHP_EOL;
    $createTime = $createTime->format('H:i:s') . PHP_EOL;

    require_once "dbh.inc.php";
    require_once "function.inc.php";

    $rubroCodeQuery = "SELECT codigoRubro FROM rubros WHERE rubro='$rubro'";
    $rubroCodeQuery_result = mysqli_query($conn,$rubroCodeQuery);
    $codigoRubro = (mysqli_fetch_row($rubroCodeQuery_result))[0];
    

    if(emptyOrder($detalle) !== false){
        header("location:../servicios-final.php?error=emptyinput");
        exit();
       }
    
       createOrder($conn,$userid, $detalle, $codigoRubro, $createDate, $createTime);
       header("location: ../usuario.php");
    }
    else{
        header("location: ../servicios-final.php?error=conexion");
        exit();
    }

    