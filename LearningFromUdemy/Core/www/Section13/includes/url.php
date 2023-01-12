<?php

function redirectTo($path) {
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
        $protocol = 'https';
    } else {
        $protocol = 'http';
    }
    // get our website name
    $host = $_SERVER['HTTP_HOST'];
    // you need the uri
    $URIs = explode("/", $_SERVER['REQUEST_URI']);
    $folder_path = "";

    for ($i = 0; $i < count($URIs)-1; $i++)
        $folder_path .= $URIs[$i] . "/";
        
    // and redirect to the location where we inserted the data.
    header("Location: http://$host$folder_path" . $path);
    exit;
}