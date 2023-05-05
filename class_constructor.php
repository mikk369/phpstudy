<?php 

class Person {
    public $name;
//A constructor is a special method that gets executed automatically
// when an object of a class is created using the new keyword.
    public function __construct($name) {
        $this->name = $name;
    }

    public function sayHello() {
        echo "Hello, my name is " . $this->name;
    }
}

$person1 = new Person("John");
$person1->sayHello(); // Output: Hello, my name is John
?>

/*In this example, the __construct() method is used to set the value of the $name property of the Person class. When a new Person object is created, the constructor is called automatically with the $name argument passed to it. The $name value is then assigned to the $name property using $this->name = $name;.*/