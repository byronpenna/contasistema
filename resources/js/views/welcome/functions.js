function iniciarSesion(frm){
	cargarObjetoGeneral(baseurl+"welcome/ajax_login",frm,function(data){
		console.log(data);
		datos = jQuery.parseJSON(data);
		if(datos.estado){
			window.locationf=baseurl+"";
		}else{
			$(".divErrorMessage").empty().append("Usuario y/o contraseña incorrecta");
		}
	});
}