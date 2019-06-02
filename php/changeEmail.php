<?php
	session_start();

	include '../config/db/conexion.php';
	
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	$email = $_POST['email'];

	if (password_verify($password, $_SESSION['password'])) 
	{
		$sql = "UPDATE usuarios SET correo = '$email' WHERE nom_usuario = '".$_SESSION['nom_usuario']."'";

		if ($conn->query($sql) === TRUE) {
			$_SESSION['aviso'] = "success";
			$_SESSION['mensaje'] = "Los cambios se han guardado satisfactoriamente";
			updateEmail();
			$conn->close();
		    header("Location: http://localhost/PPI/perfil.php");
		    die();
		} else {
			$_SESSION['aviso'] = "no";
			$_SESSION['mensaje'] = "No se pudo cambiar el correo electrónico";
			$conn->close();
		    header("Location: http://localhost/PPI/perfil.php");
			die();
		}
	}
	else
	{
		$_SESSION['aviso'] = "error";
		$_SESSION['mensaje'] = "La contraseña es incorrecta";
		$conn->close();
		header("Location: http://localhost/PPI/perfil.php");
		die();
	}

	function updateEmail()
	{
		include '../config/db/conexion.php';
		
		$sql = "SELECT correo FROM usuarios WHERE nom_usuario = '".$_SESSION['nom_usuario']."'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
		        $_SESSION['correo'] = $row['correo'];
		    }
		}
	}
?>