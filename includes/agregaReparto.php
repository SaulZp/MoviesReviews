<?php
include "conexion.php";
$con = conectar();
if(isset($_POST["submit"])){
	$target_dir = "../img/reparto/";
	$target_file = $target_dir . basename($_FILES["foto"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["foto"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
	if (file_exists($target_file)) {
		$uploadOk = 0;
	}
	if ($_FILES["foto"]["size"] > 500000) {
		$uploadOk = 0;
	}
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		$uploadOk = 0;
	}
	if ($uploadOk == 1) {
		if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)){
		}
	}
if(!empty($_POST["nombre"]) && !empty($_POST["apellido"])  && !empty($_POST["personaje"])){
	$sql = "insert into reparto (id_Pelicula,nombre_Actor,apellidos_Actor,personaje) values (?,?,?,?,?)";
	$stmt = mysqli_prepare($con , $sql);
	$stmt-> bind_param("issss",$_SESSION['id_Pelicula'], $_POST['nombre'],$_POST['apellido'],$_POST['personaje'],$_FILES["foto"]["name"]);
	$stmt->execute();
	$con->query($sql);
	header("Location:../reparto.php");
	exit;
}
}
?>