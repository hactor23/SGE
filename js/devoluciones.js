
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












generarDetalleDevoluciones = function($fechaInicial, $fechaFinal){

var total = 0;
var efectivo = 0;
var cred = 0;

var fechas;

$.post(baseurl+"controlador/generarDetalleDevoluciones",
    {
    fechaInicial:$fechaInicial,
    fechaFinal:$fechaFinal
    },                                                  
    function(data){
    var j = JSON.parse(data); 
    $.each(j, function(i,item){  

    //alert(item.fecha_registro.replace(/^(\d{4})-(\d{2})-(\d{2})$/g,'$3/$2/$1'));
    fechas = item.fecha_dev.replace(/^(\d{4})-(\d{2})-(\d{2})$/g,'$3/$2/$1');

    $('#tblDevoluciones').append(
        '<tr class ="filaRegistroImpresion" onClick="pulsar(this)">'+
            '<td style ="text-align: center; font-size: 11pt;" "><div class="fecha1" id="'+fechas+'"></div>'+fechas+'</td>'+                
            '<td style ="text-align: center; font-size: 11pt;"><div class="hora1" id="'+item.hora_dev+'"></div>'+item.hora_dev+'</td>'+
            '<td style ="text-align: center; font-size: 11pt;"><div class="periferico1" id="'+item.nom_periferico+'"></div>'+item.nom_periferico+'</td>'+
            '<td style ="text-align: center; font-size: 11pt;"><div class="usuario1" id="'+item.usuario+'"></div>'+item.usuario+'</td>'+   
            '<td style="text-align: center;"><a href="#" class="btn btn-block btn-primary btn-sm" style="width: 100%;" data-toggle="modal" data-target="#modalObservacion" onClick="verObservacion(\''+item.obs_devolucion+'\');">Ver</a></td>'+  
        '</tr>'
    );
    

  
    });
});

};





verObservacion = function($Obs_devolucion){
  $('#mtxtObs').val($Obs_devolucion);    
};






$('#btnBuscar').click(function(){ 

    $('#tblDevoluciones').html(
        '<tr>'+
        '<th style="width: 10%; height: 39px;  background-color: #006699; color: white; text-align: center;">Fecha</th>'+          ///////////////////// ACCCAAA SE LIMPIAAAA RESETEA TABLA
        '<th style="width: 10%; background-color: #006699; color: white; text-align: center;">Hora</th>'+
        '<th style="width: 10%; background-color: #006699; color: white; text-align: center;">Periférico</th>'+
        '<th style="width: 5%; background-color: #006699; color: white; text-align: center;">Usuario</th>'+  
        '<th style="width: 5%; background-color: #006699; color: white; text-align: center;">Observación</th>'+                            
        '</tr>'
    );

    generarDetalleDevoluciones($('#txtDesde').val(), $('#txtHasta').val());

});
