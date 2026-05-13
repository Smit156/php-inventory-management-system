<!DOCTYPE html>
<html>
<head>

    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body{
            margin: 0;
            padding: 0;
            background: #f4f6f9;
        }
        .sidebar{
            width:250px;
            height:100vh;
            background:#212529;
            position:fixed;
            padding-top:20px;
        }
        .sidebar a{
            display:block;
            color:white;
            padding:15px;
            text-decoration:none;
        }
        .sidebar a:hover{
            background:#0d6efd;
        }
        .content{
            margin-left:260px;
            padding:20px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h3 class="text-white text-center mb-4">
            Admin Panel
        </h3>
        <a href="?page=dashboard">Dashboard</a>
        <a href="?page=products">Products</a>
        <a href="?page=categories">Category</a>
        <a href="?page=logout">Logout</a>
    </div>
    <div class="content">