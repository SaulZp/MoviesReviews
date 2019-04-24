<?php
    include "conexion.php";
    $conexion = conectar();
    $nombre = $_POST['nombre'];
    $ap = $_POST['apellido'];
    $user = $_POST['user'];
    $email = $_POST['correo'];
    $pass = $_POST['pass'];
    $conf = $_POST['confirmacion'];

    $insertar = "INSERT into registro_usuario (nombre,apellidos,usuario,correo,contrasenia) VALUES ('$nombre','$ap',
    '$user','$email','$pass')";
    $resultado = mysqli_query($conexion,$insertar) or die ("Error al insertar los registros");
    //mysqli_close($conexion);
    echo'<script type="text/javascript">
    alert("Tus datos fueron guardados exitosamente, ingresa con tu usuario y contraseña");
    window.location.href="../login.php";
    </script>';
    
?>