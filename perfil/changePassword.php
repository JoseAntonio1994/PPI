<link rel="stylesheet" type="text/css" href="recursos/css/login.css">

<div class="mensaje_error"></div>

<div class="container">

    <div class="justify-content-center">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">CAMBIAR CONTRASEÑA</div>

                <div class="card-body">
                    <form id="changePasswordForm">
                   
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

<?php
	include '../footer.php';
?>