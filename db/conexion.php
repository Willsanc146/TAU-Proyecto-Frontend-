<?php

$host = "localhost";
$usuario = "root";
$contraseña = "";
$db = "autolavado_parkinggp";


$conexion = new mysqli($host,$usuario,$contraseña,$db,3307);

if ($conexion->connect_errno) {
    echo "Se experimentan fallos de conexión";
    exit();
}

?>