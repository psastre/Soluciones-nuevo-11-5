
$(document).ready(function(){
    $("#contact-form").submit(function(event){
        event.preventDefault();
        
        var name = $("#form-name").val();
        var phone = $("#form-phone").val();
        var email= $("#form-email").val();
        var message= $("#form-message").val();
        var submit= $("#form-submit").val();
       
        

       
        $(".contact-form-message").load("backend/contactForm.php", {
            name:name,
            phone:phone,
            email:email,
            message:message,
            submit:submit
          
        })
    })
}
)
