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
    <div class="col-md-4 mb-4">
        <div class="dashboard-card card-blue">
            <!-- <div class="card-body"> -->
                <h5>Total Products</h5>
                <h1><?= $totalProducts['total_products']; ?></h1>
            <!-- </div> -->
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="dashboard-card card-green">
            <!-- <div class="card-body"> -->
                <h5>Total Category</h5>
                <h1><?= $totalCategories['total_category']; ?></h1>
            <!-- </div> -->
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="dashboard-card card-blue">
            <!-- <div class="card-body"> -->
                <h5>Total Stock</h5>
                <h1><?= $totalStock['total_stock']; ?></h1>
            <!-- </div> -->
        </div>
    </div>
</div>

<?php require_once '../app/views/layouts/footer.php'; ?>

?>
