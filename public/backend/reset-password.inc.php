<?php

if (isset($_POST["reset-password-submit"])){

    $selector = $_POST["selector"];
    $validator = $_POST["validator"];
    $password = $_POST["pwd"];
    $passwordRepeat = $_POST["pwd-repeat"];

    if(empty($password) || empty($passwordRepeat)){
        header("location:../create-new-password.php?selector=" . $selector . "&validator=" . $validator . "&newpwd=empty");
        exit();
    }else if ($password != $passwordRepeat){
        header("location:../create-new-password.php?selector=" . $selector . "&validator=" . $validator . "&newpwd=pwdnotsame");
        exit();
    }

    $currentDate = date("U");

    require "dbh.inc.php";

     $sql = "SELECT * FROM pwdReset WHERE pwdResetSelector=? AND pwdResetExpires >= ? ;";
     $stmt = mysqli_stmt_init($conn);
     if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "Hubo un error.";
        exit();
     }else{
        mysqli_stmt_bind_param($stmt, "ss", $selector, $currentDate);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        if(!$row = mysqli_fetch_assoc($result)){
            echo "Necesitas volver a mandar tu solicitud";
            exit();

        }else{
            $tokenBin = hex2bin($validator);
            $tokenCheck = password_verify($tokenBin, $row["pwdResetToken"]);

            if($tokenCheck === false){
                echo "Necesitas volver a mandar tu solicitud";
                exit();
            }elseif($tokenCheck === true ){
                $tokenEmail = $row['pwdResetEmail'];

                $sql = "SELECT * FROM usuarios WHERE email = ?;";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    echo "Hibo un error.";
                    exit();
                }else{
                    mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    if(!$row = mysqli_fetch_assoc($result)){
                        echo "Hubo un error,";
                        exit();
            
                    }else{
                        $sql = "UPDATE usuarios SET pwd=? WHERE email=?";
                        $stmt= mysqli_stmt_init($conn);
                        if(!mysqli_stmt_prepare($stmt, $sql)){
                            echo "Error dew conexion";
                            exit();
                        }else{
                            $newPwdHash = password_hash($password, PASSWORD_DEFAULT);
                            mysqli_stmt_bind_param($stmt, "ss", $newPwdHash, $tokenEmail);
                            mysqli_stmt_execute($stmt);

                            $sql = "DELETE FROM pwdReset WHERE pwdResetEmail = ?";
                            $stmt = mysqli_stmt_init($conn);
                            if(!mysqli_stmt_prepare($stmt, $sql)){
                                echo "Error en la conexion";
                                exit();
                            }else{
                                mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                                mysqli_stmt_execute($stmt);
                                header("Location: ../index.php?reset=succes");
                            }
                        }
                    
                    }

                     


            }
        }

    }

} 



}else{
    header("Location: ../index.php");
}
