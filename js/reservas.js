
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












generarDetalleReservas = function($fechaInicial, $fechaFinal){

var total = 0;
var efectivo = 0;
var cred = 0;

var fechas;

$.post(baseurl+"controlador/generarDetalleReservas",
    {
    fechaInicial:$fechaInicial,
    fechaFinal:$fechaFinal
    },                                                  
    function(data){
    var j = JSON.parse(data); 
    $.each(j, function(i,item){  

    //alert(item.fecha_registro.replace(/^(\d{4})-(\d{2})-(\d{2})$/g,'$3/$2/$1'));
    fechas = item.fecha_res.replace(/^(\d{4})-(\d{2})-(\d{2})$/g,'$3/$2/$1');

    $('#tblReservas').append(
        '<tr class ="filaRegistroImpresion" onClick="pulsar(this)">'+
            '<td style ="text-align: center; font-size: 11pt;" "><div class="fecha1" id="'+fechas+'"></div>'+fechas+'</td>'+                
            '<td style ="text-align: center; font-size: 11pt;"><div class="hora1" id="'+item.hora_res+'"></div>'+item.hora_res+'</td>'+
            '<td style ="text-align: center; font-size: 11pt;" id="'+item.dni_docente+'"><div class="docente1" id="'+item.dni_docente+'"></div>'+item.ape_docente+' '+item.nom_docente+'</td>'+
            '<td style ="text-align: center; font-size: 11pt;"><div class="periferico1" id="'+item.nom_periferico+'"></div>'+item.nom_periferico+'</td>'+   
            '<td style ="text-align: center; font-size: 11pt;"><div class="devolucion1" id="'+item.hora_dev_res+'"></div>'+item.hora_dev_res+'</td>'+
            '<td style ="text-align: center; font-size: 11pt;"><div class="usuario1" id="'+item.usuario+'"></div>'+item.usuario+'</td>'+   
        '</tr>'
    );
    

  
    });
});

};









$('#btnBuscar').click(function(){ 

    $('#tblReservas').html(
        '<tr>'+
        '<th style="width: 10%; height: 39px;  background-color: #006699; color: white; text-align: center;">Fecha</th>'+          ///////////////////// ACCCAAA SE LIMPIAAAA RESETEA TABLA
        '<th style="width: 10%; background-color: #006699; color: white; text-align: center;">Hora</th>'+
        '<th style="width: 10%; background-color: #006699; color: white; text-align: center;">Docente</th>'+  
        '<th style="width: 10%; background-color: #006699; color: white; text-align: center;">Periférico</th>'+
        '<th style="width: 10%; background-color: #006699; color: white; text-align: center;">Devolución</th>'+  
        '<th style="width: 5%; background-color: #006699; color: white; text-align: center;">Usuario</th>'+           
        '</tr>'
    );

    generarDetalleReservas($('#txtDesde').val(), $('#txtHasta').val());

});
