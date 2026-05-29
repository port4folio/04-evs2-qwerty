<?php

include("conexion.php");

$empleados = [
    ["Juan Pérez", "Supervisor"],
    ["María Soto", "Administradora"]
];

echo "<h1>Módulo Empleados</h1>";

foreach($empleados as $empleado){
    echo "<p>".$empleado[0]." - ".$empleado[1]."</p>";
}

?>