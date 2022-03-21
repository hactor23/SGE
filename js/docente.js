var dni1;
var dni2;
var apellido1;
var nombre1;
var saldo1;




  


// Consistir ademas si el dni es nulo o cero

$('#btnRegistrarDocente').click(function(){
    var dni = $('#txtDniDocente').val();
    var ape = $('#txtApeDocente').val();
    var nom = $('#txtNomDocente').val();
    var saldo= parseFloat($('#txtSaldo').val()).toFixed(2);

    $.post(baseurl+"controlador/buscarDocente",
     {
       dni:dni
      },
    function(data){  
      var c = JSON.parse(data);
      if((c.length == 0) && (dni != 0) && (dni != "")){
          $.post(baseurl+"controlador/registrarDocente",
          {
          dni:dni,
          ape:ape,
          nom:nom,
          saldo:saldo
          },
          function(data){             
            $('#btnConfirmacion').click();
            $('#estadoDocente').append('<h3 style="text-align: center;" class="confirmarDocente" id="msjConfirmacionDocente">Docente registrado correctamente.</h3>');                     
          });
      }
      else{
        $('#btnConfirmacion').click();
        $('#estadoDocente').append('<h3 style="text-align: center;" class="confirmarDocente" id="msjConfirmacionDocente">Error al registrar docente.</h3>');                     
      }      
    });         

});

        











/////////    para la vista moficar alumno   //////////////////



$.post(baseurl+"controlador/listarDocentes",
  
  function (data){        
  
          var c = JSON.parse(data);
        $.each(c, function(i,item){
        $('#tblDocentes').append(
        '<tr class="filaAlumno" onClick="pulsar(this)">'+
                '<td style="text-align: center;"><div class="dni_alumno1" id="'+item.dni_docente+'"></div>'+item.dni_docente+'</td>'+
                '<td style="text-align: center;"><div class="apellido1" id="'+item.ape_docente+'">'+item.ape_docente+'</td>'+
                '<td style="text-align: center;"><div class="nombre1" id="'+item.nom_docente+'">'+item.nom_docente+'</td>'+
                '<td style="text-align: center;"><div class="saldo1" id="'+item.saldo_docente+'"></div>'+parseFloat(item.saldo_docente).toFixed(2)+'</td>'+
                '<td style="text-align: center;"><a href="#" class="btn btn-block btn-success btn-sm" style="width: 100%;" data-toggle="modal" data-target="#modalSaldos" onClick="verSaldosDocente(\''+item.dni_docente+'\');">Ver</a></td>'+                                
                '<td style="text-align: center;"><a href="#" class="btn btn-block btn-primary btn-sm" style="width: 100%;" data-toggle="modal" data-target="#modalSaldo">Saldo<i class="fa fa-fw fa-edit"></i></a></td>'+
                '</tr>'
        );
        });

         $('#tblDocentes').DataTable();
         var table = $('#tblDocentes').DataTable();
        
          $('#tblDocentes tbody').on( 'click', 'tr', function () {
          if ( $(this).hasClass('selected') ) {
            //$(this).removeClass('selected');
            //dato = "";
          }
          else {
           // table.$('tr.selected').removeClass('selected');
            //$(this).addClass('selected');
            //$(this).find("td:eq(0)").text();
            $('#btnEditar').attr('disabled',false);
            dni1 = $(this).find("td:eq(0)").text();
            apellido1 = $(this).find("td:eq(1)").text();
            nombre1 = $(this).find("td:eq(2)").text();
            saldo1 = $(this).find("td:eq(3)").text();

            $('#apeDocente').html('Apellido: ' + $(this).find("td:eq(1)").text());
            $('#nomDocente').html('Nombre: ' + $(this).find("td:eq(2)").text());      
            //$('#credAlumno').html('Credito: $' + credAlumno);
            $('#saldoDocente').html('Saldo: $' + parseFloat($(this).find("td:eq(3)").text()).toFixed(2));
            //$('#saldoTotalAlumno').html('Saldo Total: $' + saldoTotalAlumno);
            
            //alert(saldo1);
          }
          });
        


});






 selDocente = function($Dni, $Apellido, $Nombre){
  $('#mtxtDniDocente').val($Dni);
  dni2 = $Dni;
  $('#mtxtApellDocente').val($Apellido);
  $('#mtxtNomDocente').val($Nombre);

};




//ver acá para consistir q solo haya un sólo dni 

$('#mbtnGuardarModifDocente').click(function(){
  
  var dni = $('#mtxtDniDocente').val();
  var ape = $('#mtxtApellDocente').val();
  var nom = $('#mtxtNomDocente').val();

  if(dni2 == dni){
    $.post(baseurl+"controlador/actualizarDatosDocente",
      {
      dni:dni,
      dni1:dni2,
      ape:ape,
      nom:nom
      },
    function(data){             
      $('#btnConfirmacionModifDocente').click();
      $('#estadoDocente').append('<h3 style="text-align: center;" class="confirmarDocente" id="msjConfirmacionDocente">Datos actualizados correctamente.</h3>');                     
    });
  }
  else{
    $.post(baseurl+"controlador/buscarDocente",
     {
       dni:dni
      },
    function(data){  
      var c = JSON.parse(data);
      if((c.length == 0) && (dni != 0) && (dni != "")){
          $.post(baseurl+"controlador/actualizarDatosDocente",
          {
          dni:dni,
          dni1:dni2,
          ape:ape,
          nom:nom
          },
          function(data){             
            $('#btnConfirmacionModifDocente').click();
            $('#estadoDocente').append('<h3 style="text-align: center;" class="confirmarDocente" id="msjConfirmacionDocente">Datos actualizados correctamente.</h3>');                     
          });
      }
      else{
        $('#btnConfirmacionModifDocente').click();
        $('#estadoDocente').append('<h3 style="text-align: center;" class="confirmarDocente" id="msjConfirmacionDocente">Error al actualizar docente.</h3>');                     
      }      
    });
  }
  
});






    ////////////////////////////////////////////////////
