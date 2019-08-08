<link rel="stylesheet" type="text/css" href="recursos/css/login.css">

<?php session_start(); ?>

<div class="mensaje_error"></div>

<div class="container">

    <div class="justify-content-center">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">CAMBIAR CORREO ELECTRÓNICO</div>

                <div class="card-body">
                    <form id="changeEmailForm">
                   
                        <div class="form-group row">
                            <label for="cod_usuario" class="col-form-label text-md-right">Código de usuario:</label>

                            <div class="col-md-6">
                                <input id="cod_usuario" type="text" class="form-control" value="<?php echo $_SESSION['cod_usuario']; ?>" required autocomplete="cod_usuario" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-form-label text-md-right">Ingrese su contraseña actual:</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="password" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-form-label text-md-right">Ingrese nuevo correo:</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" required autocomplete="email" autofocus>
                            </div>
                        </div>

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