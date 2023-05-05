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
                                            direccion_mac, sis_op, procesador, ram_gb, marca, modelo)
                                            VALUES (:direccion_mac, :sis_op, :procesador,
                                            :ram_gb, :marca, :modelo)");
        
        $query->bindValue(":direccion_mac", $data["direccion_mac"]);
        $query->bindValue(":sis_op", $data["sis_op"]);
        $query->bindValue(":procesador", $data["procesador"]);
        $query->bindValue(":ram_gb", $data["ram_gb"]);
        $query->bindValue(":marca", $data["marca"]);
        $query->bindValue(":modelo", $data["modelo"]);

        $query->execute();

        header("location: pc");
    }

    public function show($pk) {
        $query = $this->connection->prepare("SELECT * FROM pc WHERE id_pc = :pk");
        $query->execute([
            ":pk" => $pk
        ]);

        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        var_dump($result);
    }

    public function edit($pk) {
        $query_null = $this->connection->prepare("SELECT * FROM pc WHERE id_pc = :pk");
        $query_null->execute([
            ":pk" => $pk
        ]);

        $result_null = $query_null->fetchAll(PDO::FETCH_ASSOC);

        require("../source/views/pc/edit.php");
    }

    public function update($data, $pk) {
        $query = $this->connection->prepare("UPDATE pc SET
                                            direccion_mac = :direccion_mac,
                                            sis_op = :sis_op,
                                            procesador = :procesador,
                                            ram_gb = :ram_gb,
                                            marca = :marca,
                                            modelo = :modelo
                                            WHERE id_pc = :pk;");

        $query->bindValue(":direccion_MAC", $data["direccion_MAC"]);
        $query->bindValue(":sistema_operativo", $data["sistema_operativo"]);
        $query->bindValue(":procesador", $data["procesador"]);
        $query->bindValue(":memoria_RAM", $data["memoria_RAM"]);
        $query->bindValue(":marca", $data["marca"]);
        $query->bindValue(":modelo", $data["modelo"]);
        $query->bindValue(":pk", $pk);

        $query->execute();

        header("location: pc");
    }

    public function destroy($pk) {
        $query = $this->connection->prepare("DELETE FROM pc WHERE id_pc = :pk");
        $query->execute([
            ":pk" => $pk
        ]);

        header("location: ../../pc");
    }

}