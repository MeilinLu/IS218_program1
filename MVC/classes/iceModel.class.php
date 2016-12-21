<?php

  class iceModel extends model{
    private $make;
    private $flavor;
    private $price;

    public function setFlavor($flavor){
      $this->flavor = $flavor;
    }

    public function getFlavor($flavor){
      return $this->flavor;
    }

    public function setMake($make){
      $this->make = $make;
    }

    public function getMake($make){
      return $this->make;
    }

    public function setPrice($price){
      $this->price = $price;
    }

    public function getPrice($price){
      return $this->price;
    }

  } 

?>
