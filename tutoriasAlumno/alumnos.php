<div class="row" id="principal">
  <div class="container-fluid col-sm-12">
    <div class="col-sm-6 col-md-3 text-center">
      <a href="javascript:void(0)" onclick="cargarTutorias()"><img src="recursos/img/tutorias/tutorias.png" class="img-circle" alt="Cinque Terre"></a>
      <p>Que son las tutorías?</p>
    </div>
    <div class="col-sm-6 col-md-3 text-center">
      <a href="javascript:void(0)" onclick="cargarUnirse()"><img src="recursos/img/tutorias/unirse.png" class="img-circle" alt="Cinque Terre"></a>
      <p>Unirse a grupos</p>
    </div>
    <div class="col-sm-6 col-md-3 text-center">
      <a href="javascript:void(0)" onclick="cargarMisGrupos()"><img src="recursos/img/tutorias/grupos.png" class="img-circle" alt="Cinque Terre"></a>
      <p>Mis grupos de tutorías</p>
    </div>
    <div class="col-sm-6 col-md-3 text-center">
      <a href="javascript:void(0)" onclick="cargarActividades()"><img src="recursos/img/tutorias/actividades.png" class="img-circle" alt="Cinque Terre"></a>
      <p>Actividades y evaluaciones</p>
    </div>
  </div>
</div>

<div id="queson" style="display: none;">
  <?php include 'queson.php';  ?>
</div>

<div id="unirse" style="display: none;">
  <?php include 'unirse.php';  ?>
</div>

<div id="misgrupos" style="display: none;">
  <?php include 'misgrupos.php';  ?>
</div>

<div id="actyeva" style="display: none;">
  <?php include 'actyeva.php';  ?>
</div>

<div id="sesion" style="display: none;">
  <?php include 'auth/login.php';  ?>
</div>

<script type="text/javascript">
  var menuAnterior = document.getElementById('principal');

  function cargarTutorias() {
    var menuActual = document.getElementById('queson');
    menuAnterior.style.display = 'none';
    menuActual.style.display = 'block';
    menuAnterior = menuActual;
  }

  function cargarUnirse() {
    var menuActual = document.getElementById('unirse');
    menuAnterior.style.display = 'none';
    menuActual.style.display = 'block';
    menuAnterior = menuActual;
  }

  function cargarMisGrupos() {
    var menuActual = document.getElementById('misgrupos');
    menuAnterior.style.display = 'none';
    menuActual.style.display = 'block';
    menuAnterior = menuActual;
  }

  function cargarActividades() {
    var menuActual = document.getElementById('actyeva');
    menuAnterior.style.display = 'none';
    menuActual.style.display = 'block';
    menuAnterior = menuActual;
  }

  function cargarInicioSesion() {
    var menuActual = document.getElementById('sesion');
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