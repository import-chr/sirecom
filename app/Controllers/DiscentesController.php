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
        $query = $this->connection->prepare("SELECT * FROM discente");
        $query->execute();

        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($results);

        require("../source/views/discentes/index.php");
    }

    public function create() {
        require("../source/views/discentes/create.php");
    }

    public function store($data) {
        $query = $this->connection->prepare("INSERT INTO discente (matricula, nombre, apellidop, apellidom) VALUES (:matricula, :nombre, :apellidop, :apellidom)");

        $query->bindValue(":matricula", $data["matricula"]);
        $query->bindValue(":nombre", $data["nombre"]);
        $query->bindValue(":apellidop", $data["apellidop"]);
        $query->bindValue(":apellidom", $data["apellidom"]);

        $query->execute();

        header("location: discentes");
    }

    public function show($pk) {
        $query_null = $this->connection->prepare("SELECT * FROM discente WHERE matricula = :matricula");
        $query_null->execute([
            ":matricula" => $pk
        ]);

        $query = $this->connection->prepare("SELECT
                                            registro.fecha_registro,
                                            pc.direccion_mac, pc.sis_op, pc.procesador,
                                            pc.ram_gb, pc.marca, pc.modelo,
                                            discente.nombre, discente.matricula
                                            FROM pc
                                            INNER JOIN registro
                                            ON pc.id_pc = registro.id_pc
                                            INNER JOIN discente
                                            ON registro.id_dis = discente.id_dis
                                            WHERE discente.matricula = :matricula");
        $query->execute([
            ":matricula" => $pk
        ]);

        $result_null = $query_null->fetchAll(PDO::FETCH_ASSOC);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        require("../source/views/discentes/show.php");

        // var_dump($result);
    }

    public function edit($pk) {
        $query_null = $this->connection->prepare("SELECT * FROM discente WHERE matricula = :matricula");
        $query_null->execute([
            ":matricula" => $pk
        ]);

        $result_null = $query_null->fetchAll(PDO::FETCH_ASSOC);

        require("../source/views/discentes/edit.php");
    }

    public function update($data, $pk) {
        $query = $this->connection->prepare("UPDATE discente SET
            matricula = :matricula,
            nombre = :nombre,
            apellidop = :apellidop
            apellidom = :apellidom
            WHERE matricula = :pk;");
        
        $query->bindValue(":matricula", $data["matricula"]);
        $query->bindValue(":nombre", $data["nombre"]);
        $query->bindValue(":apellidop", $data["apellidop"]);
        $query->bindValue(":apellidom", $data["apellidom"]);
        $query->bindValue(":pk", $pk);
        
        $query->execute();

        header("location: discentes");
    }

    public function destroy($pk) {
        $query = $this->connection->prepare("DELETE FROM discente WHERE matricula = :matricula");
        $query->execute([
            ":matricula" => $pk
        ]);

        header("location: ../../discentes");
    }

}