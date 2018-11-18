<?php include "../debug/mock_console.php";

class Car {

  var $wheels = 4;
  var $hood = 1;
  var $engine = 1;
  var $doors = 4;
  var $color = 'green';

  function rotateWheels(){
    $action = 'move wheels';
    clog($action);
    echo "$action" . ': 100 rps';
    $this->wheels = 10;
    return "rotating wheels...";
  }


}

// if(method_exists("Car", rotateWheels)) {
//   echo "Method exists";
// } else {
//   echo "does not exist";
// }

// if(class_exists("Car")){
//   echo "Class exists";
// } else {
//   echo "Class does not exist";
// }

$mazda = new Car();


$action = $mazda->rotateWheels();
$color = $mazda->color;
$wheels = $mazda->wheels;
clog("hood: $action");
clog("color: $color");
clog("wheels: $wheels")
// clog($mazda->$engine);
// clog($mazda->$doors);

// clog($mazda->wheels);

?>


