<?php
 require "functions.php";
 require "db.php";

 $products = $pdo-> query(selectAllProducts());
 $customerData = $pdo-> query(getCustomerData());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXAM2- L.HOOVER</title>
</head>
<body>
    <h1>Quick Stop Bike Shop (Exam2)</h1>
    <table>
        <tr>    
        <th>Name</th>
        <th>Price</th>
        </tr>
    <?php foreach($products as $row) {?>
        <tr>
        <td><?=$row['name']?></td>
        <td><?=$row['price']?></td>
        </tr>
    <?php } ?>
    </table>
    <table>
        <tr>
            <th>Customer</th>
            <th>Orders</th>
            <th>Total Spent</th>
        </tr>
        <?php foreach($customerData as $row) {?>
        <tr>
            <td><?=$row['last_name']?>,<?=$row['first_name']?></td>
            <td><?=$row['order_count']?></td>
            <td><?=$row['total_spent']?></td>
        </tr>
        <?php } ?>
    </table>
    <?php include 'components/footer.php';?>
</body>
</html>