$(document).ready(function(){
	// eventos 
		// change
			$(document).on("change",".cbCuenta",function(e){
				frm = {idCuenta:$(this).val()}
				if(frm.idCuenta != -1){
					nombreCuenta = $(this).find(":selected").text();
				}else{
					nombreCuenta = "Seleccione cuenta";
				}
				$(".tdNombreCuenta").empty().append(nombreCuenta);
				cbCuenta(frm);
			})
			$(document).on("change",".cbTipoCuenta",function(e){
				frm = {idTipoCuenta: $(this).val()};
				if(frm.idTipoCuenta != -1){
					cbTipoCuenta(frm);	
				}else{
					tr = "\
					<td colspan='2' class='text-center'>\
						Seleccione una cuenta para la mayorizacion\
					</td>\
					";
					$(".tbMayor").empty().append(tr);
				}
				
			})
});