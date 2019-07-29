<div class="row">
  <div class="container-fluid">
    <div class="form-group col-md-12 col-sm-12 text-center">
      <h1>Crear grupos</h1>
    </div>
    <div class="col-md-12 col-sm-12">
      <form method="post" class="form-horizontal" id="formulario">
        <div class="form-group col-md-8 col-sm-12">
          <input type="text" class="form-control" id="idGrupo" name="idGrupo" placeholder="id del grupo">
        </div>
        <div class="form-group col-md-8 col-sm-12">
          <input type="text" class="form-control" id="clave" name="clave" placeholder="clave">
        </div>
        <div class="form-group col-md-8 col-sm-12">
          <input type="text" class="form-control" id="horario" name="horario" placeholder="horario">
        </div>
        <div class="form-group col-md-8 col-sm-12">
          <input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="cantidad">
        </div>
        <div class="form-group col-md-8 col-sm-12">
          <input type="text" class="form-control" id="idDocente" name="iddocente" placeholder="docente">
        </div>
        <div class="form-group col-md-2 col-sm-12 text-center">
          <button id="btn-crear" type="text" class="btn btn-default">Crear grupo</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
  $('#btn-crear').click(function() {
    var url = "tutoriasAdministrativo/crearG.php";

    $.ajax({
      type: "POST",
      url: url,
      data: $("#formulario").serialize(),
      beforeSend: function() {
        alert("Procesando, espere por favor...");
      },
      success: function(data) {
        consultaGrupos();
      }
    });
  });
</script>

<div class="row">
  <div class="container-fluid text-center">
    <div class="col-sm-12">
      <a class="btn btn-default" href="javascript:void(0)" role="button" onclick="cargarPrincipal()">Volver</a>
    </div>
  </div>
</div>