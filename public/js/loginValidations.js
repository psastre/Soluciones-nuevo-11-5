
$(document).ready(function(){
    $("#login-form").submit(function(event){
        event.preventDefault();
        
        var email = $("#login_email").val();
        var pwd = $("#login_password").val();
        var submit= $("#form-login").val();
       
        

       
        $(".login-form-message").load("backend/login.inc.php", {
            email:email,
            pwd:pwd,
            submit:submit
          
        })
    })
}
)
