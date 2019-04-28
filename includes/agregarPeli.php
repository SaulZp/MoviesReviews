<?php
include "conexion.php";
$con = conectar();
if(isset($_POST["submit"])){
	$target_dir = "../img/posters/";
	$target_file = $target_dir . basename($_FILES["poster"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["poster"]["tmp_name"]);
    /*if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
	if (file_exists($target_file)) {
		$uploadOk = 0;
	}
	if ($_FILES["poster"]["size"] > 500000) {
		$uploadOk = 0;
	}
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		$uploadOk = 0;
	}*/
	if ($uploadOk == 1) {
		if (move_uploaded_file($_FILES["poster"]["tmp_name"], $target_file)){
		}
	}
	$target_dir1 = "../img/banners/";
	$target_file1 = $target_dir1 . basename($_FILES["posterBanner"]["name"]);
	$uploadOk1 = 1;
	$imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
    $check1 = getimagesize($_FILES["posterBanner"]["tmp_name"]);
    /*if($check1 !== false) {
        $uploadOk1 = 1;
    } else {
        $uploadOk1 = 0;
		echo "no es img";
    }
	if (file_exists($target_file1)) {
		$uploadOk1 = 0;
		echo "existe";
	}
	if ($_FILES["posterBanner"]["size"] > 500000) {
		$uploadOk1 = 0;
		echo "Muy grande";
	}
	if($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg"
	&& $imageFileType1 != "gif" ) {
		$uploadOk1 = 0;
		echo "No sirve";
	}*/
	if ($uploadOk1 == 1) {
		if (move_uploaded_file($_FILES["posterBanner"]["tmp_name"], $target_file1)){}
	}
	if(!empty($_POST["titulo"]) && !empty($_POST["director"])  && !empty($_POST["sinopsis"]) && !empty($_POST["ano"]) && !empty($_POST["durac"]) && !empty($_POST["pais"])
	&& !empty($_POST["idiomas"]) && !empty($_POST["productora"]) && !empty($_POST["genero"]) && !empty($_POST["trailer"])){
	/*$sql = 'select id_Genero from generos where genero ="'.$_POST["genero"].'"';	
	$result = mysqli_query($con,$sql);
	if(mysqli_num_rows($result) > 0){
		$row = mysqli_fetch_assoc($result);
		$id_Genero = $row['id_Genero'];
	}*/
	$sql = "insert into pelicula (titulo,director,sinopsis,anio,id_Genero,duracion,pais,productora,idioma,poster,poster_Banner,trailer) values (?,?,?,?,?,?,?,?,?,?,?,?)";
	$stmt = mysqli_prepare($con , $sql);
	$stmt->bind_param("sssiisssssss", $_POST["titulo"],$_POST["director"],$_POST["sinopsis"],$_POST["ano"],$_POST["genero"],$_POST["durac"],$_POST["pais"],$_POST["productora"],$_POST["idiomas"],$_FILES["poster"]["name"],$_FILES["posterBanner"]["name"],$_POST["trailer"]);
	$stmt->execute();
	$con->query($sql);
	$sql = 'select id_Pelicula from pelicula where titulo ="'.$_POST["titulo"].'"';	
	$result = mysqli_query($con,$sql);
	if(mysqli_num_rows($result) > 0){
		$row = mysqli_fetch_assoc($result);
		$id_Pelicula = $row['id_Pelicula'];
	}
	$_SESSION['id_Pelicula']=$id_Pelicula;
	header("Location:../reparto.php");
	exit;
}
}
?>

<html>
</html>
