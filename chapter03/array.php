<?php

require_once(__DIR__ . "/../Helper.php");

// you can initialize the array like this
$products = array('Tires', 'Oil', 'Spark plugs');
// or like this
$products = ['Tires', 'Oil', 'Spark Plugs'];

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

// you access the associative array by index its string
echo $products['Tires'] . '<br />';

// you can create a new element into the associative array
$products['Fuses'] = 50;




?>