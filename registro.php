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
            <div class=" d-flex form-group justify-content-center text-white row">
				<div class="col-sm-5 text-right">
				<br>
					<img src="img/logo.jpg" alt="logo" class="img-fluid">
				</div>
				<div class="col-sm-2 text-right align-middle">
					<br>
					<br>
					<br>
					<br>
					<br>

					<p class="h5">Nombre</p>
					<hr style="height:15px; padding:0px; margin:0px; visibility:hidden;" />
					<p class="h5">Apellidos</p>
					<hr style="height:15px; padding:0px; margin:0px; visibility:hidden;" />
					<p class="h5">Usuario</p>
					<hr style="height:12px; padding:0px; margin:0px; visibility:hidden;" />
					<p class="h5">Correo</p>
					<hr style="height:12px; padding:0px; margin:0px; visibility:hidden;" />
					<p class="h5">Contraseña</p>
					<hr style="height:4px; padding:0px; margin:0px; visibility:hidden;" />
					<p class="h5">Confirmar<br>Contraseña</p>
				</div>
				<div class="col-sm-5 ">
				<form action="includes/registro.php" method="POST">
					<br>
					<br>
					<br>
					<br>
					<br>
					<p class="input-group"><i class="icono-login text-dark fa fa-user  w-30"></i><input type="text" class="text-center w-50 border-0 m-0 " name="nombre" id="nombre" placeholder="" autocomplete="off"></p>
					<p class="input-group"><i class="text-dark fa fa-user icono-login"></i><input type="text" class="text-center  w-50 border-0" name="apellido" id="apellido" placeholder="" autocomplete="off"></p>
					<p class="input-group"><i class="text-dark fa fa-user icono-login"></i><input type="text" class="text-center w-50 border-0" id="user" name="user" placeholder="" autocomplete="off"></p>
					<p class="input-group"><i class="text-dark fa fa-envelope icono-login"></i><input type="email" class="text-center  w-50 border-0" id="correo" name="correo" placeholder="" autocomplete="off"></p>
					<p class="input-group"><i class="text-dark fa fa-key icono-login"></i><input type="password" class="text-center w-50 border-0" id="pass" placeholder="" name="pass" autocomplete="off"></p>
					<p class="input-group"><i class="text-dark  fa fa-key icono-login"></i><input type="password" class="text-center w-50 border-0" id="confirmacion" placeholder="" name="confirmacion" autocomplete="off"></p>
					<p class="text-center"><button type="submit" class="btn boton-enviar align-left">Enviar</button></p>
				</form>
				</div>
                
                
            </div><!--form-group-->
        <!--form--> 
	</main>
	<?php require 'simbolos/footer.php'; ?>
</body>
</html>