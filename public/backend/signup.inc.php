<?php

if(isset($_POST["submit"])){
   $firstName = $_POST["name"];
   $lastName = $_POST["lastname"];
   $addressName = "-";
   $addressNumber = "-";
   $floorNumber = "-";
   $deptNumber = "-";
   $cellphoneNumber = "-";
   $telephoneNumber = $_POST["phone"];
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

   $errorEmpty = false;
   $errorEmail = false;
   $errorPhone = false;
   $errorName = false;
   $errorLast = false;
   $errorPassword = false;
    
   require_once  'dbh.inc.php';
   require_once 'function.inc.php';

   if(emptyInputSignup($firstName,  $lastName, $addressName,  $addressNumber,$floorNumber,  $deptNumber, $cellphoneNumber, $telephoneNumber, $email, $pwd) !== false){
    echo"<span class='form-error'>Completa todos los campos</span>";
    $errorEmpty=true;
    exit();
   }
   if(invalidfirstName($firstName) !== false){
    echo"<span class='form-error'>El campo de nombre no puede tener números ni signos de puntuación</span>";
    $errorName=true;
    exit();
   }
   if(invalidfirstName($lastName) !== false){
    echo"<span class='form-error'>El campo de apellido no puede tener números ni signos de puntuación</span>";
    $errorLast=true;
    exit();
   }
   if(invalidPhone($telephoneNumber) !== false){
    echo"<span class='form-error'>El campo del celular no puede tener letras ni signos de puntuación</span>";
    $errorPhone=true;
    exit();
   }
   if(invalidEmail($email) !== false){
    echo"<span class='form-error'>El mail escrito es invalido</span>";
    $errorEmail=true;
    exit();
   }
   if(pwdMatch($pwd, $pwdRepeat) !== false){
    echo"<span class='form-error'>Las contraseñas escritas no coinciden</span>";
    $errorPassword = true;
    exit();
   }
   if(emailExists($conn, $email) !== false){
    echo"<span class='form-error'>El mail escrito ya esta registrado</span>";
    $errorEmail=true;
    exit();
   }






   createUser($detalle, $conn, $firstName,  $lastName, $addressName,  $addressNumber,$floorNumber,  $deptNumber, $cellphoneNumber, $telephoneNumber, $email, $pwd);
   
 
   if($rubro == "-"){
    header("location:../usuario.php?usuario=realizado");
   
    
   }else{
    
    $userid = mysqli_insert_id($conn);
   

    $rubroCodeQuery = "SELECT codigoRubro FROM rubros WHERE rubro='$rubro'";
    $rubroCodeQuery_result = mysqli_query($conn,$rubroCodeQuery);
    $codigoRubro = (mysqli_fetch_row($rubroCodeQuery_result))[0];
    
  
    
     createOrder($conn,$userid, $detalle, $codigoRubro, $createDate, $createTime);
    
   

   
   }
    
}else{
    header("location:../index.php");
}



?>

<script>
  var errorEmpty = "<?php echo $errorEmpty; ?>";
var errorEmail = "<?php echo $errorEmail; ?>";
var errorPhone = "<?php echo $errorPhone; ?>";
var errorName = "<?php echo $errorName; ?>";
var errorLast = "<?php echo $errorLast; ?>";
var errorPassword = "<?php echo $errorPassword; ?>";

if (errorEmpty == true){
    $("#form-name, #form-lastname, #phone-code, #form-email, #password, #password-code").style.borderColor = "red";
    console.log("bienbien")
}
if (errorEmail == true){
    $("#form-email").addClass("input-error");
    console.log("benben")
}
if (errorPhone == true){
    $("#phone-code").style.borderColor = "red";
}
if (errorName == true){
    $("form-name").style.borderColor = "red";
}
if (errorLast == true){
    $("#form-lastname").style.borderColor = "red";
}
if (errorPassword == true){
    $("#password,  #password-code").style.borderColor = "red";
}


</script>