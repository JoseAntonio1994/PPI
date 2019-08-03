<?php

require_once '../modelos/Sistema.php';

class SistemaController {

	public function readSistemaController($cod_modulo)
	{
		$datosController = array("cod_modulo"=>$cod_modulo);

		$respuesta = Sistema::readSistemasModel($datosController);

		return $respuesta;
	}

}

?>