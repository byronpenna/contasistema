$(document).ready(function(){
	// eventos
		// click 
			$(document).on("click",".btnBuscar",function(){
				fecha = $(".dtpFecha").val();
				btnBuscar(fecha);
			});
})