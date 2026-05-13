<!-- <!DOCTYPE html>
<html>
<head>

    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class = 'container mt-5'>

        <h1 class="mb-4">Inventory Management System</h1>
    
        <a href="?page=products" class='btn btn-primary'> Product Management </a>
        <a href="?page=categories" class='btn btn-success'> Category Management </a>

    </div>
</body>
</html>
 -->

<?php require_once '../app/views/layouts/header.php';?>

<h1 class="mb-4">Dashboard</h1>

<div class="row">
    <div class="col-md-4">
        <div class="card bg-primary text-white shadow">
            <div class="card-body">
                <h4>Total Products</h4>
                <h2>20</h2>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card bg-success text-white shadow">
            <div class="card-body">
                <h4>Total Category</h4>
                <h2>10</h2>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card bg-dark text-white shadow">
            <div class="card-body">
                <h4>Total Stock</h4>
                <h2>500</h2>
            </div>
        </div>
    </div>
</div>

<?php require_once '../app/views/layouts/footer.php'; ?>

?>
