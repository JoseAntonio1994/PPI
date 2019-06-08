<?php
	session_start();

	$_SESSION['email'] = $_POST['email'];
	$_SESSION['password'] = $_POST['password'];
	$_SESSION['password2'] = $_POST['password2'];
	$_SESSION['rol'] = $_POST['rol'];

	if (isset($_POST['siguiente'])) 
	{
		if ($_SESSION['rol'] == 'administrador') 
		{
			header("Location: ../auth/registerAdmin.php");
		}
		if ($_SESSION['rol'] == 'alumno') 
		{
			header("Location: ../auth/registerAlumno.php");
		}
		if ($_SESSION['rol'] == 'docente') 
		{
			header("Location: ../auth/registerDocente.php");
		}
		if ($_SESSION['rol'] == 'jefe') 
		{
			header("Location: ../auth/registerJefe.php");
		}
		if ($_SESSION['rol'] == 'administrativo') 
		{
			header("Location: ../auth/registerAdministrativo.php");
		}
		if ($_SESSION['rol'] == 'empresa') 
		{
			header("Location: ../auth/registerEmpresa.php");
		}
	}
	if (isset($_POST['regresar'])) 
	{
		session_destroy();
		header("Location: ../index.php");
	}

?>