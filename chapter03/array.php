<?php

require_once(__DIR__ . "/../Helper.php");

// you can initialize the array like this
$products = array('Tires', 'Oil', 'Spark plugs');
// or like this
$products = ['Tires', 'Oil', 'Spark Plugs'];

// you can create an array that contain with sequence number
$seqNumber = range(0,10);

$seqNumberOdd = range(1,10,2);
varDump($seqNumberOdd);

?>