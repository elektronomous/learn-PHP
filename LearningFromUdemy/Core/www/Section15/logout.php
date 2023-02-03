<?php

require_once "includes/url.php";

session_start();            // we're using the session_start() here to work with the current session
/* when you logout in the index.php, the session start on the login.php will continue the session
   to this php code, and we can destroy it using session_destroy().   
*/

// to completely destroy the session 
$_SESSION = array();        // clear the session global variable

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params(); 
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// session_unset();
session_destroy();

redirectTo("index.php");