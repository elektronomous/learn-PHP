<?php

$pictures = array('bridgestone.jpg', 'continental.png', 'michelin.png');

shuffle($pictures)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bob's Auto Part</title>
</head>

<body>
    <h1>Bob's Auto Parts</h1>
    <div align="center">
        <table style="width: 100%; border: 0">
            <tr>
                <?php
                for($i = 0; $i < 3; $i++){
                    echo "<td style=\"width: 33%; text-align=center\">
                    <img style=\"width: 50%; height: 50%\" src=\"";
                    echo $pictures[$i];
                    echo "\"/></td>";
                }
            ?>
            </tr>
    </div>
</body>

</html>