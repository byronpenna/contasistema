// genericas 
	function getSelectCuentas(cuentas){
		options = "<option value='-1'></option>";
		if(cuentas !== null){
			$.each(cuentas,function(i,cuenta){
				options += "<option value='"+cuenta.idCuenta+"'>"+cuenta.nombre+"</option>";
			});
		}
		return options;
	}
	function getTrMayorizacion(data){
		trHtml = "";
		if(data.cargos.length >= data.abonos.length){
			$.each(data.cargos,function(i,val){
				abono = "0.0";
				if(data.abonos[i] !== undefined){
					abono = data.abonos[i].monto;
				}
				trHtml += "\
				<tr>\
					<td>$"+val.monto+"</td>\
					<td>$"+abono+"</td>\
				</tr>\
				";
			})
		}else{
			$.each(data.abonos,function(i,val){
				cargo = "0.0";
				if(data.cargos[i] !== undefined){
					cargo = data.cargos[i].monto;
				}
				trHtml += "\
				<tr>\
					<td>$"+cargo+"</td>\
					<td>$"+val.monto+"</td>\
				</tr>\
				";
			})
		}
		return trHtml;
	}
// acciones scripts
	function cbCuenta(frm){
		console.log("el formulario a enviar es: ",frm);
		cargarObjetoGeneral(baseurl+"libros/getLibroMayor",frm,function(data){
			//console.log("la data del servidor es: ",data);
			data = jQuery.parseJSON(data);
			console.log(data);
			if(data.estado){
				if(data.cargos.length > 0 || data.abonos.length > 0){
					tr = getTrMayorizacion(data);	
				}else{
					tr = "<tr class='text-center'><td colspan='2'>Cuenta no tiene asociada partidas para poder mayorizarla</td></tr>";
				}
				$(".tbMayor").empty().append(tr);
			}else{
				alert("Ocurrio un error al cargar libro mayor");
			}
		});
	}
	function cbTipoCuenta(frm){
		console.log("formlario a enviar es:",frm);
		cargarObjetoGeneral(baseurl+"libros/getCuentasFromTipo",frm,function(data){
			console.log("la respuesta del servidor es: ",data);
			data = jQuery.parseJSON(data);
			console.log(data);
			if(data.estado){
				options = getSelectCuentas(data.cuentas);
				$(".cbCuenta").empty().append(options);
			}else{
				alert("Error en la carga")
			}
		})
	}