<?php

if(isset($_POST['tireqty']))
    $tireQty = (int)$_POST['tireqty'];
if(isset($_POST['oilqty']))
    $oilQty = (int)$_POST['oilqty'];
if(isset($_POST['sparkqty']))
    $sparkQty = (int)$_POST['sparkqty'];
if(isset($_POST['find']))
    $option = (int)$_POST['find'];


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

        echo "You're ";
        switch($option) {
            case 'a':
                echo 'regular customer<br />';
                break;
            case 'b':
                echo 'customer referred by TV advert<br />';
                break;
            case 'c':
                echo 'customer referred by phone directory<br />';
                break;
            case 'd':
                echo 'customer referred by word of mouth<br />';
                break;
            case 'e':
                echo 'new customer<br />';
                break;
        }

        echo '<p>Order Process at ';
        echo date('H:i jS F Y') . '</p>';

        $totalQty = 0;

        define('TIREPRICE', 100);
        define('OILPRICE', 10);
        define('SPARKPRICE', 4);

        $taxRage = 0.10;        // local sales tax rate;
        
        $totalQty += $tireQty + $oilQty + $sparkQty;

        $discountTire = $discountOil = $discountSpark = 0;

        if(! $totalQty) {
            echo 'You did not order anything on the previous page<br />';
        } else {
            echo '<p>Your orders as follows: </p>';
            echo htmlspecialchars($tireQty) . ' ' . ($tireQty > 1 ? 'tires' : 'tire') . '<br />';
            echo htmlspecialchars($oilQty) . ' ' . ($oilQty > 1 ? 'tires' : 'tire') . '<br />';
            echo htmlspecialchars($sparkQty) . ' ' . ($sparkQty > 1 ? 'tires' : 'tire') . '<br />';


            $totalAmount = TIREPRICE * $tireQty - (calcDiscount(TIREPRICE * $tireQty, getDiscount($tireQty))) 
                            + SPARKPRICE * $sparkQty - (calcDiscount(SPARKPRICE * $sparkQty, getDiscount($sparkQty)))
                            + OILPRICE * $oilQty - (calcDiscount(OILPRICE * $oilQty, getDiscount($oilQty)));
            
            echo 'Subtotal: ' . number_format($totalQty, 2) . '<br />';
            $totalAmount *= (1+$taxRage);

            echo 'Total including tax: $' . number_format($totalAmount, 2) . '<br />';
        }

        function getDiscount(int $qty): float {
            if( ($qty >= 10) && ($qty <= 49) ) return 5;
            elseif ( ($qty >= 50) && ($qty <= 99) ) return 10;
            elseif ($qty >= 100) return 15;

            return 0;
        }

        function calcDiscount(float $price, float $discount): float {
            return $price * ($discount/100);
        }
        
    ?>


</body>

</html>