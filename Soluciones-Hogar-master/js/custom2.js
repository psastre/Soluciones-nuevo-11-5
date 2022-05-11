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



    $('#myModal').modal('show');

    //Electricidad
    $("#electricidad").click(function(){
       $('#subCategoriaPopup').modal('show');
    });

    $("#btnElectricidadToma").click(function(){
       $('#subCategoriaPopup').modal('show');
       $('#popupElectricidad').modal('hide');

       $('.tituloServicio').text("Cambio / Instalación de tomacorrientes");
       $('.imgSubcategoria').attr("src","img/toma.jpg");
    });

    //Albañilería
    $("#plomeria").click(function(){
       $('#popupPlomeria').modal('show');
    });

    //Gas
    $("#gas").click(function(){
       $('#popupGas').modal('show');
    });

    //Carpintería
    $("#carpinteria").click(function(){
       $('#popupCarpineria').modal('show');
    });

    //Pintura
    $("#pintura").click(function(){
       $('#popupPintura').modal('show');
    });

    //Persiana
    $("#persiana").click(function(){
       $('#popupPersiana').modal('show');
    });

    //Persiana
    $("#cerrajeria").click(function(){
       $('#popupCerrajeria').modal('show');
    });

    //Aire
    $("#aireacondicionado").click(function(){
       $('#popupAire').modal('show');
    });

    //Cerrajería
    $("#cerrajeria").click(function(){
       $('#popupCerrajeria').show();
    });
    $('#popupCerrajeria').click(function(){
        $('#popupCerrajeria').hide();
    });

    //Pintura
    $("#pintura").click(function(){
       $('#popupPintura').show();
    });
    $('#popupPintura').click(function(){
        $('#popupPintura').hide();
    });

    //Vidrios
    $("#vidrios").click(function(){
       $('#popupVidrios').show();
    });
    $('#popupVidrios').click(function(){
        $('#popupVidrios').hide();
    });

    //Cortinas de enrollar
    $("#cortinas").click(function(){
       $('#popupCortinas').show();
    });
    $('#popupCortinas').click(function(){
        $('#popupCortinas').hide();
    });

    //Cortinas
    $("#cortinas").click(function(){
       $('#popupCortinas').show();
    });
    $('#popupCortinas').click(function(){
        $('#popupCortinas').hide();
    });

    //Destapaciones
    $("#destapaciones").click(function(){
       $('#popupDestapaciones').show();
    });
    $('#popupDestapaciones').click(function(){
        $('#popupDestapaciones').hide();
    });

    //Empapelado
    $("#empapelado").click(function(){
       $('#popupEmpapelado').show();
    });
    $('#popupEmpapelado').click(function(){
        $('#popupEmpapelado').hide();
    });

    //Restauraciones
    $("#restauraciones").click(function(){
       $('#popupRestauraciones').show();
    });
    $('#popupRestauraciones').click(function(){
        $('#popupRestauraciones').hide();
    });

    //Gas
    $("#gas").click(function(){
       $('#popupGas').show();
    });
    $('#popupGas').click(function(){
        $('#popupGas').hide();
    });

    //Aire acondicionado
    $("#aire").click(function(){
       $('#popupAire').show();
    });
    $('#popupAire').click(function(){
        $('#popupAire').hide();
    });

    //TV
    $("#tv").click(function(){
       $('#popupTV').show();
    });
    $('#popupTV').click(function(){
        $('#popupTV').hide();
    });

    //Lavarropas
    $("#lavarropas").click(function(){
       $('#popupLavarropas').show();
    });
    $('#popupLavarropas').click(function(){
        $('#popupLavarropas').hide();
    });

    //PC
    $("#pc").click(function(){
       $('#popuppc').show();
    });
    $('#popuppc').click(function(){
        $('#popuppc').hide();
    });

    //maquinacoser
    $("#maquinacoser").click(function(){
       $('#popupmaquinacoser').show();
    });
    $('#popupmaquinacoser').click(function(){
        $('#popupmaquinacoser').hide();
    });

    //Jardinería
    $("#jardineria").click(function(){
       $('#popupJardineria').show();
    });
    $('#popupJardineria').click(function(){
        $('#popupJardineria').hide();
    });

    //Calefacción
    $("#calefaccion").click(function(){
       $('#popupCalefaccion').show();
    });
    $('#popupCalefaccion').click(function(){
        $('#popupCalefaccion').hide();
    });

    //alfombra
    $("#alfombra").click(function(){
       $('#popupAlfombra').show();
    });
    $('#popupAlfombra').click(function(){
        $('#popupAlfombra').hide();
    });

    //Plaguicidas
    $("#plaguicidas").click(function(){
       $('#popupPlaguicidas').show();
    });
    $('#popupPlaguicidas').click(function(){
        $('#popupPlaguicidas').hide();
    });

    //Pulido
    $("#pulido").click(function(){
       $('#popupPulido').show();
    });
    $('#popupPulido').click(function(){
        $('#popupPulido').hide();
    });
});
