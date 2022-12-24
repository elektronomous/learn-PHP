<?php
echo "<pre>";
print_r($_POST);
echo "</pre></br>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>using post method</title>
</head>

<body>
    <form method="post" action="debugging.php">
        <input type="text" name="value" />
        <input type="submit" />
    </form>
</body>

</html>