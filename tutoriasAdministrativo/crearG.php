<?php
$idGrupo = $_POST['idGrupo'];
$clave  = $_POST['clave'];
$horario = $_POST['horario'];
$cantidad  = $_POST['cantidad'];
$iddocente = $_POST['iddocente'];

include '../config/db/conexion.php';
$sql_query = "INSERT INTO grupo (idGrupo, clave, horario, cantidad, iddocente) VALUES ($idGrupo, '$clave', '$horario', $cantidad, $iddocente)";
$resultset = mysqli_query($conn, $sql_query) or die("error base de datos:" . mysqli_error($conn));
echo $resultset;
    #echo "<script>alert('idGrupo es: ".$idGrupo."clave es: ".$clave."horario es: ".$horario."cantidad es: ".$cantidad."docente id : ".$idDocente."');</script>";
