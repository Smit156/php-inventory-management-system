<?php
require_once '../app/models/Invoice.php';

$invoice = new Invoice();

if(!isset($_GET['id']) || empty($_GET['id'])){
    die("Invoice ID Missing");
}

$id = $_GET['id'];

$invoiceData = $invoice->getInvoice($id);
$invoiceInfo = $invoiceData->fetch(PDO::FETCH_ASSOC);

if(!$invoiceInfo){
    die("Invoice Not Found");
}
$invoiceItems = $invoice->getInvoiceItems($id);
require_once '../app/views/invoice.php'

?>