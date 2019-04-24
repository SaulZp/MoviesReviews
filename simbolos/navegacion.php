<?php
    include "includes/conexion.php";
    session_start();
?>

<!-- MENU DE NAVEGACION -->
    <nav class="navbar navbar-dark menu navbar-expand-md contenedor">
        <div class="container">
            <a href="#" class="navbar-brand"><strong class="texto">MOVIESREVIEWS</strong></a>   
            <button type="submit" class="navbar-toggler" data-toggle="collapse" data-target="#menu-principal" 
            aria-controls="menu-principal" aria-expanded="false" aria-label="Desplegar Menú">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse" id="menu-principal">
                <ul class="navbar-nav ml-auto">
                    
                    
                    <?php
                        //Registrado
                        if(empty($_SESSION['id_user']) == FALSE){
                            echo '
                            <li class="nav-item"><a class="nav-link text-white" href="index.php">Inicio</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="biblioteca.php">Mis Playlist</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="misResenas">Mis Reseñas</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="includes/outSession.php">Cerrar Sesión</a></li>
                            <li class="nav-item"><a href="perfil.php" class="d-block d-md-none text-white nav-link">Mi Perfil</a></li>
                            </ul>
                            <a class="nav-link text-white d-none d-md-inline" href="#"><i class="fas fa-user-circle user"></i></a>
                            ';
                        }else{
                            //Administrador
                            if(empty($_SESSION['id_Admin']) == FALSE){
                                echo '
                                <li class="nav-item"><a class="nav-link text-white" href="fichaTecnica.php">Agregar Película</a></li>
                                <li class="nav-item"><a class="nav-link text-white" href="agregarGenero.php">Agregar Género</a></li>
                                <li class="nav-item"><a class="nav-link text-white" href="includes/outSession.php">Salir</a></li>      
                                </ul>
                                ';
                            }else{
                                //Visitante
                                    echo '
                                    <li class="nav-item"><a class="nav-link text-white" href="index.php">Inicio</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="login.php">Iniciar Sesión</a></li>
                                    <li class="nav-item"><a class="nav-link text-white" href="registro.php">Registrate</a></li>
                                    </ul>
                                    ';
                                }
                            }
                    ?>
                
                <!-- REGISTRADO PERFIL -->
            </div> <!--navbar-collapse-->
        </div> <!--container-->
    </nav> <!--navbar-->
