<?php

require_once '../Controladores/RolController.php';

//Una matriz para mostrar las respuestas de la api
$response = array();

if (isset($_GET['apiroles'])) 
{
	switch ($_GET['apiroles']) 
	{
		case 'leer_roles':
			
			$db = new RolController();
			$response["error"] = false;
			$response["message"] = "Solicitud completada";
			$response["contenido"] = $db->readRolController();
			break;
		
	}
} else 
{
	$response["error"] = true;
	$response["message"] = "Error al mostrar los roles";
}

echo json_encode($response, JSON_UNESCAPED_UNICODE);

?>