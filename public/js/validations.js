$(document).ready(function(){
    $("form").submit(function(event){
        event.preventDefault();
        var name = $("#form-name").val();
        var lastname = $("#form-lastname").val();
        var phone = $("#phone-code").val();
        var email = $("#form-email").val();
        var password= $("#password").val();
        var passwordRepeat= $("#password-code").val();
        var rubro= $("#rubro").val();
        var detalle= $("#detalle").val();
        var submit= $("#form-submit").val();
        $("#form-message").load("backend/signup.inc.php", {
            name:name,
            lastname:lastname,
            phone:phone,
            email:email,
            password:password,
            passwordRepeat:passwordRepeat,
            rubro:rubro,
            detalle:detalle,
            submit:submit


 
        })
    })
}
)