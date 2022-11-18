<?php

if(isset($_POST["submit"])){
   $firstName = $_POST["firstName"];
   $lastName = $_POST["lastName"];
   $addressName = "-";
   $addressNumber = "-";
   $floorNumber = "-";
   $deptNumber = "-";
   $cellphoneNumber = "prueba";
   $telephoneNumber = $_POST["telephoneNumber"];
   $email = $_POST["email"];
   $pwd = $_POST["password"];
   $pwdRepeat = $_POST["passwordRepeat"];
   $rubro = $_POST["rubro"];
   $detalle = $_POST["detalle"];
   
   $createDate = new DateTime();
   $createDate -> setTimezone(new DateTimeZone('America/Argentina/Buenos_Aires'));
   $createTime = new DateTime();
   $createTime -> setTimezone(new DateTimeZone('America/Argentina/Buenos_Aires'));
   $createDate = $createDate->format('d/m/Y') . PHP_EOL;
   $createTime = $createTime->format('H:i:s') . PHP_EOL;
    
   require_once  'dbh.inc.php';
   require_once 'function.inc.php';

   if(emptyInputSignup($firstName,  $lastName, $addressName,  $addressNumber,$floorNumber,  $deptNumber, $cellphoneNumber, $telephoneNumber, $email, $pwd) !== false){
    header("location:../contratar.php?error=emptyinput");
    exit();
   }
   if(invalidfirstName($firstName) !== false){
    header("location: ../contratar.php?error=invalidfirstname");
    exit();
   }
   if(invalidEmail($email) !== false){
    header("location: ../contratar.php?error=invalidemail");
    exit();
   }
   if(pwdMatch($pwd, $pwdRepeat) !== false){
    header("location: ../contartar.php?error=passwordsdontmatch");
    exit();
   }
   if(emailExists($conn, $email) !== false){
    header("location: ../usuario.php?error=usernametaken");
   }
   createUser($detalle, $conn, $firstName,  $lastName, $addressName,  $addressNumber,$floorNumber,  $deptNumber, $cellphoneNumber, $telephoneNumber, $email, $pwd);
   
 
   if(empty($rubro)){
    header("location:../usuario.php?usuario=realizado");
   
    
   }else{
    
    $userid = mysqli_insert_id($conn);
   

    $rubroCodeQuery = "SELECT codigoRubro FROM rubros WHERE rubro='$rubro'";
    $rubroCodeQuery_result = mysqli_query($conn,$rubroCodeQuery);
    $codigoRubro = (mysqli_fetch_row($rubroCodeQuery_result))[0];
    
  
    
     createOrder($conn,$userid, $rubro, $detalle, $codigoRubro, $createDate, $createTime);
    
   

   
   }
    
}else{
    header("location:../index.php");
}