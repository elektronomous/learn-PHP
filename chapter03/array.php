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

echo pos($products) . '<br />';

?>