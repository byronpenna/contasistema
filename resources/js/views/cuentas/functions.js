// acciones scripts 
	function btnDelete(tr){
		frm = serializeSection(tr);
		console.log("formulario a eliminar",frm);
		cargarObjetoGeneral(baseurl+"cuentas/ajax_eliminarCuenta",frm,function(data){
			console.log("respuesta del servidor(ajax_eliminarCuenta) ",data);
			data = jQuery.parseJSON(data);
			if(data.estado){
				tr.remove();
			}else{
				alert("Ocurrio un error");
			}
		});
	}
	function guardarCuenta(frm){
		cargarObjetoGeneral(baseurl+"cuentas/ajax_agregarCuenta",frm,function(data){
			console.log("la respuesta del servidor es",data);
			data = jQuery.parseJSON(data);
			if(data.estado){
				window.location.reload();
			}else{
				alert("Ocurrio un error");
			}
		});
	}