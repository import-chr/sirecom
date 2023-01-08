<?php

$server = "localhost";
$database = "SIRECOM";
$username = "chrlr";
$password = "root";

try {
    $connect = new \PDO("mysql:host=$server;dbname=$database", $username, $password);

    echo "Conexion exitosa";
} catch(PDOException $e) {
    echo "Conexion fallida {$e->getMessage()}";
}