<?php
# filtering email using the regular expression
if(preg_match('/^[a-zA-Z0-9\-.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/', $email) === 0) {
    echo "<p>That's not a valid email address.</p>" .
        "<p>Please return the previous page and try again.</p>";
    exit;
}

$toAddress = 'elektrone333@gmail.com';

if(preg_match('/shop|customer service|retail/', $feedback)) {
    $toAddress = 'retail@example.com';
} else if(preg_match('/deliver|fulfill/', $feedback)) {
    $toAddress = 'fulfillment@example.com';
} else if(preg_match('/bill|account/', $feedback)) {
    $toAddress = 'account@example.com';
}

if(preg_match('/bigcustomer\.com/', $email)) 
    $toAddress = 'bob@example.com';
?>