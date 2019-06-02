<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Consulta de usuarios</title>

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
			<h3>Consulta de usuarios</h3>
		</center><br>
		<div class="row">
			<div class="col-sm-12">
				<div class="col-sm-4">
					<input type="text" name="buscar" class="form-control">
				</div>
				<div class="col-sm-4">
					<button class="btn">Buscar</button>
				</div>
				<div class="col-sm-4">
					<button class="btn">Ver todos los usuarios</button>
				</div>
			</div>
		</div><br>

		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Ver</th>
					<th>Editar</th>
					<th>Borrar</th>
					<th>Rol</th>
					<th>Nombre</th>
					<th>Correo</th>
					<th>Fecha de alta</th>
				</tr>
			</thead>
			<tbody>
				<?php
						include 'config/db/conexion.php';

						$query = $conn -> query ("SELECT usuarios.nom_usuario, usuarios.correo, usuarios.created_at, roles.nom_rol FROM usuarios JOIN roles ON usuarios.idroles = roles.idroles");

				        while ($valores = mysqli_fetch_array($query)) {
									         
					          echo "<tr>
					          	<td><button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-eye-open'></span></button></td>
					          	<td><button type='button' class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span></button></td>
					          	<td><button type='button' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span></button></td>
					          	<td>".$valores['nom_rol']."</td>
					          	<td>".$valores['nom_usuario']."</td>
					          	<td>".$valores['correo']."</td>
					          	<td>".$valores['created_at']."</td>
					          </tr>";
				        }

				        $conn->close();
					?>
			</tbody>
		</table>
	</div>

	<?php
		include "footer.php";
	?>

</body>
</html>