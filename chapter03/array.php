<?php

require_once(__DIR__ . "/../Helper.php");

// you can initialize the array like this
$products = array('Tires', 'Oil', 'Spark plugs');
// or like this
$products = ['Tires', 'Oil', 'Spark Plugs'];
list($product1, $product2) = $products;
echo 'this first product ' . $product1 . '<br />';

// you can create an array that contain with sequence number
$seqNumber = range(0,10);
// create an odd by using the third optional parameter, which can use to create an
// odd number
$seqNumberOdd = range(1,10,2);
varDump($seqNumberOdd);

// you can create an array that contain alphabet
$alphabets = range('a','z');
varDump($alphabets);

// access the array like this
echo $products[0] . '<br />';
// you can replace the element of an array
$products[0] = 'Fuses';

echo $products[0];
// you can add an element into your array
$products[3] = 'Fuses';
varDump($products);

// now you can create an array using string indexes
$products = array('Tires' => 100, 'Oil' => 10, 'Spark Plugs' => 14);
list('Tires'=> $product1, 'Oil' => $product2) = $products;

echo $product1 . ' and ' . $product2 . '<br />';


// you access the associative array by index its string
echo $products['Tires'] . '<br />';

// you can create a new element into the associative array
$products['Fuses'] = 50;

// now to be faster, you can use loop for access the array
foreach($products as $key => $value) {
    echo $key . " - " . $value . "<br />";
}

// you can also have an array inside an array called multidimensional array
/* 

    |||||||||||||||||||||||||||||||||||||||||||||
    |   code    |   Description     |   Price   |
    |||||||||||||||||||||||||||||||||||||||||||||
    |   TIR     |   Tires           |   100     |
    |   OIL     |   Oil             |   10      |
    |   SPK     |   Spark Plugs     |   4       |
    |||||||||||||||||||||||||||||||||||||||||||||

*/
$products = array(
    array('TIR', 'Tires',100),
    array('OIL', 'Oil', 10),
    array('SPK', 'Spark Plugs', 4)
);

// you access this multidimensional by
// $array[nRow][nColumn];
echo 'MULTIDIMENSIONAL ARRAY <br />';

echo $products[0][1] . '<br />';

// you know that your row is 3 and you column is 3
// then you can use looping through the whole row and column
for($row = 0; $row < 3; $row++) {
    for($column = 0; $column < 3; $column++) {
        echo $products[$row][$column] . "\t|\t";
    }
    echo "<br />";

}

$products = array('Tires' => 100, 'Oil' => 10, 'Spark Plugs' => 4);
// you use sort() function to sort an array
// you use ksort() and asort() to sort an associative array
// you use asort to sort the values of associative array
// you use ksort to sort the key of associative array
asort($products);
varDump($products);

// you can reverse the sort result using
// rsort, arsort, krsort function
rsort($products);
varDump($products);

// rsort(), arsort(), krsort() will modified the original array into
// the sorted one
// you can use array_reverse() to make reverse array without modifying the
// original array
array_reverse($products);
varDump($products);

// now you want to sort multidimensional
$products = array(
    array('TIR', 'Tires', 10),
    array('OIL', 'Oil', 4),
    array('SPARK', 'Spark Plugs', 100)
);

// you use array_multisort() function to sort multidimensional array
// this multisort() function will sort by each of the first element
array_multisort($products);     // sort ascending
varDump($products);
// now you can define SORT_DESC to reverse it
array_multisort($products, SORT_DESC);
varDump($products);

/* 
    now say that you want your customer doesn't get bored
    when visit your site, so you show your product randomly.
    using shuffle() function you can do this by shuffle the array

    every array has an internal pointer that points to the current 
    elements in the array.
*/

// current() function return the first element of an array
$products = ['Tires', 'Oil', 'Spark Plugs'];

echo current($products) . '<br />';
// next() function return the next element of an array and move forward the internal array
// to the next element
echo next($products) . '<br />';
echo current($products) . '<br />';

