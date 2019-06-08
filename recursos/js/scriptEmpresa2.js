$(document).ready(function(){
    $('#estadoEmpresa2').change(function(){

        var estado_seleccionado = $(this).val();

        $.post('../php/selectEstado.php', {estado : estado_seleccionado}).done(function (respuesta) {
            $('#ciudadEmpresa2').html(respuesta);
        });
    });
});