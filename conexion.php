<?php

$server = 'localhost:3306';
$usuario = 'root';
$contraseña = '';
$bd = 'ejemplo';

try {
    $conexion = new PDO("mysql:host=$server;dbname=$bd", $usuario,$contraseña);
    echo "Se conecto correctamente a la base de datos";
} catch (PDOException $ecep){
    echo "no se logro conectar: $bd, error: $ecep";
}
return $conexion;
?>