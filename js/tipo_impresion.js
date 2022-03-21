var id_impresion;
var flag;//bandera para saber si entro al each de id_impresion
var flag2;//bandera para saber si no hay 2 con 3


//  parseFloat(item.valor).toFixed(2)





$.post(baseurl+"controlador/listarTiposDeImpresion",
  function (data){         
      var c = JSON.parse(data);
      $.each(c, function(i,item){
      $('#tblTipoImpresion').append(
        '<tr class="filaTipoImpresion" onClick="pulsar(this)">'+
                '<td style="text-align: center;"><div class="id_impresion" id="'+item.id_impresion+'"></div>'+item.id_impresion+'</td>'+
                '<td style="text-align: center;"><div class="nom_impresion" id="'+item.nom_impresion+'"></div>'+item.nom_impresion+'</td>'+
                '<td style="text-align: center;"><div class="valor" id="'+item.valor+'"></div>'+parseFloat(item.valor).toFixed(2)+'</td>'+

                '<td style="text-align: center;"><a href="#" class="btn btn-block btn-primary btn-sm" style="width: 100%;" data-toggle="modal" data-target="#modalModifTipoDeImpresion" onClick="selTipoImpresion(\''+item.id_impresion+'\',\''+item.nom_impresion+'\',\''+item.valor+'\');">Editar<i class="fa fa-fw fa-edit"></i></a></td>'+
                '</tr>'
        );
        }); 


        $('#tblTipoImpresion tbody').on( 'click', 'tr', function () {

            if ( $(this).hasClass('selected') ) {
  
            }
            else {          
               id_impresion = $(this).find("td:eq(0)").text();
               //alert(id_impresion);
               $('#btnQuitarTipoImpresion').attr('disabled', false);

            }

        });    


});






selTipoImpresion = function($id_impresion, $nom_impresion, $valor){
  $('#mtxtIdTipoImpresion1').val($id_impresion);
  $('#mtxtNomImpresion1').val($nom_impresion);
  $('#mtxtValorImpresion1').val(parseFloat($valor).toFixed(2));
  
};






$('#btnAgregarTipoImpresion').click(function(){

    id_impresion = 1;
    flag = false;//bandera para saber si entro al each de id_impresion
    flag2 = false;//bandera para saber si no hay 2 con 3
    //$('#mtxtIdTipoImpresion').val(id_impresion.toString());

          $.post(baseurl+"controlador/listarTiposDeImpresion",              
              function(data){
              var j = JSON.parse(data);              
              $.each(j, function(i,item){  
              flag = true;
              //alert(item.id_impresion);
              //id_impresion = parseInt(item.id_impresion)+1;
              //alert('jij');
              if ((id_impresion != parseInt(item.id_impresion)) && (!flag2)){               
                $('#mtxtIdTipoImpresion').val(id_impresion.toString());              
                flag2 = true;
                //alert(item.id_impresion);
              }
              if (!flag2){
                id_impresion = id_impresion + 1;
              }                          
              });

              if (!flag) {
                $('#mtxtIdTipoImpresion').val(id_impresion.toString());
              }
              else{
                if (!flag2) {
                  $('#mtxtIdTipoImpresion').val(id_impresion.toString());
                }
              }
              
          });

    $('#mtxtNomImpresion').val("");
    $('#mtxtValorImpresion').val("1.00");

});





$('#mbtnGuardarTipoImpresion').click(function(){

    id_impresion = $('#mtxtIdTipoImpresion').val();
    var nom_impresion = $('#mtxtNomImpresion').val();
    var valor = $('#mtxtValorImpresion').val();
    
  
    $.post(baseurl+"controlador/registrarTipoDeImpresion",
         {
           id_impresion:id_impresion,
           nom_impresion:nom_impresion,
           valor:valor
          },
          function(data){          
            $('#mbtnCerrarModalTipoImpresion').click();
            $('#mbtnConfirmacionTipoImpresion').click();
            $('#estadoTipoImpresion').append('<h4 style="text-align: center;" class="confirmarTipoImpresion" id="msjConfirmacionTipoImpresion">Tipo de impresión registrado correctamente.</h4>');                     
         
    });  

});








