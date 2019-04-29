<?php
    include "includes/conexion.php";
    $conexion = conectar();
    
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
    <!-- Agregando lighbox -->
    <link rel="stylesheet" href="css/lightbox.min.css">
    <!-- Agregando Slick -->
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
    <!-- Agregando estilos puntacion -->
    <link rel="stylesheet" href="css/styleStar.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Agregando Hojas de Estilos personalizada -->
    <link rel="stylesheet" href="css/estilos.css">

</head>
<body>

    <?php require 'simbolos/navegacion.php';?>

    <!--MAIN-->
    <main>  
        
        <div class="container-fluid p-0">
            <?php
                $idPelicula = $_GET["idPelicula"];
                 $consulta = "SELECT * FROM pelicula WHERE id_Pelicula = '$idPelicula'";
                 $resultado = mysqli_query($conexion, $consulta);
                 if(mysqli_num_rows($resultado)>0){
                     $row = mysqli_fetch_assoc($resultado);
                     echo'
                        <img src="img/banners/'.$row["poster_Banner"].'" alt="banner" class="img-fluid w-100 banner">       
                     ';
                }
            ?>
        </div><!--banner-->

        <!-- FICHA TECNICA -->
        <div class="menu p-4">
            <h3 class="text-white text-center">FICHA TÉCNICA</h3>
            <div class="container">
                <div class="text-white text-center">
                    <?php
                            echo '
                            <p class="d-md-inline-block d-block mx-md-3 mt-md-3 my-0">DIRECTOR: '.$row["director"].'</p>
                            <p class="d-md-inline-block d-block mx-md-3 mt-md-3 my-0">AÑO DE ESTRENO: '.$row["anio"].'</p>
                            <p class="d-md-inline-block d-block mx-md-3 mt-md-3 my-0">PRODUCTORA: '.$row["productora"].'</p>
                            <p class="d-md-inline-block d-block my-md-3 my-0">PAÍS: '.$row["pais"].'</p>        
                            ';
                    ?>

                    
                </div>
                <div class="text-white text-center">
                    <?php
                        $consultaGenero = "SELECT genero FROM generos WHERE id_Genero = ".$row["id_Genero"];
                        $resultadoGenero = mysqli_query($conexion, $consultaGenero);
                        if(mysqli_num_rows($resultadoGenero)>0){
                            $arrayGenero = mysqli_fetch_assoc($resultadoGenero);
                            $idGenero = $arrayGenero["genero"];
                            echo'
                                <p class="d-md-inline-block d-block mx-md-3 my-md-3 my-0">DURACIÓN: '.$row["duracion"].'</p>
                                <p class="d-md-inline-block d-block mx-md-3 my-md-3 my-0">GÉNERO: '.$idGenero.'</p>
                                <p class="d-md-inline-block d-block mx-md-3 my-md-3 my-0">IDIOMAS: '.$row["idioma"].'</p>    
                        ';
                        }
                        
                    ?>
                    
                </div>
            </div>
        </div>
        
        <!-- SINOPSIS -->
        <div class="container p-4">
            <div class="row">
                <div class="col-12 col-md-4">
                        <?php
                            echo '
                                <img src="img/posters/'.$row["poster"].'" alt="poster" class="img-fluid rounded ">
                            ';
                        ?>
                </div>
                <div class="col-12 col-md-8">
                    <div class="row">
                        <div class="col-12">
                            <?php
                                echo'
                                <span class="display-4 text-white">'.$row["titulo"].'</span>    
                                ';
                            ?>
                            
                        </div>
                        <div class="col-12 pt-3">
                            <?php
                                echo'
                                    <p class="text-white">    
                                    '.$row["sinopsis"].'
                                    </p>
                                ';
                            ?>
                        </div>
                        <div class="col-12 col-md-7 text-center">
                            <div class="d-none d-md-block">
                                <br><br><br>
                            </div>
                            
                            <p class="display-4 star font-weight-bold">Puntuacion</p>
                            <p class="display-4 star font-weight-bold">4.5</p>
                            <a href="resenas.php" class="enlace h5 ">Ver Reseñas</a>
                        </div>
                        <div class="col-12 col-md-5 d-flex justify-content-center d-md-block">
                            <div class="d-none d-md-block">
                                <br><br><br><br><br><br>
                            </div>  
                            <?php
                                echo '<a href="'.$row["trailer"].'" target="_blank"><button class="btn boton w-75 my-4 my-md-0" data-lightbox="galeria">Ver Trailer <i class="fas fa-play pl-3"></i></button> </a>';
                            ?>
                        </div><!-- Boton trailer-->
                    </div><!--row-->
                </div><!--col-md-8-->
            </div><!--row-->
        </div><!--container sinopsis-->

        

        <!--REPARTO-->
        <div class="container">
            <h3 class="text-white text-center text-uppercase">Reparto</h3>
            <div class="row">
                <div class="col-6 col-md-3 mt-4 p-0">
                    <img src="img/reparto/01.jpg" class="img-fluid rounded d-flex justify-content-center mx-auto actor" alt="actor">
                    <p class="m-0 text-white text-center">Nombre del actor
                        <br>Nombre del personaje
                    </p>
                </div>
            </div><!--row-->
        </div><!--container reparto-->
        <br><br>

        <div class="container-fluid menu">
            <div class="container">
                <h2 class="text-white text-center py-4">Recomendaciones</h2>
                <div class="regular slider">
                    <div class="mx-1 mx-sm-1 mx-md-2 mx-lg-4"><a href="#"><img src="img/posters/01.jpg" class="img-fluid rounded recomendacion" alt="recomendacion"></a></div>
                    <div class="mx-1 mx-sm-1 mx-md-2 mx-lg-4"><a href="#"><img src="img/posters/02.jpg" class="img-fluid rounded recomendacion" alt="recomendacion"></a></div>
                    <div class="mx-1 mx-sm-1 mx-md-2 mx-lg-4"><a href="#"><img src="img/posters/03.jpg" class="img-fluid rounded recomendacion" alt="recomendacion"></a></div>
                    <div class="mx-1 mx-sm-1 mx-md-2 mx-lg-4"><a href="#"><img src="img/posters/04.jpg" class="img-fluid rounded recomendacion" alt="recomendacion"></a></div>
                    <div class="mx-1 mx-sm-1 mx-md-2 mx-lg-4"><a href="#"><img src="img/posters/05.jpg" class="img-fluid rounded recomendacion" alt="recomendacion"></a></div>
                    <div class="mx-1 mx-sm-1 mx-md-2 mx-lg-4"><a href="#"><img src="img/posters/06.jpg" class="img-fluid rounded recomendacion" alt="recomendacion"></a></div>
                </div>
                <br>
            </div>
        </div>
    </main>
        
        
    


    <br><br>
    <?php require 'simbolos/footer.php'; ?>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="slick/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/lightbox-plus-jquery.min.js"></script>
    <script src="js/lightbox.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
        $(".regular").slick({
            infinite: true,
            slidesToShow: 3,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
                {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    //autoplaySpeed: 2000,
                    slidesToScroll: 3,
                    infinite: true,
                }
                },
                {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2
                }
                },
                {
                breakpoint: 0,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
                }
            ]
        });
    });
    </script>
</body>
</html>