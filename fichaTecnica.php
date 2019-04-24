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
			<h1 class = "text-white p-5">FICHA TÉCNICA</h1>
            <div class=" container content-middle form-group text-white">
				<div class="">
					<form action="reparto.php" method="POST">
							<div class="row text-white">
								<p class="col-sm-1"></p>
								<p class=" col-sm">Título<input type="text" class="text-center  border-1 m-1 w-75" id="titulo" placeholder="" autocomplete="off"></p>
								<p class=" col-sm">Director<input type="text" class="text-center  border-1 m-1 w-75" id="direc" placeholder="" autocomplete="off"></p>
								<p class="col-sm-1"></p>
							</div>
							<div class="row text-white">
							<p class="col-sm-1"></p>
							<div class="col container w-100 mr-5">
								<p class="text-left ">Sinopsis</p><textarea class="text-center w-100 border-1  " name="sinop" rows="5" ></textarea>
							</div>
							<p class="col-sm-1"></p>
							</div>
							<div class="row text-white">
								<p class="col-sm-1"></p>
								<p class=" col-sm">Año<input type="text" class="text-center  border-1 m-1 w-75" id="ano" placeholder="" autocomplete="off"></p>
								<p class=" col-sm">Duración<input type="text" class="text-center  border-1 m-1 w-75" id="durac" placeholder="" autocomplete="off"></p>
								<p class="col-sm-1"></p>
							</div>
							<div class="row text-white">
							<p class="col-sm-1"></p>
								<p class=" col-sm">País<input type="text" class="text-center  border-1 m-1 w-75" id="pais" placeholder="" autocomplete="off"></p>
								<p class=" col-sm">Idiomas<input type="text" class="text-center  border-1 m-1 w-75" id="idiomas" placeholder="" autocomplete="off"></p>
								<p class="col-sm-1"></p>
							</div>
							<div class="row content-left">
								<p class="col-sm-1"></p>
								<p class="col-sm-1">Productora</p>
								<p class="col"> <input type="text" class="text-center  border-1 m-1 w-100" id="productora" placeholder="" autocomplete="off"></p>
								<p class="col-sm-2"></p>
							</div>
							<div class="row ">
							<p class="col-sm-1"></p>
							<p class="col-sm-1">Género<p/>
							<p class="col"><input type="text" class="text-center  border-1 m-1 w-100" id="genero" placeholder="" autocomplete="off"></p>
							<p class="col-sm-2"></p>
							</div>
							<div class="row content-left">
							<p class="col-sm-1"></p>
							<p class="col-sm-1">Trailer</p>
							<p class="col-sm-8"><input type="text" class="text-center  border-1 m-1 w-100" id="trailer" placeholder="" autocomplete="off"></p>
							<p class="col-sm-2"></p>
							</div>
							<div class="row text-white">
								<p class="col-sm-1"></p>
								<p class=" col-sm">Poster<span class="btn boton-enviar m-1"><input type="file"></span></p>
								<p class=" col-sm">Poster Banner<span class="btn boton-enviar m-1"><input type="file"></span></p>
								<p class="col-sm-1"></p>
							</div>
							<div class="row">
								<div class="col-12 d-flex justify-content-center">
									<input type="submit" value="Continuar" href="reparto.php" class="btn btn-success">
								</div>
							</div>
					</form>
				</div>
                
            </div><!--form-group-->
        <!--form--> 
	</main>
	<?php require 'simbolos/footer.php'; ?>
</body>
</html>