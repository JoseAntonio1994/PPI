<?php
	session_start();
	
	$usuario = $_POST['usuario'];
	$correo = $_POST['email'];
	$rol = $_POST['rol'];
	$password = $_POST['password'];
	$passHash = password_hash($password, PASSWORD_DEFAULT);
	$fecha = date("Y-m-d H:i:s");

	include '../config/db/conexion.php';

	$consulta = "insert into usuarios values (NULL,'$usuario','$correo','$passHash', '$rol','$fecha',NULL)";

	$resultado = mysqli_query($conn, $consulta);

	if ($resultado) {
		$_SESSION['aviso'] = "success";
		$_SESSION['mensaje'] = "Usuario registrado";
		$conn->close();
		header("Location: http://localhost/procesos/");
		die();
	}
	else {
		$_SESSION['aviso'] = "noregister";
		$_SESSION['mensaje'] = "Error al registrar a un usuario";
		$conn->close();
		header("Location: http://localhost/PPI/");
		die();
	}

?>