<?php

require_once(__DIR__ . "/../Helper.php");

/* 
$fp = fopen("freight.php",'r');

if(! $fp)
    echo "couldn't reading";
else{
    var_dump($fp);
    fclose($fp);
} 


file_put_contents('test.bat','');
*/

$fp = file('orders.txt');
varDump($fp);

?>