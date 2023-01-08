<?php

namespace App\Controllers;

use Database\PDO\Connection;
use App\Interface\Controller;
use PDO;

class PcController implements Controller {
    
    private $connection;

    public function __construct() {
        $this->connection = Connection::getInstance()->getDatabase();
    }

    public function index() {
        $query = $this->connection->prepare("SELECT * FROM pc");
        $query->execute();

        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($results);
        require("../source/views/pc/index.php");
    }

    public function create() {
        require("../source/views/pc/create.php");
    }

    public function store($data) {
        $query = $this->connection->prepare("INSERT INTO pc (
            discente_matricula, direccion_MAC, sistema_operativo, procesador,
            memoria_RAM, marca, modelo, apoyos_matricula)
            VALUES (:discente_matricula, :direccion_MAC, :sistema_operativo, :procesador,
            :memoria_RAM, :marca, :modelo, :apoyos_matricula)");
        
        $query->bindValue(":discente_matricula", $data["discente_matricula"]);
        $query->bindValue(":direccion_MAC", $data["direccion_MAC"]);
        $query->bindValue(":sistema_operativo", $data["sistema_operativo"]);
        $query->bindValue(":procesador", $data["procesador"]);
        $query->bindValue(":memoria_RAM", $data["memoria_RAM"]);
        $query->bindValue(":marca", $data["marca"]);
        $query->bindValue(":modelo", $data["modelo"]);
        // $query->bindValue(":fecha_registro", $data["fecha_registro"]);
        $query->bindValue(":apoyos_matricula", $data["apoyos_matricula"]);

        $query->execute();

        header("location: pc");
    }

    public function show($pk) {
        $query = $this->connection->prepare("SELECT * FROM pc WHERE pc_id = :pk");
        $query->execute([
            ":pk" => $pk
        ]);

        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        var_dump($result);
    }

    public function edit() {
    }

    public function update($data, $pk) {
        $query = $this->connection->prepare("UPDATE pc SET
            direccion_MAC = :direccion_MAC,
            sistema_operativo = :sistema_operativo,
            procesador = :procesador,
            memoria_RAM = :memoria_RAM,
            marca = :marca,
            modelo = :modelo
            WHERE pc_id = :pk;");

        $query->bindValue(":direccion_MAC", $data["direccion_MAC"]);
        $query->bindValue(":sistema_operativo", $data["sistema_operativo"]);
        $query->bindValue(":procesador", $data["procesador"]);
        $query->bindValue(":memoria_RAM", $data["memoria_RAM"]);
        $query->bindValue(":marca", $data["marca"]);
        $query->bindValue(":modelo", $data["modelo"]);
        $query->bindValue(":pk", $pk);

        $query->execute();
    }

    public function destroy($pk) {
        $query = $this->connection->prepare("DELETE FROM pc WHERE pc_id = :pk");
        $query->execute([
            ":pk" => $pk
        ]);
    }

}