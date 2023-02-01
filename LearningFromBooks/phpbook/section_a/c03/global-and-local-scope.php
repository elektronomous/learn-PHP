<?php
$tax = '20';

function calculate_total($price, $quantity)
{
    $cost  = $price * $quantity;
    $tax   = $cost  * (20 / 100);
    $total = $cost  + $tax;
    return $total;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Global and Local Scope</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <p>Mints:  $<?= calculate_total(2, 5) ?></p>
    <p>Toffee: $<?= calculate_total(3, 5) ?></p>
    <p>Fudge:  $<?= calculate_total(5, 4) ?></p>
    <p>Prices include tax at: <?= $tax ?>%</p>
  </body>
</html>