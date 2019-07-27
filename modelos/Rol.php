<?php

require_once 'Conexion';

class Rol extends Conexion 
{
	public function readRolesModel($tabla)
	{
		$stmt = Conexion::conectar()->prepare("SELECT * FROM roles");
		$stmt->execute();

		$stmt->bindColumn("cod_rol", $cod_rol);
		$stmt->bindColumn("nom_rol", $nom_rol);

		$roles = array();

		while ($fila = $stmt->fetch(PDO::FETCH_BOUND)) {
			$rol = array();
			$rol["cod_rol"] = utf8_encode($cod_rol);
			$rol["nom_rol"] = utf8_encode($nom_rol);

			array_push($usuarios, $rol);

		}

		return $roles;
	}
}

?>