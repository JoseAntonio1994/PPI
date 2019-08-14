$(document).ready(function () {
    cargarRoles();
});

//Función para cargar la lista de roles por medio de una petición ajax a un servicio web
//La respuesta del servidor se asigna al campo de selección de roles en el formulario de registro de usuarios
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