
<?php require_once '../app/views/layouts/header.php'; ?>
<!-- <!DOCTYPE html>
<html>
<head>

    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body style="background:#f5f5f5"> -->
    <!-- <div class="container mt-5"> -->
        <div class="main-card">
            <div class="card-header bg-dark text-white">
                <h3>Product Management</h3>
            </div>

            <div class="card-body">
                <a href="index.php" class="btn btn-secondary mb-3">Dashboard</a>

                <form action="" method="post" id="productform">
                    <input type="hidden" name='id' value="<?= $editProduct['id'] ?? ''; ?>">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <select name="category_id" id="" class="form-control" required>
                                <option value="">Select Category</option>
                                <?php while($cat = $categories->fetch(PDO::FETCH_ASSOC)) : ?>
                                    <option value="<?= $cat['id']; ?>"<?= (isset($editProduct) && $editProduct['category_id'] == $cat['id']) ? 'selected' : ''; ?>> <?= $cat['name'] ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>

                        <div class="col-md-6 mb-4">
                            <input type="text" name="product_name" style="height:50px;" placeholder="Product Name" class="form-control" value="<?= $editProduct['product_name'] ?? ''; ?>" required>
                        </div>
                        <div class="col-md-6 mb-4">
                            <input type="text" name="product_code" style="height:50px;" placeholder="Product Code" class="form-control" value="<?= $editProduct['product_code'] ?? ''; ?>" required>
                        </div>
                        <div class="col-md-6 mb-4">
                            <input type="number" name="quantity" style="height:50px;" placeholder="quantity" class="form-control" value="<?= $editProduct['quantity'] ?? ''; ?>" required>
                        </div>
                        <div class="col-md-6 mb-4">
                            <input type="number" step='0.01' style="height:50px;" name="price" placeholder="price" class="form-control" value="<?= $editProduct['price'] ?? ''; ?>" required>
                        </div>
                        <div class="col-md-6 mb-4">
                            <!-- <button type="submit"  name="add_products" class="btn btn-success">Add Product</button> -->
                            <?php if(isset($editProduct)) : ?>
                                <button type="submit" style="height:50px;" name="update_product" class="btn btn-primary w-100">Update Product</button>
                            <?php else : ?>
                                <button type="submit" style="height:50px;" name="add_products" class="btn btn-success w-100">Add Product</button>
                            <?php endif; ?>
                        </div>
                    </div>
                </form>

                <form action="" method="get">
                    <input type="hidden" name="page" value="products">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" name="search" class="form-control" placeholder="Search Product" value="<?= $_GET['search'] ?? ''; ?>";>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-dark">Search</button>
                        </div>
                    </div>
                </form>

                <br>

                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Category</th>
                                <th>Name</th>
                                <th>Code</th>
                                <th>Qty</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php while($row = $products->fetch(PDO::FETCH_ASSOC)) :?>
                                <tr>
                                    <td><?=  $row['id'] ?></td>
                                    <td><?=  $row['category_name'] ?></td>
                                    <td><?=  $row['product_name'] ?></td>
                                    <td><?=  $row['product_code'] ?></td>
                                    <td><?=  $row['quantity'] ?></td>
                                    <td><?=  $row['price'] ?></td>
                                    <td><a href="?page=products&edit=<?=  $row['id'] ?>" class="btn btn-primary btn-sm px-4">Edit</a>
                                    <a href="?page=products&delete=<?=  $row['id'] ?>" class="btn btn-danger btn-sm px-4" onclick="return confirm('Are You Sure?')">Delete</a>
                                    <a href="?page=create_invoice&product_id=<?= $row['id']; ?>" class="btn btn-dark btn-sm px-4">Print</a></td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>

                <nav class="mt-3">
                    <ul class="pagination">
                        <?php for($i = 1; $i <= $total_pages; $i++) :?>
                        <li class="page-item">
                            <a href="?page=products&pageno=<?= $i; ?>" class="page-link"><?= $i; ?></a>
                        </li>
                        <?php endfor; ?>
                    </ul>
                </nav>
            </div>
        </div>
    <!-- </div> -->
    <?php require_once '../app/views/layouts/footer.php'; ?>
<!-- </body>
</html> -->