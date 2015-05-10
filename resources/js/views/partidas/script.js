$(document).ready(function(){
	// eventos
		// click
			$(document).on("click",".btnGuardarPartida",function(){
				var asientos 	= new Array();
				var asiento;
				var parciales 	= new Array();
				var parcial;
				var cn 			= 0;
				var j 			= 0;
				$(".tbAsiento").each(function(i,detalleAsiento){
					asiento 		= new Object(); 	
					asiento.cuenta 	= $(this).find(".txtHdIdCuenta").val();
					asiento.tipo 	= $(this).find(".txtHdTipoTrans").val();
					asiento.cargo	= $(this).find(".tdCargo").text();
					asiento.abono 	= $(this).find(".tdAbono").text();
					$(this).find(".trParcial").each(function(ii,detalleParcial){
						parcial 				= new Object();
						parcial.monto 			= $(this).find(".tdParcial").text();
						parcial.descripcion 	= $(this).find(".tdDescripcion").text();
						parciales[j] 			= parcial;
						j++;
					});
					asiento.parciales 	= parciales; 
					asientos[cn] 		= asiento;
					cn++;
				});
				console.log("los asientos son:",asientos);
			});
})