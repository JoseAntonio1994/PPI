<nav class="nav">
    
        <div class="links">
            <a href="index.php">
                <span class="glyphicon glyphicon-home"></span>
            </a>

            <?php
                session_start();

                if (isset($_SESSION['nom_usuario']) && isset($_SESSION['nom_rol'])) {
                    echo "<a href='#'>Inicio</a>";
                    echo "<a href='php/logout.php'>Cerrar sesión</a>";

                    echo "<a  class='nav navbar-nav navbar-right'>Bienvenido: ".$_SESSION['nom_usuario']."</a>";
                    echo "<a href='perfil.php' class='nav navbar-nav navbar-right'><span class='glyphicon glyphicon-user'></span> Perfil</a>";
                    echo "<a href='' class='nav navbar-nav navbar-right'><span class='glyphicon glyphicon-comment'></span> Foro</a>";

                    if ($_SESSION['nom_rol'] == 'Administrador') 
                    {
                        echo "<a href='configuracion.php' class='nav navbar-nav navbar-right'><span class='glyphicon glyphicon-cog'></span> Configuración</a>";
                    }
                }
                else {
                    echo "<a href='javascript:void(0)' onclick='cargarInicioSesion()'>Iniciar Sesión</a>";
                    echo "<a href='auth/registerUser.php'>Registro</a>";
                }
            ?>
            
        </div>
</nav>
<nav class="nav">
    <div class="modulos">
        <?php
            if (isset($_SESSION['nom_usuario']) && isset($_SESSION['nom_rol'])) 
            {
                if ($_SESSION['nom_rol'] == 'Administrador') 
                {
                    echo "<a href='javascript:void(0)' onclick='cargarAlumno()'>Alumnos</a>";
                    echo "<a href='javascript:void(0)' onclick='cargarDocente()'>Docentes</a>";
                    echo "<a href='javascript:void(0)' onclick='cargarJefe()'>Jefe de departamento</a>";
                    echo "<a href='javascript:void(0)' onclick='cargarAdministrativo()'>Administrativos</a>";
                    echo "<a href='javascript:void(0)' onclick='cargarEmpresa()'>Empresas</a>";
                }
                elseif ($_SESSION['nom_rol'] == 'Alumno') 
                {
                   echo "<a href='javascript:void(0)' onclick='cargarAlumno()'>Alumnos</a>"; 
                }
                elseif ($_SESSION['nom_rol'] == 'Docente') 
                {
                    echo "<a href='javascript:void(0)' onclick='cargarDocente()'>Docentes</a>";
                }
                elseif ($_SESSION['nom_rol'] == 'Jefe de Departamento') 
                {
                    echo "<a href='javascript:void(0)' onclick='cargarJefe()'>Jefe de departamento</a>";
                }
                elseif ($_SESSION['nom_rol'] == 'Administrativo') 
                {
                    echo "<a href='javascript:void(0)' onclick='cargarAdministrativo()'>Administrativos</a>";
                }
                elseif ($_SESSION['nom_rol'] == 'Empresa') 
                {
                    echo "<a href='javascript:void(0)' onclick='cargarEmpresa()'>Empresas</a>";
                }
            } 
            else 
            {
                echo "<a href='javascript:void(0)' onclick='cargarAlumno()'>Alumnos</a>";
                echo "<a href='javascript:void(0)' onclick='cargarDocente()'>Docentes</a>";
                echo "<a href='javascript:void(0)' onclick='cargarJefe()'>Jefe de departamento</a>";
                echo "<a href='javascript:void(0)' onclick='cargarAdministrativo()'>Administrativos</a>";
                echo "<a href='javascript:void(0)' onclick='cargarEmpresa()'>Empresas</a>";
            }
        ?>
    </div>
</nav>