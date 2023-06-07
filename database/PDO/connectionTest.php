<?php
$server = "localhost";
$database = "sirecom";
$username = "root";
$password = "root";

try {
    $connect = new \PDO("mysql:host=$server;dbname=$database", $username, $password);

    $setnames = $connect->prepare("SET NAMES 'utf8'");
    $setnames->execute();

    $connection = $connect;

    // var_dump($this->connection);

    echo "Conexion exitosa";
} catch(PDOException $e) {
    echo "Conexion fallida {$e->getMessage()}";
}