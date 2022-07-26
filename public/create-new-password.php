<?php
    $selector = $_GET["selector"];
    $validator = $_GET["validator"];

    if(empty($selector) || empty($validator)){
        echo "No puidimos validar tu remplazo de contrasena";
    }else{
        if(ctype_xdigit($selector) !== false && ctype_xdigit($validator) !==false){
    
?>


    <form action="backend/reset-password.inc.php" method="post">
        <input type="hidden" name="selector" value="<?php echo $selector ?>">
        <input type="hidden" name="validator" value="<?php echo $validator ?>">
        <input type="password" name="pwd" placeholder="NUeva contrase;a">
        <input type="password"name="pwd-repeat" placeholder="Repetir contrase;a">
        <button type="submit" name="reset-password-submit">Reset password</button>
    </form>

<?php
}
    }
?>
