<?php
require_once("validation.php");

$testSAN = new sanitize();
echo $testSAN->sanitizeEmail('email')."<br>";
echo $testSAN->sanitizeURL('url')."<br>";
$testVAL = new validate();
if($testVAL->validateEmail('email')){
  echo "This is a valid email!<br>";
}
else{
  echo "NOT VALID! <br>";
}

if($testVAL->validateURL('url')){
  echo "This is a valid URL";
}
else{
  echo "NOT VALID! <br>";
}
?>
