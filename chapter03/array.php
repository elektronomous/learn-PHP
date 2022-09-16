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



?>