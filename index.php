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
</head>
<body>
	<?php
		include 'header.php';
		include 'navbar.php';

		if (isset($_SESSION['aviso']) && isset($_SESSION['mensaje'])) 
		{
			if ($_SESSION['aviso'] == "nologin") 
			{
				echo "<div class='mensaje' style='margin-top: 10px;'><div class='alert alert-danger alert-dismissible fade in'>
			    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			    <strong>Error!</strong> ".$_SESSION['mensaje']."
			  	</div></div>";
			}
			elseif ($_SESSION['aviso'] == "errorlogin") 
			{
				echo "<div class='mensaje' style='margin-top: 10px;'><div class='alert alert-danger alert-dismissible fade in'>
			    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			    <strong>Error!</strong> ".$_SESSION['mensaje']."
			  	</div></div>";
			}
			elseif ($_SESSION['aviso'] == "success") 
			{
				echo "<div class='mensaje' style='margin-top: 10px;'><div class='alert alert-success alert-dismissible'>
			    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			    <strong>Success!</strong> ".$_SESSION['mensaje']."
			  	</div></div>";
			}
			elseif ($_SESSION['aviso'] == "noregister") 
			{
				echo "<div class='mensaje' style='margin-top: 10px;'><div class='alert alert-danger alert-dismissible fade in'>
			    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			    <strong>Error!</strong> ".$_SESSION['mensaje']."
			  	</div></div>";
			}

			unset($_SESSION['mensaje']);
			unset($_SESSION['aviso']);

			session_destroy();
		}
	?>

	<!--  Mostrando los contenidos de manera dinámica    -->

	<div id="alumno" style="display: none;">
         <?php include 'menus/alumnos.php';  ?>
    </div>

    <div id="docente" style="display: none;">
         <?php include 'menus/docentes.php';  ?>
    </div>

    <div id="jefe" style="display: none;">
         <?php include 'menus/jefe.php';  ?>
    </div>

    <div id="administrativo" style="display: none;">
         <?php include 'menus/alumnos.php';  ?>
    </div>

    <div id="empresa" style="display: none;">
         <?php include 'menus/empresas.php';  ?>
    </div>

    <div id="principal" style="display: block;">
        <?php include 'menus/inicio.php';  ?>
    </div>

    <div id="sesion" style="display: none;">
        <?php include 'auth/login.php';  ?>
    </div>

	<script type="text/javascript">

	    var menuAnterior = document.getElementById('principal');

	    function cargarInicioSesion() {
	        var menuActual = document.getElementById('sesion');
	        menuAnterior.style.display = 'none';
	        menuActual.style.display = 'block';
	        menuAnterior = menuActual;
	    }

	    function cargarAlumno() {
	        var menuActual = document.getElementById('alumno');
	        menuAnterior.style.display = 'none';
	        menuActual.style.display = 'block';
	        menuAnterior = menuActual;
	    }

	    function cargarDocente() {
	        var menuActual = document.getElementById('docente');
	        menuAnterior.style.display = 'none';
	        menuActual.style.display = 'block';
	        menuAnterior = menuActual;
	    }

	    function cargarJefe() {
	        var menuActual = document.getElementById('jefe');
	        menuAnterior.style.display = 'none';
	        menuActual.style.display = 'block';
	        menuAnterior = menuActual;
	    }

	    function cargarAdministrativo() {
	        var menuActual = document.getElementById('administrativo');
	        menuAnterior.style.display = 'none';
	        menuActual.style.display = 'block';
	        menuAnterior = menuActual;
	    }

	    function cargarEmpresa() {
	        var menuActual = document.getElementById('empresa');
	        menuAnterior.style.display = 'none';
	        menuActual.style.display = 'block';
	        menuAnterior = menuActual;
	    }

	</script>
</body>
</html>