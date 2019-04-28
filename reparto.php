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
			<h1 class = "text-white p-5">Reparto</h1>
            <div class=" container form-group text-white">
				<div class="text-center align-middle">
					<form action="includes/agregaReparto.php" method="post" enctype="multipart/form-data">
							<div class="container w-100 content-left">
								<p>Nombre del actor<input type="text" name="nombre" class="text-center  border-1 m-1 w-75" id="productora" placeholder="" autocomplete="off"></p>
								<p>Apellido del actor<input type="text" name="apellido" class="text-center  border-1 m-1 w-75" id="genero" placeholder="" autocomplete="off"></p>
								<p><label class="mr-2">Personaje</label><input type="text" name="personaje" class="text-center  border-1 m-1 ml-5 w-75" id="trailer" placeholder="" autocomplete="off"></p>
							</div>
							<div class="row text-white">
								<p class=" col-sm"><label class="mr-5">Foto del actor</label> <span class="btn boton-enviar ml-5"><input type="file"  id="foto" name="foto"></span></p>
							</div>
							<div class="row text-white">
								<p class=" col-sm"><button type="submit" name="submit" class="btn boton-enviar m-1">Guardar<i class="fas fa-save m-1"></i></button></p>
								<p class=" col-sm"><button class="btn btn-success m-1" href="fichaTecnica.php">Terminar<i class="fas fa-arrow-right m-1"></i></button></p>
							</div>
					</form>
				</div>
                
            </div><!--form-group-->
        <!--form--> 
	</main>
	<?php require 'simbolos/footer.php'; ?>
</body>
</html>