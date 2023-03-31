function myFunction() {
    var x = document.getElementById("logIn");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function contrasenaEnviada() {
    document.getElementById('recuperar-pass').style.display = "none";
    document.getElementById('pass-enviada').style.display = "block";
 }

function userTitle() {
  
  document.getElementsByName('Email')[0].placeholder='new text for email';
}


const cellphone = document.querySelector('#section1R :nth-child(2)');

gsap.to(cellphone , {
    scrollTrigger:{
        trigger: cellphone,
        start: "top 800px",
        end:"top 100px",
        
    },
    y:-50,
    ease:"easeOut",
    duration:2
    
});
