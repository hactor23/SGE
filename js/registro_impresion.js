
var totalImpresion;
var totalEfectivo;
var cantTotal;


var cantImp = 0;
var valorTotImp = 0;


var cod_registro;






$.post(baseurl+"controlador/fecha",
    function(data){
    var f = JSON.parse(data);
    $.each(f, function(i,item){          
        $('#fechaRegistro').append(item.fecha);
        fecha = item.fecha;
    });

    $.post(baseurl+"controlador/verRegistrosDeTipoDeImpresion",                                            
    function(data){
        var j = JSON.parse(data);              
        $.each(j, function(i,item){  
            var nums = parseFloat(item.valor_imp).toFixed(2);
            $('#tblRegistroImpresion').append(
                '<tr class="filaRegistroImpresion" onClick="pulsar(this)">'+
                '<td style="text-align: center; font-size: 13pt;"><div class="nom_impresion" id="'+item.nom_impresion+'"></div>'+item.nom_impresion+'</td>'+
                '<td style="text-align: center; font-size: 13pt;"><div class="cantidad" value="'+item.cant_imp+'">'+item.cant_imp+'</div></td>'+
                '<td style="text-align: center; font-size: 13pt;"><div class="total" value="'+nums+'">'+nums+'</div></td>'+           
                '</tr>'            
            );  
            
        });  


        $.post(baseurl+"controlador/verTotalDeImpresion",                                            
        function(data){
        var j = JSON.parse(data);              
            $.each(j, function(i,item){         
                //total = item.tot_imp;
                $('#totalRegistro').html("Total: $" + parseFloat(item.tot_imp).toFixed(2));
                //$('.total').remove();  
                //$('#totalRegistro').append('<h3 style="text-align: center;" class="total" id="msjTotal">Total: $ '+parseFloat(item.tot_imp).toFixed(2)+'</h3>');        
            });               
        });

    });

});





//var total = 0;












//evento del boton impresiones


$('#btnImpresiones').click(function(){

      $('#mtblTipoImpresion').html(
        '<tr>'+
        '<th style="width: 10%; background-color: #006699; color: white; text-align: center;">Nombre</th>'+          ///////////////////// ACCCAAA SE LIMPIAAAA RESETEA TABLA
        '<th style="width: 3%; background-color: #006699; color: white; text-align: center;">Cantidad</th>'+
        '<th style="width: 4%; background-color: #006699; color: white; text-align: center;">Precio en $</th>'+        
        '</tr>'
      );
 
  $.post(baseurl+"controlador/listarTiposDeImpresion",
  function (data){         
      var c = JSON.parse(data);
      $.each(c, function(i,item){
      $('#mtblTipoImpresion').append(
        '<tr class="mfilaTipoImpresion" onClick="pulsar(this)">'+
            '<td style="text-align: center;" class="nom_impresion1" id="'+item.nom_impresion+'"><div class="id_impresion" id="'+item.id_impresion+'"></div>'+item.nom_impresion+'</td>'+
            '<td style="text-align: center;"><input type="number" value="0" class="cant_imp" id="" style="font-size: 18pt; text-align: right; width: 70%;"></td>'+
            '<td style="text-align: center;"><div class="valor" id="'+item.valor+'"></div>'+parseFloat(item.valor).toFixed(2)+'</td>'+
            
        '</tr>'
       );
      });  
           
  });

});





//evento del boton aceptar impresiones


$('#btnTotal').click(function(){   
    var i = 0;
    totalImpresion = 0;
    cantTotal =  0;

    $('#mtblTipoImpresion .mfilaTipoImpresion').each(function(){                                                
        var num = $('.cant_imp:eq('+i+')').val();            
        var num2 = parseFloat($('.valor:eq('+i+')').attr('id')); 
        var tot = parseInt(num) * parseFloat(num2);           
        
        cantTotal = cantTotal + parseInt(num);
        totalImpresion = parseFloat(totalImpresion) + parseFloat(tot);
        totalImpresion = parseFloat(totalImpresion).toFixed(2);
                
        i++;
    }); 

     $.post(baseurl+"controlador/consultarCodRegistro",              
     function(data){
        var j = JSON.parse(data);              
        $.each(j, function(i,item){                          
           cod_registro = item + 1;                       
        });

        $('#totalImp').html('Total: $' + totalImpresion);
        $('#totalImpEfectivo').val(totalImpresion);

     });

});






