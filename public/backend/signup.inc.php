<?php

if(isset($_POST["submit"])){
   $firstName = $_POST["firstName"];
   $lastName = $_POST["lastName"];
   $addressName = $_POST["addressName"];
   $addressNumber = $_POST["addressNumber"];
   $floorNumber = $_POST["floorNumber"];
   $deptNumber = $_POST["deptNumber"];
   $cellphoneNumber = $_POST["cellphoneNumber"];
   $telephoneNumber = $_POST["telephoneNumber"];
   $email = $_POST["email"];
   $pwd = $_POST["password"];
   $pwdRepeat = $_POST["passwordRepeat"];
    
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
   createUser($conn, $firstName,  $lastName, $addressName,  $addressNumber,$floorNumber,  $deptNumber, $cellphoneNumber, $telephoneNumber, $email, $pwd);

}
else{
    header("location:../index.html");
}