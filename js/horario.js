var id_horario;
var flag;//bandera para saber si entro al each de id_impresion
var flag2;//bandera para saber si no hay 2 con 3


//  parseFloat(item.valor).toFixed(2)





$.post(baseurl+"controlador/listarHorarios",
  function (data){         
      var c = JSON.parse(data);
      $.each(c, function(i,item){
      $('#tblHorarios').append(
        '<tr class="filaHorario" onClick="pulsar(this)">'+
            '<td style="text-align: center;"><div class="id_horario1" id="'+item.id_horario+'"></div>'+item.id_horario+'</td>'+
            '<td style="text-align: center;"><div class="desde1" id="'+item.desde+'"></div>'+item.desde+'</td>'+
            '<td style="text-align: center;"><div class="hasta1" id="'+item.hasta+'"></div>'+item.hasta+'</td>'+
            '<td style="text-align: center;"><a href="#" class="btn btn-block btn-primary btn-sm" style="width: 100%;" data-toggle="modal" data-target="#modalModifHorario" onClick="selHorario(\''+item.id_horario+'\',\''+item.desde+'\',\''+item.hasta+'\');">Editar<i class="fa fa-fw fa-edit"></i></a></td>'+  
        '</tr>'
        );
      }); 


        $('#tblHorarios tbody').on( 'click', 'tr', function () {
            if ( $(this).hasClass('selected') ) {
            }
            else {          
               id_horario = $(this).find("td:eq(0)").text();
               //alert(id_horario);
               $('#btnQuitarHorario').attr('disabled', false);

            }
        });    


});






selHorario = function($id_horario, $desde, $hasta){
  $('#mtxtIdHorario1').val($id_horario);
  $('#mtxtDesde1').val($desde);
  $('#mtxtHasta1').val($hasta);
  
};






$('#btnAgregarHorario').click(function(){

    id_horario = 1;
    flag = false;//bandera para saber si entro al each de id_impresion
    flag2 = false;//bandera para saber si no hay 2 con 3
    //$('#mtxtIdTipoImpresion').val(id_impresion.toString());

          $.post(baseurl+"controlador/listarHorarios",              
              function(data){
              var j = JSON.parse(data);              
              $.each(j, function(i,item){  
              flag = true;

              if ((id_horario != parseInt(item.id_horario)) && (!flag2)){               
                $('#mtxtIdHorario').val(id_horario.toString());              
                flag2 = true;
              }

              if (!flag2){
                id_horario = id_horario + 1;
              }                          
              });

              if (!flag) {
                $('#mtxtIdHorario').val(id_horario.toString());
              }
              else{
                if (!flag2) {
                  $('#mtxtIdHorario').val(id_horario.toString());
                }
              }
              
          });

    $('#mtxtIdHorario').val("");
    $('#mtxtDesde').val("");
    $('#mtxtHasta').val("");

});





$('#mbtnGuardarHorario').click(function(){

    id_horario = $('#mtxtIdHorario').val();
    var desde = $('#mtxtDesde').val();
    var hasta = $('#mtxtHasta').val();
    
  
    $.post(baseurl+"controlador/registrarHorario",
         {
           id_horario:id_horario,
           desde:desde,
           hasta:hasta
          },
          function(data){          
            $('#mbtnCerrarModalHorario').click();
            $('#mbtnConfirmacionHorario').click();
            $('#estadoHorario').append('<h4 style="text-align: center;" class="confirmarHorario" id="msjConfirmacionHorario">Horario registrado correctamente.</h4>');                     
         
    });  

});








$('#mbtnGuardarModifHorario').click(function(){

    id_impresion = $('#mtxtIdHorario1').val();
    var desde = $('#mtxtDesde1').val();
    var hasta = $('#mtxtHasta1').val();
    
  
    $.post(baseurl+"controlador/actualizarHorario",
         {
           id_horario:id_horario,
           desde:desde,
           hasta:hasta
          },
          function(data){          
            $('#mbtnCerrarModalModifHorar').click();
            $('#mbtnConfirmacionHorario').click();
            $('#estadoHorario').append('<h4 style="text-align: center;" class="confirmarHorario" id="msjConfirmacionHorario">Horario modificado correctamente.</h4>');                     
         
    });  

});








$('#mbtnModalConf').click(function(){

      $('#tblHorarios').html(
        '<tr>'+
        '  <th style="width: 2%; height: 39px;  background-color: #006699; color: white; text-align: center;">Id Horario</th>'+
        '  <th style="width: 10%; background-color: #006699; color: white; text-align: center;">Desde</th>'+          ///////////////////// ACCCAAA SE LIMPIAAAA RESETEA TABLA
        '  <th style="width: 10%; background-color: #006699; color: white; text-align: center;">Hasta</th>'+
        '  <th style="width: 5%; background-color: #006699; color: white; text-align: center;">Modificar</th>'+
        '</tr>'
      );

  $('#btnQuitarHorario').attr('disabled', true);

  $.post(baseurl+"controlador/listarHorarios",
  function (data){         
      var c = JSON.parse(data);
      $.each(c, function(i,item){
      $('#tblHorarios').append(
        '<tr class="filaHorario" onClick="pulsar(this)">'+
            '<td style="text-align: center;"><div class="id_horario1" id="'+item.id_horario+'"></div>'+item.id_horario+'</td>'+
            '<td style="text-align: center;"><div class="desde1" id="'+item.desde+'"></div>'+item.desde+'</td>'+
            '<td style="text-align: center;"><div class="hasta1" id="'+item.hasta+'"></div>'+item.hasta+'</td>'+
            '<td style="text-align: center;"><a href="#" class="btn btn-block btn-primary btn-sm" style="width: 100%;" data-toggle="modal" data-target="#modalModifHorario" onClick="selHorario(\''+item.id_horario+'\',\''+item.desde+'\',\''+item.hasta+'\');">Editar<i class="fa fa-fw fa-edit"></i></a></td>'+  
        '</tr>'
        );
      });  


        $('#tblHorarios tbody').on( 'click', 'tr', function () {

            if ( $(this).hasClass('selected') ) {
  
            }
            else {          
               id_horario = $(this).find("td:eq(0)").text();
               //alert(id_impresion);
               $('#btnQuitarHorario').attr('disabled', false);

            }

        });   

  });

});





$('#modalConfirmacionHorario').on('hidden.bs.modal', function(){
 
  $('.confirmarHorario').remove();  

});





$('#btnQuitarHorario').click(function(){
    $('#mQuitarHorario').click();      
});





$('#mbtnQuitarHorario').click(function(){
  //alert(id_impresion);
    $.post(baseurl+"controlador/quitarHorario",
         {
           id_horario:id_horario
          },
          function(data){          
            $('#mbtnCerrarModalQuitarHorario').click();
            $('#mbtnConfirmacionHorario').click();
            $('#estadoHorario').append('<h4 style="text-align: center;" class="confirmarHorario" id="msjConfirmacionHorario">Horario eliminado correctamente.</h4>');                     
         
    }); 
      
});
