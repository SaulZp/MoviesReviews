<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reseñas</title>
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

    
    <!-- main -->
    <main>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-4">
                    <img src="img/posters/01.jpg" alt="poster" class="img-fluid">
                </div><!-- col-sm-4 -->
                <div class="col-12 col-sm-8">
                    
                    <!-- titulo -->
                    <div class="row">
                        <div class="col-12 mt-4 mt-sm-0">
                           <h2 class="text-white">Agrega tu reseña y puntuación</h2>     
                        </div>
                    </div>
                    
                    <!-- boton y estrellas -->
                    <div class="row">
                        <div class="col-12 col-sm-9">
                            <textarea class="form-control" rows="5"></textarea>
                        </div>
                        <div class="col-12 col-sm-3">
                                <i class="fas fa-star h4 font-weight-bold star"></i>
                                <i class="fas fa-star h4 font-weight-bold star"></i>
                                <i class="fas fa-star h4 font-weight-bold star"></i>
                                <i class="fas fa-star h4 font-weight-bold star"></i>
                                <i class="fas fa-star h4 font-weight-bold star"></i><br>
                                <br>
                                <div class="d-flex justify-content-center">
                                    <button class="btn boton">Confirmar</button>
                                </div>
                        </div>
                    </div>


                    <br>
                    <h3 class="text-white">Reseñas de la comunidad</h3>
                    <br>
                    
                    <!-- Reseñas de usuarios -->
                    <div class="row">
                        <div class="col-3 p-0 d-flex justify-content-center">
                            <img src="img/user.png" alt="user" class="img-fluid w-50 h-75">                            
                        </div>
                        <div class="col-9 p-0">
                            <p class="text-white m-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde dolor ratione et, optio magnam nesciunt labore quod, similique reprehenderit distinctio sapiente ipsa tenetur aliquid id blanditiis aliquam. Et, accusamus aliquid.</p>
                        </div>
                    </div>




                </div><!-- col-sm-8 -->
            </div><!-- row -->
        </div><!-- container -->
        <br>
    </main>



    <!-- footer -->
    <?php require 'simbolos/footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>