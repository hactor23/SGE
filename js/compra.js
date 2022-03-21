var letra_fact1;
var letra_fact2;
var num_fact1;
var num_fact2;
var comercio1;
var monto_compra1;
var desc_compra1;
var fecha;






$.post(baseurl+"controlador/fecha2",
    function(data){
    var f = JSON.parse(data);
    $.each(f, function(i,item){          
        $('#txtFecha').val(item.fecha);
        fecha = item.fecha;
    });

});











$('#btnRegistrarCompra').click(function(){	
	var letra_fact = $('#cboLetra').val();
    var num_fact = $('#txtNumFactura').val();
    var comercio = $('#txtComercio').val();
    var monto = parseFloat($('#txtMonto').val()).toFixed(2);
    var desc = $('#txtDescripcion').val();

    $.post(baseurl+"controlador/buscarCompra",
    {
    letra:letra_fact,
    num:num_fact   
    },
    function(data){  
      //alert(data.length);
      var c = JSON.parse(data);
      //alert(c.length);
      if((c.length == 0) && (num_fact != 0) && (num_fact != "")){
          $.post(baseurl+"controlador/registrarCompra",
          {
          fecha:fecha,
          letra:letra_fact,
          num:num_fact,
          comercio:comercio,
          monto:monto,
          desc:desc
          },
          function(data){             
            $('#btnConfirmacion').click();
            $('#estadoCompra').append('Compra registrada');    
          });
      }
      else{
        $('#btnConfirmacion').click();
        $('#estadoCompra').append('Compra NO registrada');    
      }      
    });
	
});











$.post(baseurl+"controlador/listarCompras",
  
  function (data){        
        var c = JSON.parse(data);
        $.each(c, function(i,item){

	        fechas = item.fecha_compra.replace(/^(\d{4})-(\d{2})-(\d{2})$/g,'$3/$2/$1');

	        $('#tblCompras').append(
	        '<tr class="filaCompra" onClick="pulsar(this)">'+
	        '<td><div style="width: 33pt;" class="fecha1" id="'+fechas+'"><input type="date" style=" border-width:0px ; background-color: #FFFFFF; text-align: right" disabled="disabled" value="'+item.fecha_compra+'"></input></div></td>'+
	        '<td style="text-align: center;"><div class="letra1" id="'+item.letra_fact+'">'+item.letra_fact+'</td>'+
	        '<td style="text-align: center;"><div class="num1" id="'+item.num_fact+'">'+item.num_fact+'</td>'+
	        '<td style="text-align: center;"><div class="com1" id="'+item.comercio+'">'+item.comercio+'</td>'+
	        '<td style="text-align: center;"><div class="monto1" id="'+item.monto_compra+'"></div>'+parseFloat(item.monto_compra).toFixed(2)+'</td>'+
	        '<td style="text-align: center;"><div class="usuario1" id="'+item.usuario+'"></div>'+item.usuario+'</td>'+
	        '<td style="text-align: center;"><a href="#" class="btn btn-block btn-success btn-sm" style="width: 100%;" data-toggle="modal" data-target="#modalVerDescCompra" onClick="verDescCompra(\''+item.desc_compra+'\');">Ver</a></td>'+                                
	        '<td style="text-align: center;"><a href="#" class="btn btn-block btn-primary btn-sm" style="width: 100%;" data-toggle="modal" data-target="#modalEditCompra" onClick="selCompra(\''+item.letra_fact+'\',\''+item.num_fact+'\',\''+item.comercio+'\',\''+item.monto_compra+'\',\''+item.desc_compra+'\');">Editar<i class="fa fa-fw fa-edit"></i></a></td>'+
	        '</tr>'
	        );
        });

         $('#tblCompras').DataTable();
         var table = $('#tblCompras').DataTable();
        
          $('#tblCompras tbody').on( 'click', 'tr', function () {
          if ( $(this).hasClass('selected') ) {
            //$(this).removeClass('selected');
            //dato = "";
          }
          else {
           // table.$('tr.selected').removeClass('selected');
            //$(this).addClass('selected');
            //$(this).find("td:eq(0)").text();
            //$('#btnEditar').attr('disabled',false);
            letra_fact1 = $(this).find("td:eq(1)").text();
            num_fact1 = $(this).find("td:eq(2)").text();
            comercio1 = $(this).find("td:eq(3)").text();
            monto_compra1 = $(this).find("td:eq(4)").text();
            desc_compra1 = $(this).find("td:eq(5)").text();
          }
          });
        
});








verDescCompra = function($Desc_compra){
    $('#mtxtDesc_compra').val($Desc_compra);

};






selCompra = function($Letra_fact, $Num_fact, $Comercio, $Monto,  $Desc_compra){
  $('#cboLetra').val($Letra_fact);
  letra_fact2 = $Letra_fact;
  $('#txtNumFactura').val($Num_fact);
  num_fact2 = $Num_fact;
  $('#txtComercio').val($Comercio);
  $('#txtMonto').val(parseFloat($Monto).toFixed(2));
  $('#txtDescripcion').val($Desc_compra);

};





//ver acá para consistir q solo haya un sólo dni 

$('#mbtnGuardarModifCompra').click(function(){

  var letra_fact = $('#cboLetra').val();
  var num_fact = $('#txtNumFactura').val();
  var comercio = $('#txtComercio').val();
  var monto_compra = parseFloat($('#txtMonto').val()).toFixed(2);
  var desc_compra = $('#txtDescripcion').val();

  if((letra_fact2 == letra_fact) && (num_fact2 == num_fact)){
    //alert("Actualiza solo datos");
    $.post(baseurl + "controlador/actualizarDatosCompra",{
       letra_fact:letra_fact,
       letra_fact1:letra_fact1,
       num_fact:num_fact,
       num_fact1:num_fact1,
       comercio:comercio,
       monto_compra:monto_compra,
       desc_compra:desc_compra
    },
    function(data){             
      $('#btnConfirmacion').click();
      $('#estadoCompra').append('<h3 style="text-align: center;" class="confirmarModifCompra" id="msjConfirmarModifCompra">Datos actualizados correctamente.</h3>');                     
    });
  }
  else{
    $.post(baseurl+"controlador/buscarCompra",
      {
	  letra:letra_fact,
	  num:num_fact   
	  },
    function(data){  
      var c = JSON.parse(data);

      if((c.length == 0) && (num_fact != 0) && (num_fact != "")){        
          //alert("Actualiza letra y/o num de compra");
          $.post(baseurl + "controlador/actualizarDatosCompra",{
		       letra_fact:letra_fact,
		       letra_fact1:letra_fact1,
		       num_fact:num_fact,
		       num_fact1:num_fact1,
		       comercio:comercio,
		       monto_compra:monto_compra,
		       desc_compra:desc_compra
		    },
		    function(data){             
		      $('#btnConfirmacion').click();
		      $('#estadoCompra').append('<h3 style="text-align: center;" class="confirmarModifCompra" id="msjConfirmarModifCompra">Datos actualizados correctamente.</h3>');                     
		    });
      }
      else{      
      	  //alert("No actualiza xq ya existe una compra con la misma letra y num");
      	  $('#btnConfirmacion').click();
	      $('#estadoCompra').append('<h3 style="text-align: center;" class="confirmarModifCompra" id="msjConfirmarModifCompra">Datos NO actualizados.</h3>');                     
	    }      
    });
  }

});
