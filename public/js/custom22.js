
$(window).on('load', function () {
   $('#tranquilidad-home').hide();
   $('#myModal').modal('show');
  //IMG Home



   

   
  const funcionamientoTimeOut1 =  setTimeout(function(){
   $('#servicio-home').hide();
   $('#confianza-home').show();
   $('#transparencia-home').hide();
   $('#tranquilidad-home').hide();
   document.querySelector('.tabs-list :nth-child(1)').classList.remove("active_motion");
   document.querySelector('.tabs-list :nth-child(2)').classList.add("active_motion");
   document.querySelector('.tabs-list :nth-child(1)').classList.remove("active");
   document.querySelector('.tabs-list :nth-child(2)').classList.add("active");
   document.querySelector('#variedad').classList.toggle("active");
   document.querySelector('#variedad').classList.toggle("in");
   document.querySelector('#confianza').classList.toggle("active");
   document.querySelector('#confianza').classList.toggle("in");
}, 5000);

const funcionamientoTimeOut2 = setTimeout(function(){
   $('#servicio-home').hide();
   $('#confianza-home').hide();
   $('#transparencia-home').show();
   $('#tranquilidad-home').hide();
   document.querySelector('.tabs-list :nth-child(2)').classList.toggle("active_motion");
   document.querySelector('.tabs-list :nth-child(3)').classList.toggle("active_motion");
   document.querySelector('.tabs-list :nth-child(2)').classList.toggle("active");
   document.querySelector('.tabs-list :nth-child(3)').classList.toggle("active");
   document.querySelector('#confianza').classList.toggle("active");
   document.querySelector('#confianza').classList.toggle("in");
   document.querySelector('#transparencia').classList.toggle("active");
   document.querySelector('#transparencia').classList.toggle("in");
}, 10000);
const funcionamientoTimeOut3 = setTimeout(function(){
   $('#servicio-home').hide();
   $('#confianza-home').hide();
   $('#transparencia-home').hide();
   $('#tranquilidad-home').show();
   document.querySelector('.tabs-list :nth-child(3)').classList.toggle("active_motion");
   document.querySelector('.tabs-list :nth-child(4)').classList.toggle("active_motion");
   document.querySelector('.tabs-list :nth-child(3)').classList.toggle("active");
   document.querySelector('.tabs-list :nth-child(4)').classList.toggle("active");
   document.querySelector('#transparencia').classList.toggle("active");
   document.querySelector('#transparencia').classList.toggle("in");
   document.querySelector('#tranquilidad').classList.toggle("active");
   document.querySelector('#tranquilidad').classList.toggle("in");
}, 15000);






  $("#servicio-home-btn").click(function(){
   clearTimeout(funcionamientoTimeOut1);
   clearTimeout(funcionamientoTimeOut2);
   clearTimeout(funcionamientoTimeOut3);

   
   
  
     $('#servicio-home').show();
     $('#confianza-home').hide();
     $('#transparencia-home').hide();
     $('#tranquilidad-home').hide();
     document.querySelector('.tabs-list :nth-child(1)').classList.remove("active_motion");
     document.querySelector('.tabs-list :nth-child(2)').classList.remove("active_motion");
     document.querySelector('.tabs-list :nth-child(3)').classList.remove("active_motion");
     document.querySelector('.tabs-list :nth-child(4)').classList.remove("active_motion");
     
  });

  $("#confianza-home-btn").click(function(){
   clearTimeout(funcionamientoTimeOut1);
   clearTimeout(funcionamientoTimeOut2);
   clearTimeout(funcionamientoTimeOut3);

   
 
     $('#servicio-home').hide();
     $('#confianza-home').show();
     $('#transparencia-home').hide();
     $('#tranquilidad-home').hide();
     document.querySelector('.tabs-list :nth-child(1)').classList.remove("active_motion");
     document.querySelector('.tabs-list :nth-child(2)').classList.remove("active_motion");
     document.querySelector('.tabs-list :nth-child(3)').classList.remove("active_motion");
     document.querySelector('.tabs-list :nth-child(4)').classList.remove("active_motion");

  });

  $("#transparencia-home-btn").click(function(){
   clearTimeout(funcionamientoTimeOut1);
   clearTimeout(funcionamientoTimeOut2);
   clearTimeout(funcionamientoTimeOut3);

     $('#servicio-home').hide();
     $('#confianza-home').hide();
     $('#transparencia-home').show();
     $('#tranquilidad-home').hide();

     document.querySelector('.tabs-list :nth-child(1)').classList.remove("active_motion");
     document.querySelector('.tabs-list :nth-child(2)').classList.remove("active_motion");
     document.querySelector('.tabs-list :nth-child(3)').classList.remove("active_motion");
     document.querySelector('.tabs-list :nth-child(4)').classList.remove("active_motion");
  });
  $("#tranquilidad-home-btn").click(function(){
   clearTimeout(funcionamientoTimeOut1);
   clearTimeout(funcionamientoTimeOut2);
   clearTimeout(funcionamientoTimeOut3);
  
   $('#servicio-home').hide();
   $('#confianza-home').hide();
   $('#transparencia-home').hide();
   $('#tranquilidad-home').show();

   document.querySelector('.tabs-list :nth-child(1)').classList.remove("active_motion");
     document.querySelector('.tabs-list :nth-child(2)').classList.remove("active_motion");
     document.querySelector('.tabs-list :nth-child(3)').classList.remove("active_motion");
     document.querySelector('.tabs-list :nth-child(4)').classList.remove("active_motion");
});


  $("#general-btn").click(function(){
    $('#mis-pedidos-btn').removeClass('active');
    $('#general-btn').addClass('active');
    $('#datos-de-facturacion-btn').removeClass('active');
     $('#datosDeFacuracionSpace').hide();
     $('#misPedidosSpace').hide();
     $('#generalSpace').show();
     $('.privacidad-section').show();
  });

  $("#mis-pedidos-btn").click(function(){
    $('#mis-pedidos-btn').addClass('active');
    $('#general-btn').removeClass('active');
    $('#datos-de-facturacion-btn').removeClass('active');
     $('#datosDeFacuracionSpace').hide();
     $('#misPedidosSpace').show();
     $('#generalSpace').hide();
     $('.privacidad-section').hide();

  });

  $("#datos-de-facturacion-btn").click(function(){
    $('#mis-pedidos-btn').removeClass('active');
    $('#general-btn').removeClass('active');
    $('#datos-de-facturacion-btn').addClass('active');
     $('#datosDeFacuracionSpace').show();
     $('#misPedidosSpace').hide();
     $('#generalSpace').hide();
  });



    

   

   //POPUP LOGIc
   
   $('.popupLogicDatalist').click(function(){
    //  document.querySelector('#descripcionServicio').textContent = datalistValue.value;
      let rubrosCompleto = ["Electricista", "Carpintería", "Plomería", "Albañileria","Cerrajería" ,"Empapelado" , "Gasista","Herrería" ,"Jardinería" ,"Lustrado de muebles" ,"Persiana" ,"Pintura" ,"Pulido y plastificado" ,"Destapación", "Televisión","Lavarropa" ,"Heladera" ,"Aire acondicionado" ,"Tapicería" ,"Computación" ,"Enlozado", "Toldos","Limpieza de alfombras" ,"Fumigación", "Cocina", "Varios" ]
      console.log(datalistValue.value)
      if(rubrosCompleto.includes(datalistValue.value)){
         document.querySelector('#rubroSeleccionado').value=datalistValue.value;
         document.querySelector(".imgServicioBox").src=`img/${datalistValue.value}.jpg`;
      $('#pruebaPopup').modal('show');
         
      }else{
         document.querySelector('.error-busqueda').style.display = "block"
   }
   });
   $('.popupLogic').click(function(){
      
    //  document.querySelector('#descripcionServicio').textContent = this.dataset.type
      document.querySelector('#rubroSeleccionado').value= this.querySelector(':scope > .rubro_logica_js').dataset.type;
      document.querySelector(".imgServicioBox").src=`img/${this.dataset.type}.jpg`;
      $('#pruebaPopup').modal('show');
   });
   $(".closePopupButton").click(function(){
     $('#pruebaPopup').modal('hide');
     $('#myModal2').modal('hide');
  });
  
   $(".closeSocioNoReg").click(function(){
    
     $('.btndifer').modal('show');
     $('.modal-backdrop').css("display", "none");
     
     
  });

  //
  $(".btndif").click(function(){
   $('.btndifer').hide();
});

  $(".nosocioBtndif").click(function(){
   
  /* $('#myModal').modal('show');*/
  
  
   $('.contratarServicio').href="contratar.php"; 
});
  $(".socioBtndif").click(function(){
  $('.modal-backdrop').css("display", "none");
   $('#myModal2').modal('show');
  
  
   $('.contratarServicio').href="index.html"; 
});
  $(".password_forgot").click(function(){
  $('.modal-backdrop').css("display", "none");
   $('#myModal2').modal('show');
  
  
   $('.contratarServicio').href="index.html"; 
});
  

 $("#general-btn").click(function(){
  $('#general-btn').classList.remove(active);
   $('#mis-pedidos-btn').classList.add(active);
 
});
 $(".closebutton_popup_notice").click(function(){
  $('.complete_popup_notice').css("display", "none");
   
});


$(".consulta_general").click(function(){  
   $('.popup_consulta').modal('show');
  });
$(".close_popup_privacidad_button").click(function(){  
   $('.popup_consulta').modal('hide');
  });


$(".solicitud_cambio_info").click(function(){ 
   $('.popup_cambio_info').modal('show');
  });
  $(".close_popup_privacidad_button").click(function(){  
    $('.popup_cambio_info').modal('hide');
   });
  
$(".solicitud_baja").click(function(){  
   $('.popup_baja').modal('show');
  });
  $(".close_popup_privacidad_button").click(function(){  
    $('.popup_baja').modal('hide');
   });
  

   const listadoHistorial = document.querySelectorAll('.historicoPedidos')
  
   /*document.querySelectorAll('.columna_flecha').forEach(function(el) {
    
     el.addEventListener('click', () => {
       console.log("hola");
      console.log(this)
       this.parentElement.classList.toggle = "historicoPedidosAbierto";
      
     });
   })*/

   const flechas = document.querySelectorAll('.columna_flecha');

// recorre todos los elementos con la clase "columna_flecha" y agrega el evento de clic
flechas.forEach(flecha => {
  flecha.addEventListener('click', () => {
    // obtén el elemento padre del elemento con la clase "columna_flecha"
    const historicoPedidos = flecha.parentNode;

    // agrega o quita la clase "historicoPedidosAbierto" en el elemento padre
    historicoPedidos.classList.toggle('historicoPedidosAbierto');
  });
});
   
   function prueba(){
   console.log("jola")
   }
   prueba()
   
   console.log("jolasdad")

});

