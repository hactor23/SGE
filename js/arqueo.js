







$.post(baseurl+"controlador/arqueo",
  
	function (data){        
	var c = JSON.parse(data);
	$.each(c, function(i,item){
		
		$('#tblArqueo').append(
		'<tr class="filaArque" onClick="pulsar(this)">'+
		'<td style="text-align: center;"><div class="mes1" id="'+item.mes+'">'+item.mes+'</td>'+
		'<td style="text-align: center;"><div class="impresion1" id="'+item.impresiones+'">'+parseFloat(item.impresiones).toFixed(2)+'</td>'+
		'<td style="text-align: center;"><div class="compra1" id="'+item.compras+'">'+parseFloat(item.compras).toFixed(2)+'</td>'+
		'<td style="text-align: center;"><div class="caja1" id="">'+parseFloat(item.impresiones - item.compras).toFixed(2)+'</td>'+
		'<td style="text-align: center;"><div class="saldo1" id="'+item.compras+'"></div>'+parseFloat(item.compras).toFixed(2)+'</td>'+
		'</tr>'
		);

	});

});

