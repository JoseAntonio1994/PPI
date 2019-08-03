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
}

?>