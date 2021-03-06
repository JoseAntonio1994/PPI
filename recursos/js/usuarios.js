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
				var correo = data['contenido'].correo;
				var cod_rol = data['contenido'].cod_rol;
				var created_at = data['contenido'].created_at;

				cargarSession(cod_usuario, nom_usuario, correo, cod_rol, created_at);

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
			var html = '<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Error en el login</div>';
			$('.mensaje_error').html(html);
		}
	});

	event.preventDefault();

});

//Función para invocar al formulario de cambiar contraseña
$('#changePassword').click(function(e){
	$('#menu_seleccionado').empty();
	$('#menu_seleccionado').load("perfil/changePassword.php");
	e.preventDefault();
});

//Función para invocar al formulario de cambiar correo electrónico
$('#changeEmail').click(function(e){
	$('#menu_seleccionado').empty();
	$('#menu_seleccionado').load("perfil/changeEmail.php");
	e.preventDefault();
});

//Función para cambiar la contraseña en la opción de perfil de usuario
$('#changePasswordForm').submit(function(event){

	var cod_usuario = $('#cod_usuario').val();
	var password = $('#password').val();
	var new_password = $('#new_password').val();

	var parametros = {
		"cod_usuario": cod_usuario,
		"new_password": new_password
	};

	$.ajax({
		type: 'POST',
		url: 'http://localhost/PPI/ajax/usuarios.php?apiusuarios=change_password',
		data: parametros,
		dataType: 'json',
		success: function(data){
			var html = '<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+ data['message'] +'</div>';
			$('.mensaje').html(html);
					
		},
		error: function(data){
			var html = '<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Error al cambiar la contraseña</div>';
			$('.mensaje').html(html);
				
		} 
	});

	event.preventDefault();
});

//Función para invocar al formulario de cambiar contraseña al darle click al botón de cambiar contraseña
$('#changeEmail').click(function(e){
	$('#menu_seleccionado').empty();
	$('#menu_seleccionado').load("perfil/changeEmail.php");
	e.preventDefault();
});

//Función para cambiar el correo electrónico en la opción de perfil de usuario
$('#changeEmailForm').submit(function(event){

	var cod_usuario = $('#cod_usuario').val();
	var password = $('#password').val();
	var correo = $('#email').val();

	var parametros = {
		"cod_usuario": cod_usuario,
		"correo": correo
	};

	$.ajax({
		type: 'POST',
		url: 'http://localhost/PPI/ajax/usuarios.php?apiusuarios=change_email',
		data: parametros,
		dataType: 'json',
		success: function(data){
			var html = '<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+ data['message'] +'</div>';
			$('.mensaje').html(html);
					
		},
		error: function(){
			var html = '<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Error al cambiar la contraseña</div>';
			$('.mensaje').html(html);
				
		} 
	});

	event.preventDefault();
});

//Función para crear las variables de sesión al existir el usuario
function cargarSession(cod_usuario, nom_usuario, correo, cod_rol, created_at){

	var parametros = {
		"cod_usuario" : cod_usuario,
		"nom_usuario" : nom_usuario,
		"correo": correo,
		"cod_rol" : cod_rol,
		"created_at": created_at
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

//Función para limpiar los campos
function limpiar(){
	$('#nom_usuario').val("");
	$('#correo').val("");
	$('#password').val("");
	$('#password2').val("");
}