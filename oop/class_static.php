<?php 

  class Car {
    static $wheels = 4;  //static makes it attached to the class and no longer to the instances
    var $hood = 1;

    function MoveWheels(){
      // linking this to the static prop
      Car::$wheels = 10;
      

    }
  }

  // $bmw = new Car();

  //in order to use static props
  Car::MoveWheels();
  
  echo Car::$wheels;



?>