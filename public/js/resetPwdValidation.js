$(document).ready(function(){
    $("#resetpwd-form").submit(function(event){
        event.preventDefault();
        
        var email= $("#resetpwd-email").val();
        var submit= $("#resetpwd-submit").val();
        $(".resetpwd-form-message").load("backend/reset-request.inc.php", {
            email:email,
            submit:submit


 
        })
    })
}
)
