<?php

declare(strict_types=1);

define("DB_HOST", "localhost");
define("DB_USER", "elektrone");
define("DB_PASS", "elektron3@");
define("DB_NAME", "sale");

$connecteddb = mysqli_connect(
    DB_HOST,
    DB_USER,
    DB_PASS,
    DB_NAME
);

if (!$connecteddb) {
    die("Connection failed " . mysqli_connect_error());
}


?>