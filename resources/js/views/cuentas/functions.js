function guardarCuenta(frm){
	//console.log("base url es",baseurl);
	cargarObjetoGeneral(baseurl+"cuentas/ajax_agregarCuenta",frm,function(data){
		console.log("la respuesta del servidor es",data)
		
	});
}