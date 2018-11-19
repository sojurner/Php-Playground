<?php include "../debug/mock_console.php";

class Car {
  public $wheels = 4; //public allows access to entire app
  protected $engine = true; // protected restricted access to class and inherited classes
  private $hood = 1; // private restricted access to class
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

  class Hybrid extends Car {
    function showEngine(){
      echo $this->engine . $this->hood; //has access to engine prop and not hood prop since engine is protected but hood is private
    }
  }

  $tesla = new Hybrid();
  $tesla->showEngine();
?>