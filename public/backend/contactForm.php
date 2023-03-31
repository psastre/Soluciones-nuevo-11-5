<?php

    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $message = $_POST["message"];


    $errorEmpty = false;
   $errorEmail = false;
   $errorPhone = false;
   $errorName = false;
   $errorLast = false;
   $errorPassword = false;
    
   require_once  'dbh.inc.php';
   require_once 'function.inc.php';

   if(emptyInputContact($name,  $phone, $email,  $message) !== false){
    echo"<span class='form-error'>Completa todos los campos</span><br>";
    $errorEmpty=true;
    
    
   }
   if(invalidfirstName($name) !== false){
    echo"<span class='form-error'>El campo de nombre no puede tener números ni signos de puntuación</span><br>";
    $errorName=true;
    
   }
   
   if(invalidPhone($phone) !== false){
    echo"<span class='form-error'>El campo del celular no puede tener letras ni signos de puntuación</span><br>";
    $errorPhone=true;
    
   }
   if(invalidEmail($email) !== false){
    echo"<span class='form-error'>El mail escrito es invalido</span><br>";
    $errorEmail=true;
    
   }

   ?>
   <script>
 var errorEmpty = "<?php echo $errorEmpty; ?>";
var errorEmail = "<?php echo $errorEmail; ?>";
var errorPhone = "<?php echo $errorPhone; ?>";
var errorName = "<?php echo $errorName; ?>";



if (errorEmpty == true){
   $("#form-name, #form-phone, #form-email, #form-message").addClass("input-error");
   
 }else{
   $("#form-name, #form-lastname, #phone-code, #form-email, #password, #password-code").removeClass("input-error");
 }
if (errorEmail == true){
   $("#form-email").addClass("input-error");   
}else{
   $("#form-email").removeClass("input-error");
 }
if (errorPhone == true){
   $("#form-phone").addClass("input-error");
}else{
   $("#form-phone").removeClass("input-error");
 }
if (errorName == true){
   $("#form-name").addClass("input-error");
}else{
   $("#form-name").removeClass("input-error");
 }



</script>

<?php

  if($errorEmpty == true || $errorEmail == true ||  $errorPhone == true || $errorName == true || $errorLast == true || $errorPassword == true  ){ exit();}


        $to = "solucioneshogar.mkt@gmail.com";

        $subject = "Mensaje de contacto desde pagina web de Soluciones";

        $mailMessage = "<p>Nombre:" .$name. "</p>";
        $mailMessage .= "<p>Telefono: ".$phone."</p>";
        $mailMessage .= "<p>Email: ".$email."</p>";
        $mailMessage .= "<p>Mensaje: ".$message."</p>";
        

        $headers = "From:  ".$email."\r\n";
        $headers .= "Content-type: text/html\r\n";

        $sended = mail($to, $subject, $mailMessage, $headers);

        if(!$sended){
            echo "<span class='form-error'>Hubo un error en el envio, intentelo de nuevo o comuniquese al 5789-1800</span><br>";
        }else{
            echo "<span class='form-mailenviado'>Mensaje enviado, muchas gracias</span><br>";
        }
       
         
        
          
       
        
    
        exit();

    
       
}else{
        header("location:../index.php?conexion-error");
        
}
