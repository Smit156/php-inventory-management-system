<?php

class database {

    private $server = 'localhost';
    private $db = 'inventory_system';
    private $root = 'root';
    private $pass ='';

    public $conn;

    public function connect(){

        $this->conn = null; 
    
        try{

            $this->conn = new PDO(
                "mysql:host=".$this->server."; dbname=" .$this->db, $this->root, $this->pass
            );

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){

            echo "Connection Error : " .$e->getMessage();
        }

        return $this->conn;
    }
}

?>