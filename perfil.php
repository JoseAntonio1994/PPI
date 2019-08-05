<?php session_start(); ?>
	<center>
		<h2>Perfil</h2>
	</center>

	<div class="contenedor">
		<form method="POST" action="">
			 <div class="form-group row">
                <div class="col-md-2">
                	<center>
                		<h4><?php echo $_SESSION['nom_usuario']; ?></h4>
                	</center>
                	<img src="recursos/img/servicio.png" class="img-thumbnail" alt="Cinque Terre" width="300px" height="300px">
                	<a href="" class="btn btn-primary active b" data-toggle="modal" data-target="#modalPass">Cambiar contraseña</a>
                	<a href="" class="btn btn-primary active b" data-toggle="modal" data-target="#modalEmail">Cambiar email</a>
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

	<!-- Modal -->
  <div class="modal fade" id="modalPass" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">CAMBIAR CONTRASEÑA</h4>
        </div>
        <div class="modal-body">
          <form id="form-pass" method="POST" action="php/changePassword.php">
          	<div class="form-group row">
          	 <div class="col-md-12">
          	 	<div class="col-sm-6">
          	 		<label for="password" class="col-form-label text-md-right">Ingrese su contraseña actual:</label>
          	 	</div>
          	 	<div class="col-md-6">
          	 		<input id="password" type="password" class="form-control" name="password" required autocomplete="password" autofocus>
          	 	</div>
          	 </div>
          </div>
          <div class="form-group row">
          	 <div class="col-md-12">
          	 	<div class="col-sm-6">
          	 		<label for="new_password" class="col-form-label text-md-right">Ingrese nueva contraseña:</label>
          	 	</div>
          	 	<div class="col-md-6">
          	 		<input id="new_password" type="password" class="form-control" name="new_password" required autocomplete="new_password" autofocus>
          	 	</div>
          	 </div>
          </div>
          <div class="form-group row">
          	 <div class="col-md-12">
          	 	<div class="col-sm-6">
          	 		<label for="password_again" class="col-form-label text-md-right">Confirme nueva contraseña:</label>
          	 	</div>
          	 	<div class="col-md-6">
          	 		<input id="password_again" type="password" class="form-control" name="password_again" required autocomplete="usuario" autofocus>
          	 	</div>
          	 </div>
          </div>
          <center>
          	<label id="mensaje_error" class="control-label col-md-12 text-success" style="display: block;">Las constraseñas si coinciden</label>
          </center>
          <div class="row">
          	 <div class="col-sm-4">
          	 	<button id="aceptar-pass" type="submit" class="btn btn-primary active" disabled>Aceptar</button>
          	 </div>
          </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="modalEmail" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">CAMBIAR CORREO ELECTRÓNICO</h4>
        </div>
        <div class="modal-body">
          <form action="php/changeEmail.php" method="POST">
          	<div class="form-group row">
          	 <div class="col-md-12">
          	 	<div class="col-sm-6">
          	 		<label for="password" class="col-form-label text-md-right">Ingrese su contraseña:</label>
          	 	</div>
          	 	<div class="col-md-6">
          	 		<input id="password" type="password" class="form-control" name="password" required autocomplete="password" autofocus>
          	 	</div>
          	 </div>
          </div>
          <div class="form-group row">
          	 <div class="col-md-12">
          	 	<div class="col-sm-6">
          	 		<label for="email" class="col-form-label text-md-right">Ingrese nuevo correo:</label>
          	 	</div>
          	 	<div class="col-md-6">
          	 		<input id="email" type="email" class="form-control" name="email" required autocomplete="email" autofocus>
          	 	</div>
          	 </div>
          </div>
          <div class="row">
          	 <div class="col-sm-4">
          	 	<button type="submit" class="btn btn-primary active" >Aceptar</button>
          	 </div>
          </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 <script type="text/javascript">
 	$(document).ready(function () {
    	$('#mensaje_error').hide();  
	});

	var cambioDePass = function() {
			var cont = $('#new_password').val();
		    var cont2 = $('#password_again').val();
		    if (cont == cont2) {
		        $('#mensaje_error').hide();
		        $('#mensaje_error').attr("class", "control-label col-md-12 text-success");
		        $('#mensaje_error').show();
		        $('#mensaje_error').html("Las constraseñas si coinciden");
		        $('button[type="submit"]').removeAttr('disabled');
		    } else {
		        $('#mensaje_error').html("Las constraseñas no coinciden");
		        $('#mensaje_error').show();
		        $('button[type="submit"]').attr('disabled','disabled');
		    }
		}

	$("#new_password").on('keyup', cambioDePass);
	$("#password_again").on('keyup', cambioDePass);
 </script>