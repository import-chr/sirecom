<?php
$server = "localhost";
$database = "sirecom";
$port = "5432";
$username = "postgres";
$password = "root";

try {
    $connect = new \PDO("pgsql:host=$server;port=$port;dbname=$database", $username, $password);

    $setnames = $connect->prepare("SET NAMES 'utf8'");
    $setnames->execute();

    $connection = $connect;

    // var_dump($this->connection);

    echo "Conexion exitosa";
} catch(PDOException $e) {
    echo "Conexion fallida {$e->getMessage()}";
}