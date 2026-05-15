<?php

session_start();

$page = $_GET['page'] ?? 'dashboard';

if(!isset($_SESSION['user']) && $page != 'login'){

    header("Location: ?page=login");
    exit;
}

switch($page){

    case 'login' :
        require '../app/controllers/AuthController.php';
        break;

    case 'products' : 
        require '../app/controllers/ProductController.php';
        break;

    case 'categories' : 
        require '../app/controllers/CategoryController.php';
        break;

    case 'invoice' : 
        require '../app/controllers/InvoiceController.php';
        break;

    case 'create_invoice' : 
        require '../app/controllers/CreateInvoiceController.php';
        break;

    case 'logout' :
        session_destroy();
        header("Location: ?page=login");
        exit;
        break;

    default:
        require '../app/controllers/DashboardController.php';
        break;
}
?>