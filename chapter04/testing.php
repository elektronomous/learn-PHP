<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing Site</title>
</head>
<body>
    <form action="testing.php" method="post">
        <input type="text" name="value" />
        <input type="submit" value="Submit" />
    </form>
</body>
</html>
<?php
# filtering email using the regular expression
$matchArr = [];
$email = $_POST['value'];

/* if(isset($email)){
    if(preg_match('/^[a-zA-Z0-9\-.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/', $email, $matchArr) === 0) {
        echo 'invaid email';
    } else {
        echo '<pre>'; var_dump($matchArr); echo '</pre>' . '\n';
    }
} */

if(isset($email)) {
    echo preg_replace('/[a-zA-Z0-9\-.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9]+/', "#", $email);
}
?>