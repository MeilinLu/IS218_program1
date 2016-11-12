<?php

class PatternObserver{
  public function __construct(){}
  public function update($name, $machineID, $action){
    echo "Observer Report: ". $name. $action."<br>";
  }
}

class User{
  
  private $name;
  private $machine = NULL;
  private $availableATM = TRUE;
  private $observers = array();
  
  public function __construct($name){
    $this->name = $name;
  }
  
  public function startUse($machine){
    if($machine != NULL){
      $this->machine = $machine;
      $this->availableATM = FALSE;
      $this->notify($this->name,$this->machine->getID(),' I am using the machine.');
    }
    else{
      echo "Machine is not available. <br>";
    }
  }

  public function finishUse($machine){
    if($this->machine != NULL){
      $this->machine->finishUse($this->machine);
      $this->availableATM = FALSE;
      $this->notify($this->name,$this->machine->getID(),' I do not need the machine.'); 
    }
  }

  public function attach(PatternObserver $ob){
    $this->observers[] = $ob;
  }

  public function detach(PatternObserver $ob){
    foreach($this->observers as $okey=>$oval){
      if($oval == $observer_in){
        unset($this->observers[$okey]);
      }
    } 
  }

  public function notify($name,$machineID, $action){
    foreach($this->observers as $obs){
      $obs->update($name, $machineID, $action);
    }
  }

  public function getName(){
    echo $this->name;
  }
  
  public function getAvailableATM(){
    echo $this->availabeATM;
  }

  public function getMachineID(){
    if($this->machine != NULL){
      echo $this->machine;
    }
  }
  
}
class userFactory{
  public static function create($name){
    return new User($name);
  }
}
?>