$('#modalConfirmacionModifDocente').on('hidden.bs.modal',function(){
$('#msjConfirmacionDocente').remove();
}); 
          

 




$('#btnEditar').click(function(){

  $('#mbtnEditar').click();
  selDocente(dni1, apellido1, nombre1);

});






var cod_registro;      //ver acá xq se verifica el contador de docentes

$('#modalSaldo').on('click',function(){
   $.post(baseurl+"controlador/consultarCodRegistro",              
   function(data){
   var j = JSON.parse(data);              
       $.each(j, function(i,item){                          
          cod_registro = item + 1;                       
       });
   });
});




var saldo2;
var saldo3;


$('#mbtnAceptarSaldo').click(function(){

  saldo2 = parseFloat(saldo1).toFixed(2);
  saldo3 = parseFloat($('#mtxtSaldo1').val()).toFixed(2);
  saldo1 = parseFloat(saldo1) + parseFloat($('#mtxtSaldo1').val());
  saldo1 = parseFloat(saldo1).toFixed(2);

  $('#credDocente').html('Credito: $' + parseFloat($('#mtxtSaldo1').val()).toFixed(2));
  $('#saldoTotalDocente').html('Saldo Total: $' + saldo1);

  $('#mbtnCerrarModalSaldo').click();
  $('#btnCredDoc').click();

  /*
  var saldo2 = parseFloat(saldo1).toFixed(2);
  saldo1 = parseFloat(saldo1) + parseFloat($('#mtxtSaldo1').val());
  saldo1 = parseFloat(saldo1).toFixed(2);

  
  $.post(baseurl+"controlador/registrarImpresion",{                     
      cod_registro:cod_registro,
      total_imp:0,
      efectivo:parseFloat($('#mtxtSaldo1').val()).toFixed(2),
      cred:parseFloat($('#mtxtSaldo1').val()).toFixed(2)
  }, 
  function (data){               
    $.post(baseurl+"controlador/registrarSaldo",{ 
      dni:dni1,                          
      saldo:saldo2,
      cred:parseFloat($('#mtxtSaldo1').val()).toFixed(2)
    }, 
    function (data){               
      $.post(baseurl + "controlador/actualizarSaldoAlumno",{
        dni1:dni1,     
        saldo:saldo1
      }, 
      function (data){               
        $('#mbtnCerrarModalSaldo').click(); 
        $('#btnConfirmacionModifAlumno').click();  
        $('#estadoAlumno').append('<h3 style="text-align: center;" class="confirmarAlumno" id="msjConfirmacionAlumno">Saldo actualizado correctamente.</h3>');                     
      });

    }); 

  });  */
  

});




/*
  function(data){ 
      $('#btnConfirmacionModifDocente').click();  
      $('#estadoDocente').append('<h3 style="text-align: center;" class="confirmarDocente" id="msjConfirmacionDocente">Datos actualizados correctamente.</h3>');                     

  });
*/


$('#mbtnAcepCredDoc').click(function(){
  
  $.post(baseurl+"controlador/registrarImpresion",{                     
      cod_registro:cod_registro,
      total_imp:0,
      efectivo:saldo3,
      cred:saldo3
  }, 
  function (data){               
    $.post(baseurl+"controlador/registrarSaldo",{ 
      dni:dni1,                          
      saldo:saldo2,
      cred:saldo3
    }, 
    function (data){               
      $.post(baseurl + "controlador/actualizarSaldoDocente",{
        dni1:dni1,     
        saldo:saldo1
      }, 
      function (data){               
        $('#mbtnCancCredDoc').click(); 
        $('#btnConfirmacionModifDocente').click();  
        $('#estadoDocente').append('<h3 style="text-align: center;" class="confirmarDocente" id="msjConfirmacionDocente">Saldo actualizado correctamente.</h3>');                     
      });

    }); 

  });  


});




$('#modalSaldo').on('hidden.bs.modal',function(){
  $('#mtxtSaldo1').val(parseFloat(0).toFixed(2));
});












verSaldosDocente = function($Dni){
$.post(baseurl+"controlador/verSaldosDocente",
{
  dni:$Dni
}, 
function (data){        
    var c = JSON.parse(data);
    $.each(c, function(i,item){

    fechas = item.fecha_saldo.replace(/^(\d{4})-(\d{2})-(\d{2})$/g,'$3/$2/$1');

    $('#mtblSaldos').append(
        '<tr class="filaAlumno" onClick="pulsar(this)">'+
        '<td><div style="width: 33pt;" class="fecha1" id="'+fechas+'"><input type="date" style=" border-width:0px ; background-color: #FFFFFF; text-align: right" disabled="disabled" value="'+item.fecha_saldo+'"></input></div></td>'+
        '<td style="text-align: center;"><div class="hora_saldo1" id="'+item.hora_saldo+'"></div>'+item.hora_saldo+'</td>'+
        '<td style="text-align: center;"><div class="saldo3" id="'+item.saldo+'"></div>'+item.saldo+'</td>'+
        '<td style="text-align: center;"><div class="cred1" id="'+item.cred+'"></div>'+item.cred+'</td>'+
        '<td style="text-align: center;"><div class="usuario1" id="'+item.usuario+'"></div>'+item.usuario+'</td>'+        
        '</tr>'
        );
    });

    // var dato = "";
    $('#mtblSaldos').DataTable();
    
        
});

};




	