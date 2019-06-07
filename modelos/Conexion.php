<?php
	

class Conexion 
{
	protected $con;
	protected $dbhost="localhost";
	protected $dbuser="root";
	protected $dbpass="";
	protected $dbname="ppi";

	/**
	 *  Método para conectarse a la base de datos.
	 */
	protected function connect_db(){
		$this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
		if(mysqli_connect_error()){
			die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
		}
	}
}

?>