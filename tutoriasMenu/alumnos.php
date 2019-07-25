<div class="row" id="principal">
  <div class="container">
    <div class="col-sm-3 col-md-3">
      <a href="javascript:void(0)" onclick="cargarTutorias()"><img src="recursos/img/tutorias/tutorias.png" class="img-circle" alt="Cinque Terre"></a>
      <p>Que son las tutorías?</p>
    </div>
    <div class="col-sm-3 col-md-3">
      <a href="unirseAgrupos.php"><img src="recursos/img/tutorias/unirse.png" class="img-circle" alt="Cinque Terre"></a>
      <p>Unirse a grupos</p>
    </div>
    <div class="col-sm-3 col-md-3">
      <a href="misGrupos.php"><img src="recursos/img/tutorias/grupos.png" class="img-circle" alt="Cinque Terre"></a>
      <p>Mis grupos de tutorías</p>
    </div>
    <div class="col-sm-3 col-md-3">
      <a href="actyeva.php"><img src="recursos/img/tutorias/actividades.png" class="img-circle" alt="Cinque Terre"></a>
      <p>Actividades y evaluaciones</p>
    </div>
  </div>
</div>

<div id="queson" style="display: none;">
  <?php include 'queson.php';  ?>
</div>

<script type="text/javascript">
  var menuAnterior = document.getElementById('principal');

  function cargarTutorias() {
    var menuActual = document.getElementById('queson');
    menuAnterior.style.display = 'none';
    menuActual.style.display = 'block';
    menuAnterior = menuActual;
  }
</script>