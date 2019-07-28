$(document).ready(function () {
    
});

//Función para cargar la lista de roles por medio de una petición ajax a un servicio web
$('#registerUser').submit(function(event){

	var parametros = $(this).serialize();

	$.ajax({
		type: "POST",
		url: "../ajax/usuarios.php?apiusuarios=crear_usuario",
		data: parametros,
		dataType: 'json',
		success: function(data){
			$('.alert-success').show();
			$('#success').html(data["message"]);
			limpiar();
		},
		error: function(){
			console.log("Falló la respuesta");
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