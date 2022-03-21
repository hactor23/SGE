
var fechaInicial;
var fechaFinal;




$.post(baseurl+"controlador/fecha3",
    function(data){
    var f = JSON.parse(data);

    $.each(f, function(i,item){          	
        $('#txtDesde').val(item.fecha);
        fechaInicial = item.fecha;                
        //alert(item.fecha);     
        //$('#btnBuscar').click();         // Acá se inicia la ventana ************************************
    });

    $.post(baseurl+"controlador/fecha2",
    function(data){
        var f = JSON.parse(data);
        $.each(f, function(i,item){             
            //$('#txtDesde').val(item.fecha);        
            $('#txtHasta').val(item.fecha);
            fechaFinal = item.fecha;
            //alert(item.fecha);     
            $('#btnBuscar').click();
        });
    });
});



//alert('jin');

//parseFloat(item.valor_imp).toFixed(2)

generarDetallesDeFechas = function($fechaInicial, $fechaFinal){

var total = 0;
var efectivo = 0;
var cred = 0;

var fechas;

$.post(baseurl+"controlador/generarDetallesDeFechas",
    {
	fechaInicial:$fechaInicial,
	fechaFinal:$fechaFinal
	},               									
	function(data){
	var j = JSON.parse(data); 
	$.each(j, function(i,item){  
	
	total = total + parseFloat(item.total_imp);
    efectivo = efectivo + parseFloat(item.efectivo);
    cred = cred + parseFloat(item.cred);
	//alert(item.fecha_registro.replace(/^(\d{4})-(\d{2})-(\d{2})$/g,'$3/$2/$1'));
    fechas = item.fecha_registro.replace(/^(\d{4})-(\d{2})-(\d{2})$/g,'$3/$2/$1');

	$('#tblRegistroImpresion').append(
		'<tr class ="filaRegistroImpresion" onClick="pulsar(this)">'+
		'<td style ="text-align: center; font-size: 11pt;" "><div class="fecha1" id="'+fechas+'"></div>'+fechas+'</td>'+                
		'<td style ="text-align: center; font-size: 11pt;"><div class="efectivo1" id="'+item.efectivo+'"></div>'+parseFloat(item.efectivo).toFixed(2)+'</td>'+
		'<td style ="text-align: center; font-size: 11pt;"><div class="cred1" id="'+item.cred+'"></div>'+parseFloat(item.cred).toFixed(2)+'</td>'+
        '<td style ="text-align: center; font-size: 11pt;"><div class="total1" id="'+item.total_imp+'"></div>'+parseFloat(item.total_imp).toFixed(2)+'</td>'+
        '<td style="text-align: center;"><a href="#" class="btn btn-block btn-danger btn-sm" style="width: 100%;" data-toggle="modal" data-target="#modalDeudas" onClick="verDeudas(\''+item.fecha_registro+'\');">Ver</a></td>'+                                
        '<td style="text-align: center;"><a href="#" class="btn btn-block btn-success btn-sm" style="width: 100%;" data-toggle="modal" data-target="#modalDetalleRegistro" onClick="verDetalles(\''+item.fecha_registro+'\');">Ver</a></td>'+                                
        '<td style="text-align: center;"><a href="#" class="btn btn-block btn-primary btn-sm" style="width: 100%;" data-toggle="modal" data-target="#modalObservaciones" onClick="verObservaciones(\''+item.fecha_registro+'\');">Ver</a></td>'+
                        		
		'</tr>'
	);
	

    $('#totalEfectivo').html("Efectivo: $" + parseFloat(efectivo).toFixed(2));
    $('#totalCredito').html("Credito: $" + parseFloat(cred).toFixed(2));       
    $('#totalRegistro').html("Impresiones: $" + parseFloat(total).toFixed(2)); 

    });
});

};






//mtblRegistro

