<?php
$nospace='';
if(empty($nospace)){
  echo '$nospace is either 0, empty, or not set at all'."\n";
}
if(isset($nospace)){
  echo '$nospace is set even though it is empty'."\n";
}
if(is_null($nospace)){
  echo '$nospace is not NULL'."\n";
}
$space=' ';
if(empty($space)){
  echo '$space is not empty'."\n";
}
if(isset($space)){
  echo '$space is set'."\n";
}
if(is_null($space)){
  echo '$space is not NULL'."\n";
}
$nothing=NULL;
if(empty($nothing)){
  echo '$nothing is empty'."\n";
}
if(isset($nothing)){
  echo '$nothing is not set'."\n";
}
if(is_null($nothing)){
  echo '$nothing is not NULL'."\n";
}
$var='1';
if(empty($var)){
  echo '$var is not empty'."\n";
}
if(isset($var)){
  echo '$var is not set'."\n";
}
if(is_null($var)){
  echo '$var is not NULL'."\n";
}

echo "switch structure \n";

switch($varVar=NULL){
 
  case "empty($varVar)": 
    echo "$varVar is either 0, empty, or not set at all.\n";
  case "isset($varVar)":
    echo "$varVar is set even though it is empty.\n";
  case "is_null($varVar)":
    echo "$varVar is not NULL. \n";  
}

?>


