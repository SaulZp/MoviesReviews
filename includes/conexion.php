<?php

function conectar(){
    $user = "root";
    $pass = "";
    $server = "localhost";
    $db = "movies";
    $con = new mysqli($server, $user, $pass, $db) or die ("Error al conectar ".mysql_error());    
    return $con;
}

?>