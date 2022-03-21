var dni1;
var dni2;
var apellido1;
var nombre1;
var curso1;
var saldo1;






// Consistir ademas si el dni es nulo o cero


$('#btnRegistrarAlumno').click(function(){
    var dni = $('#txtDniAlumno').val();
    var ape = $('#txtApeAlumno').val();
    var nom = $('#txtNomAlumno').val();
    var curso = $('#cboCurso').val();
    var saldo= parseFloat($('#txtSaldo').val()).toFixed(2);
  
    $.post(baseurl+"controlador/buscarAlumno",
     {
       dni:dni
      },
    function(data){  
      //alert(data.length);
      var c = JSON.parse(data);
      //alert(c.length);
      if((c.length == 0) && (dni != 0) && (dni != "")){
          $.post(baseurl+"controlador/registrarAlumno",
          {
          dni:dni,
          ape:ape,
          nom:nom,
          curso:curso,
          saldo:saldo
          },
          function(data){             
            $('#btnConfirmacion').click();
            $('#estadoAlumno').append('<h3 style="text-align: center;" class="confirmarAlumno" id="msjConfirmacionAlumno">Alumno registrado correctamente.</h3>');    
          });
      }
      else{
        $('#btnConfirmacion').click();
        $('#estadoAlumno').append('<h3 style="text-align: center;" class="confirmarAlumno" id="msjConfirmacionAlumno">Error al registrar alumno.</h3>');          
      }      
    });       

});

        











/////////    para la vista moficar alumno   //////////////////



$.post(baseurl+"controlador/listarAlumnos", 
function (data){        
    var c = JSON.parse(data);
    $.each(c, function(i,item){
    $('#tblAlumnos').append(
        '<tr class="filaAlumno" onClick="pulsar(this)">'+
        '<td style="text-align: center;"><div class="dni_alumno1" id="'+item.dni_alumno+'"></div>'+item.dni_alumno+'</td>'+
        '<td style="text-align: center;"><div class="apellido1" id="'+item.ape_alumno+'">'+item.ape_alumno+'</td>'+
        '<td style="text-align: center;"><div class="nombre1" id="'+item.nom_alumno+'">'+item.nom_alumno+'</td>'+
        '<td style="text-align: center;"><div class="curso1" id="'+item.curso+'"></div>'+item.curso+'</td>'+
        '<td style="text-align: center;"><div class="saldo1" id="'+item.saldo_alumno+'"></div>'+parseFloat(item.saldo_alumno).toFixed(2)+'</td>'+
        '<td style="text-align: center;"><a href="#" class="btn btn-block btn-success btn-sm" style="width: 100%;" data-toggle="modal" data-target="#modalSaldos" onClick="verSaldosAlumno(\''+item.dni_alumno+'\');">Ver</a></td>'+                
        '<td style="text-align: center;"><a href="#" class="btn btn-block btn-primary btn-sm" style="width: 100%;" data-toggle="modal" data-target="#modalSaldo">Saldo<i class="fa fa-fw fa-edit"></i></a></td>'+        
        '</tr>'
        );
    });

    // var dato = "";
    $('#tblAlumnos').DataTable();
    var table = $('#tblAlumnos').DataTable();
    
    //para seleccionar una opcion
    $('#tblAlumnos tbody').on( 'click', 'tr', function () {
    if ( $(this).hasClass('selected') ) {
      
    }
    else {     
      $('#btnEditar').attr('disabled',false);
      dni1 = $(this).find("td:eq(0)").text();
      apellido1 = $(this).find("td:eq(1)").text();
      nombre1 = $(this).find("td:eq(2)").text();
      curso1 = $(this).find("td:eq(3)").text();
      saldo1 = $(this).find("td:eq(4)").text();

      $('#apeAlumno').html('Apellido: ' + $(this).find("td:eq(1)").text());
      $('#nomAlumno').html('Nombre: ' + $(this).find("td:eq(2)").text());      
      //$('#credAlumno').html('Credito: $' + credAlumno);
      $('#saldoAlumno').html('Saldo: $' + parseFloat($(this).find("td:eq(4)").text()).toFixed(2));
      //$('#saldoTotalAlumno').html('Saldo Total: $' + saldoTotalAlumno);

      //alert(saldo1);
    }
    });        
});








