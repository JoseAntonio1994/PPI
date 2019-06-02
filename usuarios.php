<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Usuarios</title>

	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="recursos/css/index.css">
</head>
<body>

	<?php
		include 'header.php';
		include 'navbar.php';
	?>

	<div class="container">
		<center>
			<h3>Usuarios</h3>
		</center>
		<div class="row">
			<div class="col-sm-12">
				<div class="col-sm-2">
					<a href=""><img src="recursos/img/servicio.png" class="img-thumbnail" alt="Cinque Terre" width="150px" height="150px"></a>
					<center>
						<label class="menu-conf">Registro manual de usuarios</label>
					</center>
				</div>
				<div class="col-sm-2">
					<a href=""><img src="recursos/img/tutorias/grupos.png" class="img-thumbnail" alt="Cinque Terre" width="150px" height="150px"></a>
					<center>
						<label class="menu-conf">Consulta de usuarios</label>
					</center>
				</div>
			</div>
		</div>
	</div>

	<?php
		include "footer.php";
	?>

</body>
</html>