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
    
    <!--Aqui se agregan las reseñas (paneles)-->
    
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class = "text-white p-5">Mis Reseñas</h1>
			</div>
		</div>
		<div class="jumbotron" style="background-color:#0489B1;">
            <div class="row">
                
                <div class="col-3 col-sm-3" align="center">
                    <img src="img/posters/01.jpg" alt="poster" class="img-fluid" style="width:170px;height:170px;">
                </div><!-- col-sm-4 -->

                <div class="col-6 col-sm-6">
                    
                    <div class="row">
                    	<div class="col-3 col-sm-6">
		                    <h2 class="text-white">CALIFICACIÓN</h2>
		                </div>
		                <div class="col-3 col-sm-6">
		                    <i class="fas fa-star h4 font-weight-bold star"></i>
                            <i class="fas fa-star h4 font-weight-bold star"></i>
                            <i class="fas fa-star h4 font-weight-bold star"></i>
                            <i class="fas fa-star h4 font-weight-bold star"></i>
                            <i class="fas fa-star h4 font-weight-bold star"></i>
		                </div>
                    </div>

                    <div class="row">
	                	<div class="col-12 col-sm-12 ">
	                		<br>
		                    <h2 class="text-white">RESEÑA</h2>
		                	<p class="text-white" align="j">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		                	tempor incididunt ut labore et dolore magna aliqua.</p>
		                </div>

	                </div>
                </div><!-- col-sm-8 -->

                <div class="col-3 col-sum-3">
                	<br>
                	<div class="row">
                		<div class="col-12 col-sum-12">
                			<div class="d-flex justify-content-center">
                                <button class="btn btn-success btn-lg">Editar</button>
                            </div>
                		</div>
                	</div>
                	<br>
                	<div class="row">
                		<div class="col-12 col-sum-12">
                			<div class="d-flex justify-content-center">
                                <button class="btn btn-danger btn-lg">Borrar</button>
                            </div>
                		</div>
                	</div>
                </div>

            </div><!-- row -->
        </div><!-- jumbotron -->
	</div><!-- container -->

	<div class="container">
		<div class="jumbotron" style="background-color:#0489B1;">
            <div class="row">
                
                <div class="col-3 col-sm-3" align="center">
                    <img src="img/posters/01.jpg" alt="poster" class="img-fluid" style="width:170px;height:170px;">
                </div><!-- col-sm-4 -->

                <div class="col-6 col-sm-6">
                    
                    <div class="row">
                    	<div class="col-3 col-sm-6">
		                    <h2 class="text-white">CALIFICACIÓN</h2>
		                </div>
		                <div class="col-3 col-sm-6">
		                    <i class="fas fa-star h4 font-weight-bold star"></i>
                            <i class="fas fa-star h4 font-weight-bold star"></i>
                            <i class="fas fa-star h4 font-weight-bold star"></i>
                            <i class="fas fa-star h4 font-weight-bold star"></i>
                            <i class="fas fa-star h4 font-weight-bold star"></i>
		                </div>
                    </div>

                    <div class="row">
	                	<div class="col-12 col-sm-12 ">
	                		<br>
		                    <h2 class="text-white">RESEÑA</h2>
		                	<p class="text-white" align="j">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		                	tempor incididunt ut labore et dolore magna aliqua.</p>
		                </div>

	                </div>
                </div><!-- col-sm-8 -->

                <div class="col-3 col-sum-3">
                	<br>
                	<div class="row">
                		<div class="col-12 col-sum-12">
                			<div class="d-flex justify-content-center">
                                <button class="btn btn-success btn-lg">Editar</button>
                            </div>
                		</div>
                	</div>
                	<br>
                	<div class="row">
                		<div class="col-12 col-sum-12">
                			<div class="d-flex justify-content-center">
                                <button class="btn btn-danger btn-lg">Borrar</button>
                            </div>
                		</div>
                	</div>
                </div>

            </div><!-- row -->
        </div><!-- jumbotron -->
	</div><!-- container -->
	<div class="container">
		<div class="jumbotron" style="background-color:#0489B1;">
            <div class="row">
                
                <div class="col-3 col-sm-3" align="center">
                    <img src="img/posters/01.jpg" alt="poster" class="img-fluid" style="width:170px;height:170px;">
                </div><!-- col-sm-4 -->

                <div class="col-6 col-sm-6">
                    
                    <div class="row">
                    	<div class="col-3 col-sm-6">
		                    <h2 class="text-white">CALIFICACIÓN</h2>
		                </div>
		                <div class="col-3 col-sm-6">
		                    <i class="fas fa-star h4 font-weight-bold star"></i>
                            <i class="fas fa-star h4 font-weight-bold star"></i>
                            <i class="fas fa-star h4 font-weight-bold star"></i>
                            <i class="fas fa-star h4 font-weight-bold star"></i>
                            <i class="fas fa-star h4 font-weight-bold star"></i>
		                </div>
                    </div>

                    <div class="row">
	                	<div class="col-12 col-sm-12 ">
	                		<br>
		                    <h2 class="text-white">RESEÑA</h2>
		                	<p class="text-white" align="j">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		                	tempor incididunt ut labore et dolore magna aliqua.</p>
		                </div>

	                </div>
                </div><!-- col-sm-8 -->

                <div class="col-3 col-sum-3">
                	<br>
                	<div class="row">
                		<div class="col-12 col-sum-12">
                			<div class="d-flex justify-content-center">
                                <button class="btn btn-success btn-lg">Editar</button>
                            </div>
                		</div>
                	</div>
                	<br>
                	<div class="row">
                		<div class="col-12 col-sum-12">
                			<div class="d-flex justify-content-center">
                                <button class="btn btn-danger btn-lg">Borrar</button>
                            </div>
                		</div>
                	</div>
                </div>

            </div><!-- row -->
        </div><!-- jumbotron -->
	</div><!-- container -->

    

    <?php require 'simbolos/footer.php'; ?>
</body>