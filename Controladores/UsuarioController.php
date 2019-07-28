<?php 

require_once '../modelos/Usuario.php';

class UsuarioController {

	public function createUsuarioController($nom_usuario, $correo, $password, $cod_rol, $created_at)
	{
		$datosController = array("nom_usuario"=>$nom_usuario,
								"correo"=>$correo,
								"password"=>$password,
								"cod_rol"=>$cod_rol,
								"created_at"=>$created_at);

		$respuesta = Usuario::createUsuarioModel($datosController, "usuarios");

		return $respuesta;
	}

	public function readUsuarioController()
	{
		$respuesta = Usuario::readUsuariosModel("usuarios");
		return $respuesta;
	}

	public function loginUsuarioController($nom_usuario, $password)
	{
		$datosController = array("nom_usuario"=>$nom_usuario,
				"password"=>$password);

		$respuesta = Usuario::loginUsuariosModel($datosController, "usuarios");

		return $respuesta;
	}

	public function updateUsuarioEmailController($cod_usuario, $correo)
	{
		$datosController = array("cod_usuario"=>$cod_usuario, "correo"=>$correo);

		$respuesta = Usuario::updateUsuarioEmailModel($datosController, "usuarios");

		return $respuesta;
	}

	public function updateUsuarioPasswordController($cod_usuario, $password)
	{
		$datosController = array("cod_usuario"=>$cod_usuario, "password"=>$password);

		$respuesta = Usuario::updateUsuarioPasswordModel($datosController, "usuarios");

		return $respuesta;
	}

	public function deleteCategoriaController($cod_usuario)
	{
		$respuesta = Usuario::deleteUsuarioModel($cod_usuario, "usuarios");
		return $respuesta;
	}

}

?>