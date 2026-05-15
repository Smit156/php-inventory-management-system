<?php

require_once '../app/models/Product.php';
require_once '../app/models/Category.php';

$product = new product();
$category = new category();

if(isset($_POST['add_products'])){

    $product->create(
        $_POST['category_id'],
        $_POST['product_name'],
        $_POST['product_code'],
        $_POST['quantity'],
        $_POST['price']
    );

    $_SESSION['success'] = "Product Added Successfully";

    header("Location: ?page=products");
}

if(isset($_GET['delete'])){

    $product->delete($_GET['delete']);
    header("Location: ?page=products");
}

if(isset($_GET['edit'])){

    $editData = $product->GetById($_GET['edit']);
    $editProduct = $editData->fetch(PDO::FETCH_ASSOC);
}

if(isset($_POST['update_product'])){

    $product->update(
        $_POST['id'],
        $_POST['category_id'],
        $_POST['product_name'],
        $_POST['product_code'],
        $_POST['quantity'],
        $_POST['price']
    );

    $_SESSION['success'] = "Product Updated Successfully";

    header("Location: ?page=products");
}

// $products = $product->GetALL();
$page_no = $_GET['pageno'] ?? 1;
$limit = 5;
$offset = ($page_no - 1) * $limit;
$totalProducts = $product->totalProducts();
$total_pages = ceil($totalProducts['total']/$limit);
$search = $_GET['search'] ?? '';
if($search != ''){
    $products = $product->search($search);
} else{
    $products = $product->pagination($offset, $limit);
}
$categories = $category->GetALl();

require_once '../app/views/products/index.php';
?>