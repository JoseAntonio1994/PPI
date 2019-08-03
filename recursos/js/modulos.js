$(document).ready(function () {
    cargarModulos();
});

function cargarModulos(){
	$.ajax({
		url: 'http://localhost/PPI/ajax/modulos.php?apimodulos=leer_modulos',
		type: 'GET',
		contentType: "application/json;charset=utf-8",
		dataType: 'json',
		success: function(data){
			
			var modulos = '';

			$.each(data["contenido"], function(key, item){
				modulos += '<a href="javascript:void(0)" onclick="cargarSistemas(' + item.cod_modulo + ')">' + item.nom_modulo + '</a>';
			});

			$('.modulos').html(modulos);
		},
		error: function(data) {
			alert("Error al mostrar los modulos");
		} 
	});
}