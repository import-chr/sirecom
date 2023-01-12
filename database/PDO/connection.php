<?php

namespace Database\PDO;

use PDOException;

class Connection {

    private static $instance;
    private $connection;

    private $server = "localhost";
    private $database = "SIRECOM";
    private $username = "chrlr";
    private $password = "root";
    
    /**
     * __construct
     */
    private function __construct() {
        $this->make_connection();
    }
    
    /**
     * getInstance
     * singleton
     * @return self
     */
    public static function getInstance() {
        if (!self::$instance instanceof self)
            self::$instance = new self();

        return self::$instance;
    }
    
    /**
     * getDatabase
     * obtiene la instancia de la conexion a la base de datos
     * @return $this->connection
     */
    public function getDatabase() {
        return $this->connection;
    }
    
    /**
     * make_connection
     * conecta a la base de datos
     */
    private function make_connection() {
        try {
            $connect = new \PDO("mysql:host=$this->server;dbname=$this->database", $this->username, $this->password);

            $setnames = $connect->prepare("SET NAMES 'utf8'");
            $setnames->execute();

            $this->connection = $connect;
        
            // echo "Conexion exitosa";
        } catch(PDOException $e) {
            // echo "Conexion fallida {$e->getMessage()}";
        }
    }

}