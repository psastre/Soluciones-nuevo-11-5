<?php
$rubro = $_GET["rubro"];
$detalle = $_GET["detalle"];
if(isset($_POST["submit"])){
   $firstName = $_POST["firstName"];
   $lastName = $_POST["lastName"];
   $addressName = "prueba";
   $addressNumber = "prueba";
   $floorNumber = "prueba";
   $deptNumber = "prueba";
   $cellphoneNumber = "prueba";
   $telephoneNumber = $_POST["telephoneNumber"];
   $email = $_POST["email"];
   $pwd = $_POST["password"];
   $pwdRepeat = $_POST["passwordRepeat"];
   $rubro = $_POST["rubro"];
   $detalle = $_POST["detalle"];
   
    
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
   
   

   $userid = mysqli_insert_id($conn);
   

   $rubroCodeQuery = "SELECT codigoRubro FROM rubros WHERE rubro='$rubro'";
   $rubroCodeQuery_result = mysqli_query($conn,$rubroCodeQuery);
   $codigoRubro = (mysqli_fetch_row($rubroCodeQuery_result))[0];
   
 

   createOrder($conn,$userid, $rubro, $detalle, $codigoRubro);
   header("location: ../usuario.php");



}
else{
    header("location:../index.php");
}