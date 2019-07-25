<div class="row" id="principal">
  <div class="container-fluid">
    <div class="col-sm-3 col-md-3 text-center">
      <a href="javascript:void(0)" onclick="cargarMisActividades()"><img src="recursos/img/tutorias/tutorias.png" class="img-circle" alt="Cinque Terre"></a>
      <p>Mis actividades</p>
    </div>
    <div class="col-sm-3 col-md-3 text-center">
      <a href="javascript:void(0)" onclick="cargarMisActividadesEvaluadas()"><img src="recursos/img/tutorias/unirse.png" class="img-circle" alt="Cinque Terre"></a>
      <p>Mis actividades evaluadas</p>
    </div>
  </div>
</div>

<div id="misact" style="display: none;">
  <?php include 'misact.php';  ?>
</div>

<div id="misacteval" style="display: none;">
  <?php include 'misacteval.php';  ?>
</div>

<div id="sesion" style="display: none;">
  <?php include 'auth/login.php';  ?>
</div>

<div class="row">
  <div class="container-fluid text-center">
    <div class="col-sm-12">
      <a class="btn btn-default" href="javascript:void(0)" role="button" onclick="cargarPrincipal()">Volver</a>
    </div>
  </div>
</div>

<script type="text/javascript">
  var menuAnterior = document.getElementById('principal');

  function cargarMisActividades() {
    var menuActual = document.getElementById('misact');
    menuAnterior.style.display = 'none';
    menuActual.style.display = 'block';
    menuAnterior = menuActual;
  }

  function cargarMisActividadesEvaluadas() {
    var menuActual = document.getElementById('misacteval');
    menuAnterior.style.display = 'none';
    menuActual.style.display = 'block';
    menuAnterior = menuActual;
  }

  function cargarPrincipal() {
    var menuActual = document.getElementById('principal');
    menuAnterior.style.display = 'none';
    menuActual.style.display = 'block';
    menuAnterior = menuActual;
  }
</script>