<?php

/**
 * 
 */
class Usuarios
{
	private $con;
	private $dbhost="localhost";
	private $dbuser="root";
	private $dbpass="";
	private $dbname="ppi";

	function __construct()
	{
		$this->connect_db();
	}

	/**
	 *  Método para conectarse a la base de datos.
	 */
	public function connect_db(){
		$this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
		if(mysqli_connect_error()){
			die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
		}
	}

	/**
	 *  Método para limpiar las variables antes de poder registrar en la base de datos, esto se hace para evitar posibles inyecciones SQL en la base de datos.
	 */
	public function sanitize($var){
	  $clean = mysqli_real_escape_string($this->con, $var);
	  return $clean;
	}

	public function create($nombres,$apellidos,$telefono,$direccion,$correo_electronico){
		$sql = "INSERT INTO `clientes` (nombres, apellidos, telefono, direccion, correo_electronico) VALUES ('$nombres', '$apellidos', '$telefono', '$direccion', '$correo_electronico')";
		$res = mysqli_query($this->con, $sql);
		$resultado = ($res) ? true : false;
		return $resultado;
	}

	public function read(){
		$sql = "SELECT * FROM clientes";
		$res = mysqli_query($this->con, $sql);
		return $res;
	}

	public function search($id){
		$sql = "SELECT * FROM clientes where id='$id'";
		$res = mysqli_query($this->con, $sql);
		$return = mysqli_fetch_object($res );
		return $return ;
	}

	public function update($nombres,$apellidos,$telefono,$direccion,$correo_electronico, $id){
		$sql = "UPDATE clientes SET nombres='$nombres', apellidos='$apellidos', telefono='$telefono', direccion='$direccion', correo_electronico='$correo_electronico' WHERE id=$id";
		$res = mysqli_query($this->con, $sql);
		$resultado = ($res) ? true : false;
		return $resultado;
	}

	public function delete($id){
		$sql = "DELETE FROM clientes WHERE id=$id";
		$res = mysqli_query($this->con, $sql);
		$resultado = ($res) ? true : false;
		return $resultado;
	}

}

?>