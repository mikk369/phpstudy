<?php 

class Car {
// properties 
public $wheels = 4;
protected $hood = 1;
private $engine = 1;
var $doors = 4;

    // methods 
    function MovingWheels() {
        // $this keyword references to Car class inside class
        $this->wheels = 10;
    }
}
$bmw =  new Car();
echo $bmw->wheels
?>