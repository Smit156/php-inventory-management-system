<!DOCTYPE html>
<html>
<head>

    <title>Inventory System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

    <style>
        body{
            margin: 0;
            padding: 0;
            background: #f4f6f9;
            box-sizing: border-box;
        }
        body{
            background: #f1f5f9;
            font-family: Arial, Helvetica, sans-serif;
        }
        .sidebar{
            width:260px;
            height:100vh;
            background:#111827;
            position:fixed;
            padding-top:20px;
            top: 0;
            left: 0;
        }
        .logo{
            color: white;
            text-align: center;
            margin-bottom: 30px;
            font-size: 24px;
            font-weight: bold;
        }
        .sidebar a{
            display:flex;
            align-items: center;
            gap: 10px;
            color:#d1d5db;
            padding:14px 20px;
            transition: 0.3s;
            font-size: 16px;
            text-decoration:none;
        }
        .sidebar a:hover{
            background:#2563eb;
            color: white;
        }
        .content{
            margin-left:260px;
            padding:30px;
        }
        .topbar{
            background: white;
            padding: 15px 25px;
            border-radius: 12px;
            margin-bottom: 25px;
            box-shadow:0 2px 10px rgba(0,0,0,0.08);
        }
        .dashboard-card{
            border:none;
            border-radius:16px;
            color:white;
            padding:25px;
            transition:0.3s;
        }

        .dashboard-card:hover{
            transform:translateY(-5px);
        }

        .card-blue{
            background:#2563eb;
        }

        .card-green{
            background:#059669;
        }

        .card-dark{
            background:#111827;
        }

        .table{
            background:white;
            border-radius:12px;
            overflow:hidden;
        }

        .btn{
            border-radius:8px;
        }

        .form-control,
        .form-select{
            border-radius:10px;
            padding:10px;
        }

        .main-card{
            background:white;
            padding:25px;
            border-radius:16px;
            box-shadow:0 2px 10px rgba(0,0,0,0.08);
        }

        @media(max-width:768px){

            .sidebar{
                width:100%;
                height:auto;
                position:relative;
            }

            .content{
                margin-left:0;
            }
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h3 class="logo text-white text-center mb-4">
            Inventory Admin
        </h3>
        <a href="?page=dashboard"><i class="fa fa-chart-line"></i>Dashboard</a>
        <a href="?page=products"><i class="fa fa-box"></i>Products</a>
        <a href="?page=categories"><i class="fa fa-list"></i>Category</a>
        <a href="?page=invoice"><i class="fa fa-file-invoice"></i>Invoice</a>
        <a href="?page=logout"><i class="fa fa-sign-out-alt"></i>Logout</a>
    </div>
    <div class="content">
        <div class="topbar d-flex justify-content-between align-items-center">
            <h4>Inventory Management System</h4>
            <h6>Welcome Admin</h6>
        </div>

<?php if(isset($_SESSION['success'])) : ?>
    <div class="alert alert-success">
        <?= $_SESSION['success']; ?>
    </div>
    <?php unset($_SESSION['success']); ?>
<?php endif; ?>