//evento del boton de pago en efectivo

$('#mbtnEfectivo').click(function(){   
    if($('#totalImpEfectivo').val() == ""){
        totalEfectivo = parseFloat(0).toFixed(2);
    }
    else{
        totalEfectivo = parseFloat($('#totalImpEfectivo').val()).toFixed(2);        
    }

    $.post(baseurl+"controlador/registrarImpresion",{                     
        cod_registro:cod_registro,
        total_imp:totalImpresion,
        efectivo:totalEfectivo,
        cred: 0
    },
    function(data){     
        i = 0;
        $('#mtblTipoImpresion .mfilaTipoImpresion').each(function(){                            
            var num = $('.cant_imp:eq('+i+')').val();            
            var num2 = $('.valor:eq('+i+')').attr('id'); 
            var tot = parseInt(num) * parseFloat(num2);   

            if (parseInt(num) != 0) {                           
                $.post(baseurl+"controlador/registrarTiposDeImpresion",{                                         
                    cod_registro:cod_registro,
                    id_impresion:$('.id_impresion:eq('+i+')').attr('id'), 
                    nom_impresion:$('.nom_impresion1:eq('+i+')').attr('id'),                                                       
                    cant_imp:num,
                    valor_imp:parseFloat(tot).toFixed(2)
                });
            }                   
            i++;
        });  

        location.href = baseurl+"controlador/mostrarRegistroDeImpresion";

    });    
       
});











//evento del boton de pago credito de alumno


$('#mbtnAlumno').click(function(){   

    $.post(baseurl+"controlador/listarAlumnos",
        function (data){        
        var c = JSON.parse(data);
        $.each(c, function(i,item){
        $('#mtblAlumnos').append(
        '<tr class="filaAlumno" onClick="pulsar(this)">'+
            '<td style="width: 3%; text-align: center;"><div class="dni_alumno1" id="'+item.dni_alumno+'"></div>'+item.dni_alumno+'</td>'+
            '<td style="text-align: center;"><div class="apellido1" id="'+item.ape_alumno+'">'+item.ape_alumno+'</td>'+
            '<td style="text-align: center;"><div class="nombre1" id="'+item.nom_alumno+'">'+item.nom_alumno+'</td>'+

            '<td style="width: 3%; text-align: center;"><div class="curso1" id="'+item.curso+'"></div>'+item.curso+'</td>'+
            '<td style="width: 8%; text-align: center;"><div class="saldo1" id="'+item.saldo_alumno+'"></div>'+parseFloat(item.saldo_alumno).toFixed(2)+'</td>'+
            '<td style="width: 5%; text-align: center;"><a href="#" class="btn btn-block btn-primary btn-sm" style="width: 100%;" data-toggle="modal" data-target="#modalCredAlumno" onClick="saldoAlumno(\''+item.dni_alumno+'\',\''+item.ape_alumno+'\',\''+item.nom_alumno+'\',\''+parseFloat(item.saldo_alumno).toFixed(2)+'\');">Saldo</a></td>'+
            '</tr>'
        );
        });

        $('#mtblAlumnos').DataTable();
        var table = $('#mtblAlumnos').DataTable();
                
    });

});





var credAlumno;
var saldoTotalAlumno;
var dni_alumno;
var saldoAlumno;

saldoAlumno = function($Dni_alumno, $Apellido, $Nombre, $Saldo){
    dni_alumno = $Dni_alumno;
    if($('#totalImpEfectivo').val() == ""){
        totalEfectivo = parseFloat(0).toFixed(2);
    }
    else{
        totalEfectivo = parseFloat($('#totalImpEfectivo').val()).toFixed(2);        
    }
    saldoAlumno = $Saldo;
    //totalImpresion = parseFloat(totalImpresion).toFixed(2);
    //alert(totalImpresion);
    credAlumno = parseFloat(totalEfectivo) - parseFloat(totalImpresion);
    saldoTotalAlumno = parseFloat(credAlumno) + parseFloat($Saldo);
    credAlumno = parseFloat(credAlumno).toFixed(2);
    saldoTotalAlumno = parseFloat(saldoTotalAlumno).toFixed(2);
    $('#apeAlumno').html('Apellido: ' + $Apellido);
    $('#nomAlumno').html('Nombre: ' + $Nombre);
    $('#totalImpAlumno').html('Total: $' + totalImpresion);
    $('#totalImpEfectivoAlumno').html('Efectivo: $' + totalEfectivo);
    $('#credAlumno').html('Credito: $' + credAlumno);
    $('#saldoAlumno').html('Saldo: $' + parseFloat($Saldo).toFixed(2));
    $('#saldoTotalAlumno').html('Saldo Total: $' + saldoTotalAlumno);

};








