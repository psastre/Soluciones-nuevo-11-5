<?php
    
    function emptyInputSignup($firstName,  $lastName, $addressName,  $addressNumber,$floorNumber,  $deptNumber, $cellphoneNumber, $telephoneNumber, $email, $pwd){
       $result;
       if(empty($firstName) || empty($lastName) || empty($addressName) || empty($addressNumber) || empty($floorNumber) || empty($deptNumber) || empty($cellphoneNumber) || empty($telephoneNumber) || empty($email) || empty($pwd)){
           $result =true;
           
       }
       else{
           $result = false;
       }
       return $result;
    }
   
    function invalidfirstName ($firstName){
       $result;
       if (!preg_match("/^[a-zA-Z\s]*$/", $firstName)){
           $result=true;
       }
       else{
           $result= false;
       }
        return $result;
    }
    function invalidPhone ($telephoneNumber){
       $result;
       if (!preg_match("/^(\s*[0-9]+\s*)+$/", $telephoneNumber)){
           $result=true;
       }
       else{
           $result= false;
       }
        return $result;
    }
    function invalidPwd ($pwd){
       $result;
       if (!preg_match("/(?=^.{8,}$)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/", $pwd)){
           $result=true;
       }
       else{
           $result= false;
       }
        return $result;
    }
    function invalidEmail ($email){
       $result;
       if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
           $result=true;
       }
       else{
           $result= false;
       }
        return $result;
    }
   
    function pwdMatch($pwd, $pwdRepeat){
       $result;
       if($pwd !== $pwdRepeat){
           $result = true;
       }
       else{
           $result=false;
   
       }
       return $result;
    }
   
    function emailExists($conn, $email){
       $sql = "SELECT * FROM usuarios  WHERE  email = ?";
       $stmt = mysqli_stmt_init($conn);
       if(!mysqli_stmt_prepare($stmt, $sql)){
           header("location:../usuario.html?error=stmtfailed");
           exit();
       }
       mysqli_stmt_bind_param($stmt, "s", $email);
       mysqli_stmt_execute($stmt);
   
       $resultData = mysqli_stmt_get_result($stmt);
   
       if($row=mysqli_fetch_assoc($resultData)){
           return $row;
       }
       else{
           $result = false;
           return $result; 
       }
       mysqli_stmt_close($stmt);
    }
   
   
    function createUser($detalle, $conn, $firstName,  $lastName, $addressName,  $addressNumber,$floorNumber,  $deptNumber, $cellphoneNumber, $telephoneNumber, $email, $pwd, $activeStatus,  $clientCreateDate, $clientExpirateDate){
        $sql = "INSERT INTO  usuarios (firstName, lastName, addressName, addressNumber,floorNumber, deptNumber, cellphoneNumber, telephoneNumber, email, pwd, activeStatus, clientCreateDate, clientExpirateDate) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?);";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location:../registrarse.php?error=errorcreateuser");
            exit();
        }
    
        $hashedPwd = password_hash( $pwd, PASSWORD_DEFAULT);
    
        mysqli_stmt_bind_param($stmt, "sssssssssssss", $firstName,  $lastName, $addressName,  $addressNumber,$floorNumber,  $deptNumber, $cellphoneNumber, $telephoneNumber, $email, $hashedPwd, $activeStatus,  $clientCreateDate, $clientExpirateDate);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
 
        session_start();
             $_SESSION["userEmail"]= $email;
             
             $_SESSION["userEmail"]= $email;
             $_SESSION["userStatus"]= 0 ;
             $_SESSION["activeStatus"]= $activeStatus ;
         
             $_SESSION["userName"] =  $firstName;
             $_SESSION["userLastName"] = $lastName;
             $_SESSION["userTelephone"] = $telephoneNumber;
             $_SESSION["clientExpirateDate"] = $clientExpirateDate;
             $_SESSION["userId"] = mysqli_insert_id($conn);
         
         
        
        
     }
      // LOGIN
    function emptyInputLogin($email, $pwd){
       $result;
       if( empty($email) || empty($pwd)){
           $result =true;
       }
       else{
           $result = false;
       }
       return $result;
    }
   
    function emptyInputContact($name, $phone, $email, $message){
       $result;
       if( empty($name) || empty($phone) || empty($email) || empty($message)){
           $result =true;
       }
       else{
           $result = false;
       }
       return $result;
    }
   
    function loginUser($conn, $email, $pwd){
       $emailExists = emailExists($conn, $email);
   
       if($emailExists === false){
           header("location:../index.php?error=wronglogin");
           exit();
       }
   
       $pwdHashed = $emailExists["pwd"];
       $checkPwd = password_verify($pwd, $pwdHashed);
   
       if($checkPwd === false){
           header("location:../index.html?error=wronglogin");
           exit();
       }
       else if($checkPwd === true){
           session_start();
           $_SESSION["userEmail"]= $emailExists["email"];
           $_SESSION["userStatus"]= $emailExists["clientStatus"];
           $_SESSION["activeStatus"]= $emailExists["activeStatus"];
           $_SESSION["userName"] = $emailExists["firstName"];
           $_SESSION["userLastName"] = $emailExists["lastName"];
           $_SESSION["userAddressName"] = $emailExists["addressName"];
           $_SESSION["userAddressNumber"] = $emailExists["addressNumber"];
           $_SESSION["userFloorNumber"] = $emailExists["floorNumber"];
           $_SESSION["userDeptNumber"] = $emailExists["deptNumber"];
           $_SESSION["userCellphone"] = $emailExists["cellphoneNumber"];
           $_SESSION["userTelephone"] = $emailExists["telephoneNumber"];
           $_SESSION["userId"] = $emailExists["id"];
           $_SESSION["clientExpirateDate"] = $emailExists["clientExpirateDate"];
   
   
           
           
       }
    }
    
    // ORDER
   
    function emptyOrder($detalle){
       $result;
       if(empty($detalle)){
           $result =true;
       }
       else{
           $result = false;
       }
       return $result;
    }
   
    function createOrder($conn, $userid,  $detalle, $codigoRubro, $createDate, $createTime){
       $sql = "INSERT INTO  pedidos ( detail, userid, codigoRubro, createDate, createTime) VALUES (?,?,?,?,?);";
       $stmt = mysqli_stmt_init($conn);
       if(!mysqli_stmt_prepare($stmt, $sql)){
           header("location:../contratar.php?error=errorcreateorder");
           exit();
       }
   
       
   
       mysqli_stmt_bind_param($stmt, "sssss",  $detalle, $userid, $codigoRubro, $createDate, $createTime);
       mysqli_stmt_execute($stmt);
       mysqli_stmt_close($stmt);
       
       
    }