// genericas 
	function getTrPartida(partida){
		tr = "\
		<tr>\
			<td></td>\
			<td></td>\
			<td><button class='btn btn-success'>Ver detalle</button></td>\
		</tr>\
		"
	}
// acciones scripts
	function btnBuscar(date){
		frm = {fecha:date};
		console.log("formulario a enviar es: ",frm);
		cargarObjetoGeneral(baseurl+"libros/getPartidasFecha",frm,function(data){
			console.log("El resultado servidor es: ",data);
			data = jQuery.parseJSON(data);
			console.log("El resultado servidor convertido es: ",data);
			if(data.estado){
				if(data.partidas.length >0){
					tr = "";
				}else{
					tr = "\
					<tr class='trNoRegistro'>\
						<td class='text-center' colspan='3'>No hay partidas para ese dia</td>\
					</tr>";
				}	
				$(".tbPartida").empty().append(tr);
			}else{
				alert("ocurrio un error");
			}
		});
	}