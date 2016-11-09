<?
class car{
  private $carBrand;
  private $carModel;
  private $carColor;

  public function __construct($brand,$model,$color){
    $this->carBrand = $brand;
    $this->carModel = $model;
    $this->carColor = $color;
 }
  
  public function getBrand(){
    return $this->carBrand;
  }
  public function getModel(){
    return $this->carModel;
  }
  public function getColor(){
    return $this->carColor;
  }
  function getCarInfo(){
    return $this->getBrand().' '.$this->getModel();
  }
}

// car factory class

class carFactory{
  public static function create($brand, $model, $color){ 
    return new car($brand,$model, $color);
  }
}


// car decorator class
class carColorDecorator{
  public $car;
  public $carColor;

  public function __construct(Car $car_in){
    $this->car = $car_in;
    $this->resetColor();
  }

  public function resetColor(){
    $this->carColor=$this->car->getColor();
  }
}

class RedCar extends carColorDecorator{
  private $ccd;
   
  public function __construct(carColorDecorator $ccd){
    $this->ccd=$ccd;
  }
    
  public function makeRedCar(){
    $this->ccd->carColor=$this->ccd->car->'red';
  }
}
  
class BlueCar extends carColorDecorator{
  private $ccd;
  public function __construct(carColorDecorator $ccd){
    $this->ccd = $ccd;
  }
  public function makeBlueCar(){
    $this->ccd->carColor=$this->ccd->car->'blue';
  }
}

// car strategy class

class colorStrategy{
  public $stragtegy = NULL;
  
  public function __construct(carColorDecorator $ccd, $color){
  switch($color){
    case "red":
      $this->strategy = new RedCar($ccd);
      break;
    case "blue":
      $this->strategy = new BlueCar($ccd);
      break;
    case 
  
  }
  }
}










?>
