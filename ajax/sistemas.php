<?php

require_once '../Controladores/SistemaController.php';

//Una matriz para mostrar las respuestas de la api
$response = array();

if (isset($_GET['apisistemas'])) 
{
	switch ($_GET['apisistemas']) {

		case 'leer_sistemas':

			$db = new SistemaController();

			$result = $db->readSistemaController($_POST['cod_modulo']);

			if ($result) {
				$response['error'] = false;
				$response['message'] = "Sistemas mostrados";
				$response['contenido'] = $result;
			}else
			{
				$response['error'] = true;
				$response['message'] = "No se pudo mostrar los sistemas";
			}

			break;
		
	}
}
else
{
	$response["error"] = true;
	$response["message"] = "No se recibe la petición";
}

echo json_encode($response, JSON_UNESCAPED_UNICODE);

?>