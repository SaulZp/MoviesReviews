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
<nav class="navbar navbar-dark menu navbar-expand-md contenedor">
        <div class="container">
            <a href="#" class="navbar-brand"><strong class="texto">MOVIESREVIEWS</strong></a>   
            <button type="submit" class="navbar-toggler" data-toggle="collapse" data-target="#menu-principal" 
            aria-controls="menu-principal" aria-expanded="false" aria-label="Desplegar Menú">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse" id="menu-principal">
                <ul class="navbar-nav ml-auto">
                    
                    <li class="nav-item"><a class="nav-link text-white" href="#">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Mis playlists</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Mis reseñas</a></li>
                    <li class="nav-item "><a href="#"><i class="fa fa-user-circle text-white align-bottom " ></i></a></li>
                </ul>
            </div> <!--navbar-collapse-->
        </div> <!--container-->
    </nav> <!--navbar-->
	
	<h1 class = "text-white p-5">Mi Biblioteca</h1>
	<div class="m-1">
	<div class=" container content-middle form-group align-middle">
		<div class="row align-middle">
			<div class="col-4">
				<img class="img-fluid" src="img/posters/01.jpg">
			</div>
			<div class="col-8 my-auto">
				<h1 class="text-white"> Actualiza tu reseña </h1>
				<textarea class="text-center w-100 border-1  " name="sinop" rows="5" ></textarea>
				<h1 class="text-white"> Actualiza tu opinión </h1>
				<div class="text-center">
					<i class="fas fa-star h2 star text-warning"></i>
                            <i class="fa fa-star h2 text-warning star"></i>
                            <i class="fa fa-star h2  star text-warning"></i>
                            <i class="fa fa-star h2 star text-warning"></i>
					<i class="fas fa-star h2 star text-warning"></i><br>
				</div>
				<div class="container">
					<div class="row">
						<div class="col">
							<button type="button" class="btn btn-danger btn-lg" >Cancelar</button>
						</div>
						<div class="col text-right">
							<button type="button" class="btn btn-warning btn-lg" style="background-color:#F17F1A; border-color:#F17F1A">Actualizar</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<?php require 'simbolos/footer.php'; ?>
</body>