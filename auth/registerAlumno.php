<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Registro de Usuarios</title>

	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="../recursos/css/index.css">

</head>
<body>
 <?php
 	include 'header.php';
	include '../navbar.php';

    include '../modelos/Estados.php';
    include '../modelos/Carrera.php';

    $estado = new Estados();
    $carrera = new Carrera();
    $estados = $estado->read();
    $carreras = $carrera->read();
 ?>

 <center>
 	<h3>Registro de Usuarios</h3>
 </center>
 <div class="container">
 	<form method="POST" action="">
 		<br>
 	<div class="form-group row">
 		<label class="col-sm-2"><b>Tipo de usuario:</b></label>
 		<div class="col-md-4">
            <input id="nombre" type="text" class="form-control" name="nombre" required autocomplete="nombre" autofocus>
        </div>
        <label class="col-sm-2">Carrera:</label>
        <div class="col-md-4">
            <select id="carreras" class="form-control" name="carreras">
                <option value="">Seleccione tu carrera:</option>
                <?php
                    while ($row = mysqli_fetch_object($carreras)) 
                    {
                        echo '<option value="'.$row->idcarrera.'">'.$row->nom_carrera.'</option>';
                    }

                    $carrera->close();
                ?>
            </select>
        </div>
 	</div>
 	<div class="form-group row">
 		<label class="col-sm-2">Nombre(s):</label>
 		<div class="col-md-4">
            <input id="primer" type="text" class="form-control" name="primer" required autocomplete="primer" autofocus>
        </div>
        <label class="col-sm-1">Número de control:</label>
        <div class="col-md-2">
            <input id="nombre" type="text" class="form-control" name="nombre" required autocomplete="nombre" autofocus>
        </div>
        <label class="col-sm-1">Semestre:</label>
        <div class="col-md-2">
            <select class="form-control" name="semestre">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
            </select>
        </div>
 	</div>
 	<div class="form-group row">
 		<label class="col-sm-2">Primer apellido:</label>
 		<div class="col-md-4">
            <input id="segundo" type="text" class="form-control" name="segundo" required autocomplete="password2" autofocus>
        </div>
        <label class="col-sm-1">Estado civil:</label>
        <div class="col-md-2">
            <select class="form-control" name="civil">
                <option value="SOLTERO">SOLTERO(A)</option>
                <option value="CASADO">CASADO(A)</option>
                <option value="VIUDO">VIUDO(A)</option>
                <option value="DIVORCIADO">DIVORCIADO(A)</option>
            </select>
        </div>
        <label class="col-sm-1">Sexo:</label>
        <div class="col-md-2">
            <select class="form-control" name="sexo">
                <option value="H">HOMBRE</option>
                <option value="M">MUJER</option>
            </select>
        </div>
 	</div>
 	<div class="form-group row">
 		<label class="col-sm-2">Segundo apellido:</label>
        <div class="col-md-4">
            <input id="curp" type="text" class="form-control" name="curp" required autocomplete="curp" autofocus>
        </div>
        <label class="col-sm-2">Domicilio:</label>
        <div class="col-md-4">
            <input id="nombre" type="text" class="form-control" name="nombre" required autocomplete="nombre" autofocus>
        </div>
 	</div>
 	<div class="form-group row">
 		<label class="col-sm-2">CURP:</label>
        <div class="col-md-4">
            <input id="fecha" type="text" class="form-control" name="fecha" required autocomplete="fecha" autofocus>
        </div>
        <label class="col-sm-2">Colonia:</label>
        <div class="col-md-4">
            <input id="nombre" type="text" class="form-control" name="nombre" required autocomplete="nombre" autofocus>
        </div>
 	</div>
 	<div class="form-group row">
 		<label class="col-sm-2">Fecha de nacimiento:</label>
        <div class="col-md-4">
            <input id="estado" type="date" class="form-control" name="estado" required autocomplete="estado" autofocus>
        </div>
        <label class="col-sm-2">Código postal:</label>
        <div class="col-md-4">
            <input id="nombre" type="text" class="form-control" name="nombre" required autocomplete="nombre" autofocus>
        </div>
 	</div>
    <div class="form-group row">
        <label class="col-sm-2">Entidad federativa:</label>
        <div class="col-md-4">
             <select id="estadoAlumno" class="form-control" name="estado">
                <option value="">Seleccione tu estado:</option>
                <?php
                    while ($row = mysqli_fetch_object($estados)) 
                    {
                        echo '<option value="'.$row->idestado.'">'.$row->nom_estado.'</option>';
                    }

                    $estado->close();
                ?>
            </select>
        </div>
        <label class="col-sm-2">Teléfono:</label>
        <div class="col-md-4">
            <input id="nombre" type="text" class="form-control" name="nombre" required autocomplete="nombre" autofocus>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2">Ciudad:</label>
        <div class="col-md-4">
            <select id="ciudadAlumno" class="form-control" name="ciudad">
                
            </select>
        </div>
    </div>
 	<div class="form-group row">
 		<button type="submit" name="regresar" class="btn btn-danger col-sm-1">Regresar</button>
 		<button type="submit" name="siguiente" class="btn btn-primary col-sm-1" style="margin-left: 10px;">Registrar</button>
 	</div>
 	</form>
 </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="../recursos/js/scriptAlumno.js"></script>

</body>
</html>