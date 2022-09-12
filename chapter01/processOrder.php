<?php

$tireQty = $_POST['tireqty'];
$oilQty = $_POST['oilqty'];
$sparkQty = $_POST['sparkqty'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bob's Auto Part - Order Results</title>
</head>

<body>
    <h1>Bob's Auto Part</h1>
    <h2>Order Results</h2>
    <?php
        echo '<p>Order Process at ';
        echo date('H:i jS F Y') . '</p>';

        $totalQty = 0;

        define('TIREPRICE', 100);
        define('OILPRICE', 10);
        define('SPARKPRICE', 4);

        $taxRage = 0.10;        // local sales tax rate;
        
        $totalQty += $tireQty + $oilQty + $sparkQty;

        if(! $totalQty) {
            echo 'You did not order anything on the previous page<br />';
        } else {
            echo '<p>Your orders as follows: </p>';
            echo htmlspecialchars($tireQty) . ' ' . ($tireQty > 1 ? 'tires' : 'tire') . '<br />';
            echo htmlspecialchars($oilQty) . ' ' . ($oilQty > 1 ? 'tires' : 'tire') . '<br />';
            echo htmlspecialchars($sparkQty) . ' ' . ($sparkQty > 1 ? 'tires' : 'tire') . '<br />';

            $totalAmount = TIREPRICE * $tireQty
                            + SPARKPRICE * $sparkQty
                            + OILPRICE * $oilQty;
            
            echo 'Subtotal: ' . number_format($totalQty, 2) . '<br />';
            $totalAmount *= (1+$taxRage);

            echo 'Total including tax: $' . number_format($totalAmount, 2) . '<br />';
        }
    ?>


</body>

</html>