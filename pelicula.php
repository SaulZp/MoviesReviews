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
    <main>  
        
        <div class="container-fluid p-0">
            <img src="img/banner/01.jpg" alt="banner" class="img-fluid w-100">
        </div><!--banner-->

        <!-- FICHA TECNICA -->
        <div class="menu p-4">
            <h3 class="text-white text-center">FICHA TECNICA</h3>
            <div class="container">
                <div class="text-white text-center">
                    <p class="d-md-inline-block d-block mx-md-3 mt-md-3 my-0">DIRECTOR: Juan Perez Lopez</p>
                    <p class="d-md-inline-block d-block mx-md-3 mt-md-3 my-0">AÑO DE ESTRENO: 2019</p>
                    <p class="d-md-inline-block d-block mx-md-3 mt-md-3 my-0">PRODUCTORA: Warner Bros</p>
                    <p class="d-md-inline-block d-block my-md-3 my-0">PAÍS: Estados Unidos</p>
                </div>
                <div class="text-white text-center">
                    <p class="d-md-inline-block d-block mx-md-3 my-md-3 my-0">DURACIÓN: 120 min.</p>
                    <p class="d-md-inline-block d-block mx-md-3 my-md-3 my-0">GÉNERO: Acción</p>
                    <p class="d-md-inline-block d-block mx-md-3 my-md-3 my-0">IDIOMAS: Ingles/Español</p>
                </div>
            </div>
        </div>
        
        <!-- SINOPSIS -->
        <div class="container p-4">
            <div class="row">
                <div class="col-12 col-md-4">
                    <img src="img/posters/01.jpg" alt="poster" class="img-fluid rounded">
                </div>
                <div class="col-12 col-md-8">
                    <div class="row">
                        <div class="col-12">
                            <span class="display-4 text-white">SHAZAM!</span>
                        </div>
                        <div class="col-12 pt-3">
                            <p class="text-white">
                            Todos tenemos un superhéroe dentro de nosotros, solo se necesita un poco de magia para sacarlo. En el caso de Billy Batson, gritando una sola palabra (SHAZAM!), este niño adoptivo de 14 años de edad puede convertirse en un superhéroe adulto, cortesía de un antiguo mago. Aún siendo un niño de corazón, dentro de un cuerpo desgarrado y divino, Shazam se deleita en esta versión adulta de sí mismo haciendo lo que cualquier adolescente haría con superpoderes: ¡divertirse con ellos!
                            ¿Puede volar? ¿Tiene visión de rayos X? ¿Puede disparar un rayo de sus manos? ¿Puede omitir su prueba de estudios sociales? Shazam se propone poner a prueba los límites de sus habilidades con la alegre imprudencia de un niño. Pero necesitará dominar estos poderes rápidamente para luchar contra las fuerzas mortales del mal controladas por el Doctor Thaddeus Sivana                                
                            </p>
                        </div>
                        <div class="col-12 col-md-7 text-center">
                            <div class="d-none d-md-block">
                                <br><br><br>
                            </div>
                            <p class="display-4 star font-weight-bold">4.5</p>
                            <i class="fas fa-star h2 font-weight-bold star"></i>
                            <i class="fas fa-star h2 font-weight-bold star"></i>
                            <i class="fas fa-star h2 font-weight-bold star"></i>
                            <i class="fas fa-star h2 font-weight-bold star"></i>
                            <i class="fas fa-star h2 font-weight-bold star"></i><br>
                            <a href="#" class="enlace h5">Ver Reseñas</a>
                        </div>
                        <div class="col-12 col-md-5 d-flex justify-content-center d-md-block">
                            <div class="d-none d-md-block">
                                <br><br><br><br><br><br>
                            </div>  
                            <button class="btn boton w-75 my-4 my-md-0">Ver Trailer <i class="fas fa-play pl-3"></i></button>
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
                <div class="col-6 col-md-3 mt-4 p-0">
                    <img src="img/reparto/02.jpg" class="img-fluid rounded d-flex justify-content-center mx-auto actor" alt="actor">
                    <p class="m-0 text-white text-center">Nombre del actor
                        <br>Nombre del personaje
                    </p>
                </div>
                <div class="col-6 col-md-3 mt-4 p-0">
                    <img src="img/reparto/03.jpg" class="img-fluid rounded d-flex justify-content-center mx-auto actor" alt="actor">
                    <p class="m-0 text-white text-center">Nombre del actor
                        <br>Nombre del personaje
                    </p>
                </div>
                <div class="col-6 col-md-3 mt-4 p-0">
                    <img src="img/reparto/04.jpg" class="img-fluid rounded d-flex justify-content-center mx-auto actor" alt="actor">
                    <p class="m-0 text-white text-center">Nombre del actor
                        <br>Nombre del personaje
                    </p>
                </div>
                <div class="col-6 col-md-3 mt-4 p-0">
                    <img src="img/reparto/05.jpg" class="img-fluid rounded d-flex justify-content-center mx-auto actor" alt="actor">
                    <p class="m-0 text-white text-center">Nombre del actor
                        <br>Nombre del personaje
                    </p>
                </div>
            </div><!--row-->
        </div><!--container reparto-->
    </main>
        
    <br><br>
    <?php require 'simbolos/footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>