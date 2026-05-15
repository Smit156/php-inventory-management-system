<!DOCTYPE html>
<html>
<head>
    <title>Invoice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body onclick="window.print()">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-dark text-white">
                <h2>Invoice #<?= $invoiceInfo['id']; ?></h2>
            </div>
            <div class="card-body">
                <h4>Customer Name : <?= $invoiceInfo['customer_name']; ?></h4>
                <hr>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $grandTotal = 0; ?>
                        <?php while($item = $invoiceItems->fetch(PDO::FETCH_ASSOC)) : ?>
                            <?php 
                                $total = $item['quantity'] * $item['price'];
                                $grandTotal += $total;   
                            ?>
                        <tr>
                            <td><?= $item['product_name'] ?></td>
                            <td><?= $item['quantity'] ?></td>
                            <td><?= $item['price'] ?></td>
                            <td><?= $total ?></td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>                     
                </table>
                <h3 class="text-end">
                    Grand Total : ₹ <?= $grandTotal; ?> /-
                </h3>
            </div>
        </div>
    </div>
</body>
</html>