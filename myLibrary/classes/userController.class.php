<?php

  class userController extends controller{
  
    public function get(){
      $form = new userformview;
      $form_html = $form->getHTML();
      $this->html .= $form_html;
    }

    public function post(){
      print_r($_POST);
      $ice = new userFlavor;
      $ice->setUsername($_POST['username']);
      $ice->setPassword($_Post['password']);
      $ice->save();
      header('Location:index.php');
    }
    
    public function put(){}
    public function delete(){}

  }

?>
