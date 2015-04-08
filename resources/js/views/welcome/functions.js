function iniciarSesion(frm){
	cargarObjetoGeneral(baseurl+"welcome/ajax_login",frm,function(data){
		console.log(data);
		datos = jQuery.parseJSON(data);
		if(datos.estado){
			url = baseurl+"home/";
			window.location=url;
		}else{
			$("#divErrorMessage").empty().append("Usuario y/o contraseña incorrecta");
		}
	});
}