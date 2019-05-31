<?php

	if (!empty($_POST)) {

		include '../config/db/conexion.php';

		session_start();

		$usuario = mysqli_real_escape_string($conn,$_POST['usuario']);
		$password = mysqli_real_escape_string($conn,$_POST['password']);

		$sql = "SELECT * FROM usuarios WHERE nom_usuario = '$usuario'";

		$result = $conn->query($sql);
		$rows = $result->num_rows;

		if ($rows > 0) {
			$row = $result->fetch_assoc();

			if (password_verify($password, $row['password'])) {

				$_SESSION['nom_usuario'] = $row['nom_usuario'];
				$_SESSION['correo'] = $row['correo'];
				$_SESSION['password'] = $row['password'];
				$_SESSION['created_at'] = $row['created_at'];
				$_SESSION['idroles'] = $row['idroles'];
				

				header("Location: http://localhost/procesos/");
			} else {
				$_SESSION['aviso'] = "nologin";
				$_SESSION['mensaje'] = "Usuario o contraseña incorrectos";
				$conn->close();
				header("Location: http://localhost/procesos/");
			}
		} else {
			$_SESSION['aviso'] = "errorlogin";
			$_SESSION['mensaje'] = "Error al acceder a la plataforma";
			$conn->close();
			header("Location: http://localhost/procesos/");
		}
	}
?>