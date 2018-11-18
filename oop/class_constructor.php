<?php include "../debug/mock_console.php";

class Car {
  var $wheels = 4;
  var $hood = 1;
  var $engine = 1;
  var $doors = 4;
  var $color = 'green';
  var $moving = false;

  function rotateWheels(){
    $this->moving = true;
  }

  function __construct($wheel, $doors, $color){
    $this->wheels = $wheels;
    $this->doors = $doors;
    $this->color= $color;
  }
}

$mazda = new Car(4, 4, 'space grey')


?>