function togglePassword() {
   var password = document.querySelector("#password");
   var passwordConfirm = document.querySelector("#password-code");
   if (password.type === "password") {
     password.type = "text";
     passwordConfirm.type = "text";
   } else {
     password.type = "password";
     passwordConfirm.type = "password";
   }
 }

 //animacion de Funcionamiento en Home

 const mediaQuery = window.matchMedia('(max-width: 768px)');

 const funcionamiento1 = document.querySelector('.funcionamiento_paso.paso_uno');
 const funcionamiento2 = document.querySelector('.funcionamiento_paso.paso_dos');
 const funcionamiento3 = document.querySelector('.funcionamiento_paso.paso_tres');
 const funcionamiento4 = document.querySelector('.funcionamiento_paso.paso_cuatro');
 const funcionamientoAll = document.querySelectorAll('.funcionamiento_paso');

 funcionamientoAll.forEach(elem => {elem.addEventListener("click", function(){
   if (mediaQuery.matches) {
      
      funcionamiento1.classList.remove('funcionamiento_start_open');
      
    }
   })})

 funcionamiento1.addEventListener("click", function(){
   if (mediaQuery.matches) {
      funcionamiento1.classList.add('funcionamiento_open');
      funcionamiento2.classList.remove('funcionamiento_open');
      funcionamiento3.classList.remove('funcionamiento_open');
      funcionamiento4.classList.remove('funcionamiento_open');
    }
   })
 funcionamiento2.addEventListener("click", function(){
   if (mediaQuery.matches) {
      funcionamiento2.classList.add('funcionamiento_open');
      funcionamiento1.classList.remove('funcionamiento_open');
      funcionamiento3.classList.remove('funcionamiento_open');
      funcionamiento4.classList.remove('funcionamiento_open');
    }
   })
 funcionamiento3.addEventListener("click", function(){
   if (mediaQuery.matches) {
      funcionamiento3.classList.add('funcionamiento_open');
      funcionamiento1.classList.remove('funcionamiento_open');
      funcionamiento2.classList.remove('funcionamiento_open');
      funcionamiento4.classList.remove('funcionamiento_open');
    }
   })
 funcionamiento4.addEventListener("click", function(){
   if (mediaQuery.matches) {
      funcionamiento4.classList.add('funcionamiento_open');
      funcionamiento1.classList.remove('funcionamiento_open');
      funcionamiento3.classList.remove('funcionamiento_open');
      funcionamiento2.classList.remove('funcionamiento_open');
    }
   })
   

  
   