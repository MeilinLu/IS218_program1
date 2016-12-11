<?php

  class iceModel extends model{
    private $make;
    private $flavor;

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

  } 

?>
