<?php

class Icecream{
  public $flavor;
  public $size;
  public $cost;

  public function __construct($flavor, $size, $cost){
    $this->flavor = $flavor;
    $this->size = $size;
    $this->cost = $cost;
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
// icecream factory

class IceFactory{
  public static function create($flavor, $size, $cost){
    return new Icecream($flavor, $size, $cost);
  }
}

?>    
