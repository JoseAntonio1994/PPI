<?php

session_start();

//Condición para crear las variables de sesión cuando el usuario está iniciando sesión
if (isset($_POST['cod_usuario']) && isset($_POST['nom_usuario']) && isset($_POST['cod_rol'])) 
{
	$_SESSION['cod_usuario'] = $_POST['cod_usuario'];
	$_SESSION['nom_usuario'] = $_POST['nom_usuario'];
	$_SESSION['cod_rol'] = $_POST['cod_rol'];

}
//Condición para verificar que la sesión existe
if (isset($_SESSION['cod_usuario']) && isset($_SESSION['nom_usuario']) && isset($_SESSION['cod_rol'])) 
{
	echo $_SESSION['cod_rol'];
}
//Condición para cerrar la sesión y eliminar las variables de sesión
if (isset($_POST['logout'])) 
{
	session_destroy();
}
//Por defecto devolvemos un valor que indica que no hay una sesión activa
else
{
	echo 'NS';
}

?>