//evento del boton aceptar pago credito de alumno
// ver acá para agregar funtion al momento de registrar...

$('#mbtnAcepCredAlum').click(function(){  
    //alert('jim');
    // moficación de éste algoritmo 25/04................................
    
    i = 0;
    $('#mtblTipoImpresion .mfilaTipoImpresion').each(function(){                            
        var num = $('.cant_imp:eq('+i+')').val();            
        var num2 = $('.valor:eq('+i+')').attr('id'); 
        var tot = parseInt(num) * parseFloat(num2);   

        if (parseInt(num) != 0) {                           
            $.post(baseurl+"controlador/registrarTiposDeImpresion",{                                         
                cod_registro:cod_registro,
                id_impresion:$('.id_impresion:eq('+i+')').attr('id'), 
                nom_impresion:$('.nom_impresion1:eq('+i+')').attr('id'),                                                       
                cant_imp:num,
                valor_imp:parseFloat(tot).toFixed(2)
            });
        }                   
        i++;
    });


    $.post(baseurl+"controlador/registrarImpresion",{                     
        cod_registro:cod_registro,
        total_imp:totalImpresion,
        efectivo:totalEfectivo,
        cred: credAlumno
    },    
    function(){ 
        $.post(baseurl+"controlador/registrarSaldo",{ 
            dni:dni_alumno,                    
            saldo:saldoAlumno,
            cred:credAlumno
        },    
        function(){
            $.post(baseurl+"controlador/actualizarSaldoAlumno",{                     
                dni1:dni_alumno, 
                saldo:saldoTotalAlumno
            },    
            function(){
                location.href = baseurl+"controlador/mostrarRegistroDeImpresion";
            });
        });
    });    
    
});







$('#mbtnRegistrarAlumno').click(function(){ 
    $('#txtDniAlumno').val('');
    $('#txtApeAlumno').val('');
    $('#txtNomAlumno').val('');
    $('#cboCurso').val('');

});




$('#modalConfirmacion2').on('hidden.bs.modal',function(){
$('#msjConfirmacion2').remove();
}); 


//ver acá para modificar el llamado al modal modalCredAlumno
//evento del boton para aceptar nuevo registro de alumno
//ver acá para consistir q solo haya un sólo dni 

$('#mbtnAceptarAlum').click(function(){  
       
    dni_alumno = $('#txtDniAlumno').val();
    var ape = $('#txtApeAlumno').val();
    var nom = $('#txtNomAlumno').val();
    var curso = $('#cboCurso').val();

    //saldoAlumno(dni_alumno, ape, nom, 0.00);
    
    $.post(baseurl+"controlador/buscarAlumno",
     {
       dni:dni_alumno
      },
    function(data){  
      //alert(data.length);
      var c = JSON.parse(data);
      //alert(c.length);
      if((c.length == 0) && (dni_alumno != 0) && (dni_alumno != "")){
          $.post(baseurl+"controlador/registrarAlumno",
          {
          dni:dni_alumno,
          ape:ape,
          nom:nom,
          curso:curso,
          saldo:0
          },
          function(data){
            saldoAlumno(dni_alumno, ape, nom, 0.00);   
            //$('#btnCerrarConfirmacion').click();          
            $('#btnConfirmacion').click();
            $('#estado').append('<h3 style="text-align: center;" class="confirmar" id="msjConfirmacion">Registrado correctamente.</h3>');    
          });
      }
      else{
        $('#btnConfirmacion2').click();
        $('#estado2').append('<h3 style="text-align: center;" class="confirmar" id="msjConfirmacion2">Error al registrar.</h3>');          
      }      
    });
    

});





