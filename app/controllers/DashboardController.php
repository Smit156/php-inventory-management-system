<?php
require_once '../config/database.php';

$db = new database();
$conn = $db->connect();

$productquery = "SELECT COUNT(*) as total_products FROM products";
$productstmt = $conn->prepare($productquery);
$productstmt->execute();
$totalProducts = $productstmt->fetch(PDO::FETCH_ASSOC);

$categoryquery = "SELECT COUNT(*) as total_category FROM categories";
$categorystmt = $conn->prepare($categoryquery);
$categorystmt->execute();
$totalCategories = $categorystmt->fetch(PDO::FETCH_ASSOC);

$totalquery = "SELECT SUM(quantity) as total_stock FROM products";
$totalstmt = $conn->prepare($totalquery);
$totalstmt->execute();
$totalStock = $totalstmt->fetch(PDO::FETCH_ASSOC);

require_once '../app/views/dashboard.php'
?>