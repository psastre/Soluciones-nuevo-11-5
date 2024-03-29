  <?php

if(isset($_POST["submit"])){
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);

    $url = "https://www.solucioneshogar.com/nueva_plat_edit/public/create-new-password.php?selector=" . $selector . "&validator=" . bin2hex($token);

    $expires = date("U") + 1800;

    require_once  'dbh.inc.php';
    require_once  'function.inc.php';

    $userEmail=($_POST["email"]);

    $errorEmail = false;

    //VALIDACIONES

    if(invalidEmail($userEmail) !== false){
        echo"<span class='form-error'>El mail escrito es invalido</span><br>";
        $errorEmail = true;
        exit();
        
       }
    if(emailExists($conn, $userEmail) === false){
        echo"<span class='form-error'>El mail escrito no esta registrado</span>";
        $errorEmail = true;
        exit();
       }

     //VALIDACIONES
    $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?;";
    
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "There was an error!";
        exit();
    }else{
        mysqli_stmt_bind_param($stmt, "s", $userEmail);
        mysqli_stmt_execute($stmt);
    }

    $sql = "INSERT INTO pwdReset(pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires ) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "There was an error!";
        exit();
    }else{
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
        mysqli_stmt_execute($stmt);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    $to = $userEmail;

    $subject = "Reestablecer mi contraseña";

    $message = "<p>Hemos recibido el pedido de reestablecer la contraseña del usuario asociado a su mail. El siguiente link lo llevara a la pagina para reestablecer su contraseña </p>";
    $message .= "<p> Este es el link: </p>";
    $message .= '<a href="' .$url . '">' . $url . '</a></p>';

    $headers = "From: soluciones <solucioneshogar.mkt@gmail.com>\r\n";
    $headers .= "Reply-To: solucioneshogar.mkt@gmail.com\r\n";
    $headers .= "Content-type: text/html\r\n";

    mail($to, $subject, $message, $headers);

    ?>
    <script>
      var errorEmail = "<?php echo $errorEmail; ?>";
      if (errorEmail == false  ){
        window.location.href = "http://localhost/Soluciones-firebase/public/index.php?reset=sended";
      }
    </script>
   <?php

    

}else{
    header("Location: ../index.php");
}