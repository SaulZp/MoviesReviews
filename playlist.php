<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Playlist</title>
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
     <!-- menu -->
     <?php require 'simbolos/navegacion.php';?>

    <main>
        <div class="container">
           <br>
            <!-- busqueda de pelicula -->
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h2 class="text-white text-center">Nombre Playlist</h2>
                </div>
                <div class="col-12 col-sm-6">
                    <form class="form-inline d-flex justify-content-center align-items-center">
                        <input type="text" id="pelicula" placeholder="Ingresa tu película aquí" class="form-control w-50">
                        <button type="submit" class="btn btn-success w-25 ml-3">Buscar</button>
                    </form>
                </div>
            </div><!-- row -->

            <br>
            <!-- peliculas poster -->
            <div class="row">
                <div class="col-6 col-sm-3 mb-3">
                    <img src="img/posters/01.jpg" alt="poster" class="img-fluid playlist">
                </div>
                <div class="col-6 col-sm-3 mb-3">
                    <img src="img/posters/02.jpg" alt="poster" class="img-fluid playlist">
                </div>
                <div class="col-6 col-sm-3 mb-3">
                    <img src="img/posters/03.jpg" alt="poster" class="img-fluid playlist">
                </div>
                <div class="col-6 col-sm-3 mb-3">
                    <img src="img/posters/04.jpg" alt="poster" class="img-fluid playlist">
                </div>
            </div>
        
        </div><!-- container -->
    </main>


    <br>
     <!-- footer -->
    <?php require 'simbolos/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>