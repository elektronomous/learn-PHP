<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bob's Auto Part - Freight Costs</title>
</head>

<body>
    <table>
        <tr>
            <td style="background: #cccc; text-align: center;">Distance</td>
            <td style="background: #cccc; text-align: center;">Cost</td>
        </tr>
        <?php
        $distance = 50;

        while($distance <= 250) {
            echo "<tr>
                    <td style=\"text-align: right;\">" . $distance . "</td>
                    <td style=\"text-align: right;\">" . ($distance/10) . "</td>
                    </tr><br />";
            $distance += 50;
        }

        ?>
    </table>
</body>

</html>