<?php

require_once 'Conexion.php';

class Usuario extends Conexion
{

	
	public function createUsuarioModel($datosModel, $tabla)
	{
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nom_usuario, correo, password, cod_rol, created_at) VALUES (:nom_usuario, :correo, :password, :cod_rol, :created_at)");

		$stmt->bindParam(":nom_usuario", $datosModel["nom_usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":correo", $datosModel["correo"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datosModel["password"], PDO::PARAM_STR);
		$stmt->bindParam(":cod_rol", $datosModel["cod_rol"], PDO::PARAM_INT);
		$stmt->bindParam(":created_at", $datosModel["created_at"], PDO::PARAM_STR);

		return $respuesta = ($stmt->execute()) ? true : false ;
	}

	public function readUsuariosModel($tabla)
	{
		$stmt = Conexion::conectar()->prepare("SELECT  usuarios.cod_usuario, usuarios.nom_usuario, usuarios.correo, usuarios.created_at, roles.nom_rol FROM usuarios JOIN roles ON usuarios.cod_rol = roles.cod_rol");
		$stmt->execute();

		$stmt->bindColumn("cod_usuario", $cod_usuario);
		$stmt->bindColumn("nom_usuario", $nom_usuario);
		$stmt->bindColumn("correo", $correo);
		$stmt->bindColumn("created_at", $created_at);
		$stmt->bindColumn("nom_rol", $nom_rol);

		$usuarios = array();

		while ($fila = $stmt->fetch(PDO::FETCH_BOUND)) {
			$user = array();
			$user["cod_usuario"] = utf8_encode($cod_usuario);
			$user["nom_usuario"] = utf8_encode($nom_usuario);
			$user["correo"] = utf8_encode($correo);
			$user["created_at"] = utf8_encode($created_at);
			$user["nom_rol"] = utf8_encode($nom_rol);

			array_push($usuarios, $user);

		}

		return $usuarios;
	}

	public function loginUsuariosModel($datosModel, $tabla)
	{
		$stmt = Conexion::conectar()->prepare("SELECT cod_usuario, nom_usuario, correo, password, cod_rol, created_at FROM $tabla WHERE nom_usuario = :nom_usuario");

		$stmt->bindParam(":nom_usuario", $datosModel["nom_usuario"]);

		$stmt->execute();

		$stmt->bindColumn("cod_usuario", $cod_usuario);
		$stmt->bindColumn("nom_usuario", $nom_usuario);
		$stmt->bindColumn("correo", $correo);
		$stmt->bindColumn("password", $password);
		$stmt->bindColumn("cod_rol", $cod_rol);
		$stmt->bindColumn("created_at", $created_at);

		while ($fila = $stmt->fetch(PDO::FETCH_BOUND)) {
			$user = array();
			
			if (password_verify($datosModel['password'], $password)) 
			{
				$user["cod_usuario"] = utf8_encode($cod_usuario);
				$user["nom_usuario"] = utf8_encode($nom_usuario);
				$user["correo"] = utf8_encode($correo);
				$user["cod_rol"] = utf8_encode($cod_rol);
				$user["created_at"] = utf8_encode($created_at);
			}

		}

		return $respuesta = (!empty($user)) ? $user : false;
	}

	public function updateUsuarioEmailModel($datosModel, $tabla)
	{
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET correo = :correo  WHERE cod_usuario = :cod_usuario");

		$stmt->bindParam(":correo", $datosModel["correo"], PDO::PARAM_STR);
		$stmt->bindParam(":cod_usuario", $datosModel["cod_usuario"], PDO::PARAM_INT);

		return $respuesta = ($stmt->execute()) ? true : false;
	}

	public function updateUsuarioPasswordModel($datosModel, $tabla)
	{
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET password = :password  WHERE cod_usuario = :cod_usuario");

		$stmt->bindParam(":password", $datosModel["password"], PDO::PARAM_STR);
		$stmt->bindParam(":cod_usuario", $datosModel["cod_usuario"], PDO::PARAM_INT);

		return $respuesta = ($stmt->execute()) ? true : false;
	}

	public function deleteUsuarioModel($id, $tabla)
	{
		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE cod_usuario = :cod_usuario");
		$stmt->bindParam(":cod_usuario", $id, PDO::PARAM_INT);

		return $respuesta = ($stmt->execute()) ? true : false;
	}

}

?>