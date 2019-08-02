<link rel="stylesheet" type="text/css" href="recursos/css/login.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<div class="container">
    <div class="justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">INICIAR SESIÓN</div>

                <div class="card-body">
                    <form method="POST" action="php/login.php">
                   
                        <div class="form-group row">
                            <label for="usuario" class="col-md-4 col-form-label text-md-right">Usuario</label>

                            <div class="col-md-6">
                                <input id="usuario" type="text" class="form-control" name="usuario" required autocomplete="usuario" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="center">
                                <button type="submit" class="btn btn-primary">
                                    Iniciar sesión
                                </button>

                               <div class="center">
                                    
                                <a class="btn btn-link" href="#">
                                    ¿Olvidastes tu contraseña?
                                </a>
                                
                               </div>
                               <p>¿Aún no estás registrado?<a class="btn btn-link" href="javascript:void(0)" data-toggle="modal" data-target="#myModal">Clic aquí</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
	include '../footer.php';
?>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 <script type="text/javascript">
 	$(document).ready(function () {
    	$('#mensaje_error').hide();  
	});

	var cambioDePass = function() {
			var cont = $('#contra').val();
		    var cont2 = $('#contra2').val();
		    if (cont == cont2) {
		        $('#mensaje_error').hide();
		        $('#mensaje_error').attr("class", "control-label col-md-12 text-success");
		        $('#mensaje_error').show();
		        $('#mensaje_error').html("Las constraseñas si coinciden");
		        
		    } else {
		        $('#mensaje_error').html("Las constraseñas no coinciden");
		        $('#mensaje_error').show();
		        
		    }
		}

	$("#contra").on('keyup', cambioDePass);
	$("#contra2").on('keyup', cambioDePass);
 </script>