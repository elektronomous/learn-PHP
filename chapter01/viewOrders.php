<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bob's Auto Part - Order's Result</title>
</head>
<body>
    <h1>Bob's Auto Part</h1>
    <h2>Customer Orders</h2>

    <?php

    @$fp = fopen('orders.txt','rb');

    if(! $fp) {
        echo '<p><strong>Orders pending.<br />Please try again later</strong></p>';
        return;
    }

    while(!feof($fp)) {
        $orders = fgets($fp);
        echo htmlspecialchars($orders) . "<br />";
    }

    flock($fp, LOCK_UN); // release read lock
    fclose($fp);

    ?>
</body>
</html>