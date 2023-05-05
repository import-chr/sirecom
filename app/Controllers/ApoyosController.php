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
        $query = $this->connection->prepare("SELECT * FROM admin");
        $query->execute();

        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        var_dump($results);
        // require("../source/views/apoyos/index.php");
    }

    public function create() {
        // require("../source/views/apoyos/create.php");
    }

    public function store($data) {
        $query = $this->connection->prepare("INSERT INTO admin (matricula, nombre, apellidop, apellidom) VALUES (:matricula, :nombre, :apellidop, :apellidom)");

        $query->bindValue(":matricula", $data["matricula"]);
        $query->bindValue(":nombre", $data["nombre"]);
        $query->bindValue(":apellidop", $data["apellidop"]);
        $query->bindValue(":apellidom", $data["apellidom"]);

        $query->execute();

        // header("location: apoyos");
    }

    public function show($pk) {
        $query_null = $this->connection->prepare("SELECT * FROM admin WHERE matricula = :matricula");
        $query_null->execute([
            ":matricula" => $pk
        ]);

        $query = $this->connection->prepare("SELECT
                                            registro.fecha_registro,
                                            pc.direccion_mac, pc.sis_op, pc.procesador,
                                            pc.ram_gb, pc.marca, pc.modelo,
                                            admin.nombre, admin.matricula
                                            FROM pc
                                            INNER JOIN registro
                                            ON pc.id_pc = registro.id_pc
                                            INNER JOIN admin
                                            ON registro.id_admin = admin.id_admin
                                            WHERE admin.matricula = :matricula");

        $query->execute([
            ":matricula" => $pk
        ]);

        $result_null = $query_null->fetchAll(PDO::FETCH_ASSOC);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        // require("../source/views/apoyos/show.php");

        // echo "<pre>";
        // var_dump($result_null);
        // echo "</pre>";
    }

    public function edit($pk) {
        $query_null = $this->connection->prepare("SELECT * FROM admin WHERE matricula = :matricula");
        $query_null->execute([
            ":matricula" => $pk
        ]);

        $result_null = $query_null->fetchAll(PDO::FETCH_ASSOC);

        // require("../source/views/apoyos/edit.php");
    }

    public function update($data, $pk) {
        $query = $this->connection->prepare("UPDATE admin SET
            matricula = :matricula,
            nombre = :nombre,
            apellidop = :apellidop
            apellidom = :apellidom
            WHERE matricula = :pk");
        
        $query->bindValue(":matricula", $data["matricula"]);
        $query->bindValue(":nombre", $data["nombre"]);
        $query->bindValue(":apellidop", $data["apellidop"]);
        $query->bindValue(":apellidom", $data["apellidom"]);
        $query->bindValue(":pk", $pk); // tomar pk como la matricula no el id_admin

        $query->execute();

        // header("location: apoyos");
    }

    public function destroy($pk) {
        $query = $this->connection->prepare("DELETE FROM admin WHERE matricula = :matricula");
        $query->execute([
            ":matricula" => $pk
        ]);

        // header("location: ../../apoyos");
    }
}