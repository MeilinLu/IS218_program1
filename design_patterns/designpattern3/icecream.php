<?php
//prototype
abstract class IceKingdom{
  
  public function __construct(){}
  
  abstract function __clone();

  public function getName(){
    return $this->name;
  }  
}

//Prototype IcecreamFactory from IceKingdom
//We can also CLONE a other factory from IceKingdom 
//factory

class IcecreamFactory extends IceKingdom{
 
  public function __construct(){
    $this->name='icecream';
  }
  public function __clone(){}
  
  public static function create($flavor, $size, $cost){
    return new Icecream($flavor, $size, $cost);
  }
}

class Icecream extends IcecreamFactory{
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


// decorator class

class iceDecorator{
  
  public $icecream;
  public $flavor;

  public function __construct(Icecream $ice_in){
    $this->icecream = $ice_in;
    $this->resetFlavor();
  }
  public function resetFlavor(){
    $this->flavor=$this->icecream->getFlavor();
  }
}

// different flavor icecream

class milkIce extends iceDecorator{
  private $iceDeco;
  
  public function __construct(iceDecorator $iceDeco_in){
    $this->iceDeco=$iceDeco_in;
    $this->changeFlavor();
  }
  public function changeFlavor(){
    $this->iceDeco->flavor='milk';
  }
  public function showOrder(){    
    echo 'Original Flavor: '.$this->iceDeco->icecream->getFlavor().'<br>';
    echo 'New Flavor: '.$this->iceDeco->flavor.'<br>';
  }
}

$order1 = new Icecream('vanilla','small',5);
$deco =  new iceDecorator($order1);
$decoMilk = new milkIce($deco);

?>
