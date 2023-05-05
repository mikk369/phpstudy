<?php 

class Car {
// properties 
var $wheels = 4;
var $hood = 1;
var $engine = 1;
var $doors = 4;

    // methods 
    function MovingWheels() {
        // $this keyword references to Car class inside class
        $this->wheels = 10;
    }
    function tuneEngine() {
        $this->engine = "More hp";
    }
}
// if(method_exists("Car","MovingWheels")) {
//     echo " Method exists";
// }else {
//     echo " Method does not exists";
// }
// make new instance /object
$bmw =  new Car();
class Plane extends Car{
    var $wheels = 20;

}
$bowing = new Plane();
// $bowing->MovingWheels();
echo $bowing->wheels;
// if(class_exists("Plane"))
//     echo "it does";
?>