<?php

require_once 'Conexion.php';

class Ciudad extends Conexion
{
	function __construct()
	{
		$this->connect_db();
	}

	/**
	 *  Método para limpiar las variables antes de poder registrar en la base de datos, esto se hace para evitar posibles inyecciones SQL en la base de datos.
	 */
	public function sanitize($var){
	  $clean = mysqli_real_escape_string($this->con, $var);
	  return $clean;
	}

	public function read($id){
		$sql = "SELECT * FROM ciudad WHERE idestado = $id";
		$res = mysqli_query($this->con, $sql);
		return $res;
	}

	public function close()
	{
		$this->con->close();
	}
}

?>