<head>
  <link rel="stylesheet" href="tutoriasAlumno/tutoriasAlumno.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <!-- Styles -->
  <link rel="stylesheet" type="text/css" href="recursos/css/index.css">

</head>
<?php
/*if (isset($_SESSION['nom_usuario']) && isset($_SESSION['nom_rol'])) {
  if ($_SESSION['nom_rol'] == 'Administrador') {
    echo "<a href='javascript:void(0)' onclick='cargarAlumno()'>Alumnos</a>";
    echo "<a href='javascript:void(0)' onclick='cargarDocente()'>Docentes</a>";
    echo "<a href='javascript:void(0)' onclick='cargarJefe()'>Jefe de departamento</a>";
    echo "<a href='javascript:void(0)' onclick='cargarAdministrativo()'>Administrativos</a>";
    echo "<a href='javascript:void(0)' onclick='cargarEmpresa()'>Empresas</a>";
  } elseif ($_SESSION['nom_rol'] == 'Alumno') {
    echo "<a href='javascript:void(0)' onclick='cargarAlumno()'>Alumnos</a>";
  } elseif ($_SESSION['nom_rol'] == 'Docente') {
    echo "<a href='javascript:void(0)' onclick='cargarDocente()'>Docentes</a>";
  } elseif ($_SESSION['nom_rol'] == 'Jefe de Departamento') {
    echo "<a href='javascript:void(0)' onclick='cargarJefe()'>Jefe de departamento</a>";
  } elseif ($_SESSION['nom_rol'] == 'Administrativo') {
    echo "<a href='javascript:void(0)' onclick='cargarAdministrativo()'>Administrativos</a>";
  } elseif ($_SESSION['nom_rol'] == 'Empresa') {
    echo "<a href='javascript:void(0)' onclick='cargarEmpresa()'>Empresas</a>";
  }
} else {
  echo "<a href='javascript:void(0)' onclick='cargarAlumno()'>Alumnos</a>";
  echo "<a href='javascript:void(0)' onclick='cargarDocente()'>Docentes</a>";
  echo "<a href='javascript:void(0)' onclick='cargarJefe()'>Jefe de departamento</a>";
  echo "<a href='javascript:void(0)' onclick='cargarAdministrativo()'>Administrativos</a>";
  echo "<a href='javascript:void(0)' onclick='cargarEmpresa()'>Empresas</a>";
}*/
?>


<?php
include 'header.php';
include 'navbar.php';

if (isset($_SESSION['nom_usuario']) && isset($_SESSION['nom_rol'])) {
  if ($_SESSION['nom_rol'] == 'Administrador') {
    include 'tutoriasAlumno/alumnos.php';
  } elseif ($_SESSION['nom_rol'] == 'Alumno') {
    include 'tutoriasAlumno/alumnos.php';
  } elseif ($_SESSION['nom_rol'] == 'Docente') {
    include 'tutoriasDocente/docente.php';
  } elseif ($_SESSION['nom_rol'] == 'Jefe de Departamento') {
    echo "<a href='javascript:void(0)' onclick='cargarJefe()'>Jefe de departamento</a>";
  } elseif ($_SESSION['nom_rol'] == 'Administrativo') {
    include 'tutoriasAdministrativo/tutoriasAdministrativo.php';
  }
}

include 'footer.php';
?>

<script type="text/javascript">
  function cargarAlumno() {
    location(href = 'index.php');
  }
</script>