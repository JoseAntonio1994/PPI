<?php

session_start();

if (isset($_POST['cod_usuario']) && isset($_POST['cod_rol'])) 
{
	$_SESSION['cod_usuario'] = $_POST['cod_usuario'];
	$_SESSION['cod_rol'] = $_POST['cod_rol'];

}
if (isset($_SESSION['cod_usuario']) && isset($_SESSION['cod_rol'])) 
{
	echo $_SESSION['cod_rol'];
}
else
{
	echo 'NS';
}

?>