verDetalles = function($Fecha){

    $.post(baseurl+"controlador/verDetallesDeRegistro",
    {
    fecha:$Fecha
    },                                                  
    function(data){
        var j = JSON.parse(data); 
        $.each(j, function(i,item){  
        
        fechas = item.fecha_registro.replace(/^(\d{4})-(\d{2})-(\d{2})$/g,'$3/$2/$1');

            $('#mtblRegistro').append(
                '<tr class ="filaRegistroImpresion" onClick="pulsar(this)">'+
                '<td style ="text-align: center; font-size: 11pt;"><div class="fecha1" id="'+fechas+'"></div>'+fechas+'</td>'+                
                '<td style ="text-align: center; font-size: 11pt;"><div class="hora1" id="'+item.hora_registro+'"></div>'+item.hora_registro+'</td>'+                
                '<td style ="text-align: center; font-size: 11pt;"><div class="nom1" id="'+item.nom_impresion+'"></div>'+item.nom_impresion+'</td>'+
                '<td style ="text-align: center; font-size: 11pt;"><div class="cant1" id="'+item.cant_imp+'"></div>'+item.cant_imp+'</td>'+
                '<td style ="text-align: center; font-size: 11pt;"><div class="valor1" id="'+item.valor_imp+'"></div>'+parseFloat(item.valor_imp).toFixed(2)+'</td>'+
                '<td style ="text-align: center; font-size: 11pt;"><div class="usuario1" id="'+item.usuario+'"></div>'+item.usuario+'</td>'+

                '</tr>'
            );
        

        });
    });

};







verObservaciones = function($Fecha){
    $.post(baseurl+"controlador/listarObservaciones2",{
    fecha:$Fecha
    },                       
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
};






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





// VER ESTE METODO PARA OPTIMIZARLO Y ORDENARLO -----------------------------

verDeudas = function($Fecha){
    $.post(baseurl+"controlador/verDeudas",{
    fecha:$Fecha
    },                       
    function(data){
    var j = JSON.parse(data);              
        $.each(j, function(i,item){       
            $('#mtblSaldos').append(
                '<tr class="filaAlumno" onClick="pulsar(this)">'+
                '<td style="text-align: center;"><div class="apellido1" id="'+item.ape_alumno+'"></div>'+item.ape_alumno+'</td>'+
                '<td style="text-align: center;"><div class="nombre1" id="'+item.nom_alumno+'">'+item.nom_alumno+'</td>'+
                '<td style="text-align: center;"><div class="hora1" id="'+item.hora_saldo+'">'+item.hora_saldo+'</td>'+
                '<td style="text-align: center;"><div class="credito1" id="'+item.cred+'"></div>'+parseFloat(item.cred).toFixed(2)+'</td>'+
                '<td style="text-align: center;"><div class="usuario1" id="'+item.usuario+'"></div>'+item.usuario+'</td>'+        
                '</tr>'
            );
                       
        });
    });

    $.post(baseurl+"controlador/verDeudas2",{
    fecha:$Fecha
    },                       
    function(data){
    var j = JSON.parse(data);              
        $.each(j, function(i,item){       
            $('#mtblSaldos').append(
                '<tr class="filaAlumno" onClick="pulsar(this)">'+
                '<td style="text-align: center;"><div class="apellido1" id="'+item.ape_docente+'"></div>'+item.ape_docente+'</td>'+
                '<td style="text-align: center;"><div class="nombre1" id="'+item.nom_docente+'">'+item.nom_docente+'</td>'+
                '<td style="text-align: center;"><div class="hora1" id="'+item.hora_saldo+'">'+item.hora_saldo+'</td>'+
                '<td style="text-align: center;"><div class="credito1" id="'+item.cred+'"></div>'+parseFloat(item.cred).toFixed(2)+'</td>'+
                '<td style="text-align: center;"><div class="usuario1" id="'+item.usuario+'"></div>'+item.usuario+'</td>'+        
                '</tr>'
            );
                       
        });
    });

    
};











//generarHistorial(fechaInicial, fechaFinal);


$('#btnBuscar').click(function(){ 

    $('#tblRegistroImpresion').html(
        '<tr>'+
        '<th style="width: 10%; height: 39px;  background-color: #006699; color: white; text-align: center;">Fecha</th>'+          ///////////////////// ACCCAAA SE LIMPIAAAA RESETEA TABLA
        '<th style="width: 10%; background-color: #006699; color: white; text-align: center;">Efectivo $</th>'+
        '<th style="width: 10%; background-color: #006699; color: white; text-align: center;">Credito $</th>'+
        '<th style="width: 10%; background-color: #006699; color: white; text-align: center;">Impresiones $</th>'+
        '<th style="width: 5%; background-color: #006699; color: white; text-align: center;">Deudas</th>'+        
        '<th style="width: 5%; background-color: #006699; color: white; text-align: center;">Detalle</th>'+        
        '<th style="width: 5%; background-color: #006699; color: white; text-align: center;">Observaciones</th>'+        
        '</tr>'
    );

    generarDetallesDeFechas($('#txtDesde').val(), $('#txtHasta').val());

});





///////////////////          HISTORIAL DETALLADO            //////////////////////////77









