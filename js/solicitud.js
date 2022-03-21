
var fechaInicial;



$.post(baseurl+"controlador/fecha",
    function(data){
    var f = JSON.parse(data);
    $.each(f, function(i,item){             
        //$('#txtFecha').val(item.fecha);
        $('#fechaSolicitud').append(item.fecha);
        fechaInicial = item.fecha;                
        //alert(item.fecha);     
        //$('#btnBuscar').click();         // Acá se inicia la ventana ************************************
    });
});




// Arreglo para almacenar los perifericos q se vanseleccionando...

//var perifericos = ['lol', 'jij'];

//alert(perifericos.length);
//alert(perifericos[1]);
//perifericos.push('miau'); //acá agrego al final miau
//perifericos.splice(1, 1); //acá se elimina jij
//alert(perifericos[1]);
//alert(perifericos.indexOf('jij')); //imprimo el lugar donde está jij


/*
  $.post(baseurl+"controlador/buscarPeriferico",
      {                     
      id_periferico:$Id_periferico
      },
      function (data){        
      var c = JSON.parse(data);

      $.each(c, function(i,item){ 
          alert(item.estado_periferico);            
      });  
              
  });
*/


var perifericos = [];
var estados = [];
var nom_perifericos = [];

var id_periferico2;



$.post(baseurl+"controlador/listarPerifericos",
  function (data){  
      var c = JSON.parse(data);
      $.each(c, function(i,item){

        if (item.estado_periferico == 0){
          $('#tblPerifericos').append(
          '<tr class="filaPeriferico" onClick="pulsar(this)">'+
              '<td style="text-align: center;"><div class="id_Periferico1" id="'+item.id_periferico+'"></div>'+item.id_periferico+'</td>'+
              '<td style="text-align: center;"><div class="nom_periferico1" id="'+item.nom_periferico+'"></div>'+item.nom_periferico+'</td>'+         
              //'<td style="text-align: center;"><div id="estado1" name="estado1">NO DISPONIBLE</div></td>'+            
              '<td style="text-align: center;"><span id="estado1" name="estado1" class="label label-danger">NO DISPONIBLE</span></td>'+              
              '<td style="text-align: center;"><a href="#" class="btn btn-block btn-danger btn-sm" style="width: 100%;" data-toggle="modal" data-target="#modalModifDescripcion" onClick="selDescripcion(\''+item.id_periferico+'\',\''+item.desc_periferico+'\');">Ver</a></td>'+  
              '<td style="text-align: center;"><a href="#" class="btn btn-block btn-success btn-sm" style="width: 100%;" data-toggle="modal" data-target="#modalModifDescripcion" onClick="selDescripcion(\''+item.id_periferico+'\',\''+item.desc_periferico+'\');">Ver</a></td>'+  
              '<td style="text-align: center;"><button href="#" class="btn btn-block btn-primary btn-sm" style="width: 100%;" data-toggle="modal" data-target="#modalModifDetalle" onClick="selDetalle(\''+item.id_periferico+'\');">Ver</button></td>'+  
          '</tr>'
          );
        }
        else{
          $('#tblPerifericos').append(
          '<tr class="filaPeriferico" onClick="pulsar(this)">'+
              '<td style="text-align: center;"><div class="id_Periferico1" id="'+item.id_periferico+'"></div>'+item.id_periferico+'</td>'+
              '<td style="text-align: center;"><div class="nom_periferico1" id="'+item.nom_periferico+'"></div>'+item.nom_periferico+'</td>'+
              //'<td style="text-align: center;"><div id="estado1" name="estado1">DISPONIBLE</div></td>'+   
              '<td style="text-align: center;"><span id="estado1" name="estado1" class="label label-success">DISPONIBLE</span></td>'+
              '<td style="text-align: center;"><a href="#" class="btn btn-block btn-danger btn-sm" style="width: 100%;" data-toggle="modal" data-target="#modalModifDescripcion" onClick="selDescripcion(\''+item.id_periferico+'\',\''+item.desc_periferico+'\');">Ver</a></td>'+  
              '<td style="text-align: center;"><a href="#" class="btn btn-block btn-success btn-sm" style="width: 100%;" data-toggle="modal" data-target="#modalModifDescripcion" onClick="selDescripcion(\''+item.id_periferico+'\',\''+item.desc_periferico+'\');">Ver</a></td>'+  
              '<td style="text-align: center;"><button href="#" disabled="true" class="btn btn-block btn-primary btn-sm" style="width: 100%;" data-toggle="modal" data-target="#modalModifDetalle" onClick="selDetalle(\''+item.id_periferico+'\');">Ver</button></td>'+  
          '</tr>'
          );
        }
      
      }); 


        $('#tblPerifericos tbody').on( 'click', 'tr', function () {
            if ( $(this).hasClass('selected') ) {
            }
            else {          
               id_periferico = $(this).find("td:eq(0)").text();
               nom_periferico = $(this).find("td:eq(1)").text();
               estado = $(this).find("td:eq(2)").text();

               flag = false;   // flag para estados DISPONIBLE O NO
               //flag2 = false;

               if(perifericos.indexOf(id_periferico) < 0){                 
                 
                 for (var i = 0; i < estados.length; i++) {
                   //alert(estados[i]);
                   if(estados[i] != estado){                 // verifica si hay perifericos DISPONIBLE Y/O NO DISPONIBLE
                     flag = true;
                   }
                 }

                 perifericos.push(id_periferico);
                 nom_perifericos.push(nom_periferico);
                 estados.push(estado);
                 //alert($(this).find("td:eq(2)").text());
               }
               else{
                 estados.splice(perifericos.indexOf(id_periferico), 1);
                 nom_perifericos.splice(perifericos.indexOf(id_periferico), 1);
                 perifericos.splice(perifericos.indexOf(id_periferico), 1);

                 if(perifericos.length > 0){
                   estado = estados[0];
                   for (var i = 1; i < estados.length; i++) {
                     //alert(estados[i]);
                     if(estados[i] != estado){
                      flag = true;
                     }
                   }
                 }
                 
               }     

              if(perifericos.length > 0){
                $('#btnReservar').attr('disabled', false);
              }
              else{
                $('#btnReservar').attr('disabled', true);
              }
               
               if(perifericos.length > 0 && !flag){                
                if(estado == 'DISPONIBLE'){
                 $('#btnPrestar').attr('disabled', false);
                 $('#btnDevolver').attr('disabled', true);  
                }
                else{
                 $('#btnDevolver').attr('disabled', false);
                 $('#btnPrestar').attr('disabled', true);                  
                }
               }
               else{                
                 $('#btnPrestar').attr('disabled', true);
                 $('#btnDevolver').attr('disabled', true);                 
               }
               //alert(perifericos.length);               
            }
        });    

});






