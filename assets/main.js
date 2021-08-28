function enviarPeticion(objeto, metodo, parametros, callback){
	$.ajax({
		url: '../libs/route.php',
		data: {
			objeto: objeto,
			metodo: metodo,
			parametros: parametros
		},
		type: 'POST',
		dataType: 'json',
		success: function(respuesta){
			if(respuesta.ejecuto == true){
				callback(respuesta)	
			}else{
				alert(respuesta.error)
			}			
		}
	})
}

function parsearFormulario(formulario){
	let arreglo = $(formulario).serializeArray()
	let datos = {}
	for (let i = 0; i < arreglo.length; i++) {
		datos[arreglo[i].name] = arreglo[i].value
	}
	return datos
}