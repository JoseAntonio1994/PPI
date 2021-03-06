//Realizamos una petición al servidor para saber si hay una sesión activa
$(document).ready(function () {
    //cargarModulos();
    $.ajax({
    	url: 'session.php',
    	type: 'POST',
    	data: {},
    	success: function(data){
    		if (data == 'NS') { cargarModulos(); }
    		else { cargarRolModulos(data); }
    	},
    	error: function(data){
    		alert("No se muestran los modulos");
    	}
    });
});

//Función para cargar los modulos para un usuario no registrado o que se este visitando la plataforma
function cargarModulos(){
	$.ajax({
		url: 'http://localhost/PPI/ajax/modulos.php?apimodulos=leer_modulos',
		type: 'GET',
		contentType: "application/json;charset=utf-8",
		dataType: 'json',
		success: function(data){
			
			var modulos = '';

			$.each(data["contenido"], function(key, item){
				modulos += '<a href="javascript:void(0)" onclick="cargarSistemas(' + item.cod_modulo + ')">' + item.nom_modulo + '</a>';
			});

			$('.modulos').html(modulos);
		},
		error: function(data) {
			alert("Error al mostrar los modulos");
		} 
	});
}

//Función para cargar los módulos de acuerdo al rol del usuario al existir la sesión
function cargarRolModulos(cod_rol){

	var parametros = { "cod_rol": cod_rol };

	$.ajax({
		type: 'POST',
		url: 'http://localhost/PPI/ajax/modulos.php?apimodulos=asignar_modulos',
		data: parametros,
		dataType: 'json',
		success: function(data){

			var modulos = '';

			$.each(data["contenido"], function(key, item){
				modulos += '<a href="javascript:void(0)" onclick="cargarSistemas(' + item.cod_modulo + ')">' + item.nom_modulo + '</a>';
			});

			$('.modulos').html(modulos);

		},
		error: function(){
			alert("No se asignó correctamente los modulos");
		}
	});
}

//Función para cargar los sistemas de acuerdo al modulo seleccionado
function cargarSistemas(index){

	var parametros = {
		"cod_modulo" : index
	};

	$.ajax({
		type: 'POST',
		url: 'http://localhost/PPI/ajax/sistemas.php?apisistemas=leer_sistemas',
		data: parametros,
		dataType: 'json',
		success: function(data){
			
			var sistemas = '';

			$.each(data["contenido"], function(key, item){
				sistemas += '<div class="col-sm-2 col-md-2 col-lg-2 col-xl-2"><img src="'+item.img_sistema+'" class="img-circle" alt="Cinque Terre"><p>'+item.nom_sistema+'</p></div>';
			});

			$('#menu_seleccionado').empty();
			//$('#menu_seleccionado').load("menus/sistemas.php");
			$('#menu_seleccionado').html(sistemas);
			
		},
		error: function(data) {
			alert("Error al mostrar los sistemas");
		} 
	});
}

//Función para cerrar la sesión del usuario
$('#logout').click(function(e){

	var logout = 'logout';

	var parametros = {"logout": logout};

	$.ajax({
		type: 'POST',
		url: 'session.php',
		data: parametros,
		dataType: 'json',
		success: function(){
			$('#menu_seleccionado').empty();
			$('#menu_seleccionado').load("menus/inicio.php");
			location.reload();
		},
		error: function(){
			alert("No se pudo cerrar la sesión");
		}
	});

});