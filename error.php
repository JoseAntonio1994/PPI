<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Registro exitoso</title>

	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="recursos/css/login.css">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="recursos/css/index.css">

</head>
<body>

	<?php
		include 'header.php';
		include 'navbar.php';
	?>

	<div class="container">
    <div class="justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">AVISO</div>

                <div class="card-body">
                    <form method="POST" action="index.php">

                    	<div class="content">
                            <p>Hubo errores al registrar el usuario.</p><br>
                            <p>Vuelve a registrarte</p>
                   
                            <button type="submit" class="btn btn-primary" style="margin-top: 20px;margin-bottom: 20px">
                                    Aceptar
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
	include 'footer.php';
?>

</body>
</html>