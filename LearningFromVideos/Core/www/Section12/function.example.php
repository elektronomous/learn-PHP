<?php

// 1
// 6
/**
 * Show the Message
 * 
 * @param should be your name, or another name
 * 
*/
function showMessage(/* 2 */ $name = /* 3 */ 'Bob') {
    echo "Hello $name" . "<br />";
}

// 4
/**
 * Get Message
 * 
 * @param should be your name, or another name
 * 
 * @return greeting with @param included.
 */
function getMessage(string $name) {
    // 5
    return "Hello $name";
}

showMessage('Anggun');


$message = getMessage('faza');

echo $message . "<br />";