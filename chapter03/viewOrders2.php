<?php
require_once(__DIR__ . "/../Helper.php");

$documentRoot = $_SERVER['DOCUMENT_ROOT'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bob's Auto Part - Customer Orders</title>

    <style type="text/css">
    table,
    th,
    td {
        border-collapse: collapse;
        border: 1px solid black;
        padding: 6px;
    }

    th {
        background: #ccccff;
    }
    </style>
</head>

<body>
    <h1>Bob's Auto Part</h1>
    <h2>Customer Orders</h2>

    <?php
    $orders = file($documentRoot . "/learn-PHP/chapter03/orders.txt");

    if(! count($orders)) {
        echo '<p><strong>No Orders pending.<br />
        Please try again later.</strong></p>';
    } else {
        echo <<<TABLE
        <table>
        <tr>
        <th>Orders Date</th>
        <th>Tires</th>
        <th>Oil</th>
        <th>Spark Plugs</th>
        <th>Total</th>
        <th>Address</th>
        </tr>
        TABLE;
        foreach($orders as $order) {
            $order = explode("|\t", $order);
            $order[1] = intval($order[1]);      // tires
            $order[2] = intval($order[2]);      // oil
            $order[3] = intval($order[3]);      // spark plugs
            
            echo '<tr>';
            for($n = 0; $n < count($order); $n++) {
                echo '<td>' . $order[$n] . '</td>';
            }
            echo '</tr>';
        }
        echo <<<TABLE
        </table>
        TABLE;
    }

    ?>

</body>

</html>