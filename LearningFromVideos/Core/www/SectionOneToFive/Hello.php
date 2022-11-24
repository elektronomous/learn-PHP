<?php
# 2 - PHP Opening Tag => web server marks this as the start of PHP code

# 19 - Create an empty array
$emptyArray = [];

# 16 - Create associative array
$assocArticles = [
    "first" => "First post",
    "second" => "Another post",
    "Read this!"
];
# 15 - Create another array which the index spcified by you
$anotherArticles = [
    1 => "First post",
    3 => "Another post",
    "Read this!"
];

# 13 - Create array articles
$articles = ["First post", "Another post", "Read this!"];

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

# 13 - var_dump to see the contents of the array
var_dump($articles); echo "\t| => " . __LINE__ . "<br />";

# 14 - var_dump the first element
var_dump($articles[0]); echo "\t| => " . __LINE__ . "<br />";
var_dump($articles[1]); echo "\t| => " . __LINE__ . "<br />";
var_dump($articles[2]); echo "\t| => " . __LINE__ . "<br />";

# 15 - var_dump whole $anotherArray
var_dump($anotherArticles); echo "\t| => " . __LINE__ . "<br />";
#    - as you can see, the last element will be given 4, as it continuing
#    - the previous element.

# 16 - var_dump the first - last element
var_dump($assocArticles["first"]); echo "\t| => " . __LINE__ . "<br />";
var_dump($assocArticles["second"]); echo "\t| => " . __LINE__ . "<br />";
var_dump($assocArticles[0]); echo "\t| => " . __LINE__ . "<br />";

# 17 - using foreach loop on 13- variable
foreach($articles as $article) {    # each element of $articles assign to $article
    echo $article; echo "\t| => " . __LINE__ . "<br />";
}

# 18 - using foreach loop on 15- variable
foreach($anotherArticles as $index => $article) { # each index and associative value of $anotherArticles
                                                  # assign to $index and $article
    echo $index . " " . $article; echo "\t| => " . __LINE__ . "<br />"; 
}

# 19 - Evaluate the empty array using if statements
if(empty($emptyArray)) {    // if true
    // then execute this code
    echo "It's an empty array"; echo "\t| => " . __LINE__ . "<br />";
} else {                    // if false
    // then execute this code
    echo "It's not an empty array"; echo "\t| => " . __LINE__ . "<br />";
}

for ($i = 0; $i<10; $i++) {
    $emptyArray[] = $i;
}

var_dump($emptyArray);

echo "<br />";
# 2 - PHP Closing Tag => web server marks this as the end of the PHP code
if (isset($_GET['value'])) {
    echo "true"; echo "\t| => " . __LINE__ . "<br />";
    echo $_GET['value']; echo "\t| => " . __LINE__ . "<br />";
    if (is_numeric($_GET['value'])) {
        echo "Numeric";
    } else if (is_string($_GET['value'])) {
        echo "String";
    }
}
?>

<html>

<head>
    <title>My First Website Using PHP</title>
</head>

</html>