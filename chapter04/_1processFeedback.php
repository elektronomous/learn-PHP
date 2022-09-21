<?php

// create short variable names
$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

// set up some static information
$toAddress = "elektrone333@gmail.com";

$subject = "Feedback from Bob's Auto Part";

$mailContent =  "Customer name: " . filter_var($name) . "\n" .
                "Customer email: " . $email . "\n" .
                "Customer comments:\n" . $feedback . "\n";
$fromAddress = "From: webserver@bob.com";

// using mail() function to send mail
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
    <p>Your feedback has been sent.</p>
</body>
</html>