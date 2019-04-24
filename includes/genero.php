<?php
include "conexion.php";
$con = conectar();
if(isset($_POST["submit"])){
if(!empty($_POST["gender"])){
	$msg = "funca";
	$genero = $_POST["gender"];
	$sql = "insert into generos (genero) values (?)";
	$stmt = mysqli_prepare($con , $sql);
	$stmt-> bind_param("s", $_POST['gender']);
	$stmt->execute();
	$con->query($sql);
	header("Location:../agregarGenero.php");
	exit;
}
}
?>