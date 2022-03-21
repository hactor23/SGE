var id_periferico;
var flag;//bandera para saber si entro al each de id_impresion
var flag2;//bandera para saber si no hay 2 con 3


//  parseFloat(item.valor).toFixed(2)


selCambio = function($id_periferico){
  //alert($id_periferico);
  $('#cboEstado option:selected').each(function(){
    //alert($('#cboEstado').val());       
    $.post(baseurl+"controlador/actualizarPeriferico2",{      
      id_periferico:$id_periferico,
      estado_periferico:$('#cboEstado').val()
    },
    function (data){  
      $('#mbtnModalConf').click();
    }); 
  });
};





$.post(baseurl+"controlador/listarPerifericos",
  function (data){  
      var c = JSON.parse(data);
      $.each(c, function(i,item){

      if (item.estado_periferico == 0){
        $('#tblPerifericos').append(
        '<tr class="filaPeriferico" onClick="pulsar(this)">'+
            '<td style="text-align: center;"><div class="id_Periferico1" id="'+item.id_periferico+'"></div>'+item.id_periferico+'</td>'+
            '<td style="text-align: center;"><div class="nom_periferico1" id="'+item.nom_periferico+'"></div>'+item.nom_periferico+'</td>'+         
            '<td style="text-align: center;"><span id="estado1" name="estado1" class="label label-danger">NO DISPONIBLE</span></td>'+    
            //'<td style="text-align: center;"><span class="label label-success">DISPONIBLE</span></td>'+
            '<td style="text-align: center;"><a href="#" class="btn btn-block btn-success btn-sm" style="width: 100%;" data-toggle="modal" data-target="#modalModifDescripcion" onClick="selDescripcion(\''+item.id_periferico+'\',\''+item.desc_periferico+'\');">Ver</a></td>'+  
            '<td style="text-align: center;"><a href="#" class="btn btn-block btn-primary btn-sm" style="width: 100%;" data-toggle="modal" data-target="#modalModifPeriferico" onClick="selPeriferico(\''+item.id_periferico+'\',\''+item.nom_periferico+'\',\''+item.desc_periferico+'\',\''+item.estado_periferico+'\');">Editar<i class="fa fa-fw fa-edit"></i></a></td>'+  
        '</tr>'
        );
      }
      else{
        $('#tblPerifericos').append(
        '<tr class="filaPeriferico" onClick="pulsar(this)">'+
            '<td style="text-align: center;"><div class="id_Periferico1" id="'+item.id_periferico+'"></div>'+item.id_periferico+'</td>'+
            '<td style="text-align: center;"><div class="nom_periferico1" id="'+item.nom_periferico+'"></div>'+item.nom_periferico+'</td>'+
            '<td style="text-align: center;"><span id="estado1" name="estado1" class="label label-success">DISPONIBLE</span></td>'+
            //'<td style="text-align: center;"><span class="label label-danger">NO DISPONIBLE</span></td>'+
            '<td style="text-align: center;"><a href="#" class="btn btn-block btn-success btn-sm" style="width: 100%;" data-toggle="modal" data-target="#modalModifDescripcion" onClick="selDescripcion(\''+item.id_periferico+'\',\''+item.desc_periferico+'\');">Ver</a></td>'+  
            '<td style="text-align: center;"><a href="#" class="btn btn-block btn-primary btn-sm" style="width: 100%;" data-toggle="modal" data-target="#modalModifPeriferico" onClick="selPeriferico(\''+item.id_periferico+'\',\''+item.nom_periferico+'\',\''+item.desc_periferico+'\',\''+item.estado_periferico+'\');">Editar<i class="fa fa-fw fa-edit"></i></a></td>'+  
        '</tr>'
        );
      }

        
      }); 


        $('#tblPerifericos tbody').on( 'click', 'tr', function () {
            if ( $(this).hasClass('selected') ) {
            }
            else {          
               id_periferico = $(this).find("td:eq(0)").text();
               //alert(id_Periferico);
               $('#btnQuitarPeriferico').attr('disabled', false);

            }
        });    


});






