$(document).ready(function () {
    $('#conf').hide();  
});

var cambioDePass = function() {

        var cod_usuario = $('#cod_usuario').val();
        var password = $('#password').val();

        var parametros = {
            "cod_usuario": cod_usuario,
            "password": password
        };

        $.ajax({
            type: 'POST',
            url: 'http://localhost/PPI/ajax/usuarios.php?apiusuarios=verify_password',
            data: parametros,
            dataType: 'json',
            success: function(data){
                if (data['error'] == false) {
                    $('#conf').hide();
                    $('#conf').attr("class", "control-label col-md-12 text-success");
                    $('#conf').show();
                    $('#conf').html(data['message']);
                    $('button[type="submit"]').removeAttr('disabled');
                }

                else{
                    $('#conf').html(data['message']);
                    $('#conf').show();
                    $('button[type="submit"]').attr('disabled','disabled');
                }       
            } 
        });
    }    

$("#password").on('keyup', cambioDePass);