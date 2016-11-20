<?php
class sanitize{
  public function sanitizeEmail($useremail){
    if(isset($_POST[$useremail])){
      return filter_var($_POST[$useremail],FILTER_SANITIZE_EMAIL);  
    }
  }
  public function sanitizeURL($page){
    if(isset($_POST[$page])){
      return filter_var($_POST[$page], FILTER_SANITIZE_URL);
    }  
  }
}

class validate{
  public function validateEmail($useremail){
    $email = filter_var($_POST[$useremail], FILTER_SANITIZE_EMAIL);
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      return TRUE;
    }
    else{
      return FALSE;
    }
  }
  public function validateURL($page){
    $url = filter_var($_POST[$page], FILTER_SANITIZE_URL);
    if(filter_var($url, FILTER_VALIDATE_URL)){
      return TRUE;
    }
    else{
      return FALSE;
    }
  }
}


$testSAN = new sanitize();
echo $testSAN->sanitizeEmail('email')."<br>";
echo $testSAN->sanitizeURL('url')."<br>";
$testVAL = new validate();
if($testVAL->validateEmail('email')){
  echo "This is a valid email!<br>";
}
else{
    echo "NOT VALID EMAIL! <br>";
}

if($testVAL->validateURL('url')){
  echo "This is a valid URL <br>";
}
else{
  echo "NOT VALID URL! <br>";
}
