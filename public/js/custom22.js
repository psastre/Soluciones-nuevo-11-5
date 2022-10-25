$(window).on('load', function () {
   $('#tranquilidad-home').hide();
   $('#myModal').modal('show');
  //IMG Home
  $("#servicio-home-btn").click(function(){
     $('#servicio-home').show();
     $('#confianza-home').hide();
     $('#transparencia-home').hide();
     $('#tranquilidad-home').hide();
     
  });

  $("#confianza-home-btn").click(function(){
     $('#servicio-home').hide();
     $('#confianza-home').show();
     $('#transparencia-home').hide();
     $('#tranquilidad-home').hide();
  });

  $("#transparencia-home-btn").click(function(){
     $('#servicio-home').hide();
     $('#confianza-home').hide();
     $('#transparencia-home').show();
     $('#tranquilidad-home').hide();
  });
  $("#tranquilidad-home-btn").click(function(){
   $('#servicio-home').hide();
   $('#confianza-home').hide();
   $('#transparencia-home').hide();
   $('#tranquilidad-home').show();
});

  $("#general-btn").click(function(){
    $('#mis-pedidos-btn').removeClass('active');
    $('#general-btn').addClass('active');
    $('#datos-de-facturacion-btn').removeClass('active');
     $('#datosDeFacuracionSpace').hide();
     $('#misPedidosSpace').hide();
     $('#generalSpace').show();
  });

  $("#mis-pedidos-btn").click(function(){
    $('#mis-pedidos-btn').addClass('active');
    $('#general-btn').removeClass('active');
    $('#datos-de-facturacion-btn').removeClass('active');
     $('#datosDeFacuracionSpace').hide();
     $('#misPedidosSpace').show();
     $('#generalSpace').hide();
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
      let rubrosCompleto = ["Electricista", "Carpintería", "Plomería", "Albañileria","Cerrajería" ,"Empapelado" , "Gasista","Herrería" ,"Jardinería" ,"Lustrado de muebles" ,"Persiana" ,"Pintura" ,"Pulido y plastificado" ,"Destapación", "Televisión","Lavarropa" ,"Heladera" ,"Aire acondicionado" ,"Tapicería" ,"Computación" ,"Enlozado", "Toldos","Limpieza de alfombras" ,"Fumigación", "Cocina" ]
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
      document.querySelector('#rubroSeleccionado').value= this.dataset.type;
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
  

 $("#general-btn").click(function(){
  $('#general-btn').classList.remove(active);
   $('#mis-pedidos-btn').classList.add(active);
  
  
  
});
  

    

});
