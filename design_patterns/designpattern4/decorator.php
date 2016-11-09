<?php

include_once ('onlineBank.php');

class accountDecorator{
  protected $password;
  protected $userinfo;
  
  public function __construct(UserInfo $userinfo_in){
    $this->userinfo = $userinfo_in;
    $this->resetPassword();
  }
  function resetPassword(){
    $this->password = $this->userinfo->getPassword();
  }
  function showPassword(){
    return $this->password;
  }
}

?>
