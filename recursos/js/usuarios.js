$(document).ready(function () {
    
});

//Función para cargar la lista de roles por medio de una petición ajax a un servicio web
$('#registerUser').submit(function(event){

	var parametros = $(this).serialize();

	$.ajax({
		type: "POST",
		url: 'http://localhost/PPI/ajax/usuarios.php?apiusuarios=crear_usuario',
		data: parametros,
		dataType: 'json',
		success: function(data){
			$('.alert-success').show();
			$('#success').html(data["message"]);
			limpiar();
		},
		error: function(){
			$('#alert-danger').show();
			$('#alert-danger').html("Falló la respuesta");
		} 
	});

	event.preventDefault();

});

$('#loginForm').submit(function(event){

	var parametros = $(this).serialize();

	$.ajax({
		type: "POST",
		url: 'http://localhost/PPI/ajax/usuarios.php?apiusuarios=login_usuario',
		data: parametros,
		dataType: 'json',
		success: function(data){

			var cod_usuario = data['contenido'].cod_usuario;
			var cod_rol = data['contenido'].cod_rol;

			cargarSession(cod_usuario, cod_rol);

			$('#menu_seleccionado').empty();
			$('#menu_seleccionado').load("menus/inicio.php");
			location.reload();
		},
		error: function(data){
			alert("Error en el login");
		}
	});

	event.preventDefault();

});

function cargarSession(cod_usuario, cod_rol){

	var parametros = {
		"cod_usuario" : cod_usuario,
		"cod_rol" : cod_rol
	};

	$.ajax({
		type: 'POST',
		url: 'session.php',
		data: parametros,
		dataType: 'json',
		success: function(data){

		},
		error: function(data){
			alert("No se pudo crear las variables de sesion");
		}
	});
}

function limpiar(){
	$('#nom_usuario').val("");
	$('#correo').val("");
	$('#password').val("");
	$('#password2').val("");
}