<?php 

require_once '../config/database.php';

$db = new Database();
$conn = $db->connect();

$product_id = $_GET['product_id'];

$productQurey = "SELECT * FROM products WHERE id = :id";
$productstmt = $conn->prepare($productQurey);
$productstmt->bindParam(':id', $product_id);
$productstmt->execute();
$product = $productstmt->fetch(PDO::FETCH_ASSOC);
$total = $product['price'];
$invoiceQuery = "INSERT INTO invoices (customer_name, total_amount) VALUES (:customer_name, :total_amount)";
$invoiceStmt = $conn->prepare($invoiceQuery);
$customer_name = "Demo Customer";
$invoiceStmt->bindParam(':customer_name', $customer_name);
$invoiceStmt->bindParam(':total_amount', $total);
$invoiceStmt->execute();
$invoice_id = $conn->lastInsertId();
$itemQuery = "INSERT INTO invoice_items (invoice_id, product_id, quantity, price) VALUES(:invoice_id,:product_id,:quantity,:price)";
$itemStmt = $conn->prepare($itemQuery);
$quantity = 1;
$itemStmt->bindParam(':invoice_id', $invoice_id);
$itemStmt->bindParam(':product_id', $product_id);
$itemStmt->bindParam(':quantity', $quantity);
$itemStmt->bindParam(':price', $total);
$itemStmt->execute();

header("Location: ?page=invoice&id=".$invoice_id);

?>