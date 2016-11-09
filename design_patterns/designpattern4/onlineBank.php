<?php

include 'observer.php';

class AccountSingleton{
  private static $username;
  private static $password;
  private static $instance = NULL;
  private static $isSignedin=FALSE;
  
  public static function signin(){
    if(FALSE == self::$isSignedin){
      if(NULL == self::$instance){
        self::$instance = new AccountSingleton();
      }
      self::$isSignedin = TRUE;
      return self::$instance;
    }else{
      return NULL;
    }
  }
  
  public function signout(AccountSingleton $userSingedout){
    self::$isSignedin = FALSE;
  }
  
  
  public function setUsername(){
    $this->username = $username;
  }
  public function getUsername(){
    return $this->username;
  }

  protected function __construct(){}
  private function __clone(){}
  private function __wakeup(){}
}

class Users{
  private $user;
  private $singedin = FALSE;
  function __construct(){}
  function getUsername(){
    if(TRUE == $this->signedin){
      return $this->user->getUsername();
    }else{
      return "THE USER IS ALREADY SIGNED IN";
    }
  }
  
  function signin($username){
    $this->user = AccountSingleton::signin();
    if($this->user==NULL){
      $this->signedin=FALSE;
    }else{
      $this->user->setUsername($username);
    }
  }
 
 function signout(){
   $this->user->signout($this->user);
 }
}

$observer = new PatternObserver();
$subject = new PatternSubject();
$subject -> attach($observer);

$user1 = new users();
$user2 = new users();

$user1->signin('User1');
echo 'User1 require to sign in the system'."\n";
$username = $user1->getUsername();
$subject->updateFavorites($username);
echo "\n";

$user2->signin('User2');
echo 'User2 require to sign in the system'."\n";
$username = $user2->getUsername();
$subject->updateFavorites($username);
echo "\n";

$user1->signout();
echo 'User1 log out'."\n";

$user2->signin('User2');
echo 'User2 require to sign in the system'."\n";
$username = $user2->getUsername();
$subject->updateFavorites($username);
?>
