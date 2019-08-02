$(document).ready(function () {
    cargarRoles();
});

//Función para cargar la lista de roles por medio de una petición ajax a un servicio web
function cargarRoles() {
	$.ajax({
		url: 'http://localhost/PPI/ajax/roles.php?apiroles=leer_roles',
		type: 'GET',
		contentType: "application/json;charset=utf-8",
		dataType: 'json',
		success: function(data){
			
			var roles = '';

			$.each(data["contenido"], function(key, item){
				roles += '<option value = ' + item.cod_rol + '>' + item.nom_rol + '</option>';
			});

			$('#cod_rol').html(roles);
		},
		error: function(data) {
			console.log("Error al mostrar los roles");
		} 
	});
}