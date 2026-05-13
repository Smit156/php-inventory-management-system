<?php

require_once '../config/database.php';

class product{

    private $conn;
    private $table = 'products';

    public function __construct() {

        $database = new database();
        $this->conn = $database->connect();
    }

    public function GetALL(){

        $query = "SELECT products.*, categories.name AS category_name FROM products LEFT JOIN categories ON products.category_id = categories.id ORDER BY products.id DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    public function search($search){

        $query = "SELECT products.*, categories.name as category_name FROM products LEFT JOIN categories ON products.category_id = categories.id WHERE product_name LIKE :search ORDER BY products.id DESC";
        $stmt = $this->conn->prepare($query);
        $searchTerm = "%" . $search . "%";
        $stmt->bindParam(':search', $searchTerm);
        $stmt->execute();
        return $stmt;
    }

    public function create($category_id, $product_name, $product_code, $quantity, $price){

        $query = "INSERT INTO products(category_id,product_name,product_code,quantity,price) VALUES (:category_id, :product_name, :product_code, :quantity, :price)";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':category_id', $category_id);
        $stmt->bindParam(':product_name', $product_name);
        $stmt->bindParam(':product_code', $product_code);
        $stmt->bindParam(':quantity', $quantity);
        $stmt->bindParam(':price', $price);

        return $stmt->execute();
    }

    public function delete($id){
        $query = "DELETE FROM products WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);

        return $stmt->execute();
    }

    public function GetById($id){

        $query = "SELECT * FROM products WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id",$id);

        $stmt->execute();

        return $stmt;
    }

    public function update($id, $category_id, $product_name, $product_code, $quantity, $price){

        $query = "UPDATE products SET category_id = :category_id, product_name = :product_name, product_code = :product_code, quantity= :quantity, price= :price WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":category_id", $category_id);
        $stmt->bindParam(":product_name", $product_name);
        $stmt->bindParam(":product_code", $product_code);
        $stmt->bindParam(":quantity", $quantity);
        $stmt->bindParam(":price", $price);
        $stmt->bindParam(":id", $id);

        return $stmt->execute(); 
    }

    public function pagination($offset, $limit){

        $query = "SELECT products.*, categories.name as category_name FROM products LEFT JOIN categories ON products.category_id = categories.id LIMIT $offset, $limit";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function totalProducts(){

        $query = "SELECT COUNT(*) as total FROM products";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

?>