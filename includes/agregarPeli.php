<?php
include "conexion.php";
$con = conectar();
if(isset($_POST["submit"])){
if(!empty($_POST["titulo"]) && !empty($_POST["director"])  && !empty($_POST["sinopsis"]) && !empty($_POST["ano"]) && !empty($_POST["durac"]) && !empty($_POST["pais"])
	&& !empty($_POST["idiomas"]) && !empty($_POST["productora"]) && !empty($_POST["genero"]) && !empty($_POST["trailer"])){
	$sql = 'select id_Genero from generos where genero ="'.$_POST["genero"].'"';	
	$result = mysqli_query($con,$sql);
	if(mysqli_num_rows($result) > 0){
		$row = mysqli_fetch_assoc($result);
		$id_Genero = $row['id_Genero'];
	}
	$sql = "insert into pelicula (titulo,director,sinopsis,anio,id_Genero,duracion,pais,productora,trailer) values (?,?,?,?,?,?,?,?,?)";
	$stmt = mysqli_prepare($con , $sql);
	$stmt->bind_param("sssiissss", $_POST["titulo"],$_POST["director"],$_POST["sinopsis"],$_POST["ano"],$id_Genero,$_POST["durac"],$_POST["pais"],$_POST["productora"],$_POST["trailer"]);
	$stmt->execute();
	$con->query($sql);
	header("Location:../fichaTecnica.php");
	exit;
}
}
?>