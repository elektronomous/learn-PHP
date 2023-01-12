<?php

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

$fp = fopen('orders.txt','r');

if(!$fp){
    echo 'couldn\'t open the file';
    return;
} else {
    var_dump(fgetcsv($fp,0,"\t","|"));
    
}

fclose($fp);
?>