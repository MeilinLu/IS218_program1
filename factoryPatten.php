<?php
  
class car{
    public $make;
    public $model;
    public $year;
  }
  
class carFactory{
  
    public static function createCar($make, $model, $year){
      $obj = new car;
      $obj->make = 'ford';
      $obj->model = 'fiesta';
      $obj->year = '2016';
    
      return $obj;
    }
  }

//version1&2: $car = carFactory::createCar('ford','fiesta','2016');

$cars[] = carFactory::createCar('ford', 'fiesta', '2016');
print_r($cars);

//version2:$collection[] = $car;

//version1: print_r($car);

//version2: print_r($collection);

//version1: print a single car info
//version2: print an array which may contains many cars' info
//version3: simplify the version2
?>
