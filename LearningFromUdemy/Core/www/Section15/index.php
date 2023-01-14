<!-- 5 -->
<?php

// if you need to access the global array $_SESSION
// you need to define session_start() function.
session_start();            // we use this to work with the current session.
                            // this will resume the session_data that created when calling session_start inside login.php

// 14
require_once "includes/database.php";
require_once "includes/auth.php";

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

<h1>My Blog</h1>
<?php if (isLoggedIn()): ?>
<p>You're logged in. <a href="logout.php">Log out</a></p>
<a href="new-article.php">Enter New Article</a>
<?php else: ?>
<p> You're logout. <a href="login.php">Log in</a></p>
<?php endif; ?>

<ul>
    <?php foreach($articles as $article): ?>
    <li>
        <article>
            <!-- 10 -->
            <h2><a href="article.php?id=<?= $article['id']?>"><?= htmlspecialchars($article['title']) ?></a></h2>
            <p><?= htmlspecialchars($article['content']) ?> </p>
        </article>
        <a href="edit-article.php?id=<?= $article['id']?>">Edit Article</a>
    </li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>
<?php require_once "includes/footer.php" ?>