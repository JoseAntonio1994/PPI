<div class="container-fluid">
  <div class="col-sm-12 col-md-8 text-center">
    <h2>Consulta Grupos</h2>
  </div>
  <table id="data_table" class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>idGrupo</th>
        <th>clave</th>
        <th>horario</th>
        <th>cantidad</th>
        <th>docente</th>
      </tr>
    </thead>
    <tbody>
      <?php
      #test 
      #include '../config/db/conexion.php';
      $u_actual = $_SESSION['nom_usuario'];
      #$u_actual = $_SESSION['iddocente'];
      include 'config/db/conexion.php';
      $sql_query = "SELECT idGrupo, clave, horario, cantidad, nom_usuario FROM grupo as g 
        join docente as d on g.iddocente=d.iddocente
        join usuarios as u on d.idusuario=u.idusuarios WHERE nom_usuario = '$u_actual'";
      $resultset = mysqli_query($conn, $sql_query) or die("error base de datos:" . mysqli_error($conn));
      while ($grupo = mysqli_fetch_assoc($resultset)) {
        ?>
        <tr id="<?php echo $grupo['idGrupo']; ?>">
          <td><?php echo $grupo['idGrupo']; ?></td>
          <td><?php echo $grupo['clave']; ?></td>
          <td><?php echo $grupo['horario']; ?></td>
          <td><?php echo $grupo['cantidad']; ?></td>
          <td><?php echo $grupo['nom_usuario']; ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

<div class="row">
  <div class="container-fluid text-center">
    <div class="col-sm-12">
      <a class="btn btn-default" href="javascript:void(0)" role="button" onclick="cargarPrincipal()">Volver</a>
    </div>
  </div>
</div>