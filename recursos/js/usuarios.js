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

			var nom_usuario = data['contenido'].nom_usuario;
			var correo = data['contenido'].correo;
			var password = data['contenido'].password;
			var cod_rol = data['contenido'].cod_rol;

			
		},
		error: function(data){
			alert("Error en el login");
		}
	});

	event.preventDefault();

});

function limpiar(){
	$('#nom_usuario').val("");
	$('#correo').val("");
	$('#password').val("");
	$('#password2').val("");
}