<?php require_once '../app/views/layouts/header.php'; ?>

<!-- <!DOCTYPE html>
<html>
<head>

    <title>Categories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body> -->
    <!-- <div class="container mt-5"> -->
        <div class="main-card">
            <!-- <h2>Category Management</h2> -->
            <div class="card-header bg-dark text-white">
                <h3>Category Management</h3>
            </div>
            <div class="card-body">
                <a href="index.php" class="btn btn-secondary mb-3">Dashboard</a>

                <form method="POST" class="mb-4">

                    <input type="hidden" name="id" value="<?= $editCategory['id'] ?? ''; ?>">
                    <div class="row g-3">
                        <div class="col-md-8">
                            <input type="text" name="name" class="form-control" style="height:50px;" placeholder="Enter Category Name" value="<?= $editCategory['name'] ?? ''; ?>" required >
                        </div>

                        <div class="col-md-4">
                            <?php if(isset($editCategory)) : ?>
                                <button type="submit" style="height:50px;" name="update_category"class="btn btn-primary w-100">
                                    Update Category
                                </button>

                            <?php else : ?>

                                <button type="submit" style="height:50px;" name="add_category" class="btn btn-success w-100">
                                    Add Category
                                </button>

                            <?php endif; ?>
                        </div>
                    </div>
                </form>

                <div class="table-responsive">               
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-dark">
                            <tr><th>ID</th><th>Name</th><th>Action</th></tr>
                        </thead>
                        
                        <tbody>

                            <?php while($row = $categories->fetch(PDO::FETCH_ASSOC)) :?>

                                <tr>
                                    <td><?=  $row['id']; ?></td>
                                    <td><?=  $row['name']; ?></td>
                                    <td> <a href="?page=categories&edit=<?= $row['id']; ?>" class="btn btn-primary btn-sm px-4">Edit</a>
                                    <a href="?page=categories&delete=<?= $row['id']; ?>" class="btn btn-danger btn-sm px-4" onclick="return confirm('Are You Sure?')">Delete</a></td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <!-- </div> -->
    <?php require_once '../app/views/layouts/footer.php'; ?>

<!-- </body>
</html> -->