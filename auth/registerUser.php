<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong id="success"></strong>
</div>

 <center>
 	<h3>Registro de Usuarios</h3>
 </center>
 <div class="container">
 	<form id="registerUser" name="registerUser">
 		<div class="form-group row">
 		<label class="col-sm-4">Ingrese un correo electrónico y una contraseña</label>
 	</div>
    <div class="form-group row">
        <label class="col-sm-2">Usuario</label>
        <div class="col-md-4">
            <input id="nom_usuario" type="text" class="form-control" name="nom_usuario" autocomplete="nom_usuario" autofocus>
        </div>
    </div>
 	<div class="form-group row">
 		<label class="col-sm-2">Correo electrónico</label>
 		<div class="col-md-4">
            <input id="correo" type="email" class="form-control" name="correo" autocomplete="correo" autofocus>
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
        <label class="col-sm-2">Selecciona el rol</label>
 		<div class="col-sm-4">
            <select class="form-control" name="cod_rol" id="cod_rol"></select>
        </div>
 	</div>
 	<div class="form-group row">
 		<input type="submit" value="Guardar" class="btn btn-primary col-sm-1">
 	</div>
 	</form>
 </div>

 <script src="recursos/js/roles.js"></script>
 <script src="recursos/js/usuarios.js"></script>