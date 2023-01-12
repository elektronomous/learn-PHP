<!-- 5 -->
<?php

// 14
require_once "includes/database.php";

$connect = getDB();
// 8
$sql = "SELECT * FROM article";
// 8 - send query
$results = mysqli_query($connect, $sql);

// 9
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

<?php require_once "includes/header.php" ?>
<?php if (empty($articles)): ?>
<p>No articles found.</p>
<?php else: ?>
<ul>
    <?php foreach($articles as $article): ?>
    <li>
        <article>
            <!-- 10 -->
            <h2><a href="article.php?id=<?= $article['id']?>"><?= htmlspecialchars($article['title']) ?></a></h2>
            <p><?= htmlspecialchars($article['content']) ?> </p>
        </article>
    </li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>
<?php require_once "includes/footer.php" ?>