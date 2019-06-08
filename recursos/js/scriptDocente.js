$(document).ready(function(){
    $('#estadoDocente').change(function(){

        var estado_seleccionado = $(this).val();

        $.post('../php/selectEstado.php', {estado : estado_seleccionado}).done(function (respuesta) {
            $('#ciudadDocente').html(respuesta);
        });
    });
});