// acciones scripts 
	function btnDelete(tr){
		frm = serializeSection(tr);
		console.log("formulario a eliminar",frm);
		cargarObjetoGeneral(baseurl+"cuentas/ajax_agregarCuenta",frm,function(data){

		});
	}
	function guardarCuenta(frm){
		cargarObjetoGeneral(baseurl+"cuentas/ajax_agregarCuenta",frm,function(data){
			console.log("la respuesta del servidor es",data)
		});
	}