// generic 
	function getDivAddParcial(){
		str = "<div class='detalleParcial'>\
					<div class='col-lg-5'>\
						<label>Monto</label>\
						<input type='text' placeholder='0.00' name='txtParcialMonto' class='txtParcialMonto form-control'>\
					</div>\
					<div class='col-lg-5'>\
						<label>Descripcion</label>\
						<textarea name='txtAreaParcialDescripcion' class='txtAreaParcialDescripcion form-control' ></textarea>\
					</div>\
					<div class='col-lg-2'>\
						<button class='btn btnMasParcial'>+</button>\
						<button class='btn btnMenosParcial'>-</button>\
					</div>\
				</div>";
		return str;
	}
	function trAgregar(trAsiento,trsParcial){
		tr = "\
			<tbody class='tbAsiento'>\
				"+trAsiento+"\
				"+trsParcial+"\
			</tbody>\
		";
		return tr;
	}
	function getTrAsiento(asiento){
		var cargo = "",abono="",tipo;
		if(asiento.cbTipoTrans == 1){
			tipo 	= "Cargo";
			cargo 	= "$"+asiento.txtMonto;
		}else{
			tipo 	= "Abono";
			abono 	= "$"+asiento.txtMonto;
		}
		tr = "\
		<tr class='asientoPrincipal trAsiento'>\
			<input type='hidden' class='txtHdIdCuenta' name='txtHdIdCuenta' value='"+asiento.cbCuenta+"'>\
			<input type='hidden' class='txtHdTipoTrans' name='txtHdTipoTrans'  value='"+asiento.cbTipoTrans+"'>\
			<input type='hidden' class='txtHdMonto' name='txtHdMonto' value='"+asiento.txtMonto+"'>\
			<td class='tdCuenta'>"+asiento.nombreCuenta+"</td>\
			<td class='tdDescripcion'></td>\
			<td class='tdParcial'></td>\
			<td class='tdCargo'>"+cargo+"</td>\
			<td class='tdAbono'>"+abono+"</td>\
		</tr>";
		// <td class='tdTipo'>"+tipo+"</td>\
		return tr;
	}
	function getTrsParcial(parciales){
		tbody = "";
		if(parciales.length > 0){
			$.each(parciales,function(i,parcial){				
				// <td class='tdTipo'></td>\
				tr = "\
				<tr class='trParcial'>\
					<td class='hidden'>\
						<input type='text' name='txtHdMonto' class='txtHdMonto' value='"+parcial.monto+"'>\
						<input type='text' name='txtHdDescripcion' class='txtHdDescripcion' value='"+parcial.descripcion+"'>\
					</td>\
					<td class='tdCuenta'></td>\
					<td class='tdDescripcion'>"+parcial.descripcion+"</td>\
					<td class='tdParcial'>$"+parcial.monto+"</td>\
					<td class='tdCargo'></td>\
					<td class='tdAbono'></td>\
				</tr>\
				";
				tbody += tr;
			});
		}
		return tbody;
	}
// acciones scripts 
	function btnGuardarPartida(frm){
		console.log("formulario a agregar",frm);
		cargarObjetoGeneral(baseurl+"partidas/ajax_guardarPartida",frm,function(data){
			console.log("la data que regreso el servidor es: ",data);
			data = jQuery.parseJSON(data);
			if(data.estado){
				alert("Partida guardada exitosamente");
				window.location.reload();
			}else{
				alert("Ocurrio un error");
			}
		});
	}
	function frmPartida(asiento){
		trAsiento 	= getTrAsiento(asiento);
		trsParcial 	= getTrsParcial(asiento.parciales)
		trAdd 		= trAgregar(trAsiento,trsParcial);
		thead 		= $(".tbPartidas").find("thead");
		if($(".tbAsiento").length == 0){
			thead.after(trAdd);	
		}else{
			$(".tbAsiento").last().after(trAdd);
		}
	}
	function btnMasParcial(divParcial){
		// validar que este lleno el monto
		var monto 		= divParcial.find(".txtParcialMonto").val();
		var descripcion = divParcial.find(".txtAreaParcialDescripcion").val();
		//console.log(monto);
		//console.log(descripcion);
		if(monto != "" && descripcion != ""){
			div = getDivAddParcial();
			divParcial.after(str);
		}else{
			alert("Introdusca monto y descripcion del parcial para agregar otro");
		}
	}