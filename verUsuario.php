<?php

  if (isset($_GET['id'])){
      $idusuario=intval($_GET['id']);
    } else {
      echo "error";
  }

?>
<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Perfil</title>

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

    $datos_usuarios = $usuarios->search($idusuario);

	?>

	<center>
		<h2>Perfil</h2>
	</center>

	<div class="contenedor">
		<form method="POST" action="">
			 <div class="form-group row">
                <div class="col-md-2">
                	<center>
                		<h4><?php echo $datos_usuarios->nom_usuario; ?></h4>
                	</center>
                	<img src="recursos/img/servicio.png" class="img-thumbnail" alt="Cinque Terre" width="300px" height="300px">
                </div>
                <div class="col-md-10 b">
                	<label for="nombre" class="col-sm-2">Nombre(s):</label>
					<div class="col-sm-4">
				      <input type="text" class="form-control" value="<?php echo $datos_usuarios->nom_usuario; ?>" disabled>
				    </div>
				    <label for="nombre" class="col-sm-2">Correo:</label>
				    <div class="col-sm-4">
				      <input type="text" class="form-control" value="<?php echo $datos_usuarios->correo; ?>" disabled>
				    </div>
                </div>
                <div class="col-md-10 b">
                	<label for="nombre" class="col-sm-2">Rol:</label>
					<div class="col-sm-4">
				      <input type="text" class="form-control" value="<?php echo $datos_usuarios->nom_rol; ?>" disabled>
				    </div>
				    <label for="nombre" class="col-sm-2">Fecha de alta:</label>
				    <div class="col-sm-4">
				      <input type="text" class="form-control" value="<?php echo $datos_usuarios->created_at; ?>" disabled>
				    </div>
                </div>
            </div>
		</form>
	</div>

	<?php
		include 'footer.php';
	?>
</body>
</html>