$(document).ready(function(){
	// eventos
		// click
			$(document).on("click",".btnDelete",function(){
				var x 	= confirm("¿Esta seguro de eliminar esta cuenta?");
				var tr 	= $(this).parents("tr");
				if(x){
					btnDelete(tr);
				}
			});
		// submit
			$(document).on("submit","#frmCuenta",function(e){
				e.preventDefault();
				var x = confirm("¿Esta seguro que desea salvar los cambios?");
				frm = serializeToJson($(this).serializeArray());
				if(x){
					guardarCuenta(frm);
				}
			});
});