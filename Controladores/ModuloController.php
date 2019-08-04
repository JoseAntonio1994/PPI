<?php

require_once '../modelos/Modulo.php';

/**
 * 
 */
class ModuloController
{
	public function readModuloController()
	{
		$respuesta = Modulo::readModulosModel("modulos");
		return $respuesta;
	}

	public function readModuloRolController($cod_rol)
	{
		$datosController = array("cod_rol"=>$cod_rol);

		$respuesta = Modulo::readModulosRolesModel($datosController);

		return $respuesta;
	}
}

?>