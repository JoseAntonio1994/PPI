<div class="row" id="principal">
  <div class="container-fluid col-sm-12">
    <div class="col-sm-6 col-md-4 text-center">
      <a href="javascript:void(0)" onclick="crearGruposTutorias()"><img src="recursos/img/tutorias/tutorias.png" class="img-circle" alt="Cinque Terre"></a>
      <p>Crear grupos de tutorías</p>
    </div>
    <div class="col-sm-6 col-md-4 text-center">
      <a href="javascript:void(0)" onclick="consultaGrupos()"><img src="recursos/img/tutorias/unirse.png" class="img-circle" alt="Cinque Terre"></a>
      <p>Consulta de Grupos</p>
    </div>
    <div class="col-sm-6 col-md-4 text-center">
      <a href="javascript:void(0)" onclick="reportesRecibidos()"><img src="recursos/img/tutorias/grupos.png" class="img-circle" alt="Cinque Terre"></a>
      <p>Mis Reportes recibidos</p>
    </div>
  </div>
</div>

<div id="crear_grupos" style="display: none;">
  <?php include 'crear_grupos.php';  ?>
</div>

<div id="consulta_grupos" style="display: none;">
  <?php include 'consulta_grupos.php';  ?>
</div>

<div id="mis_reportes" style="display: none;">
  <?php include 'mis_reportes.php';  ?>
</div>

<div id="sesion" style="display: none;">
  <?php include 'auth/login.php';  ?>
</div>

<script type="text/javascript">
  var menuAnterior = document.getElementById('principal');

  function crearGruposTutorias() {
    var menuActual = document.getElementById('crear_grupos');
    menuAnterior.style.display = 'none';
    menuActual.style.display = 'block';
    menuAnterior = menuActual;
  }

  function consultaGrupos() {
    var menuActual = document.getElementById('consulta_grupos');
    menuAnterior.style.display = 'none';
    menuActual.style.display = 'block';
    menuAnterior = menuActual;
  }

  function reportesRecibidos() {
    var menuActual = document.getElementById('mis_reportes');
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