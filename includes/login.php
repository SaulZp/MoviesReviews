<?php
    include "conexion.php";
    $conexion = conectar();
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    session_start();

    $consulta = "SELECT * FROM registro_usuario WHERE usuario='$user' AND contrasenia='$pass'";
    $consultaAdmin = "SELECT * FROM administrador WHERE usuario='$user' AND contrasenia='$pass'";
    
    $resultado = mysqli_query($conexion,$consulta) or die ("Error al consultar datos");
    
    $resultadoAdmin = mysqli_query($conexion,$consultaAdmin) or die ("Error al consultar datos");
    

    if(mysqli_num_rows($resultado)>0){
        $array = mysqli_fetch_array($resultado);
        $_SESSION['id_user'] = $array["id_Usuario"];
        echo'<script type="text/javascript">
            alert("Bienvenido: '.$array["nombre"].'");
            window.location="../index.php";
            </script>';
    }

    if(mysqli_num_rows($resultadoAdmin)>0){
        $arrayAdmin = mysqli_fetch_array($resultadoAdmin);
        $_SESSION['id_Admin'] = $arrayAdmin["id_Administrador"];
        echo'<script type="text/javascript">
        alert("Bienvenido Administrador: '.$arrayAdmin["nombre"].'");
        window.location="../fichaTecnica.php";
        </script>';
    }
?>