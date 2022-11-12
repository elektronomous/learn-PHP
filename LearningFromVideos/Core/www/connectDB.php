<!-- 5 -->
<?php

// 6
$db_host = "localhost";     // where the database is hosted 
$db_name = "cms";           // database name
$db_user = "elektronomous"; // database's username
$db_pass = "3l3ktr0n3@!";   // database's password.
// 6 - connect
$connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// 7
if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
}

echo "Connected successfully.";
// 8
$sql = "SELECT * FROM articles WHERE id = 0";
// 8 - send query
$results = mysqli_query($connect, $sql);

if ($results === false) {
    echo mysqli_error($connect);
} else {
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
/* 
    echo "<pre>";
    print_r($articles);
    echo "<pre><br />"; 
*/

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles Database' Contents</title>
</head>

<body>

    <?php if (empty($articles)): ?>
    <p>No articles found.</p>
    <?php else: ?>
    <ul>
        <?php foreach($articles as $article): ?>
        <li>
            <article>
                <h2><?= $article['title'] ?></h2>
                <p><?= $article['content'] ?> </p>
            </article>
        </li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>

</body>

</html>