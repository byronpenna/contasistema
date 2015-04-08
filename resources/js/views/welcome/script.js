$(document).ready(function(){
	// eventos
		// submit
			$(document).on("submit","#frm",function(e){
				e.preventDefault();
				var frm = serializeToJson($(this).serializeArray());
				//console.log("El formulario es: ",frm);
				iniciarSesion(frm);
			});
});