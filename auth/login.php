<link rel="stylesheet" type="text/css" href="recursos/css/login.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<div class="container">
    <div class="justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">INICIAR SESIÓN</div>

                <div class="card-body">
                    <form id="loginForm">
                   
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

<script src="recursos/js/usuarios.js"></script>