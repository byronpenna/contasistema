$(document).ready(function(){
	$(document).on("submit","#frmCuenta",function(e){
		e.preventDefault();
		var x = confirm("¿Esta seguro que desea salvar los cambios?");
		frm = serializeToJson($(this).serializeArray());
		//console.log("El formulario es",frm);
		if(x){
			guardarCuenta(frm);
		}
	});
});