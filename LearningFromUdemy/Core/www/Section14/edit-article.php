<?php

// 14
require_once "includes/database.php";
// 2
require_once "includes/article.php";
require_once "includes/url.php";

// 13
if (isset($_GET['id'])) {
    $connect = getDB();
    // 2
    $articles = getArticle($connect, $_GET['id']);
    if ($articles) {
        $id = $_GET['id'];
        $title = $articles['title'];
        $content = $articles['content'];
        $published_at = $articles['published_at'];
        
    } else {
        die("article not found");
    }
} else {
    die("article not found");
}


if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $title = $_POST['title'];
    $content = $_POST['content'];
    $published_date = $_POST['published_at'];
    
    $errors = validateArticle($title, $content, $published_date);
    echo $published_date;
    if (empty($errors)) {
        $sql_stmt = "UPDATE article SET title = ?, content = ?, published_at = ? WHERE id = ?";

        // SQL-SERVER will compile the sql statement, return to be prepare statement
        $prepare_stmt = mysqli_prepare($connect, $sql_stmt);

        if ($prepare_stmt === false) {
            echo mysqli_error($connect);
        } else {
            if ($published_date == '') {
                $published_date = null;
            }

            // binding the prepare statement that has been compiled with the value its corresponding
            mysqli_stmt_bind_param($prepare_stmt, "sssi", $title, $content, $published_date, $id);

            if (mysqli_stmt_execute($prepare_stmt)) { // execute the statement
                // executed successfully
                // redirect to artile that has been edited
                redirectTo("article.php?id=$id");
            } else {
                // executed failed
                echo mysqli_stmt_error($prepare_stmt);
            }
        }
    } 
}
?>

<?php require_once "includes/header.php"; ?>
<h2>Edit Article</h2>
<?php require_once "includes/article-form.php"; ?>
<?php require_once "includes/footer.php";