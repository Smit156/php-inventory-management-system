<?php

require_once '../app/models/category.php';

$category = new category();

if(isset($_POST['add_category'])){

    $name = $_POST['name'];
    $category->create($name);

    header("Location: ?page=categories");
}

if(isset($_GET['delete'])){

    $id = $_GET['delete'];
    $category->delete($id);

    header("Location: ?page=categories");
}

if(isset($_GET['edit'])){

    $editData = $category->GetById($_GET['edit']);
    $editCategory = $editData->fetch(PDO::FETCH_ASSOC);
}

if(isset($_POST['update_category'])){

    $category->update(
        $_POST['id'],
        $_POST['name']
    );

    header("Location: ?page=categories");
}

$categories = $category->GetALl();

require_once '../app/views/categories/index.php';


?>