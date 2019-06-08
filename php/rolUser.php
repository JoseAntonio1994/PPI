<?php
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$rol = $_POST['rol'];

	if (isset($_POST['siguiente'])) 
	{
		if ($rol == 'administrador') 
		{
			header("Location: ../auth/registerAdmin.php");
		}
		if ($rol == 'alumno') 
		{
			header("Location: ../auth/registerAlumno.php");
		}
		if ($rol == 'docente') 
		{
			header("Location: ../auth/registerDocente.php");
		}
		if ($rol == 'jefe') 
		{
			header("Location: ../auth/registerJefe.php");
		}
		if ($rol == 'administrativo') 
		{
			header("Location: ../auth/registerAdministrativo.php");
		}
		if ($rol == 'empresa') 
		{
			header("Location: ../auth/registerEmpresa.php");
		}
	}
	if (isset($_POST['regresar'])) 
	{
		header("Location: ../index.php");
	}

?>