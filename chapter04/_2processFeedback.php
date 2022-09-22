<?php

if(isset($_POST['name']))
    $_name = trim($_POST['name']);
if(isset($_POST['email']))
    $_email = trim($_POST['email']);
if(isset($_POST['feedback']))
    $_feedback = trim($_POST['feedback']);

// set up some static information
$toAddress = "elektrone333@gmail.com";

$subject = "Feedback from web site";

$mailContent = "Customer Name: " . str_replace("\r\n", "", $_name) . "\n" .
                "Customer Email: " . str_replace("\r\n", "", $_email) . "\n" .
                "Customer Feedback: \n" . str_replace("\r\n", "", $_feedback) . "\n";

$fromAddress = "From: webserver@examples.com";

// invoke mail() function to send mail
mail($toAddress, $subject, $mailContent, $fromAddress);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bob's Auto Part - Feedback Submitted</title>
</head>

<body>
    <h1>Feedback Submitted</h1>
    <p>Your feedback (shown below) has been sent.</p>
    <p><?php echo nl2br(htmlspecialchars($_feedback)); ?></p>

</body>

</html>