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
  var name = "Juan"
  var surname = "Perez"
  document.getElementById("userTitle").innerHTML= name + " " + surname;
  document.getElementById("userPageTitle").innerHTML= name + " " + surname + " - Soluciones Hogar";
  document.getElementsByName('Email')[0].placeholder='new text for email';
}
