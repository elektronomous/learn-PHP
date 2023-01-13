<?= session_start(); ?>

<?= require_once "includes/url.php" ?>

<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($_POST['username'] == "admin" && $_POST['password'] == 'admin') {
        $_SESSION['is_logged_in'] = true;
        redirectTo("index.php");
    } else {
        $error = "login incorrect";
    }
}

?>

<?= require_once "includes/header.php"; ?>

<h2>Login</h2>

<?php if (! empty($error)): ?>
<p><?= $error; ?></p>
<?php endif; ?>


<form method="POST">
    <div>
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </div>

    <button>Log In</button>

</form>

<?= require_once "includes/footer.php"; ?>