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
                    
                    <li class="nav-item"><a class="nav-link text-white" href="#">Agregar Película</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Agregar Genero</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Salir</a></li>
                    
                </ul>
            </div> <!--navbar-collapse-->
        </div> <!--container-->
    </nav> <!--navbar-->

    <!--MAIN-->
    <main >
			<h1 class = "text-white p-5">FICHA TÉCNICA</h1>
            <div class=" container content-middle form-group text-white">
				<div class="">
					<form action="includes/agregarPeli.php" method="post" enctype="multipart/form-data">
							<div class="row text-white">
								<p class="col-sm-1"></p>
								<p class=" col-sm">Título<input type="text" class="text-center  border-1 m-1 w-75" id="titulo" name="titulo" placeholder="" autocomplete="off"></p>
								<p class=" col-sm">Director<input type="text" class="text-center  border-1 m-1 w-75" id="direc" name="director" placeholder="" autocomplete="off"></p>
								<p class="col-sm-1"></p>
							</div>
							<div class="row text-white">
							<p class="col-sm-1"></p>
							<div class="col container w-100 mr-5">
								<p class="text-left ">Sinopsis</p><textarea name="sinopsis" class="text-center w-100 border-1  " name="sinop" rows="5" ></textarea>
							</div>
							<p class="col-sm-1"></p>
							</div>
							<div class="row text-white">
								<p class="col-sm-1"></p>
								<p class=" col-sm">Año<input type="text" name="ano" class="text-center  border-1 m-1 w-75" id="ano" placeholder="" autocomplete="off"></p>
								<p class=" col-sm">Duración<input type="text" name="durac" class="text-center  border-1 m-1 w-75" id="durac" placeholder="" autocomplete="off"></p>
								<p class="col-sm-1"></p>
							</div>
							<div class="row text-white">
							<p class="col-sm-1"></p>
								<p class=" col-sm">País<input type="text"name="pais"  class="text-center  border-1 m-1 w-75" id="pais" placeholder="" autocomplete="off"></p>
								<p class=" col-sm">Idiomas<input type="text" name="idiomas" class="text-center  border-1 m-1 w-75" id="idiomas" placeholder="" autocomplete="off"></p>
								<p class="col-sm-1"></p>
							</div>
							<div class="row content-left">
								<p class="col-sm-1"></p>
								<p class="col-sm-1">Productora</p>
								<p class="col"> <input type="text" class="text-center  border-1 m-1 w-100" id="productora" name="productora" placeholder="" autocomplete="off"></p>
								<p class="col-sm-2"></p>
							</div>
							<div class="row ">
							<p class="col-sm-1"></p>
							<p class="col-sm-1">Genero<p/>
							<p class="col"><input type="text" class="text-center  border-1 m-1 w-100" id="genero" name="genero" placeholder="" autocomplete="off"></p>
							<p class="col-sm-2"></p>
							</div>
							<div class="row content-left">
							<p class="col-sm-1"></p>
							<p class="col-sm-1">Trailer</p>
							<p class="col-sm-8"><input type="text" class="text-center  border-1 m-1 w-100" id="trailer" name="trailer" placeholder="" autocomplete="off"></p>
							<p class="col-sm-2"></p>
							</div>
							<div class="row text-white">
							<p class="col-sm-1"></p>
								<p class=" col-sm">Poster<span class="btn boton-enviar m-1"><input type="file" name="poster" id="poster"></span></p>
								<p class=" col-sm">Poster Banner<span class="btn boton-enviar m-1"><input type="file" name="posterBanner" id="posterBanner"></span></p>
								<p class="col-sm-1"></p>
							</div>
							<div class ="row text-white">
								<p class="col text-center"><button type="submit" name="submit" class="btn boton-enviar m-2">Continuar<i class="fas fa-save m-1"></i></button></p>
							</div>
					</form>
				</div>
                
            </div><!--form-group-->
        <!--form--> 
	</main>
	<?php require 'simbolos/footer.php'; ?>
</body>
</html>