// genericas 
	function getSelectCuentas(cuentas){
		options = "<option value='-1'></option>";
		if(cuentas !== null){
			$.each(cuentas,function(i,cuenta){
				options += "<option value='"+cuenta.idCuenta+"'>"+cuenta.nombre+"</option>";
			});
		}
		return options;
	}
// acciones scripts
	function cbTipoCuenta(frm){
		cargarObjetoGeneral(baseurl+"libros/getCuentasFromTipo",frm,function(data){
			console.log("la respuesta del servidor es: ",data);
			data = jQuery.parseJSON(data);
			console.log(data);
			if(data.estado){
				options = getSelectCuentas(data.cuentas);
				$(".cbTipoCuenta").empty().append(options);
			}else{
				alert("Error en la carga")
			}
		})
	}