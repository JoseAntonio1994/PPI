<div class="row" id="principal">
  <div class="container-fluid col-sm-12">
    <div class="col-sm-6 col-md-4 text-center">
      <a href="javascript:void(0)" onclick="misGrupos()"><img src="recursos/img/tutorias/tutorias.png" class="img-circle" alt="Cinque Terre"></a>
      <!--a href="tutoriasDocente/misGrupos.php"><img src="recursos/img/tutorias/unirse.png" class="img-circle" alt="Cinque Terre"></a-->
      <p>Mis Grupos</p>
    </div>
    <div class="col-sm-6 col-md-4 text-center">
      <a href="javascript:void(0)" onclick="misAlumnos()"><img src="recursos/img/tutorias/unirse.png" class="img-circle" alt="Cinque Terre"></a>
      <p>Mis alumnos</p>
    </div>
    <div class="col-sm-6 col-md-4 text-center">
      <a href="javascript:void(0)" onclick="cargarActividades()"><img src="recursos/img/tutorias/actividades.png" class="img-circle" alt="Cinque Terre"></a>
      <p>Actividades y evaluaciones</p>
    </div>
  </div>
</div>

<div id="misgrupos" style="display: none;">
  <?php include 'misGrupos.php';  ?>
</div>

<div id="misalummnos" style="display: none;">
  <?php include 'misAlumnos.php';  ?>
</div>

<div id="actyeva" style="display: none;">
  <?php include 'actyeva.php';  ?>
</div>

<div id="sesion" style="display: none;">
  <?php include '/auth/login.php';  ?>
</div>

<script type="text/javascript">
  var menuAnterior = document.getElementById('principal');

  function misGrupos() {
    var menuActual = document.getElementById('misgrupos');
    menuAnterior.style.display = 'none';
    menuActual.style.display = 'block';
    menuAnterior = menuActual;
  }

  function misAlumnos() {
    var menuActual = document.getElementById('misalummnos');
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