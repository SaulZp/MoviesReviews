<?php
    include "conexion.php";
    $conexion = conectar();
    $nombre = $_POST['nombre'];

    $insertar = "INSERT into lista_peliculas (nombre) VALUES ('$nombre')";
    $resultado = mysqli_query($conexion,$insertar) or die ("Error al insertar los registros");
    //mysqli_close($conexion);
    echo'<script type="text/javascript">
    alert("Tus datos fueron guardados exitosamente, ingresa con tu usuario y contraseña");
    window.location.href="../login.php";
    </script>';
    
?>