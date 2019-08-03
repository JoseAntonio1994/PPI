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
		
	}
} else 
{
	$response["error"] = true;
	$response["message"] = "Error al mostrar los modulos";
}

echo json_encode($response, JSON_UNESCAPED_UNICODE);

?>
