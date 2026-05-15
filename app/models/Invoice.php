<?php

require_once '../config/database.php';

class Invoice {

    private $conn;

    public function __construct(){
        $database = new Database();
        $this->conn = $database->connect();
    }

    public function getInvoice($id){

        $query = "SELECT * FROM invoices WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt;
    }

    public function getInvoiceItems($invoice_id){

        $query = "SELECT invoice_items.*, products.product_name FROM invoice_items LEFT JOIN products ON invoice_items.product_id = products.id WHERE invoice_items.invoice_id = :invoice_id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':invoice_id', $invoice_id);
        $stmt->execute();
        return $stmt;
    }
}
?>