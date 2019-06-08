<?php
	session_start();

	if (isset($_POST['siguiente']) || isset($_POST['regresar'])) 
	{
		if ($_POST['regresar']) 
		{
			header("Location: ../auth/registerUser.php");
		}
		if ($_POST['siguiente']) 
		{
			echo $_SESSION['email'];
			echo $_SESSION['password'];
		}
	}
	else
	{
		echo 'error';
	}
?>