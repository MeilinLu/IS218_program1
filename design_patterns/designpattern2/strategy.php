<?php
require_once('decorator.php');

class icecreamOrder{
  
  private $order = NULL;
  
  public function __construct($orderNum){
    switch($orderNum){
      case 'A':
        $this->order = new IcecreamOnly();
        break;
      case 'B':
        $this->order = new IcecreamWithFruit();
	break;
      case 'C':
        $this->order = new IcecreamWithNut();
        break;
      case 'D':
        $this->order = new IcecreamWithCookie();
	break;
      
    }  
  }

  public function showIcecreamOrder(Icecream $icecream){
    $this->order->showOrder($icecream);
  }
}

interface OrderInterface{
  public function showOrder(Icecream $icecream);
}

class IcecreamOnly implements OrderInterface{
  public function showOrder(Icecream $icecream){
    echo $icecream->flavor.'<br>';
    echo $icecream->size.'<br>';
    echo $icecream->cost.'<br>';
  }
}

class IcecreamWithFruit implements OrderInterface{
  public function showOrder(Icecream $icecream){
    $deco = new IcecreamDecorator($icecream);
    $decoFruit = new addFruit($deco);
    $decoFruit->fruitTop();
    echo $deco->icecream->flavor.'<br>';
    echo $deco->icecream->size.'<br>';
    echo $deco->toppingFruit.'<br>';
    echo $deco->cost.'<br>';
  }
}
class IcecreamWithNut implements OrderInterface{
  public function showOrder(Icecream $icecream){
    $deco = new IcecreamDecorator($icecream);
    $decoNut = new addNut($deco);
    $decoNut->nutTop();
    echo $deco->icecream->flavor.'<br>'; 
    echo $deco->icecream->size.'<br>';
    echo $deco->toppingNut.'<br>';
    echo $deco->cost.'<br>';
  }
}
class IcecreamWithCookie implements OrderInterface{
  public function showOrder(Icecream $icecream){
    $deco = new IcecreamDecorator($icecream);
    $decoCookie = new addCookie($deco);
    $decoCookie->cookieTop();
    echo $deco->icecream->flavor.'<br>';
    echo $deco->icecream->size.'<br>';
    echo $deco->toppingCookie.'<br>';
    echo $deco->cost.'<br>';
  }
}















?>
