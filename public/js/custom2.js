function localStorageFunc(){
   console.log(document.querySelector('#descripcionServicio'))
   console.log(document.querySelector('.detallePedido').value )
  localStorage.setItem(
   document.querySelector('#descripcionServicio'), 
   document.querySelector('.detallePedido').value )
}

localStorageFunction();



$(window).on('load', function () {
   $('#tranquilidad-home').hide();
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
      document.querySelector('#descripcionServicio').textContent = datalistValue.value;
      console.log(datalistValue)
      $('#pruebaPopup').modal('show');
   });
   $('.popupLogic').click(function(){
      document.querySelector('#descripcionServicio').textContent = this.dataset.type
      $('#pruebaPopup').modal('show');
   });
   $(".closePopupButton").click(function(){
     $('#pruebaPopup').modal('hide');
  });

  //
  $(".btndif").click(function(){
   $('.btndifer').hide();
});

  $(".nosocioBtndif").click(function(){
   
   $('#myModal').modal('show');
  
  
   $('.contratarServicio').href="index.html"; 
});
  $(".socioBtndif").click(function(){ 
   document.querySelector(".contratarServicio").href="quienes-somos.html"; 
});

  

    

});

