<?php
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
  public function getCarInfo(){
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
   
  public function __construct(carColorDecorator $ccd_in){
    $this->ccd=$ccd_in;
    $this->makeRedCar();
  }
    
  public function makeRedCar(){
    $this->ccd->carColor='red';
  }

  public function showStrategy(){
    echo 'Brand: '.$this->ccd->car->getBrand().'<br>';
    echo 'Model: '.$this->ccd->car->getModel().'<br>';
    echo 'Original Color: '.$this->ccd->car->getColor().'<br>';
    echo 'New color: '.$this->ccd->carColor.'<br>';
  }
}
  
class BlueCar extends carColorDecorator{
  private $ccd;
  public function __construct(carColorDecorator $ccd_in){
    $this->ccd = $ccd_in;
    $this->makeBlueCar();
  }
  public function makeBlueCar(){
    $this->ccd->carColor='blue';
  }
  public function showStrategy(){
    echo 'Brand: '.$this->ccd->car->getBrand().'<br>';
    echo 'Model: '.$this->ccd->car->getModel().'<br>';
    echo 'Original Color: '.$this->ccd->car->getColor().'<br>';
    echo 'New color: '.$this->ccd->carColor.'<br>';
  }
}

// car strategy class

class colorStrategy{
 
  public $strategy;
  
  public function __construct(carColorDecorator $ccd_in, $color){
    switch($color){
      case 'red':
        $this->strategy = new RedCar($ccd_in);
	$this->strategy->showStrategy();
        break;
      case 'blue':
        $this->strategy = new BlueCar($ccd_in);
        $this->strategy->showStrategy();
	break;
    }
  }
}

$car1 = new Car('Honda',"CR-V",'white');
$deco = new carColorDecorator($car1);
$strategyDefault = new colorStrategy($deco,'default');
$strategyBlue = new colorStrategy($deco, 'blue');
$strategyRed = new colorStrategy($deco, 'red');

?>
