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
			<h1 class = "text-white p-5">AGREGAR GÉNERO NUEVO</h1>
            <div class=" container form-group text-white ">
				<div class="text-center align-middle">
					<form action="">
							<div class="row text-white align-middle">
								<div class=" col-sm  my-auto">
								<h3>Nombre del Género</h3>
								<input type="text" class="text-center  border-1 m-2 w-100" id="titulo" placeholder="" autocomplete="off">
								<button class="btn boton-enviar m-2">Guardar<i class="fas fa-save m-1"></i></button></p>
								</div>
								<div class=" col-sm">
								<img src="img/logo.jpg" alt="logo" class="img-fluid">
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