$('#mbtnAceptarAlumno').click(function(){  
    $('#btnCancelarRegistroAlum').click();
    $('#btnCredAlu').click();
});




//evento del boton de pago credito de docente


$('#mbtnDocente').click(function(){   

    $.post(baseurl+"controlador/listarDocentes",
        function (data){        
        var c = JSON.parse(data);
        $.each(c, function(i,item){

            $('#mtblDocentes').append(
            '<tr class="filaDocente" onClick="pulsar(this)">'+
                '<td style="width: 3%; text-align: center;"><div class="dni_docente1" id="'+item.dni_docente+'"></div>'+item.dni_docente+'</td>'+
                '<td style="text-align: center;"><div class="apellido1" id="'+item.ape_docente+'">'+item.ape_docente+'</td>'+
                '<td style="text-align: center;"><div class="nombre1" id="'+item.nom_docente+'">'+item.nom_docente+'</td>'+
                '<td style="width: 8%; text-align: center;"><div class="saldo1" id="'+item.saldo_docente+'"></div>'+parseFloat(item.saldo_docente).toFixed(2)+'</td>'+
                '<td style="width: 5%; text-align: center;"><a href="#" class="btn btn-block btn-primary btn-sm" style="width: 100%;" data-toggle="modal" data-target="#modalCredDocente" onClick="saldoDocente(\''+item.dni_docente+'\',\''+item.ape_docente+'\',\''+item.nom_docente+'\',\''+parseFloat(item.saldo_docente).toFixed(2)+'\');">Saldo</a></td>'+
                '</tr>'
            );

        });

        $('#mtblDocentes').DataTable();
        var table = $('#mtblDocentes').DataTable();
                
    });

});





var credDocente;
var saldoTotalDocente;
var dni_docente;
var saldoDocente;

saldoDocente = function($Dni_docente, $Apellido, $Nombre, $Saldo){
    dni_docente = $Dni_docente;
    if($('#totalImpEfectivo').val() == ""){
        totalEfectivo = parseFloat(0).toFixed(2);
    }
    else{
        totalEfectivo = parseFloat($('#totalImpEfectivo').val()).toFixed(2);        
    }
    saldoDocente = $Saldo;
    //totalImpresion = parseFloat(totalImpresion).toFixed(2);
    //alert(totalImpresion);
    credDocente = parseFloat(totalEfectivo) - parseFloat(totalImpresion);
    saldoTotalDocente = parseFloat(credDocente) + parseFloat($Saldo);
    credDocente = parseFloat(credDocente).toFixed(2);
    saldoTotalDocente = parseFloat(saldoTotalDocente).toFixed(2);
    $('#apeDocente').html('Apellido: ' + $Apellido);
    $('#nomDocente').html('Nombre: ' + $Nombre);
    $('#totalImpDocente').html('Total: $' + totalImpresion);
    $('#totalImpEfectivoDocente').html('Efectivo: $' + totalEfectivo);
    $('#credDocente').html('Credito: $' + credDocente);
    $('#saldoDocente').html('Saldo: $' + parseFloat($Saldo).toFixed(2));
    $('#saldoTotalDocente').html('Saldo Total: $' + saldoTotalDocente);

};






//evento del boton aceptar pago credito de alumno

$('#mbtnAcepCredDoc').click(function(){  
    //alert('jim');
   
    i = 0;
    $('#mtblTipoImpresion .mfilaTipoImpresion').each(function(){                            
        var num = $('.cant_imp:eq('+i+')').val();            
        var num2 = $('.valor:eq('+i+')').attr('id'); 
        var tot = parseInt(num) * parseFloat(num2);   

        if (parseInt(num) != 0) {                           
            $.post(baseurl+"controlador/registrarTiposDeImpresion",{                                         
                cod_registro:cod_registro,
                id_impresion:$('.id_impresion:eq('+i+')').attr('id'), 
                nom_impresion:$('.nom_impresion1:eq('+i+')').attr('id'),                                                       
                cant_imp:num,
                valor_imp:parseFloat(tot).toFixed(2)
            });
        }                   
        i++;
    });


    $.post(baseurl+"controlador/registrarImpresion",{                     
        cod_registro:cod_registro,
        total_imp:totalImpresion,
        efectivo:totalEfectivo,
        cred: credDocente
    },    
    function(){ 
        $.post(baseurl+"controlador/registrarSaldo",{ 
            dni:dni_docente,                    
            saldo:saldoDocente,
            cred:credDocente
        },    
        function(){
            $.post(baseurl+"controlador/actualizarSaldoDocente",{                     
                dni1:dni_docente, 
                saldo:saldoTotalDocente
            },    
            function(){
                location.href = baseurl+"controlador/mostrarRegistroDeImpresion";
            });
        });
    });    

    
});






