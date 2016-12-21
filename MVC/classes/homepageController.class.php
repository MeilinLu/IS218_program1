<?php

  class homepageController extends controller{
  
    public function get(){
      $this->html .= '<a href="index.php?controller=iceController">ICE
      Controller</a>';
      $this->html .= '<h1>WELCOME ICE KINGDOM</h1>';
      session_start();
      //print_r($_SESSION);
    }
    public function post(){}
    public function put(){}
    public function delete(){}
  }

?>
