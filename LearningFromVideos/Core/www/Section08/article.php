<!-- 5 -->
<?php

// 14
require_once "includes/database.php";

// 13
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    // 8
    echo "<br />";
    $sql = "SELECT * FROM article WHERE id=" . $_GET['id'];
    echo $sql . "<br />";
    // 8 - send query
    $results = mysqli_query($connect, $sql);

    // 9
    if ($results === false) {
        echo mysqli_error($connect);
    } else {
        // $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
        $articles = mysqli_fetch_assoc($results);
    /* 
        echo "<pre>";
        print_r($articles);
        echo "<pre><br />"; 
    */

    }
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
            <h2><?= $articles['title'] ?></h2>
            <p><?= $articles['content'] ?> </p>
        </article>
    </li>

</ul>
<?php endif; ?>
<?php require_once "includes/footer.php"; ?>