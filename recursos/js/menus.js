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

function cargarSistemas(index){
	$.ajax({
		url: 'http://localhost/PPI/ajax/modulos.php?apisistemas=leer_sistemas',
		type: 'POST',
		parameters: index,
		dataType: 'json',
		success: function(data){
			
			var sistemas = '';

			$.each(data["contenido"], function(key, item){
				modulos += '<a href="javascript:void(0)" onclick="cargarSistemas(' + item.cod_modulo + ')">' + item.nom_modulo + '</a>';
			});

			$('.sistemas').html(modulos);
		},
		error: function(data) {
			alert("Error al mostrar los sistemas");
		} 
	});
}