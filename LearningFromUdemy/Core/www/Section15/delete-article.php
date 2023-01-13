<?php

require_once "includes/database.php";
require_once "includes/article.php";
require_once "includes/url.php";

if (isset($_GET['id'])) {
    // connect to the database first
    $connect = getDB();
    // get the id, we delete data based on id
    $id = $_GET['id'];
} else {
    die("Article not found.");
}

// to avoid user to enter manual query string for the id, make the data
// to be deleted in our database, we use POST method

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // we create a sql statement firts
    $sql_stmt = "DELETE FROM article WHERE id = ?";
    // ask server to compile this statement, to avoid sql injection
    $prepared = mysqli_prepare($connect, $sql_stmt);

    if ($prepared === false) {
        echo mysqli_error($connect);
    } else {
        // binding the data(id in this case) to the prepared statement(the compiled one)
        mysqli_stmt_bind_param($prepared, "i", $id);

        // execute the statement
        if (mysqli_stmt_execute(($prepared))) {
            redirectTo("index.php"); 
        } else {
            // SHOW THE ERROR
            echo mysqli_stmt_error($prepared);
        }
    }
}
?>

<?= require_once "includes/header.php" ?>
<h2>Delete Article</h2>

<form method="post">
    <p>Are you sure?</p>
    <button type="submit">Delete</button>
</form>
<form method="get" action="index.php">
    <button type="submit">Cancel</button>
</form>


<?= require_once "includes/footer.php" ?>