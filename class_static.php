<?php 

class Car {
// properties 
static $wheels = 4;
protected $hood = 1;
private $engine = 1;
var $doors = 4;

    // methods 
   public static function MovingWheels() {
        // $this keyword references to Car class inside class
        Car::$wheels = 10;
    }
}
$bmw =  new Car();
// use static class like this 
// echo $bmw::$wheels;
 Car::MovingWheels();
 echo Car::$wheels
?>

<?php

class Dog {

    var $eyeColors = "Green"; 
    var $nose = "long"; 
    var $furColor = "blue";
    
    function ShowAll() {
      echo  $this->eyeColors . "<br>";
      echo  $this->nose . "<br>";
        echo $this->furColor . "<br>";
        
    }
}

$pitBull = new Dog();
$pitBull->ShowAll();
?>