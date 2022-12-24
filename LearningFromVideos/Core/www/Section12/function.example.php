<?php

// 1
function showMessage(/* 2 */ $name = /* 3 */ 'Bob') {
    echo "Hello $name" . "<br />";
}

// 4
function getMessage($name) {
    // 5
    return "Hello $name";
}

showMessage('Anggun');

$message = getMessage('faza');

echo $message . "<br />";