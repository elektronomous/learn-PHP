<!-- 5 -->
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

    /* 
    // 8
    echo "<br />";
    // $sql = "SELECT * FROM article WHERE id=" . $_GET['id'];
    // the safes way is use mysqli_prepare and bind_param method
    $sql = mysqli_prepare($connect, "SELECT * FROM article WHERE id = ?");
    $sql->bind_param('i', $_GET['id']);

    $results = $sql->execute();
    // 8 - send query
    // $results = mysqli_query($connect, $sql);
    
    // 9
    if ($results === false) {
        echo mysqli_error($connect);
    } else {
        // $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
        $articles = $sql->get_result()->fetch_assoc();
    
        echo "<pre>";
        print_r($articles);
        echo "<pre><br />"; 
    

    }
    */
} else {
    $articles = null;
}


?>

<?php require_once "includes/header.php"; ?>
<?php if ($articles == null): ?>
<p>No articles found.</p>
<?php else: ?>
<ul>
    <!--  -->
    <li>
        <article>
            <h2><?= htmlspecialchars($articles['title']) ?></h2>
            <p><?= htmlspecialchars($articles['content']) ?> </p>
        </article>
    </li>

</ul>
<?php endif; ?>
<?php require_once "includes/footer.php"; ?>