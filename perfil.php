<?php session_start(); ?>

<div class="mensaje_error"></div>

	<center>
		<h2>Perfil</h2>
	</center>

	<div class="contenedor">
		<form>
			 <div class="form-group row">
                <div class="col-md-2">
                	<center>
                		<h4><?php echo $_SESSION['nom_usuario']; ?></h4>
                	</center>
                	<img src="recursos/img/servicio.png" class="img-thumbnail" alt="Cinque Terre" width="300px" height="300px">
                	<a href="javascript:void(0)" class="btn btn-primary active b" id="changePassword">Cambiar contraseña</a>
                	<a href="" class="btn btn-primary active b" id="changeEmail">Cambiar email</a>
                </div>
                <div class="col-md-10 b">
                	<label for="nombre" class="col-sm-2">Nombre(s):</label>
					<div class="col-sm-4">
				      <input type="text" class="form-control" value="<?php echo $_SESSION['nom_usuario'] ?>" disabled>
				    </div>
				    <label for="nombre" class="col-sm-2">Correo:</label>
				    <div class="col-sm-4">
				      <input type="text" class="form-control" value="<?php echo $_SESSION['correo'] ?>" disabled>
				    </div>
                </div>
                <div class="col-md-10 b">
                	
				    <label for="nombre" class="col-sm-2">Fecha de alta:</label>
				    <div class="col-sm-4">
				      <input type="text" class="form-control" value="<?php echo $_SESSION['created_at'] ?>" disabled>
				    </div>
                </div>
            </div>
		</form>
	</div>

	<?php
		include 'footer.php';
	?>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 <script src="recursos/js/usuarios.js"></script>