<?php

require_once '../Controladores/UsuarioController.php';

//Una matriz para mostrar las respuestas de la api
$response = array();

if (isset($_GET['apiusuarios'])) 
{
	switch ($_GET['apiusuarios']) 
	{
		case 'crear_usuario':
			
			$db = new UsuarioController();

			$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

			$result = $db->createUsuarioController($_POST["nom_usuario"], $_POST["correo"], $password_hash, $_POST["cod_rol"], date("Y-m-d H:i:s"));

			if ($result) 
			{
				$response['error'] = false;
				$response['message'] = "Usuario agregado correctamente";
				$response['contenido'] = $db->readUsuarioController();
			}
			else
			{
				$response['error'] = true;
				$response['message'] = "No se pudo agregar un usuario";
			}

			break;

		case 'login_usuario':
		
			$db = new UsuarioController();

			$result = $db->loginUsuarioController($_POST['usuario'], $_POST['password']);

			if ($result) 
			{
				$response['error'] = false;
				$response['message'] = "Sesión iniciada";
				$response['contenido'] = $result;
			}
			else
			{
				$response['error'] = true;
				$response['message'] = "Usuario o contraseña incorrectos";
			}

			break;

		case 'change_password':

			$db = new UsuarioController();

			$password_hash = password_hash($_POST["new_password"], PASSWORD_DEFAULT);

			$result = $db->updateUsuarioPasswordController($_POST['cod_usuario'], $password_hash);

			if ($result) 
			{
				$response['error'] = false;
				$response['message'] = "Se cambió la contraseña";
				$response['contenido'] = $result;
			}
			else
			{
				$response['error'] = true;
				$response['message'] = "No se pudo cambiar la contraseña";
			}

			break;

		case 'verify_password':
		
			$db = new UsuarioController();

			$result = $db->verifyUsuarioPasswordController($_POST['cod_usuario'], $_POST['password']);

			if ($result) 
			{
				$response['error'] = false;
				$response['message'] = "Las contraseñas son iguales";
				$response['contenido'] = $result;
			}
			else
			{
				$response['error'] = true;
				$response['message'] = "No son iguales las contraseñas";
			}

			break;

		case 'change_email':
				
			$db = new UsuarioController();

			$result = $db->updateUsuarioEmailController($_POST['cod_usuario'], $_POST['correo']);

			if ($result) 
			{
				$response['error'] = false;
				$response['message'] = "Se cambió el correo electrónico";
				$response['contenido'] = $result;
			}
			else
			{
				$response['error'] = true;
				$response['message'] = "No se pudo cambiar el correo electrónico";
			}

			break;
	}
} else 
{
	$response["error"] = true;
	$response["message"] = "No se recibe la petición";
}

echo json_encode($response, JSON_UNESCAPED_UNICODE);

?>