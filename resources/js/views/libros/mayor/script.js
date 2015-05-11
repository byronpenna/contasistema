$(document).ready(function(){
	// eventos 
		// change
			$(document).on("change",".cbTipoCuenta",function(e){
				frm = {idTipoCuenta: $(this).val()};
				cbTipoCuenta(frm);
			})
});