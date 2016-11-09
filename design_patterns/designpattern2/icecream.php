<?php

//abstract factory 
abstract class icecream{
  public abstract function getDescription();
  public abstract function cost();
}

class MilkIcecream extends icecream{
  public $description = "milk_icecream";
  public function getDescription(){
    $this->description=$description;
  }
  public function cost(){
    return 19;
  }
}

class SlushIce extends icecream{
  public $description = "slush_ice";
  public function getdesription(){
    $this->description = $description;
  }
  public function cost(){
    return 10;
  }
}


?>
