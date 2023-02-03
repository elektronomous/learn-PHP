<?php

require_once "Item.php";

/* class Item {

};
 */
// create an object from Item class
$my_item = new Item();

// to access the properties/attributes
// $my_item->name = "Example";

// create a properties for the object itself
// $my_item->price = 10.55;

// call method
$my_item->sayHello();

$my_item->getName();
// after create attributes, properties

// debug the object
echo "<pre>";
var_dump($my_item);
echo "</pre><br />";