selDescripcion = function($id_periferico,$desc_periferico){
  $('#mtxtIdPeriferico2').val($id_periferico);
  $('#mtxtDesc2').val($desc_periferico);  
  
};








selDetalle = function($Id_periferico){
  //alert('kok');
  $('#modalDetalle').modal('show');

  $.post(baseurl+"controlador/detalleSolicitud",
      {                     
      id_periferico:$Id_periferico
      },
      function (data){        
      var c = JSON.parse(data);

      $.each(c, function(i,item){ 
        var fecha = item.fecha_sol.replace(/^(\d{4})-(\d{2})-(\d{2})$/g,'$3/$2/$1');
        //alert(item.hora_sol);            
        $('#docente').html("Docente: " + item.ape_docente + " " + item.nom_docente);
        $('#fecha').html("Fecha: " + fecha);
        $('#hora').html("Hora: " + item.hora_sol);
        $('#usuario').html("Usuario: " + item.usuario);
      });  
              
  });
};










//location.href = baseurl+"controlador/mostrarRegistroDeImpresion";




$('#btnPrestar').click(function(){   

    $('#modalDocentes').modal('show');
  
    /*for (var i = 0; i < perifericos.length; i++) {
       alert(perifericos[i]);
    }*/
    
    //$('#mtblDocentes').val("ja");
    //alert(mtblDocentes.value);
    
    //var pass = "QFGwExrG0BPHiswlvHigh9ZzUD+yTs5Qp6bXxuJtq6Y5nuccikr5bi40DzOtMqgHxvlX/6jTTLABhnU2srMaKQ==";
    //alert(pass);

    $.post(baseurl+"controlador/listarDocentes",
        /*{                     
        pass:pass
        },*/
        function (data){        
        var c = JSON.parse(data);

        $.each(c, function(i,item){ 
            //alert(item.pass);

            $('#mtblDocentes').append(
            '<tr class="filaDocente">'+
                '<td style="width: 3%; text-align: center;"><div class="dni_docente1" id="'+item.dni_docente+'"></div>'+item.dni_docente+'</td>'+
                '<td style="text-align: center;"><div class="apellido1" id="'+item.ape_docente+'">'+item.ape_docente+'</td>'+
                '<td style="text-align: center;"><div class="nombre1" id="'+item.nom_docente+'">'+item.nom_docente+'</td>'+
                '<td style="width: 5%; text-align: center;"><a href="#" class="btn btn-block btn-primary btn-sm" style="width: 100%;" data-toggle="modal" data-target="#modalCredDocente" onClick="selDocente(\''+item.dni_docente+'\');">Elegir</a></td>'+
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

selDocente = function($Dni_docente){
    //dni_docente = $Dni_docente;
    //alert(dni_docente);

    for (var i = 0; i < perifericos.length; i++) {
       //alert(perifericos[i]);
      $.post(baseurl+"controlador/registrarSolicitud",{                     
        dni_docente:$Dni_docente,
        id_periferico:perifericos[i]
      });

      $.post(baseurl+"controlador/actualizarPeriferico2",{      
        id_periferico:perifericos[i],
        estado_periferico:0
      });

    }    

    $('#modalConfirmacionPrestamo').modal('show');
    //$('#modalPerifericos').modal('show');
    //$('#myModalExito').modal('hide');  
};








$('#mbtnRegistrarDocente').click(function(){ 
    $('#txtDniDocente').val('');
    $('#txtApeDocente').val('');
    $('#txtNomDocente').val('');

});


$('#modalConfirmacion5').on('hidden.bs.modal',function(){
$('#msjConfirmacion5').remove();
}); 






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
            selDocente(dni_docente);
          });
      }
      else{
        $('#btnConfirmacion5').click();
        $('#estado5').append('<h3 style="text-align: center;" class="confirmar" id="msjConfirmacion5">Error al registrar.</h3>');          
      }      
    });        
    
});




