<?php
	$conexion = mysqli_connect("localhost", "root", "", "ppi");

	$estado = $_POST['estado'];

	$query = $conexion->query("SELECT * FROM ciudad WHERE idestado = $estado");

	echo '<option value = "">Selecciona tu ciudad</option>';

	while ($row = $query->fetch_assoc()) 
	{
		echo '<option value="'.$row['idciudad'].'">'.$row['nom_ciudad'].'</option>'."\n";
	}

	$conexion->close();
?>