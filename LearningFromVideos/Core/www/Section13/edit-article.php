<?php

// 14
require_once "includes/database.php";
// 2
require_once "includes/article.php";

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
    
    if (empty($errors)) {
        $sql_stmt = "UPDATE article SET title = ?, content = ?, published_at = ? WHERE id = ?";

        $prepare = mysqli_prepare($connect, $sql_stmt);
        
    }
}
?>

<?php require_once "includes/header.php"; ?>
<h2>Edit Article</h2>
<?php require_once "includes/article-form.php"; ?>
<?php require_once "includes/footer.php";