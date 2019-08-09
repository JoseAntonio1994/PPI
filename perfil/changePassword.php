<link rel="stylesheet" type="text/css" href="recursos/css/login.css">

<?php session_start(); ?>

<div class="mensaje"></div>

<div class="container">

    <div class="justify-content-center">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">CAMBIAR CONTRASEÑA</div>

                <div class="card-body">
                    <form id="changePasswordForm">

                        <div class="form-group row">
                            <label for="cod_usuario" class="col-md-4 col-form-label text-md-right">Código</label>

                            <div class="col-md-6">
                                <input id="cod_usuario" type="text" class="form-control" value="<?php echo $_SESSION['cod_usuario']; ?>" disabled>
                            </div>
                        </div>
                   
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña actual</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="password" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="new_password" class="col-md-4 col-form-label text-md-right">Nueva contraseña</label>

                            <div class="col-md-6">
                                <input id="new_password" type="password" class="form-control" name="new_password" required autocomplete="current-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password_again" class="col-md-4 col-form-label text-md-right">Confirmar contraseña</label>

                            <div class="col-md-6">
                                <input id="password_again" type="password" class="form-control" name="password_again" required autocomplete="current-password">
                            </div>
                        </div>

                        <center>
                            <label id="conf" class="control-label col-md-12 text-success" style="display: block;"></label>
                          </center>

                        <div class="form-group">
                            <div class="center">
                                <button type="submit" class="btn btn-primary">
                                    Aceptar
                                </button>
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
<script src="recursos/js/usuarios.js"></script>
<script src="recursos/js/verify_password.js"></script>