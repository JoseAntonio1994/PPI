$(document).ready(function () {
    cargarRoles();
});

//Función para cargar la lista de roles por medio de una petición ajax
function cargarRoles() {
	$.ajax({
		url: '../ajax/listar_roles.php',
		type: 'GET',
		contentType: "application/json;charset=utf-8",
		dataType: 'json',
		success: function(data){
			
			var roles = '';

			$.each(data, function(key, item){
				roles += '<option value = ' + item.cod_rol + '>' + item.nom_rol + '</option>';
			});

			$('#roles').html(roles);
		},
		error: function(data) {
			console.log("Error al mostrar los roles");
		} 
	});
}