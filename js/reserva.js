
var id_reserva;
var fecha;
//var fechaFinal;



$.post(baseurl+"controlador/fecha3",
    function(data){
    var f = JSON.parse(data);   
    $.post(baseurl+"controlador/fecha2",
    function(data){
        var f = JSON.parse(data);
        $.each(f, function(i,item){             
            $('#txtFecha').val(item.fecha);
	        fecha = item.fecha;   
	        //$('#txtHasta').val(item.fecha);
	        //fechaFinal = item.fecha;
	        $('#btnBuscar').click();  
        });
    });
});






//var id_periferico;

var id_perifericos = [];
var horarios = [];



    



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






$('#btnQuitar').click(function(){  
  $('#modalQuitarReserva').modal('show');  
});




$('#mbtnQuitarReserva').click(function(){  
	for (var i = 0; i < id_perifericos.length; i++) {
	    $.post(baseurl+"controlador/quitarReserva",  //acá no espera la consulta y sigue directo al IF
	      {
	      id_periferico:id_perifericos[i],
	      fecha_res:fecha,
	      hora_res:horarios[i]
	      }
	    );               	     
    }
    setTimeout("confirmarQuitarReservas()",320);
    	     
});



confirmarQuitarReservas = function(){    
   $('#mbtnCerrarModalReserva').click(); 
   $('#modalConfirmacionReserva').modal('show');
   $('#estadoReserva').html("Reserva/s quitada/s.");   
};







$('#btnAgregar').click(function(){  

    $('#modalDocentes').modal('show');
     
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








var dni_docente;




selDocente = function($Dni_docente){
    dni_docente = $Dni_docente;
    
    $('#modalPerifericos').modal('show');

};



$('#modalPerifericos').on('hidden.bs.modal',function(){
     //$('#modalPerifericos').remove();
}); 







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
  location.href = baseurl+"controlador/mostrarReservas";
});








var perifericos = [];
//var estados = [];
var nom_perifericos = [];

var id_periferico2;



$.post(baseurl+"controlador/listarPerifericos",
  function (data){  
      var c = JSON.parse(data);
      $.each(c, function(i,item){

          $('#mtblPerifericos').append(
          '<tr class="filaPeriferico" onClick="pulsar(this)">'+
              '<td style="text-align: center;"><div class="id_Periferico1" id="'+item.id_periferico+'"></div>'+item.id_periferico+'</td>'+
              '<td style="text-align: center;"><div class="nom_periferico1" id="'+item.nom_periferico+'"></div>'+item.nom_periferico+'</td>'+         
              '<td style="text-align: center;"><a href="#" class="btn btn-block btn-primary btn-sm" style="width: 100%;" data-toggle="modal" data-target="#modalModifDescripcion" onClick="selDescripcion(\''+item.id_periferico+'\',\''+item.desc_periferico+'\');">Ver</a></td>'+                
          '</tr>'
          );
            
      }); 

        $('#mtblPerifericos tbody').on( 'click', 'tr', function () {
            if ( $(this).hasClass('selected') ) {
            }
            else {          
               id_periferico = $(this).find("td:eq(0)").text();
               nom_periferico = $(this).find("td:eq(1)").text();
               //flag = false;

               if(perifericos.indexOf(id_periferico) < 0){   //verifica si el periferico está o no en el arreglo...                                              
                 perifericos.push(id_periferico);
                 nom_perifericos.push(nom_periferico);                 
               }
               else{
                 nom_perifericos.splice(perifericos.indexOf(id_periferico), 1);
                 perifericos.splice(perifericos.indexOf(id_periferico), 1);
                
               }     
              if(perifericos.length > 0){
                $('#mbtnAceptarPerifericos').attr('disabled', false);
              }
              else{
                $('#mbtnAceptarPerifericos').attr('disabled', true);
              }       
              
            }
        });    

});







selDescripcion = function($id_periferico,$desc_periferico){
  $('#mtxtIdPeriferico2').val($id_periferico);
  $('#mtxtDesc2').val($desc_periferico);  
  
};



/*
$('#mbtnAceptarPerifericos').click(function(){ 
	alert(dni_docente);
	for (var i = 0; i < perifericos.length; i++) {
	   alert(perifericos[i]);                   
    }
});
*/



//$('#modalAgregarReserva').modal('show');





var num_reserva;
var flags; 


$('#mbtnAceptarPerifericos').click(function(){
	$('#modalAgregarReserva').modal('show');	
	num_reserva = 1;
	//flag = false;//bandera para saber si entro al each de id_impresion
	flag2 = false;//bandera para saber si no hay 2 con 3

	$.post(baseurl+"controlador/listarReservas2",              
	    function(data){
	    var j = JSON.parse(data);              
	    $.each(j, function(i,item){  
		      //flag = true;	      
		    if ((num_reserva != parseInt(item.num_reserva)) && (!flag2)){               
		       flag2 = true;
		       num_reserva = num_reserva + 1;
		       //alert(num_reserva);
		    }else{
			    if (!flag2){
			    	//alert('mau');
			       //++num_reserva;
			       num_reserva = num_reserva + 1;
			       //alert(num_reserva);
			    }     
		    }                     
	    });	           
	});
	/*if(!flag2){
		//num_reserva++;
		num_reserva = num_reserva + 1;
	}*/
	$('#txtFecha3').val(fecha);	
});








$('#mbtnAceptarReserva').click(function(){		
	//alert(num_reserva);	
	if($('#txtDesde').val() < $('#txtHasta').val()){
		flags = false; // bandera para ver si ya existe un periferico ya reservado en esaa fecha...
		for (var i = 0; i < perifericos.length; i++) {
		    $.post(baseurl+"controlador/verificarReserva",  //acá no espera la consulta y sigue directo al IF
	          {
	          id_periferico:perifericos[i],
	          fecha_res:$('#txtFecha3').val(),
	          hora_res:$('#txtDesde').val(),
	          hora_dev_res:$('#txtHasta').val()
	          },
	          function(data){
			    var j = JSON.parse(data);              
			    $.each(j, function(i,item){  
				    if(item > 0){
				    	//alert('momo');
				    	flags = true;
				    }
			    });
	        });	   
	    }    
		setTimeout("verificarReservas()",320); // *********  Función q espera 320 milesimas de segundo para ejecutar el metodo verificarReserva *********
		//verificarReservas();		
	}
	else{
		$('#modalErrorReserva').modal('show');
	    $('#estadoErrorReserva').html("Horario incorrecto."); 
	}	
    /*
	for (var i = 0; i < perifericos.length; i++) {		    
	   alert(perifericos[i]);
	}   */ 	

});










verificarReservas = function($Dni_docente){    
	if(!flags){
    	for (var i = 0; i < perifericos.length; i++) {
		   $.post(baseurl+"controlador/registrarReserva",
	          {
	          dni_docente:dni_docente,
	          id_periferico:perifericos[i],
	          num_reserva:num_reserva,
	          fecha_res:$('#txtFecha3').val(),
	          hora_res:$('#txtDesde').val(),
	          hora_dev_res:$('#txtHasta').val()
	          }
	        );	   
	    } 
	    $('#modalConfirmacionReserva').modal('show');
        $('#estadoReserva').html("Reserva hecha.");         
    }
    else{
        $('#modalErrorReserva').modal('show');
        $('#estadoErrorReserva').html("Ya existe una reserva de uno de los periféricos.");         
    }
};













$('#btnConfirmacionReseva').click(function(){	
    location.href = baseurl+"controlador/mostrarReservas";	
});









