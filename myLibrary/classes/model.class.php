<?php
  //put database connection in this class
  abstract class model{
    
    private $guid;
    
    public function __contruct(){
      session_start();
      $this->guid=uniqid();
    }

    public function save(){
      $_SESSION[$this->guid] = (array) $this;
    }

  }
?>
