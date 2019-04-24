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
			<h1 class = "text-white p-5">Contacto</h1>
            <div class=" container form-group text-white">
				<div class="text-center align-middle">
					<form action="">

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-white text-center">Correo</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="correo">
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-white text-center">Asunto</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="asunto">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-white text-center">Mensaje</label>
                              <div class="col-sm-10">
                              	<textarea class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                        
							<div class="container">
					<div class="row">
						<div class="col">
							<button type="button" class="btn btn-danger btn-lg" >Cancelar</button>
						</div>
						<div class="col text-right">
							<button type="submit" class="btn btn-warning btn-lg" style="background-color:#F17F1A; border-color:#F17F1A">Enviar</button>
						</div>
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