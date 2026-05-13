<!DOCTYPE html>
<html>
<head>

    <title>Categories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">

        <h2>Category Management</h2>

        <a href="index.php" class="btn btn-dark mb-3">Dashboard</a>

        <!-- <form method="POST" class="mb-4">
            <div class ='row'>
                <div class="col-md-6">
                    <input type="text" name='name' class="form-control" placeholder="Enter Category Name" required>
                </div>
                <div class="col-md-2">
                    <button type="submit" name="add_category" class="btn btn-success">Add Category</button>
                </div>
            </div>
        </form> -->

        <form method="POST" class="mb-4">

            <input type="hidden" name="id" value="<?= $editCategory['id'] ?? ''; ?>">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Enter Category Name" value="<?= $editCategory['name'] ?? ''; ?>" required >
                </div>

                <div class="col-md-3">
                    <?php if(isset($editCategory)) : ?>
                        <button type="submit" name="update_category"class="btn btn-primary">
                            Update Category
                        </button>

                    <?php else : ?>

                        <button type="submit" name="add_category" class="btn btn-success">
                            Add Category
                        </button>

                    <?php endif; ?>
                </div>
            </div>
        </form>

        <table class="table table-bordered">
            <thead>
                <tr><th>ID</th><th>Name</th><th>Action</th></tr>
            </thead>
            
            <tbody>

                <?php while($row = $categories->fetch(PDO::FETCH_ASSOC)) :?>

                    <tr>
                        <td><?=  $row['id']; ?></td>
                        <td><?=  $row['name']; ?></td>
                        <td> <a href="?page=categories&edit=<?= $row['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                        <a href="?page=categories&delete=<?= $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>