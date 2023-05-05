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
$truck = new Car();
// run the function or instances  
echo $bmw->wheels . "<br>";
echo $truck->wheels = 6 . "<br>";
// call the method first and the echo the result 
$truck->tuneEngine();
echo $truck->engine;
?>