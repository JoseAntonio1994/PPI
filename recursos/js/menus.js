$(document).ready(function(){
	$('#menu_seleccionado').load("menus/inicio.php");
});

$('#home').click(function(e){
	$('#menu_seleccionado').empty();
	$('#menu_seleccionado').load("menus/inicio.php");
	e.preventDefault();
});

$('#login').click(function(e){
	$('#menu_seleccionado').empty();
	$('#menu_seleccionado').load("auth/login.php");
	e.preventDefault();
});

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

