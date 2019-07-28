<?php

require_once '../modelos/Rol.php';

class RolController
{
	public function readRolController()
	{
		$respuesta = Rol::readRolesModel("roles");
		return $respuesta;
	}
}

?>