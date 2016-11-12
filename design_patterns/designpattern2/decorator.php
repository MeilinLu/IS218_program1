<?php

// Decorator Class for adding topping

class IcecreamDecorator{
  public $icecream;
  public $cost;
  public $toppingFruit;
  public $toppingNut;
  public $toppingCookie;

  public function __construct(Icecream $icecream){
    $this->icecream = $icecream;
    $this->resetCost();    
  }
  public function resetCost(){
    $this->cost=$this->icecream->getCost();
  }
}

class AddFruit extends IcecreamDecorator{
  private $iceDeco;
  public function __construct(IcecreamDecorator $iceDeco){
    $this->iceDeco = $iceDeco;
    $this->iceDeco->toppingFruit = 'Add Fruit';
  }
  public function fruitTop(){
    $this->iceDeco->cost=$this->iceDeco->cost+3;
  } 
}

class AddNut extends IcecreamDecorator{
  private $iceDeco;
  public function __construct(IcecreamDecorator $iceDeco){
    $this->iceDeco = $iceDeco;
    $this->iceDeco->toppingNut = 'Add Nut';
  }
  public function nutTop(){
      $this->iceDeco->cost=$this->iceDeco->cost+4;
  }
}

class AddCookie extends IcecreamDecorator{
  private $iceDeco;
  public function __construct(IcecreamDecorator $iceDeco){
    $this->iceDeco = $iceDeco;
    $this->iceDeco->toppingCookie = 'Add Cookie';
  }
    public function cookieTop(){
      $this->iceDeco->cost=$this->iceDeco->cost+3;
    }
}



?>
