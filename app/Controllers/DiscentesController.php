<?php

namespace App\Controllers;

use App\Interface\Controller;
use Database\PDO\Connection;
use PDO;

class DiscentesController implements Controller {

    private $connection;

    public function __construct() {
        $this->connection = Connection::getInstance()->getDatabase();
    }

    public function index() {
        $query = $this->connection->prepare("SELECT * FROM discentes");
        $query->execute();

        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($results);

        require("../source/views/discentes/index.php");
    }

    public function create() {
        require("../source/views/discentes/create.php");
    }

    public function store($data) {
        $query = $this->connection->prepare("INSERT INTO discentes (matricula, nombre, apellido) VALUES (:matricula, :nombre, :apellido)");

        $query->bindValue(":matricula", $data["matricula"]);
        $query->bindValue(":nombre", $data["nombre"]);
        $query->bindValue(":apellido", $data["apellido"]);

        $query->execute();

        header("location: discentes");
    }

    public function show($pk) {
        $query_null = $this->connection->prepare("SELECT * FROM discentes WHERE matricula = :matricula");
        $query_null->execute([
            ":matricula" => $pk
        ]);

        $query = $this->connection->prepare("SELECT *
                                            FROM pc, discentes
                                            WHERE pc.discente_matricula = discentes.matricula
                                            AND pc.discente_matricula IN (
                                                SELECT matricula
                                                FROM discentes
                                                WHERE matricula = :matricula)");
        $query->execute([
            ":matricula" => $pk
        ]);

        $result_null = $query_null->fetchAll(PDO::FETCH_ASSOC);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        require("../source/views/discentes/show.php");

        // var_dump($result);
    }

    public function edit($pk) {
        $query_null = $this->connection->prepare("SELECT * FROM discentes WHERE matricula = :matricula");
        $query_null->execute([
            ":matricula" => $pk
        ]);

        $result_null = $query_null->fetchAll(PDO::FETCH_ASSOC);

        require("../source/views/discentes/edit.php");
    }

    public function update($data, $pk) {
        $query = $this->connection->prepare("UPDATE discentes SET
            matricula = :matricula,
            nombre = :nombre,
            apellido = :apellido
            WHERE matricula = :pk;");
        
        $query->bindValue(":matricula", $data["matricula"]);
        $query->bindValue(":nombre", $data["nombre"]);
        $query->bindValue(":apellido", $data["apellido"]);
        $query->bindValue(":pk", $pk);
        
        $query->execute();

        header("location: discentes");
    }

    public function destroy($pk) {
        $query = $this->connection->prepare("DELETE FROM discentes WHERE matricula = :matricula");
        $query->execute([
            ":matricula" => $pk
        ]);

        header("location: ../../discentes");
    }

}