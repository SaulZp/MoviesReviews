<?php
include "conexion.php";
$con = conectar();
if(isset($_POST["submit"])){
if(!empty($_POST["nombre"]) && !empty($_POST["apellido"])  && !empty($_POST["personaje"])){
	$sql = "insert into reparto (id_Pelicula,nombre_Actor,apellidos_Actor,personaje) values (1,?,?,?)";
	$stmt = mysqli_prepare($con , $sql);
	$stmt-> bind_param("sss", $_POST['nombre'],$_POST['apellido'],$_POST['personaje']);
	$stmt->execute();
	$con->query($sql);
	header("Location:../fichaTecnica.php");
	exit;
}
}
?>