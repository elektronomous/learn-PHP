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

?>