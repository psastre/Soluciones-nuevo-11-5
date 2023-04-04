<?php
$todayDate= new DateTime();
    $todayDate = $todayDate->format('d/m/Y') . PHP_EOL;

    $todayDate = str_replace('/', '-', $todayDate);
    $todayDatefinal = date('Y-m-d', strtotime($todayDate));
    $_SESSION["clientExpirateDate"] = str_replace('/', '-', $_SESSION["clientExpirateDate"]);
    $expirationDatefinal = date('Y-m-d', strtotime($_SESSION["clientExpirateDate"]));
    
    if(isset($_SESSION["userEmail"])){
        $idclient = $_SESSION["userId"];
        if($expirationDatefinal < $todayDatefinal){
            $sql = "UPDATE usuarios SET activeStatus=0 WHERE id=" . $idclient ;
            require_once  'dbh.inc.php';
            $conn->query($sql);

            $_SESSION["activeStatus"]=0;
            
        }else{
            $_SESSION["activeStatus"]=1;
        }
    }

    ?>