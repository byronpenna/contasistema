// genericas 
	function getTrPartida(partida){
		tr = "\
		<tr>\
			<td>"+partida.fecha+"</td>\
			<td>"+partida.comentario+"</td>\
			<td>\
				<a href='"+baseurl+"partidas/getTodaPartida/"+partida.id+"'>\
					<button class='btn btn-success'>Ver detalle</button>\
				</a>\
			</td>\
		</tr>\
		";
		return tr;
	}
	function getTrsPartidas(partidas){
		tbody = "";
		$.each(partidas,function(i,partida){
			tbody += getTrPartida(partida);
		})
		return tbody;
	}
// acciones scripts
	function btnBuscar(date){
		frm = {fecha:date};
		console.log("formulario a enviar es: ",frm);
		stringLoader = "\
		<tr>\
			<td colspan='3' class='text-center'><img src='"+urlImgGif+"'></td>\
		</tr>\
		";
		cargarObjetoGeneral(baseurl+"libros/getPartidasFecha",frm,function(data){
			console.log("El resultado servidor es: ",data);
			data = jQuery.parseJSON(data);
			console.log("El resultado servidor convertido es: ",data);
			if(data.estado){
				if(data.partidas.length >0){
					tr = getTrsPartidas(data.partidas);
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
		},$(".tbPartida"),stringLoader);
	}