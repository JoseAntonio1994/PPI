<?php
	session_start();

	include '../config/db/conexion.php';
	
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	$newPassword = $_POST['new_password'];
	$passHash = password_hash($newPassword, PASSWORD_DEFAULT);

	if (password_verify($password, $_SESSION['password'])) 
	{
		$sql = "UPDATE usuarios SET password = '$passHash' WHERE nom_usuario = '".$_SESSION['nom_usuario']."'";

		if ($conn->query($sql) === TRUE) {
			$_SESSION['aviso'] = "success";
			$_SESSION['mensaje'] = "Los cambios se han guardado satisfactoriamente";
			changePassword();
			$conn->close();
		    header("Location: http://localhost/procesos/perfil.php");
		    die();
		} else {
			$_SESSION['aviso'] = "no";
			$_SESSION['mensaje'] = "No se pudo cambiar la contraseña";
			$conn->close();
		    header("Location: http://localhost/procesos/perfil.php");
			die();
		}
	}
	else
	{
		$_SESSION['aviso'] = "error";
		$_SESSION['mensaje'] = "La contraseña es incorrecta";
		$conn->close();
		header("Location: http://localhost/procesos/perfil.php");
		die();
	}

	function changePassword()
	{
		include '../config/db/conexion.php';

		$sql = "SELECT password FROM usuarios WHERE nom_usuario = '".$_SESSION['nom_usuario']."'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
		        $_SESSION['password'] = $row['password'];
		    }
		}
	}

?>