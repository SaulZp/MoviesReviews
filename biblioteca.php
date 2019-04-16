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
	<div class=" container content-middle form-group text-white">
		<div class="row">
			<div class="col">
				<a href="#"><img src="img/icono-playlist.png" class="rounded-circle img-fluid"></a>
				<h4 class="text-center">Crear playlist</h4>
			</div>
			<div class="col">
				<a href="#"><img src="img/icono-playlist.png" class="rounded-circle img-fluid"></a>
				<h4 class="text-center">Nombre-Playlist</h4>
			</div>
			<div class="col">
				<a href="#"><img src="img/icono-playlist.png" class="rounded-circle img-fluid"></a>
				<h4 class="text-center">Nombre-Playlist</h4>
			</div>
			<div class="col">
				<a href="#"><img src="img/icono-playlist.png" class="rounded-circle img-fluid"></a>
				<h4 class="text-center">Nombre-Playlist</h4>
			</div>
			<div class="col">
				<a href="#"><img src="img/icono-playlist.png" class="rounded-circle img-fluid"></a>
				<h4 class="text-center">Nombre-Playlist</h4>
			</div>
		</div>
		<div class=" container content-middle form-group text-white">
		<div class="row">
			<div class="col">
				<a href="#"><img src="img/icono-playlist.png" class="rounded-circle img-fluid"></a>
				<h4 class="text-center">Nombre-Playlist</h4>
			</div>
			<div class="col">
				<a href="#"><img src="img/icono-playlist.png" class="rounded-circle img-fluid"></a>
				<h4 class="text-center">Nombre-Playlist</h4>
			</div>
			<div class="col">
				<a href="#"><img src="img/icono-playlist.png" class="rounded-circle img-fluid"></a>
				<h4 class="text-center">Nombre-Playlist</h4>
			</div>
			<div class="col">
				<a href="#"><img src="img/icono-playlist.png" class="rounded-circle img-fluid"></a>
				<h4 class="text-center">Nombre-Playlist</h4>
			</div>
			<div class="col">
				<a href="#"><img src="img/icono-playlist.png" class="rounded-circle img-fluid"></a>
				<h4 class="text-center">Nombre-Playlist</h4>
			</div>
		</div>
	</div>
	</div>
	<?php require 'simbolos/footer.php'; ?>
</body>