<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    var_dump($_POST);
    $datetime = str_replace("T", " ", $_POST['value']);
    var_dump(date_create_from_format("Y-m-d H:i", $datetime));
}
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
        <input type="datetime-local" name="value" />
        <input type="submit" />
    </form>
</body>

</html>