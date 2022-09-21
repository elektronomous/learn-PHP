<?php
$documentRoot = $_SERVER['DOCUMENT_ROOT'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bob's Auto Parts - Order's Result</title>
</head>

<body>
    <h1>Bob's Auto Part</h1>
    <h2>Customer Orders</h2>

    <?php
    $orders = file($documentRoot . '/learn-PHP/chapter03/orders.txt');

    $numberOfOrders = count($orders);
    if(!$numberOfOrders) 
        echo '<p><strong>No orders pending.<br />
        Please try again later.</p></strong>';
    else {
        for($i = 0; $i < $numberOfOrders; $i++) {
            echo $orders[$i] . '<br />';
        }
    }
    ?>

</body>

</html>