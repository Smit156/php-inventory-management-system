<?php

require_once '../config/database.php';

class category {

    private $conn;
    private $table = 'categories';

    public function __construct() {

        $database = new database();
        $this->conn = $database->connect();
    }

    public function GetALl(){

        $query = "SELECT * FROM " . $this->table ." ORDER BY id DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    public function create($name){

        $query = "INSERT INTO " .$this->table."(name) VALUES(:name)";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name',$name);
        
        return $stmt->execute();
    }

    public function delete($id){

        $query = "DELETE FROM " . $this->table . " WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id',$id);
        
        return $stmt->execute();
    }

    public function GetById($id){

        $query = "SELECT * FROM categories WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id",$id);

        $stmt->execute();

        return $stmt;
    }

    public function update($id, $name){

        $query = "UPDATE categories SET name = :name WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":id", $id);

        return $stmt->execute(); 
    }

}
?>