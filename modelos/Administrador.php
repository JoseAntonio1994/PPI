<?php
require_once 'Conexion.php';

class Administrador extends Conexion
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

	public function read(){
		$sql = "SELECT * FROM administrador";
		$res = mysqli_query($this->con, $sql);
		return $res;
	}

	public function insertUser($nombre, $primer_apellido, $segundo_apellido, $curp, $fecha_naci, $domicilio, $colonia, $idestado, $idciudad, $cod_postal, $correo, $telefono, $civil, $sexo, $password, $idroles)
	{
		
	}

	public function insertAdmin($idescolaridad, $rfc, $nombre)
	{
		$sql = "INSERT INTO administrador VALUES (NULL, (int)'$idescolaridad','$rfc', (SELECT idusuarios FROM usuarios WHERE nom_usuario = '$nombre'))";
		$res = mysqli_query($this->con, $sql);
		return $res;
	}
}

?>