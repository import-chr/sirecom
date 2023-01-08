<?php

namespace App\Controllers;

use Database\PDO\Connection;
use App\Interface\Controller;
use PDO;

class ApoyosController implements Controller {

    private $connection;

    public function __construct() {
        $this->connection = Connection::getInstance()->getDatabase();
    }

    public function index() {
        $query = $this->connection->prepare("SELECT * FROM apoyos_didacticos");
        $query->execute();

        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($results);
        require("../source/views/apoyos/index.php");
    }

    public function create() {
        require("../source/views/apoyos/create.php");
    }

    public function store($data) {
        $query = $this->connection->prepare("INSERT INTO apoyos_didacticos (matricula, nombre, apellido) VALUES (:matricula, :nombre, :apellido)");

        $query->bindValue(":matricula", $data["matricula"]);
        $query->bindValue(":nombre", $data["nombre"]);
        $query->bindValue(":apellido", $data["apellido"]);

        $query->execute();

        header("location: apoyos");
    }

    public function show($pk) {
        $query = $this->connection->prepare("SELECT * FROM apoyos_didacticos WHERE matricula = :matricula");
        $query->execute([
            ":matricula" => $pk
        ]);

        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($result);
    }

    public function edit() {
    }

    public function update($data, $pk) {
        $query = $this->connection->prepare("UPDATE apoyos_didacticos SET
            matricula = :matricula,
            nombre = :nombre,
            apellido = :apellido
            WHERE matricula = :pk;");
        
        $query->bindValue(":matricula", $data["matricula"]);
        $query->bindValue(":nombre", $data["nombre"]);
        $query->bindValue(":apellido", $data["apellido"]);
        $query->bindValue(":pk", $pk);

        $query->execute();
    }

    public function destroy($pk) {
        $query = $this->connection->prepare("DELETE FROM apoyos_didacticos WHERE matricula = :matricula");
        $query->execute([
            ":matricula" => $pk
        ]);
    }
}