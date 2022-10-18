<?php

if(isset($_POST["submit"])){
   $firstName = $_POST["firstName"];
   $lastName = $_POST["lastName"];
   $addressName = $_POST["addressName"];
   $addressNumber = $_POST["addressNumber"];
   $floorNumber = $_POST["floorNumber"];
   $deptNumber = $_POST["deptNumber"];
   $cellphoneNumber = $_POST["cellphoneNumber"];
   $email = $_POST["email"];

   require_once 'dbh.inc.php';
   

   function editUser($conn, $firstName,  $lastName, $addressName,  $addressNumber,$floorNumber,  $deptNumber, $cellphoneNumber, $email){
    $sql = "UPDATE usuarios SET firstName=?, lastName=?, addressName=?, addressNumber=?,floorNumber=?, deptNumber=?, cellphoneNumber=?  WHERE email=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location:../contratar.php?error=errorcreateuser");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssssssss", $firstName,  $lastName, $addressName,  $addressNumber,$floorNumber,  $deptNumber, $cellphoneNumber, $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location:../usuario.php?error=none");
    exit();
 };

 editUser($conn, $firstName,  $lastName, $addressName,  $addressNumber,$floorNumber,  $deptNumber, $cellphoneNumber, $email);

}
else{
    header("location:../index.php");
}