$('#mbtnGuardarModifTipoDeImpresion').click(function(){

    id_impresion = $('#mtxtIdTipoImpresion1').val();
    var nom_impresion = $('#mtxtNomImpresion1').val();
    var valor = $('#mtxtValorImpresion1').val();
    
  
    $.post(baseurl+"controlador/actualizarDatosTipoDeImpresion",
         {
           id_impresion:id_impresion,
           nom_impresion:nom_impresion,
           valor:valor
          },
          function(data){          
            $('#mbtnCerrarModalModifTipoImp').click();
            $('#mbtnConfirmacionTipoImpresion').click();
            $('#estadoTipoImpresion').append('<h4 style="text-align: center;" class="confirmarTipoImpresion" id="msjConfirmacionTipoImpresion">Tipo de impresión modificado correctamente.</h4>');                     
         
    });  

});








$('#mbtnModalConf').click(function(){

      $('#tblTipoImpresion').html(
        '<tr>'+
        '  <th style="width: 2%; height: 39px;  background-color: #006699; color: white; text-align: center;">Id Tipo</th>'+
        '  <th style="width: 10%; background-color: #006699; color: white; text-align: center;">Nombre</th>'+          ///////////////////// ACCCAAA SE LIMPIAAAA RESETEA TABLA
        '  <th style="width: 10%; background-color: #006699; color: white; text-align: center;">Valor en $</th>'+
        '  <th style="width: 5%; background-color: #006699; color: white; text-align: center;">Modificar</th>'+
        '</tr>'
      );

  $('#btnQuitarTipoImpresion').attr('disabled', true);

  $.post(baseurl+"controlador/listarTiposDeImpresion",
  function (data){         
      var c = JSON.parse(data);
      $.each(c, function(i,item){
      $('#tblTipoImpresion').append(
        '<tr class="filaTipoImpresion" onClick="pulsar(this)">'+
                '<td style="text-align: center;"><div class="id_impresion" id="'+item.id_impresion+'"></div>'+item.id_impresion+'</td>'+
                '<td style="text-align: center;"><div class="nom_impresion" id="'+item.nom_impresion+'"></div>'+item.nom_impresion+'</td>'+
                '<td style="text-align: center;"><div class="valor" id="'+item.valor+'"></div>'+item.valor+'</td>'+

                '<td style="text-align: center;"><a href="#" class="btn btn-block btn-primary btn-sm" style="width: 100%;" data-toggle="modal" data-target="#modalModifTipoDeImpresion" onClick="selTipoImpresion(\''+item.id_impresion+'\',\''+item.nom_impresion+'\',\''+item.valor+'\');">Editar<i class="fa fa-fw fa-edit"></i></a></td>'+
                '</tr>'
       );
      });  


        $('#tblTipoImpresion tbody').on( 'click', 'tr', function () {

            if ( $(this).hasClass('selected') ) {
  
            }
            else {          
               id_impresion = $(this).find("td:eq(0)").text();
               //alert(id_impresion);
               $('#btnQuitarTipoImpresion').attr('disabled', false);

            }

        });   

  });

});





$('#modalConfirmacionTipoImpresion').on('hidden.bs.modal', function(){
 
  $('.confirmarTipoImpresion').remove();  

});





$('#btnQuitarTipoImpresion').click(function(){
    $('#mQuitarTipoImpresion').click();      
});





$('#mbtnQuitarTipoImpresion').click(function(){
  //alert(id_impresion);
    $.post(baseurl+"controlador/quitarTipoDeImpresion",
         {
           id_impresion:id_impresion
          },
          function(data){          
            $('#mbtnCerrarModalQuitarTipoImp').click();
            $('#mbtnConfirmacionTipoImpresion').click();
            $('#estadoTipoImpresion').append('<h4 style="text-align: center;" class="confirmarTipoImpresion" id="msjConfirmacionTipoImpresion">Tipo de impresión eliminado correctamente.</h4>');                     
         
    }); 
      
});
