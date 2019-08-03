<!-- Archivo que contiene la estructura principal de la plataforma y el contenido irá cambiando dinamicamente según se seleccione las opciones en la barra de menú.  -->
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Inicio</title>

	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="recursos/css/index.css">
    <link rel="stylesheet" type="text/css" href="recursos/css/menus.css">
</head>
<body>
	<?php
		include 'header.php';
		include 'navbar.php';

		
	?>

	<div id="menu_seleccionado">
		
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="recursos/js/menus.js"></script>
<script src="recursos/js/modulos.js"></script>
</body>
</html>