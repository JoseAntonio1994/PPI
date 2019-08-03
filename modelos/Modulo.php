<?php 

require_once 'Conexion.php';

/**
 * 
 */
class Modulo extends Conexion
{
	public function readModulosModel($tabla)
	{
		$stmt = Conexion::conectar()->prepare("SELECT * FROM modulos");
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