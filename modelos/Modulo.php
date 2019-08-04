<?php 

require_once 'Conexion.php';

/**
 * 
 */
class Modulo extends Conexion
{
	public function readModulosModel($tabla)
	{
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
		$stmt->execute();

		$stmt->bindColumn("cod_modulo", $cod_modulo);
		$stmt->bindColumn("nom_modulo", $nom_modulo);

		$modulos = array();

		while ($fila = $stmt->fetch(PDO::FETCH_BOUND)) {
			$modulo = array();
			$modulo["cod_modulo"] = utf8_encode($cod_modulo);
			$modulo["nom_modulo"] = utf8_encode($nom_modulo);

			array_push($modulos, $modulo);

		}

		return $modulos;
	}

	public function readModulosRolesModel($datosModel)
	{
		$stmt = Conexion::conectar()->prepare("SELECT modulos.cod_modulo, modulos.nom_modulo FROM roles_has_permisos JOIN modulos ON roles_has_permisos.cod_modulo = modulos.cod_modulo WHERE roles_has_permisos.cod_rol = :cod_rol");

		$stmt->bindParam("cod_rol", $datosModel["cod_rol"]);

		$stmt->execute();

		$stmt->bindColumn("cod_modulo", $cod_modulo);
		$stmt->bindColumn("nom_modulo", $nom_modulo);

		$modulos = array();

		while ($fila = $stmt->fetch(PDO::FETCH_BOUND)) {
			$modulo = array();
			$modulo["cod_modulo"] = utf8_encode($cod_modulo);
			$modulo["nom_modulo"] = utf8_encode($nom_modulo);

			array_push($modulos, $modulo);

		}

		return $modulos;
		
	}
}

?>