<?php
# 2 - PHP Opening Tag => web server marks this as the start of PHP code

# 10 - create string variable that has value sequences of number
$myPin = "123";

# 9 - Create two variable
$greet = "Hello";
$myName = "Faza";

# 7 - Create null variable
$user_id = NULL;

# 6 - Create a Boolean variable
$is_admin = true;

# 4 - Create a integer and float variable
$count = 10;
$price = 1.99;  # price on dollar

# 3 - Create a variable and show it outputs
$message = "Hello Again!";
echo $message; echo "\t| => " . __LINE__ . "<br />";


# 2 - PHP Command/Code => Web server execute codes after opening tag.
#   - PHP knows echo command, which shows output for everything that starts with
#     " (double quotes) and ends with " (double quotes)
echo "Hello, World"; echo "\t| => " . __LINE__ . "<br />";

# 5 using var_dump function
var_dump($count); echo "\t| => " . __LINE__ . "<br />";
var_dump($price); echo "\t| => " . __LINE__ . "<br />";
var_dump($message); echo "\t| => " . __LINE__ . "<br />";

# 6 shows how to use Boolean
var_dump($is_admin);
if ($is_admin) {
    echo "This is admin" . "\t| => " . __LINE__ . "<br />";
}
# 7 using var_dump to show the contents of null
var_dump($user_id);

# 8 - all operation on integer
var_dump($count + $count); echo "\t| => " . __LINE__ . "<br />";
var_dump($count * $count); echo "\t| => " . __LINE__ . "<br />";
var_dump($count / $count); echo "\t| => " . __LINE__ . "<br />";
var_dump($count - $count); echo "\t| => " . __LINE__ . "<br />";
var_dump($count % $count); echo "\t| => " . __LINE__ . "<br />";
#   - all operation on float
var_dump($price + $price); echo "\t| => " . __LINE__ . "<br />";
var_dump($price * $price); echo "\t| => " . __LINE__ . "<br />";
var_dump($price / $price); echo "\t| => " . __LINE__ . "<br />";
var_dump($price - $price); echo "\t| => " . __LINE__ . "<br />";
var_dump($price % $price); echo "\t| => " . __LINE__ . "<br />";

# 9 - Concatenate string using +
echo $greet . " " . $myName; echo "\t| => " . __LINE__ . "<br />";


# 10 - multiply the string of number
echo $myPin * 3; echo "\t| => " . __LINE__ . "<br />";

# 11 - testing boolean values
if (!$is_admin) {
    echo "not an admin"; echo "\t| => " . __LINE__ . "<br />";
} else {
    echo "an admin"; echo "\t| => " . __LINE__ . "<br />";
}

if ($is_admin && $is_admin) {
    echo "admin logged in!"; echo "\t| => " . __LINE__ . "<br />";
}

# 12 - Using {} braces to insert variable
echo "{$greet} Faza"; echo "\t| => " . __LINE__ . "<br />";

# 2 - PHP Closing Tag => web server marks this as the end of the PHP code
?>

<html>

<head>
    <title>My First Website Using PHP</title>
</head>

</html>