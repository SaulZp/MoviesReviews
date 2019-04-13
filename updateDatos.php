<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualización de Datos</title>
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
    
    <?php require 'simbolos/navegacion.php'; ?>

    <main>
        <div class="container">
            <br>
            <h1 class="text-white">Actualización de tus Datos</h1>
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="img/user.jpg" alt="Imagen de Perfil" class="img-fluid rounded perfil w-100">
                    <div class="row">
                        <div class="col-12">                            
                            <br>
                            <input type="file" class="form-control-file">
                        </div>
                    </div>
                </div><!--div imagen update-->
                <div class="col-12 col-md-6">
                    <div class="d-md-block">
                        <br><br>
                    </div>
                    <form action="">
                        
                        <!--  NOMBRE  -->
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-white text-center">Nombre</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nombre">
                            </div><!--div input -->
                        </div><!-- form-group -->
                        
                        <!-- APELLIDOS -->
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-white text-center">Apellidos</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="ap">
                            </div><!--div input -->
                        </div><!-- form-group -->
                        
                        <!-- CONTRASEÑA -->
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-white text-center">Contraseña</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="pass">
                            </div><!--div input -->
                        </div><!-- form-group -->
                        
                        <!-- REPETICION DE CONTRASEÑA -->
                        <div class="form-group row">
                            <label class="col-sm-2  text-white text-center">Repetir Contraseña</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control w-100 " id="rep-pass">
                            </div><!--div input -->
                        </div><!-- form-group -->

                        <!-- BOTON GUARDAR  -->
                        <div class="form-group row">
                            <div class="offset-md-9 col-md-3 d-md-block d-flex justify-content-center mt-4">
                                <input type="submit" class="btn boton w-100" value="Guardar">
                            </div><!--div input -->
                        </div><!-- form-group -->

                    </form>
                </div><!--div form de datos-->
            </div>
        </div>
        <br><br>
    </main>

    <?php require 'simbolos/footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>