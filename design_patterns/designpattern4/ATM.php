<?php

//singleton ATM machine #1

class ATM1{

  private static $ID='#1';
  private static $machine = NULL;
  private static $isUsed=FALSE;
  
  public function __construct(){}

  public function startUse(){
    if(self::$isUsed == FALSE){
      if(self::$machine==NULL){
        self::$machine = new ATM1();
      }
      self::$isUsed = TRUE;
      return self::$machine;
    }
    else{
      return NULL;
    }
  }
  
  public function finishUse(ATM1 $freeATM){
    self::$isUsed = FALSE;
  }
  
  public function getID(){
    return $this->ID;
  }
}  
?>
