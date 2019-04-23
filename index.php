<?php
    include("includes/conexion.php");
    $conexion = conectar();
    echo "Se conecto exitosamente";
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MoviesReviews</title>
    <!-- Agregando fuente -->
    <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
    <!-- Agregando iconos -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Agregando archivos bootstrap -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Agregando Hojas de Estilos personalizada -->
    <link rel="stylesheet" href="css/estilos.css">

</head>
<body>

    <?php require 'simbolos/navegacion.php';?>

    <!--MAIN-->
    <main >
        <br><br><br><br>
        
        <!-- Barra de busqueda -->
        <form action="">
            <div class="form-group d-flex justify-content-center container">
                <input type="text" class="form-control text-center busqueda w-75 border-0" 
                id="busqueda" placeholder="Busca tu película" autocomplete="off">
            </div><!--form-group-->
        </form><!--form--> 
        <br>
        <!-- Seccion de peliculas -->
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-2"><br>
                    <h4 class="text-white py-3"><i class="fas fa-film"></i> Generos</h4>
                    <ul class="nav d-block">
                        <li class="nav-item"><a href="#" class="text-left fas fa-video nav-link text-white px-0 py-0"> Terror</a></li>
                        <hr class="bg-white">
                        <li class="nav-item"><a href="#" class="text-left fas fa-video nav-link text-white px-0 py-0"> Terror</a></li>
                        <hr class="bg-white">
                        <li class="nav-item"><a href="#" class="text-left fas fa-video nav-link text-white px-0 py-0"> Terror</a></li>
                        <hr class="bg-white">
                        <li class="nav-item"><a href="#" class="text-left fas fa-video nav-link text-white px-0 py-0"> Terror</a></li>
                        <hr class="bg-white">
                        <li class="nav-item"><a href="#" class="text-left fas fa-video nav-link text-white px-0 py-0"> Terror</a></li>
                        <hr class="bg-white">
                    </ul><!--Fin de lista de generos-->
                    <br><br>
                    <h4 class="text-white py-3"><i class="fas fa-film"></i> Universos</h4>
                    <ul class="nav d-block">
                        <li class="nav-item"><a href="#" class="text-left fas fa-video nav-link text-white px-0 py-0"> Marvel</a></li>
                        <hr class="bg-white">
                        <li class="nav-item"><a href="#" class="text-left fas fa-video nav-link text-white px-0 py-0"> Universal</a></li>
                        <hr class="bg-white">
                        <li class="nav-item"><a href="#" class="text-left fas fa-video nav-link text-white px-0 py-0"> DC</a></li>
                        <hr class="bg-white">
                        <li class="nav-item"><a href="#" class="text-left fas fa-video nav-link text-white px-0 py-0"> Fox</a></li>
                        <hr class="bg-white">
                        <li class="nav-item"><a href="#" class="text-left fas fa-video nav-link text-white px-0 py-0"> Disney</a></li>
                        <hr class="bg-white">
                    </ul> <!--Fin de lista de universos-->
                </div>
                <div class="col-12 col-md-10">
                    <div class="row">
                        <div class="col-6 col-md-4 p-0">
                            <img src="img/posters/01.jpg" alt="poster" class="img-fluid poster p-2 rounded">
                        </div>
                        <div class="col-6 col-md-4 p-0">
                            <img src="img/posters/02.jpg" alt="poster" class="img-fluid poster p-2 rounded">
                        </div>
                        <div class="col-6 col-md-4 p-0">
                            <img src="img/posters/03.jpg" alt="poster" class="img-fluid poster p-2 rounded">
                        </div>
                        <div class="col-6 col-md-4 p-0">
                            <img src="img/posters/04.jpg" alt="poster" class="img-fluid poster p-2 rounded">
                        </div>
                        <div class="col-6 col-md-4 p-0">
                            <img src="img/posters/05.jpg" alt="poster" class="img-fluid poster p-2 rounded">
                        </div>
                        <div class="col-6 col-md-4 p-0">
                            <img src="img/posters/06.jpg" alt="poster" class="img-fluid poster p-2 rounded">
                        </div> 
                        <div class="col-6 col-md-4 p-0">
                            <img src="img/posters/07.jpg" alt="poster" class="img-fluid poster p-2 rounded">
                        </div>
                        <div class="col-6 col-md-4 p-0">
                            <img src="img/posters/08.jpeg" alt="poster" class="img-fluid poster p-2 rounded">
                        </div>
                        <div class="col-6 col-md-4 p-0">
                            <img src="img/posters/09.jpg" alt="poster" class="img-fluid poster p-2 rounded">
                        </div>
                    </div><!--Fin de seccion de peliculas-->
                </div><!--fin de row de seccion de peliculas-->
            </div><!--fin de fila de contenido-->
        </div><!--Fin del container de seccion de peliculas-->

        <br><br><br><br>
        <div class="container d-flex justify-content-center">
            <h4 class="text-white">Siguenos en: 
                <a href="#" class="text-white"><i class="fab fa-facebook mx-4"></i></a> 
                <a href="#" class="text-white"><i class="fab fa-instagram mr-4"></i></a>
                <a href="#" class="text-white"><i class="fab fa-twitter"></i></a></h4>
        </div>
    <br>
    </main>

    <?php require 'simbolos/footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>