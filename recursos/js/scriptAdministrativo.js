$(document).ready(function(){
    $('#estadoAdministrativo').change(function(){

        var estado_seleccionado = $(this).val();

        $.post('../php/selectEstado.php', {estado : estado_seleccionado}).done(function (respuesta) {
            $('#ciudadAdministrativo').html(respuesta);
        });
    });
});