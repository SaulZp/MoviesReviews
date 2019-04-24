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
        </div> <!--container-->
    </nav> <!--navbar-->

    <!--MAIN-->
    <main >
			<h1 class = "text-white p-5">Nosotros</h1>
            <div class=" container">
				<div class="row">

                    <div class="col-12 col-md-6">
                    <img src="img/nosotros.jpg" alt="nosotros" class="img-fluid rounded perfil w-100">
                    <div class="row">
                        <div class="col-12">                            
                            <br>
                        </div>
                    </div>
                    </div> 

					<form action="">
                        <div class="row">
                        <div class="col-12 mt-4 mt-sm-0">
                           <h2 class="text-white">PROPOSITO</h2> 
                            <label class="text-white">Brindarle al usuario entretenimiento y confianza para poder opinar al respecto</label>
                        </div>
                        </div>

                        <div class="row">
                        <div class="col-12 mt-4 mt-sm-0">
                           <h2 class="text-white">MISION</h2> 
                            <label class="text-white">Ambiente con igualdad, dedicado al arte, donde todo usuario puede participar.</label>
                        </div>
                        </div>

                        <div class="row">
                        <div class="col-12 mt-4 mt-sm-0">
                           <h2 class="text-white">VISIÓN</h2> 
                            <label class="text-white">Brindarle al usuario entretenimiento y confianza para poder opinar al respecto.</label>
                        </div>
                        </div>
					</form>
				</div>
                
            </div><!--form-group-->
        <!--form--> 
	</main>
	<?php require 'simbolos/footer1.php'; ?>
</body>
</html>