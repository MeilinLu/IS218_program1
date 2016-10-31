<?php
echo "superglobals \n";
echo '$GLOBALS'."\n";
function test(){
  //variable inside the function, not a global variable
  $foo = "local variable";
  echo '$foo in global scope: '.$GLOBALS["foo"]."\n";
  echo '$foo in current scope: '.$foo."\n";  
}

$foo = "Global contnent";
test();
//another example
$x = 75;
$y = 25;
function addition(){
  $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
}
addition();
echo $z."\n";
?>
<?php
echo '$_SERVER'."\n";
//the full path and filename of the current file
echo $_SERVER['PHP_SELF']."\n";
//the name of the server host
echo $_SERVER['SERVER_NAME']."\n";
//contents of the HOST(header)
echo $_SERVER['HTTP_HOST']."\n";
//the address of the page (if any) which referred to the current page
echo $_SERVER['HTTP_REFERER']."\n";
//user agent infomation
echo $_SERVER['HTTP_USER_AGENT']."\n";
//the current script path
echo $_SERVER['SCRIPT_NAME']."\n";
?>
<?php

?>











