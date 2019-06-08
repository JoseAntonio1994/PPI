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
 ?>

 <center>
 	<h3>Registro de Usuarios</h3>
 </center>
 <div class="container">
 	<form method="POST" action="../php/rolUser.php">
 		<div class="form-group row">
 		<label class="col-sm-4">Ingrese un correo electrónico y una contraseña</label>
 	</div>
 	<div class="form-group row">
 		<label class="col-sm-2">Correo electrónico</label>
 		<div class="col-md-4">
            <input id="email" type="email" class="form-control" name="email" autocomplete="email" autofocus>
        </div>
        <div class="checkbox col-sm-4">
		  <label><input type="checkbox" value="">Acepto todas las condiciones y términos</label>
		</div>
 	</div>
 	<div class="form-group row">
 		<label class="col-sm-2">Contraseña</label>
 		<div class="col-md-4">
            <input id="password" type="password" class="form-control" name="password" autocomplete="password" autofocus>
        </div>
 	</div>
 	<div class="form-group row">
 		<label class="col-sm-2">Confirmar contraseña</label>
 		<div class="col-md-4">
            <input id="password2" type="password" class="form-control" name="password2" autocomplete="password2" autofocus>
        </div>
 	</div><br>
 	<div class="form-group row">
 		<label class="col-sm-4">Seleccione el rol:</label>
 	</div>
 	<div class="form-group row">
 		<label class="radio-inline col-sm-2"><input type="radio" name="rol" value="administrador">Administrador</label>
 		<label class="radio-inline col-sm-2"><input type="radio" name="rol" value="alumno">Alumno</label>
 		<label class="radio-inline col-sm-2"><input type="radio" name="rol" value="docente">Docente</label>
 		<label class="radio-inline col-sm-2"><input type="radio" name="rol" value="jefe">Jefe de Departamento</label>
 		<label class="radio-inline col-sm-2"><input type="radio" name="rol" value="administrativo">Administrativo</label>
 		
 	</div>
 	<div class="form-group row">
 		<label class="radio-inline col-sm-2"><input type="radio" name="rol" value="empresa">Empresa</label>
 	</div>
 	<div class="form-group row">
 		<input type="submit" value="Regresar" name="regresar" class="btn btn-danger col-sm-1">
 		<input type="submit" value="Siguiente" name="siguiente" class="btn btn-primary col-sm-1" style="margin-left: 10px;">
 	</div>
 	</form>
 </div>
</body>
</html>