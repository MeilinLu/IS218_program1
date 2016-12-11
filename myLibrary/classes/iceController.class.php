<?php

  class iceController extends controller{
    
    public function get(){
      $form = new iceformview;
      $form_html = $form->getHTML();
      $this->html .= $form_html;
    }
    
    public function post(){
      print_r($_POST);
      $ice = new iceModel;
      $ice->setMAKE(_POST['make']);
      $ice->setFlavor(_POST['flavor']);
      $ice->save();
      header('Location:index.php');
    }

    public function put(){}
    public function delete(){}
  }

?>
