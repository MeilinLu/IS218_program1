<?php


class icecream{
 
  private $flavor;
  private $size;
  private $cost;

  public function __construct($flavor,$size, $cost){
    $this->flavor=$flavor;
    $this->size=$size;
    $this->cost=$cost;
  }

  public function getFlavor(){
    return $this->flavor;
  }
  
  public function getSize(){
    return $this->size;
  }

  public function getCost(){
    return $this->cost;
  }

}

// ice cream factory

class iceFactory{
  public static function create($flavor, $size, $cost){
    return new icecream($flavor, $size, $cost);
  }    
}

// decorator class

class iceDecorator{
  
  public $icecream;
  public $topping;
  public $cost;

  public function __construct(Icecream $ice_in){
    $this->icecream = $ice_in;
    $this->addTopping();
  }
  public function addTopping(){
    $this->=$this->icecream->getFlavor();
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