selPeriferico = function($id_periferico, $nom_periferico, $desc_periferico, $estado_periferico){
  $('#mtxtIdPeriferico1').val($id_periferico);
  $('#mtxtNombre1').val($nom_periferico);
  $('#mtxtDesc1').val($desc_periferico);
  
  if($estado_periferico == 0){
    $('#mtxtEstado1').val("DISPONIBLE");
  }
  else{
    $('#mtxtEstado1').val("NO DISPONIBLE");
  }
  
};



selDescripcion = function($id_periferico,$desc_periferico){
  $('#mtxtIdPeriferico2').val($id_periferico);
  $('#mtxtDesc2').val($desc_periferico);  
  
};






$('#btnAgregarPeriferico').click(function(){

    id_periferico = 1;
    flag = false;//bandera para saber si entro al each de id_impresion
    flag2 = false;//bandera para saber si no hay 2 con 3
    //$('#mtxtIdTipoImpresion').val(id_impresion.toString());

          $.post(baseurl+"controlador/listarPerifericos",              
              function(data){
              var j = JSON.parse(data);              
              $.each(j, function(i,item){  
              flag = true;

              if ((id_periferico != parseInt(item.id_periferico)) && (!flag2)){               
                $('#mtxtIdPeriferico').val(id_periferico.toString());              
                flag2 = true;
              }

              if (!flag2){
                id_periferico = id_periferico + 1;
              }                          
              });

              if (!flag) {
                $('#mtxtIdPeriferico').val(id_periferico.toString());
              }
              else{
                if (!flag2) {
                  $('#mtxtIdPeriferico').val(id_periferico.toString());
                }
              }
              
          });

    $('#mtxtIdPeriferico').val("");  
    $('#mtxtNombre').val("");
    $('#mtxtDesc').val("");

});





$('#mbtnGuardarPeriferico').click(function(){

    id_periferico = $('#mtxtIdPeriferico').val();
    var nom_periferico = $('#mtxtNombre').val();
    var desc_periferico = $('#mtxtDesc').val();
  
    $.post(baseurl+"controlador/registrarPeriferico",
         {
           id_periferico:id_periferico,
           nom_periferico:nom_periferico,
           desc_periferico:desc_periferico
          },
          function(data){          
            $('#mbtnCerrarModalPeriferico').click();
            $('#mbtnConfirmacionPeriferico').click();
            $('#estadoPeriferico').append('<h4 style="text-align: center;" class="confirmarPeriferico" id="msjConfirmacionPeriferico">Periférico registrado correctamente.</h4>');                     
         
    });  

});








$('#mbtnGuardarModifPeriferico').click(function(){

    id_impresion = $('#mtxtIdPeriferico1').val();
    var nom_periferico = $('#mtxtNombre1').val();
    var desc_periferico = $('#mtxtDesc1').val();
  
    $.post(baseurl+"controlador/actualizarPeriferico",
         {
           id_periferico:id_periferico,
           nom_periferico:nom_periferico,
           estado_periferico:0,
           desc_periferico:desc_periferico
          },
          function(data){          
            $('#mbtnCerrarModalModifPerif').click();
            $('#mbtnConfirmacionPeriferico').click();
            $('#estadoPeriferico').append('<h4 style="text-align: center;" class="confirmarPeriferico" id="msjConfirmacionPeriferico">Periférico modificado correctamente.</h4>');                     
         
    });  

});








