<?php

$server = "10.21.34.101";
$database = "restaurante";
$username = "chrlr";
$password = "root";

try {
    $connect = new \PDO("mysql:host=$server;dbname=$database", $username, $password);

    echo "Conexion exitosa";
} catch(PDOException $e) {
    echo "Conexion fallida {$e->getMessage()}";
}

/* ========================== NOTAS ========================== */
// apuntar a la ip de maquina virtual

// consola linux

// - ajustar privilegios de usuario (chrlr) desde root en mysql
// -> GRANT ALL ON *.* TO 'chrlr'@'0.0.0.0' IDENTIFIED BY 'root';
// 0.0.0.0 hace referencia a la ip de la maquina física
// -> FLUSH PRIVILEGES;
// -> SELECT host FROM mysql.user WHERE user = 'chrlr';
// comprobacion de hosts
/* ========================== NOTAS ========================== */