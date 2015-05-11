$(document).ready(function(){
	// eventos
		// submit 
			$(document).on("submit","#frmPartida",function(e){
				e.preventDefault();
				asientoContable = serializeToJson($(this).serializeArray());
				ck 				= $(".ckParcial").is(':checked');
				parcial 		= null;
				var parciales	= new Array();
				if(ck){
					//parcial = serializeSection($(".detalleParcial"));
					var cn = 0;
					$(".detalleParcial").each(function(i,p){
						parcial 			= new Object();
						parcial.monto 		= $(this).find(".txtParcialMonto").val();
						parcial.descripcion = $(this).find(".txtAreaParcialDescripcion").val();
						parciales[cn] = parcial;
						cn++;
					});
				}
				asientoContable.parciales 	 = parciales;
				asientoContable.nombreCuenta = $(".cbCuenta option:selected").text(); 
				//console.log("asiento contable es:",asientoContable)
				frmPartida(asientoContable);
			});
		// click
			// seccion agregar parcial
				$(document).on("click",".btnMenosParcial",function(){
					divParcial = $(this).parents(".detalleParcial");
					divParcial.remove();
				});
				$(document).on("click",".btnMasParcial",function(){
					divParcial = $(this).parents(".detalleParcial");
					//console.log("mas parcial");
					btnMasParcial(divParcial);
				});
				$(document).on("click",".ckParcial",function(){
					ck = $(".ckParcial").is(':checked');
					//console.log("ck es ",ck);
					if(ck){
						$(".divParcial").removeClass("hidden");
					}else{
						$(".divParcial").addClass("hidden");
					}
				});
			// partidas 
				$(document).on("click",".btnGuardarPartida",function(){
					var asientos 	= new Array();
					var asiento;
					var parcial;
					var cn 			= 0;
					$(".tbAsiento").each(function(i,detalleAsiento){
						asiento 		= new Object(); 	
						/*asiento.cuenta 	= $(this).find(".txtHdIdCuenta").val();
						asiento.tipo 	= $(this).find(".txtHdTipoTrans").val();
						asiento.cargo	= $(this).find(".tdCargo").text();
						asiento.abono 	= $(this).find(".tdAbono").text();*/
						asiento = serializeSection($(this));
						asiento.txtHdMonto = $(this).find(".txtHdMonto").val();
						var j 			= 0;
						parciales 		= new Array();
						$(this).find(".trParcial").each(function(ii,detalleParcial){
							/*parcial 				= new Object();
							parcial.monto 			= $(this).find(".tdParcial").text();
							parcial.descripcion 	= $(this).find(".tdDescripcion").text();*/
							parcial = serializeSection($(this));
							parciales[j] 			= parcial;
							//console.log("parcial en el foreach",parcial);
							j++;
						});
						//console.log("salio con j",j);
						asiento.parciales 	= parciales; 
						//console.log("asiento cuando salio",asiento);
						asientos[cn] 		= asiento;
						cn++;
					});
					generales = serializeSection($(".divGenerales"));
					frm = {
						asientos: asientos,
						generales: generales
					}
					btnGuardarPartida(frm);
				});
})