$('#mbtnModalConf').click(function(){

      $('#tblPerifericos').html(
        '<tr>'+
        '<th style="width: 2%; height: 39px;  background-color: #006699; color: white; text-align: center;">Id</th>'+
        '<th style="width: 15%; background-color: #006699; color: white; text-align: center;">Nombre</th>'+          ///////////////////// ACCCAAA SE LIMPIAAAA RESETEA TABLA
        '<th style="width: 15%; background-color: #006699; color: white; text-align: center;">Estado</th>'+
        '<th style="width: 5%; background-color: #006699; color: white; text-align: center;">Descripción</th>'+
        '<th style="width: 5%; background-color: #006699; color: white; text-align: center;">Modificar</th>'+
        '</tr>'
      );

  $('#btnQuitarPeriferico').attr('disabled', true);

  $.post(baseurl+"controlador/listarPerifericos",
  function (data){         
      var c = JSON.parse(data);
      $.each(c, function(i,item){
        
        if (item.estado_periferico == 0){
          $('#tblPerifericos').append(
          '<tr class="filaPeriferico" onClick="pulsar(this)">'+
              '<td style="text-align: center;"><div class="id_Periferico1" id="'+item.id_periferico+'"></div>'+item.id_periferico+'</td>'+
              '<td style="text-align: center;"><div class="nom_periferico1" id="'+item.nom_periferico+'"></div>'+item.nom_periferico+'</td>'+         
              '<td style="text-align: center;"><select width=30 class="selectpicker" onChange="selCambio('+item.id_periferico+');" id="cboEstado" name="cboEstado"><option value="0">DISPONIBLE</option><option value="1">NO DISPONIBLE</option></select></td>'+            
              //'<td style="text-align: center;"><span class="label label-success">DISPONIBLE</span></td>'+
              '<td style="text-align: center;"><a href="#" class="btn btn-block btn-success btn-sm" style="width: 100%;" data-toggle="modal" data-target="#modalModifDescripcion" onClick="selDescripcion(\''+item.id_periferico+'\',\''+item.desc_periferico+'\');">Ver</a></td>'+  
              '<td style="text-align: center;"><a href="#" class="btn btn-block btn-primary btn-sm" style="width: 100%;" data-toggle="modal" data-target="#modalModifPeriferico" onClick="selPeriferico(\''+item.id_periferico+'\',\''+item.nom_periferico+'\',\''+item.desc_periferico+'\',\''+item.estado_periferico+'\');">Editar<i class="fa fa-fw fa-edit"></i></a></td>'+  
          '</tr>'
          );
        }
        else{
          $('#tblPerifericos').append(
          '<tr class="filaPeriferico" onClick="pulsar(this)">'+
              '<td style="text-align: center;"><div class="id_Periferico1" id="'+item.id_periferico+'"></div>'+item.id_periferico+'</td>'+
              '<td style="text-align: center;"><div class="nom_periferico1" id="'+item.nom_periferico+'"></div>'+item.nom_periferico+'</td>'+
              '<td style="text-align: center;"><select width=30 class="selectpicker" onChange="selCambio('+item.id_periferico+');" id="cboEstado" name="cboEstado"><option value="1">NO DISPONIBLE</option><option value="0">DISPONIBLE</option></select></td>'+                        
              //'<td style="text-align: center;"><span class="label label-danger">NO DISPONIBLE</span></td>'+
              '<td style="text-align: center;"><a href="#" class="btn btn-block btn-success btn-sm" style="width: 100%;" data-toggle="modal" data-target="#modalModifDescripcion" onClick="selDescripcion(\''+item.id_periferico+'\',\''+item.desc_periferico+'\');">Ver</a></td>'+  
              '<td style="text-align: center;"><a href="#" class="btn btn-block btn-primary btn-sm" style="width: 100%;" data-toggle="modal" data-target="#modalModifPeriferico" onClick="selPeriferico(\''+item.id_periferico+'\',\''+item.nom_periferico+'\',\''+item.desc_periferico+'\',\''+item.estado_periferico+'\');">Editar<i class="fa fa-fw fa-edit"></i></a></td>'+  
          '</tr>'
          );
        }


        $('#tblPerifericos tbody').on( 'click', 'tr', function () {

            if ( $(this).hasClass('selected') ) {
  
            }
            else {          
               id_periferico = $(this).find("td:eq(0)").text();
               //alert(id_impresion);
               $('#btnQuitarPeriferico').attr('disabled', false);

            }

        });   

    });

  });

});





$('#modalConfirmacionPeriferico').on('hidden.bs.modal', function(){
 
  $('.confirmarPeriferico').remove();  

});





$('#btnQuitarPeriferico').click(function(){
    $('#mQuitarPeriferico').click();      
});





$('#mbtnQuitarPeriferico').click(function(){
  //alert(id_impresion);
    $.post(baseurl+"controlador/quitarPeriferico",
         {
           id_periferico:id_periferico
          },
          function(data){          
            $('#mbtnCerrarModalQuitarPeriferico').click();
            $('#mbtnConfirmacionPeriferico').click();
            $('#estadoPeriferico').append('<h4 style="text-align: center;" class="confirmarPeriferico" id="msjConfirmacionPeriferico">Periférico eliminado correctamente.</h4>');                     
         
    }); 
      
});
