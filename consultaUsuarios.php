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

		include 'modelos/Usuarios.php';

		$usuarios = new Usuarios();
		$listado = $usuarios->read();
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
					while($row = mysqli_fetch_object($listado)) {
						$idusuarios = $row->idusuarios;
						$nombre = $row->nom_usuario;
						$correo = $row->correo;
						$fecha_alta = $row->created_at;
						$rol = $row->nom_rol;
				?>
				<tr>
					<td><a href="verUsuario.php?id=<?php echo $idusuarios; ?>" class='btn btn-primary'><span class='glyphicon glyphicon-eye-open' data-toggle='tooltip'></span></a></td>
		          	<td><a href="modificarPerfil.php?id=<?php echo $idusuarios; ?>" class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span></a></td>
		          	<td><a href="borrarPerfil.php?id=<?php echo $idusuarios; ?>" class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span></a></td>
		          	<td><?php echo $rol; ?></td>
		          	<td><?php echo $nombre; ?></td>
		          	<td><?php echo $correo; ?></td>
		          	<td><?php echo $fecha_alta; ?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

	<?php
		include "footer.php";
	?>

</body>
</html>