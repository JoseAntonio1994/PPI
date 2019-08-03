<?php

require_once 'Conexion.php';

/**
 * 
 */
class Sistema extends Conexion
{
	public function readSistemasModel($datosModel)
	{
		$stmt = Conexion::conectar()->prepare("SELECT modulos_has_sistemas.cod_mod_sis, sistemas.cod_sistema, sistemas.img_sistema, sistemas.nom_sistema FROM modulos_has_sistemas JOIN sistemas ON modulos_has_sistemas.cod_sistema = sistemas.cod_sistema WHERE modulos_has_sistemas.cod_modulo = :cod_modulo");

		$stmt->bindParam(":cod_modulo", $datosModel["cod_modulo"]);

		$stmt->execute();

		$stmt->bindColumn("cod_mod_sis", $cod_mod_sis);
		$stmt->bindColumn("cod_sistema", $cod_sistema);
		$stmt->bindColumn("img_sistema", $img_sistema);
		$stmt->bindColumn("nom_sistema", $nom_sistema);

		$sistemas = array();

		while ($fila = $stmt->fetch(PDO::FETCH_BOUND)) {
			$sistema = array();
			
			$sistema["cod_mod_sis"] = utf8_encode($cod_mod_sis);
			$sistema["cod_sistema"] = utf8_encode($cod_sistema);
			$sistema["img_sistema"] = utf8_encode($img_sistema);
			$sistema["nom_sistema"] = utf8_encode($nom_sistema);

			array_push($sistemas, $sistema);

		}

		return $respuesta = (!empty($sistemas)) ? $sistemas : false;

	}
}

?>