$('#mbtnAceptarDocente').click(function(){ 
  location.href = baseurl+"controlador/mostrarSolicitud";
});




$('#btnDevolver').click(function(){ 

    $('#modalPerifericosPrestados').modal('show');

    for (var i = 0; i < perifericos.length; i++) {
      //alert(perifericos[i]);      
      $('#mtblPerifericos').append(
        '<tr class="filaPeriferico">'+
            '<td style="text-align: center;"><div class="id_periferico1" id="'+perifericos[i]+'"></div>'+perifericos[i]+'</td>'+
            '<td style="text-align: center;"><div class="nom_periferico1" id="'+nom_perifericos[i]+'"></div>'+nom_perifericos[i]+'</td>'+         
            '<td style="text-align: center;"><a href="#" class="btn btn-block btn-primary btn-sm" style="width: 100%;" data-toggle="modal" data-target="#modalObservacion" onClick="agregarObs(\''+perifericos[i]+'\');">Agregar</a></td>'+  
        '</tr>'
      );
    }


    $('#mtblPerifericos tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
        }
        else{
           id_periferico2 = $(this).find("td:eq(0)").text();
        }
    });    
    
});


    



var observaciones = [];


agregarObs = function($Id_periferico){
  /*if(observaciones[$Id_periferico] == null){
    $('#mtxtObservacion').val(observaciones[$Id_periferico]);
  }*/
  $('#mtxtObservacion').val(observaciones[$Id_periferico]);
};






$('#mbtnAceptarObs').click(function(){ 
  observaciones[id_periferico2] = $('#mtxtObservacion').val();    
  $('#mbtnCancelarObs').click();
});












