<?php

require_once '../modelos/Rol.php';

class RolController
{
	public function readRolController()
	{
		$respuesta = Rol::readRolesModel("roles");
		echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
	}
}

?>