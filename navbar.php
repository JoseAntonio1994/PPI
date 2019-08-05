<nav class="nav">
    
        <div class="links">
            <?php

            session_start();

            if (isset($_SESSION['cod_usuario']) && isset($_SESSION['nom_usuario']) && isset($_SESSION['cod_rol'])) 
            {
                    echo "<a href='javascript:void(0)' id='home'>
                        <span class='glyphicon glyphicon-home'></span>
                    </a>";
                    echo "<a id='logout' href='javascript:void(0)'>Cerrar sesión</a>";
                    echo "<a href='javascript:void(0)' class='nav navbar-nav navbar-right'>Bienvenido: ".$_SESSION['nom_usuario']."</a>";
                    echo "<a id='perfil' href='javascript:void(0)' class='nav navbar-nav navbar-right'><span class='glyphicon glyphicon-user'></span> Perfil</a>";
                    echo "<a href='javascript:void(0)' class='nav navbar-nav navbar-right'><span class='glyphicon glyphicon-comment'></span> Foro</a>";
                    
                    if ($_SESSION['cod_rol'] == 1) 
                    {
                        echo "<a id='settings' href='javascript:void(0)' class='nav navbar-nav navbar-right'><span class='glyphicon glyphicon-cog'></span> Configuración</a>";
                    }
            }
            else
            {
                echo "<a href='javascript:void(0)' id='home'>
                    <span class='glyphicon glyphicon-home'></span>
                </a>";
                echo "<a href='javascript:void(0)' id='login'>Iniciar Sesión</a>";
                echo "<a href='javascript:void(0)' id='register'>Registro</a>";
            }

            ?>
            
            
        </div>
</nav>
<nav class="nav">
    <?php

        echo '<div class="modulos"></div>';

    ?>
</nav>

