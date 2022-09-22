<?php

// say that you have a form that you want to filter out.
// say that you have registration form. you want the user to not maliciously input their name
// their address, emails, phone numbers.
// to avoid that, we need to konw some string operation(function).

// the first function is trim(), ltrim(), rtrim(), and chop()
// those trims function strips whitespace from the start and the end of the string
// by default it strips newlines(\n) and carriage returns(\r), horizontal and vertical tabs
// (\t & \x0b), end of string characters(\0) and spaces.
$_name = ' Muhammad Faza Akbar ';
var_dump(trim($_name)); echo '<br />';           // => string(19) "Muhammad Faza Akbar"

$_name = ' Anggun Fuji Lestari ';
var_dump(ltrim($_name)); echo '<br />';         // => string(20) "Anggun Fuji Lestari "

$_name = ' Abdurrahman bin Auf ';
var_dump(rtrim($_name)); echo '<br />';         // => string(20) " Abdurrahman bin Auf"

// in a form, you have a date of birth. it's common when the date is something format like
// dd-mm-yyyy. you can specify what character to be strip, & you want to strip the dash('-')
// character
$dateOfBirth = '-22-07-1997-';
var_dump(trim($dateOfBirth, '-')); echo '<br />'; // => string(10) "22-07-1997"
// rtrim() is the aliasing of chop() function.

// you filter the input string and output string
// when show the output of the string to browser, we need to carefully send them
// because some characters and strings are a special control character or commands.
// using htmlspecialchars() function.
// htmlspecialchars() function converts the character that has special meaning in HTML
// to their HTML entity equivalent.
echo '<h1>Hello There</h1>';                    // this will formatting as the HTML 
// but using the htmlspecialchars()
echo htmlspecialchars('<h1>Hello There</h1>') . '<br />';   // => <h1>Hello There</h1>
// say that your form, accept name, and you just send the name to the output of the browser.
// now the user input malicious HTML/JavaScript code. the HTML/JavaScript code will render
// by the browser and ended up in code injection. that's why you need to filter the HTML/JavaScript
// code using htmlspecialchars()


// now say that you have HTML, you don't send its output into the browser right, instead you send
// a message to email. so you don't need htmlspecialchars() function for the email form
// the main issue in email is that headers are seperated by the character string "\r\n".
// we need to take care that user data we in the email headers doesnt contain theser character, or
// we run the risk of a set of attacks, called header injection.
$_email = "elektrone333@gmail.com\r\n";
echo 'before replace: ' ; var_dump($_email); echo '<br />';     // before replace: string(24) "elektrone333@gmail.com "
str_replace("\r\n",'',$_email);
echo 'after replace: ' ; var_dump($_email); echo '<br />';      // after replace: string(24) "elektrone333@gmail.com "

// or you can use nlbr2() function, which replace the newlines("\n") with <br /> html code
$content =  'Customer Name: ' . $_name . "\r\n" .
            'Customer Email: ' . $_email . "\r\n" .
            "Customer Feedback: \r\nThanks for the ordering!";
echo nl2br(htmlspecialchars($content));

// you can also use the sprintf() and printf() function
// it does the same job like echo
printf("<br />your name is: %s <br />", $_name);

// now maybe you want to look words in a sentence(say for spellchecking)
// or split a domain name or email address into its component parts.
// the first function you could use for this purpose is that explode()
var_dump(explode('@', $_email)); echo '<br />';     // => array(2) { [0]=> string(12) "elektrone333" [1]=> string(11) "gmail.com " } 
// from this you can decide whether the email is google mail or another mail
$emailArray = explode('@',$_email);
$emailDomain = trim($emailArray[1]);

if($emailDomain === 'gmail.com') 
    // set smtp port to 587
    echo 'Set SMTP PORT 587 <br />';
else 
    echo 'Set Another Port<br />';

// now to join the seperate array to a string you using
// join() or implode() function
echo implode('@',$emailArray);              // => elektrone333@gmail.com



?>