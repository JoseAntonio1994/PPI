//Por defecto cargamos el menú principal
$(document).ready(function(){
	$('#menu_seleccionado').load("menus/inicio.php");
});

//Función para cargar el menú principal
$('#home').click(function(e){
	$('#menu_seleccionado').empty();
	$('#menu_seleccionado').load("menus/inicio.php");
	e.preventDefault();
});

//Función para cargar el formulario de inicio de sesión
$('#login').click(function(e){
	$('#menu_seleccionado').empty();
	$('#menu_seleccionado').load("auth/login.php");
	e.preventDefault();
});

//Función para cargar el formulario de registro de usuarios
$('#register').click(function(e){
	$('#menu_seleccionado').empty();
	$('#menu_seleccionado').load("auth/registerUser.php");
	e.preventDefault();
});

//Función para invocar a la opción de perfil de usuario
$('#perfil').click(function(e){
	$('#menu_seleccionado').empty();
	$('#menu_seleccionado').load("perfil.php");
	e.preventDefault();
});

