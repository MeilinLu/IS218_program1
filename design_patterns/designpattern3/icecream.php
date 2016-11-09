<?php

abstract class AbstractFactory{
  abstract function makeICE($param);
}

class icecream{
  private $cost;
  private $flavor;

  function __construct($brand, $flavor){
    $this->brand=$brand;
    $this->flavor=$flavor;
  }

  function getBrand(){
    return $this->brand;
  }

  function getFlavor(){
    return $this->flavor;
  }
  
  function getBrandAndFlavor(){
    return $this->getBrand().' '.$this->getFlavor();
  }
}

// ice cream factory

class iceFactory{
  public static function create($brand, $flavor){
    return new icecream($brand, $flavor);
  }    
}

// decorator class

class iceDecorator{

  protected $icecream;
  protected $flavor;
  public function __construct(Icecream $icecream_in){
    $this->icecream=$icecream_in;
    $this->resetFlavor();  
  }
  function resetFlavor(){
    $this->size=$this->icecream->getFlavor();
  }
  function showFlavor(){
    return $this->flavor;
  }
}

// different flavor icecream

class milkIce extends iceDecorator{
  public $topping;
  
  public function __construct(iceDecorator $topping_in){
    $this->topping = $topping_in;
    $this->changeFlavor();
  }
  function changeFlavor(){
    $this->topping->flavor='milk';
  }
}

class strawberryIce extends iceDecorator{
  private $topping;
  public function __construct(iceDecorator $topping_in){
    $this->topping=$topping_in;
    $this->changeFlavor();
  }
  function changeFlavor(){
    $this->topping->flavor='Strawberry';
  }
}
class coffeeIce extends iceDecorator{
  private $topping;
  public function __construct(iceDecorator $topping_in){
    $this->topping=$topping_in;
    $this->changeFlavor();
  }
  function changeFlavor(){
    $this->topping->flavor='coffee';
  }
}

// strategy call for flavor icecream
// adding the topping

class flavorStrategy{
  public $strategy = NULL;

  public function __construct(iceDecorator $topping_in, $flavor){
    switch($flavor){
      case "milk_icecream":
	$this->strategy=new milkIce($topping_in);
	break;
      case "strawberry_icecream":
	$this->strategy=new strawberryIce($topping_in);
	break;
      case "coffee_icecream":
	$this->strategy=new coffeeIce($topping_in);
        break;
      default:
        echo "Please choose your favorite icecream flavor";
    }
  }
}

// order a icecream


$order1 = iceFactory::create('HaagenDazs','coffee');
$decorator = new iceDecorator($order1);
$flavor=$_POST["flavor"];  
$finalOrder1 = new flavorStrategy($decorator, $flavor);
echo "\n Your ice cream order is ".$decorator->showFlavor().' + topping '."\n";

?>
