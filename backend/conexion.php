<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "erp_seguridad";

$conn = mysqli_connect($host, $user, $password, $database);

if(!$conn){
    die("Error de conexión con la base de datos");
}

?>