selAlumno = function($Dni, $Apellido, $Nombre, $Curso){
  $('#mtxtDniAlumno').val($Dni);
  dni2 = $Dni;
  $('#mtxtApellAlumno').val($Apellido);
  $('#mtxtNomAlumno').val($Nombre);
  $('#mCboCurso').val($Curso);
//  $('#mtxtSaldo').val(parseFloat($Saldo).toFixed(2));

};




//ver acá para consistir q solo haya un sólo dni 

$('#mbtnGuardarModifAlumno').click(function(){

  var dni = $('#mtxtDniAlumno').val();
  var ape = $('#mtxtApellAlumno').val();
  var nom = $('#mtxtNomAlumno').val();
  var curso = $('#mCboCurso').val();
  //var saldo = parseFloat($('#mtxtSaldo').val()).toFixed(2);

  if(dni2 == dni){
    $.post(baseurl + "controlador/actualizarDatosAlumno",{
       dni:dni,
       dni1:dni2,
       ape:ape,
       nom:nom,
       curso:curso//,
       //saldo:saldo
    },
    function(data){             
      $('#btnConfirmacionModifAlumno').click();
      $('#estadoAlumno').append('<h3 style="text-align: center;" class="confirmarAlumno" id="msjConfirmacionAlumno">Datos actualizados correctamente.</h3>');                     
    });
  }
  else{
    $.post(baseurl+"controlador/buscarAlumno",
      {
       dni:dni
      },
    function(data){  
      //alert(data.length);
      var c = JSON.parse(data);
      //alert(c.length);
      if((c.length == 0) && (dni != 0) && (dni != "")){        
          $.post(baseurl + "controlador/actualizarDatosAlumno",{
             dni:dni,
             dni1:dni2,
             ape:ape,
             nom:nom,
             curso:curso//,
             //saldo:saldo
          },
          function(data){             
            $('#btnConfirmacionModifAlumno').click();
            $('#estadoAlumno').append('<h3 style="text-align: center;" class="confirmarAlumno" id="msjConfirmacionAlumno">Datos actualizados correctamente.</h3>');                     
          });
      }
      else{
        $('#btnConfirmacionModifAlumno').click();
        $('#estadoAlumno').append('<h3 style="text-align: center;" class="confirmarAlumno" id="msjConfirmacionAlumno">Error al actualizar alumno.</h3>');          
      }      
    });
  } 

});






    ////////////////////////////////////////////////////
$('#modalConfirmacionModifAlumno').on('hidden.bs.modal',function(){
$('#msjConfirmacionAlumno').remove();
}); 
          

 




$('#btnEditar').click(function(){

  $('#mbtnEditar').click();
  //selAlumno(dni1, apellido1, nombre1, curso1, saldo1);
  selAlumno(dni1, apellido1, nombre1, curso1);

});




var cod_registro;

$('#modalSaldo').on('click',function(){
   $.post(baseurl+"controlador/consultarCodRegistro",              
   function(data){
   var j = JSON.parse(data);              
       $.each(j, function(i,item){                          
          cod_registro = item + 1;    
          //alert(cod_registro);       //ver acá xq se verifica el contador de alumnos            
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

  $('#credAlumno').html('Credito: $' + parseFloat($('#mtxtSaldo1').val()).toFixed(2));
  $('#saldoTotalAlumno').html('Saldo Total: $' + saldo1);

  $('#mbtnCerrarModalSaldo').click();
  $('#btnCredAlu').click();

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





$('#mbtnAcepCredAlum').click(function(){  
    //alert('jim');
    // moficación de éste algoritmo 25/04................................
    
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
        $.post(baseurl + "controlador/actualizarSaldoAlumno",{
          dni1:dni1,     
          saldo:saldo1
        }, 
        function (data){               
          $('#mbtnCancCredAlum').click(); 
          $('#btnConfirmacionModifAlumno').click();  
          $('#estadoAlumno').append('<h3 style="text-align: center;" class="confirmarAlumno" id="msjConfirmacionAlumno">Saldo actualizado correctamente.</h3>');                     
        });

      }); 

    });
    
});





$('#modalSaldo').on('hidden.bs.modal',function(){
    $('#mtxtSaldo1').val(parseFloat(0).toFixed(2));
});








verSaldosAlumno = function($Dni){
$.post(baseurl+"controlador/verSaldosAlumno",
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








	