$('#mbtnRegistrarDocente').click(function(){ 
    $('#txtDniDocente').val('');
    $('#txtApeDocente').val('');
    $('#txtNomDocente').val('');

});






$('#modalConfirmacion5').on('hidden.bs.modal',function(){
$('#msjConfirmacion5').remove();
}); 




//evento del boton para aceptar nuevo registro de docente
//ver acá para consistir q solo haya un sólo dni 

$('#mbtnAceptarDoc').click(function(){  
       
    dni_docente = $('#txtDniDocente').val();
    var ape = $('#txtApeDocente').val();
    var nom = $('#txtNomDocente').val();

    //saldoDocente(dni_docente, ape, nom, 0.00);

    $.post(baseurl+"controlador/buscarDocente",
    {
      dni:dni_docente
    },
    function(data){  
      //alert(data.length);
      var c = JSON.parse(data);
      //alert(c.length);
      if((c.length == 0) && (dni_docente != 0) && (dni_docente != "")){
          $.post(baseurl+"controlador/registrarDocente",
          {
          dni:dni_docente,
          ape:ape,
          nom:nom,
          saldo:0
          },
          function(data){
            saldoDocente(dni_docente, ape, nom, 0.00);   
            //$('#btnCerrarConfirmacion').click();          
            $('#btnConfirmacion3').click();
            $('#estado3').append('<h3 style="text-align: center;" class="confirmar" id="msjConfirmacion3">Registrado correctamente.</h3>');    
          });
      }
      else{
        $('#btnConfirmacion5').click();
        $('#estado5').append('<h3 style="text-align: center;" class="confirmar" id="msjConfirmacion5">Error al registrar.</h3>');          
      }      
    });        
    
});








$('#mbtnAceptarDocente').click(function(){  
    $('#btnCancelarRegistroDoc').click();
    $('#btnCredDoc').click();
});






$('#btnObservaciones').click(function(){  
    $.post(baseurl+"controlador/listarObservaciones",              
    function(data){
    var j = JSON.parse(data);              
        $.each(j, function(i,item){       

            $('#mtblObservacion').append(
                '<tr class="filaObservacion" onClick="pulsar(this)">'+
                '<td style="width: 3%; text-align: center;"><div class="hora" id="'+item.hora_registro+'"></div>'+item.hora_registro+'</td>'+
                '<td style="width: 8%; text-align: center;"><div class="saldo1" id="'+item.usuario+'"></div>'+item.usuario+'</td>'+
                '<td style="width: 5%; text-align: center;"><a href="#" class="btn btn-block btn-primary btn-sm" style="width: 100%;" data-toggle="modal" data-target="#modalVerObservacion" onClick="verObservacion(\''+item.cod_registro+'\');">Ver</a></td>'+
                '</tr>'
            );                     
        });
    });    

});




verObservacion = function($Cod_registro){
    $.post(baseurl+"controlador/verObservacion",{
        cod_registro:$Cod_registro
    },              
    function(data){
    var j = JSON.parse(data);              
        $.each(j, function(i,item){                          
            $('#mtxtObservaciones').val(item.descripcion);
        });
    });

};





$('#btnAgregarObs').click(function(){  
    $.post(baseurl+"controlador/consultarCodRegistro",              
    function(data){
    var j = JSON.parse(data);              
        $.each(j, function(i,item){                          
            cod_registro = item + 1;
        });
    });

});





  
$('#mbtnAceptarObs').click(function(){  

    $.post(baseurl+"controlador/registrarImpresion",{                     
        cod_registro:cod_registro,
        total_imp:0,
        efectivo:0,
        cred: 0                       
    });

    $.post(baseurl+"controlador/registrarObservacion",{                     
        cod_registro:cod_registro, 
        descripcion:$('#mtxtObservacion').val()
    });     
       
});



