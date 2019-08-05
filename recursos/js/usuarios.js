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

//Función para capturar los valores del formulario de login y realizar una petición al servidor para saber si existe las credenciales del usuario
$('#loginForm').submit(function(event){

	var parametros = $(this).serialize();

	$.ajax({
		type: "POST",
		url: 'http://localhost/PPI/ajax/usuarios.php?apiusuarios=login_usuario',
		data: parametros,
		dataType: 'json',
		success: function(data){

			if (data['error'] == false) {
				var cod_usuario = data['contenido'].cod_usuario;
				var nom_usuario = data['contenido'].nom_usuario;
				var cod_rol = data['contenido'].cod_rol;

				cargarSession(cod_usuario, nom_usuario, cod_rol);

				$('#menu_seleccionado').empty();
				$('#menu_seleccionado').load("menus/inicio.php");
				location.reload();
			} 
			else 
			{
				var html = '<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+ data['message'] +'</div>';
				$('.mensaje_error').html(html);
			}
		},
		error: function(data){
			alert("Error en el login");
		}
	});

	event.preventDefault();

});

function cargarSession(cod_usuario, nom_usuario, cod_rol){

	var parametros = {
		"cod_usuario" : cod_usuario,
		"nom_usuario" : nom_usuario,
		"cod_rol" : cod_rol
	};

	$.ajax({
		type: 'POST',
		url: 'session.php',
		data: parametros,
		dataType: 'json',
		success: function(data){
			console.log("Variables de sesión creadas");
		},
		error: function(data){
			console.log("No se pudo crear las variables de sesion");
		}
	});
}

function limpiar(){
	$('#nom_usuario').val("");
	$('#correo').val("");
	$('#password').val("");
	$('#password2').val("");
}