$('#mbtnAceptarDev').click(function(){ 

    for (var i = 0; i < perifericos.length; i++) {
     //alert(perifericos[i]);

      if(observaciones[perifericos[i]] != null){
        $.post(baseurl+"controlador/registrarDevolucion",{                     
          id_periferico:perifericos[i],
          obs_devolucion:observaciones[perifericos[i]]
        });
      }
      else{
        $.post(baseurl+"controlador/registrarDevolucion",{                     
          id_periferico:perifericos[i],
          obs_devolucion:''
        });
      }      

      $.post(baseurl+"controlador/actualizarPeriferico2",{      
        id_periferico:perifericos[i],
        estado_periferico:1
      });

    }
  
  $('#estadoDev').html("Devolución hecha correctamente.");
  $('#modalConfirmacionPrestamo').modal('show');

});








// ------------------  Sacar de acá el detalle de periférico reservado, en el caso q esté reservado.............


$('#btnBuscar').click(function(){

  $('#tblReservas').html(
        '<tr class="filaPeriferico">'+
          '<th style="width: 3%; background-color: #006699; color: white; text-align: center;">Hora</th>'+  
          '<th style="width: 10%; background-color: #006699; color: white; text-align: center;">Periférico</th>'+  
          '<th style="width: 10%; background-color: #006699; color: white; text-align: center;">Docente</th>'+
          '<th style="width: 3%; background-color: #006699; color: white; text-align: center;">Devolución</th>'+
          '<th style="width: 3%; background-color: #006699; color: white; text-align: center;">Usuario</th>'+         
          //'<td style="text-align: center;"><span class="label label-success">DISPONIBLE</span></td>'+              
        '</tr>'
    );

  $.post(baseurl+"controlador/listarReservas",
  {
    fecha_res:$('#txtFecha').val()
  },
  function (data){  
      var c = JSON.parse(data);
      $.each(c, function(i,item){

          $('#tblReservas').append(
          '<tr class="filaPeriferico" onClick="pulsar(this)">'+
              '<td style="text-align: center;"><div class="hora_res1" id="'+item.hora_res+'"></div>'+item.hora_res+'</td>'+  
              '<td style="text-align: center;" id="'+item.id_periferico+'"><div class="id_periferico1" id="'+item.id_periferico+'"></div>'+item.nom_periferico+'</td>'+  
              '<td style="text-align: center;" id="'+item.dni_docente+'"><div class="dni_docente1" id="'+item.dni_docente+'"></div>'+item.ape_docente+' '+item.nom_docente+'</td>'+
              '<td style="text-align: center;"><div class="hora_dev_res1" id="'+item.hora_dev_res+'"></div>'+item.hora_dev_res+'</td>'+
              '<td style="text-align: center;"><div class="usuario1" id="'+item.usuario+'"></div>'+item.usuario+'</td>'+         
              //'<td style="text-align: center;"><span class="label label-success">DISPONIBLE</span></td>'+              
          '</tr>'
          );       
      
      }); 

        $('#tblReservas tbody').on( 'click', 'tr', function () {
            if ( $(this).hasClass('selected') ) {
            }
            else {
              //id_periferico = $(this).closest('tr').attr('id');
              id_periferico = $(this).find("td:eq(1)").attr('id');
              horario = $(this).find("td:eq(0)").text();
              //alert(id_periferico); 
              // dni_docente = $(this).find("td:eq(2)").attr('id');
              //fecha2 = $(this).find("td:eq(1)").text();
               
               if(id_periferico != ''){
                   if(id_perifericos.indexOf(id_periferico) < 0){                                                   
                   id_perifericos.push(id_periferico);
                   horarios.push(horario);
                   //alert($(this).find("td:eq(2)").text());
                 }
                 else{
                   id_perifericos.splice(id_perifericos.indexOf(id_periferico), 1); 
                   horarios.splice(id_perifericos.indexOf(id_periferico), 1);      
                 }    
               }                               


              if(id_perifericos.length > 0){
                $('#btnQuitar').attr('disabled', false);
              }
              else{
                $('#btnQuitar').attr('disabled', true);
              }
               
               /*
                for (var i = 0; i < id_perifericos.length; i++) {
                    alert(id_perifericos[i]);    
                    alert(horarios[i]);                    
                }*/              

            }
        });    

  });

});  

