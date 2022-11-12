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

?>