// reset() function will reset the internal pointer of the array to the beginning of the array
// and return the first element of the array
reset($products);
echo current($products) . '<br />';
// end() function will move the internal pointer to the last of the array and return the last
// element of the array
end($products);
echo current($products) . '<br />';
// prev() function will move backward of an array and return the current array
echo prev($products) . '<br />';
// you can either use pos() or current(), it does the same thing
pos($products);

// USING ARRAY WALK
// your customer found that it need twice as the current Tires, Oil, Spark Plugs it has
// you can use the array_walk() function to modify the customer needs
// the specification function must be
// yourfunction($value, $key, $factor) which $key & $factor is optional

function multiplyByTwo(&$element) {
    $element *= 2;
}

$Tires = 2;
$Oil = 5;
$Spark = 7;

$products = ['Tires', 'Oil', 'Spark'];

foreach($products as &$product) {
    $product = $$product;
}
varDump($products);
// now using array walk to modify the customer product
array_walk($products, 'multiplyByTwo');
varDump($products);

// now consider that you have an associative array
$products = [
    'Tires' => 2,
    'Oil' => 5,
    'Spark' => 7
];

function showAssArray(&$value, $key) {
    echo $key . ' => ' . $value . "<br />";
    $value *= 2;
}

array_walk($products, 'showAssArray');
varDump($products);

// now you want to counting the element of array
// you can use count(), sizeof(), and array_count_values() function
// the sizeof() is an alias of the count() function

// say that you have listed your product
$Tires = 10;
$Oil = 7;
$Spark = 5;
$Gear = 5;
$Accu = 3;
$Gas = 10;

$listedProducts = [
    $Tires,
    $Oil,
    $Spark,
    $Gear,
    $Accu,
    $Gas
];

// now you use count to show how many product that you listed
echo count($listedProducts) . '<br />';
// when using the array_count_values(), the function will return
// an associative array shows that the key is your array values, and the value
// of the associative key is that how much the key is showed
varDump(array_count_values($listedProducts));

// now to ease your job, you listed using associative array
$listedProducts =[
    'Tires' => 10,
    'Oil' => 7,
    'Spark' => 5,
    'Gear' => 5,
    'Accu' => 3,
    'Gas' => 10
];

// using count() does the same as the common array
echo count($listedProducts) . '<br />';
// and using the array_count_values() does the same as the common array
varDump(array_count_values($listedProducts)); 

/* 
    you have listed products, you dont want to specify them one by one 
    you use extract() function, to make the key of associative array as the variable
    and its value will be the value of the variable
    
    * extract(array var_arry[, int extract_type], [, string prefix])

    extract_type tells extract() how to handle collisions.
    the default one is overwrite the existing key when the key is same.
    the key that's overwritted is the lowest one.

    the allowable values is =

    EXTR_OVERWRITE          => Overwrites the existing variable when collision occurs
    EXTR_SKIP               => Skips an element when collision occurs.
    EXTR_PREFIX_SAME        => create a variable named $prefix_key when collision occurs. you must supply prefix.
    EXTR_PREFIX_ALL         => prefixes all variables with prefix. you must supply prefix.
    EXTR_PREFIX_INVALID     => prefixes variables names that otherwise be invalid ( for example, numeric variables names).
                               you must supply prefix
    EXTR_IF_EXISTS          => extract only variables that already exist(that's, writing the existing variables with value
                               from the array). this parameter is usefull for converting, for example, $_REQUEST to a set of
                               valid variables
    EXTR_PREFIX_IF_EXIST    => creates a prefixed version only if the nonprefixed version already exist.
    EXTR_REFS               => extract variables as references.
*/
varDump($listedProducts);
extract($listedProducts, EXTR_PREFIX_ALL, "");
echo $_Tires . ' ' . $_Oil . ' ' .  $_Spark . ' ' .  $_Gear . ' ' .  $_Accu . ' ' .  $_Gas . '<br />';

?>