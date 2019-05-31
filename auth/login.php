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
	include 'footer.php';
?>

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center>
          	<h4 class="modal-title">Registro de Usuarios</h4>
          </center>
          <div class="alert alert-danger alert-dismissible" style="display: none" id="sin-espacio">
		    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		    <strong>Error!</strong> La contraseña no puede contener espacios en blanco.
		  </div>
		  <div class="alert alert-danger alert-dismissible" style="display: none" id="deben-coincidir">
		    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		    <strong>Error!</strong> Las passwords deben de coincidir.
		  </div>
        </div>
        <div class="modal-body">
          <form method="POST" action="php/register.php" onsubmit="return validarPassword()">
                   
	            <div class="form-group row">
	                <label for="usuario" class="col-md-4 col-form-label text-md-right">Usuario</label>

	                <div class="col-md-6">
	                    <input id="usuario" type="text" class="form-control" name="usuario" required autocomplete="usuario" autofocus>
	                </div>
	            </div>

	            <div class="form-group row">
	                <label for="email" class="col-md-4 col-form-label text-md-right">Correo Electrónico</label>

	                <div class="col-md-6">
	                    <input id="email" type="text" class="form-control" name="email" required autocomplete="email" autofocus>
	                </div>
	            </div>

	            <div class="form-group row">
				      <label for="sel1" class="col-md-4 col-form-label text-md-right">Rol:</label>
				      <div class="col-md-6">
				      	<select class="form-control" id="sel1" name="rol">
				        <option value="0">Seleccione:</option>
					        <?php
					        	  include 'config/db/conexion.php';
					
						          $query = $conn -> query ("SELECT * FROM roles");
						          while ($valores = mysqli_fetch_array($query)) {
						
							            echo '<option value="'.$valores[idroles].'">'.$valores[nom_rol].'</option>';
						          }

						          $conn->close();
					        ?>
				      </select>
				      </div>

				  </div>

	            <div class="form-group row">
	                <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

	                <div class="col-md-6">
	                    <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
	                </div>
	            </div>

	            <div class="form-group row">
	                <label for="password2" class="col-md-4 col-form-label text-md-right">Confirmar contraseña</label>

	                <div class="col-md-6">
	                    <input id="password2" type="password" class="form-control" name="password2" required autocomplete="current-password">
	                </div>
	            </div>

	            <div class="form-group">
	                <div class="center">
	                    <button type="submit" class="btn btn-primary">
	                        Registrar
	                    </button>
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

  <script type="text/javascript">
  	var p1 = document.getElementById("password").value;
	var p2 = document.getElementById("password2").value;

  	function validarPassword() {
  		
  	}

  	function detectarEspacios() {
  		var espacios = false;
		var cont = 0;
		 
		while (!espacios && (cont < p1.length)) {
		  if (p1.charAt(cont) == " ")
		    espacios = true;
		  cont++;
		}
		 
		if (espacios) {
		  document.getElementById('sin-espacio').style.display = 'block';
		  return false;
		}
  	}

  	function validarCoincidencias() {
  		if (p1 != p2) {
		  document.getElementById('deben-coincidir').style.display = 'block';
		  return false;
		} else {
		  return true; 
		}
  	}

  </script>