<?php

require_once '../Controladores/ModuloController.php';

//Una matriz para mostrar las respuestas de la api
$response = array();

if (isset($_GET['apimodulos'])) 
{
	switch ($_GET['apimodulos']) 
	{
		case 'leer_modulos':
			
			$db = new ModuloController();
			$response["error"] = false;
			$response["message"] = "Solicitud completada";
			$response["contenido"] = $db->readModuloController();
			break;

		case 'asignar_modulos':
		
			$db = new ModuloController();

			$result = $db->readModuloRolController($_POST['cod_rol']);

			if ($result)
			{
				$response["error"] = false;
				$response["message"] = "Solicitud completada";
				$response["contenido"] = $result;
			}else
			{
				$response["error"] = true;
				$response["message"] = "Hubo un error al asignar los modulos";
			}

			
			break;	
		
	}
} else 
{
	$response["error"] = true;
	$response["message"] = "Error al mostrar los modulos";
}

echo json_encode($response, JSON_UNESCAPED_UNICODE);

?>
