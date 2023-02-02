<?php

class Item {
    // Item has name
    // public $name;
    private $name;

    // and description
    // public $description;
    private $description;
    
    // you can also create a default value for the properties
    // public $description = "This is description";
    // otherwise it sets to NULL

    // constructor
    public function __construct($name = "Example Name", $description = "Example Description") {
        // initialize the properties using the value constructed from new keyword
        $this->name = $name;
        $this->description = $description;
    }
    
    // class method
    public function sayHello() {
        echo "Hello";
    }

    public function getName() {
        echo $this->name;
    }


};

?>