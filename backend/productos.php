<?php

include("conexion.php");

$productos = [
    ["Notebook Dell", 12],
    ["Monitor Samsung", 7]
];

echo "<h1>Módulo Productos</h1>";

foreach($productos as $producto){
    echo "<p>".$producto[0]." - Stock: ".$producto[1]."</p>";
}

?>