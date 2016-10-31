<?php
echo "ReflectionClass::export \n";
class Apple{
  public $var1;
  public $var2 = 'orange';
  public function type(){
    return 'apple';
  }
}
ReflectionClass::export('apple');
?>
<?php
echo "ReflectionClass::getmethod \n";
echo $class = new ReflectionClass('ReflectionClass');
$method = $class -> getMethod('getMethod');
var_dump($method);
?>
<?php
echo "ReflectionClass::toString() \n";
$reflectionClass = new ReflectionClass('Exception');
echo $reflectionClass->__toString();
?>
<?php
echo "ReflectionClass::hasMethod() \n";
Class C{
  public function publicFoo(){
    return true;
  }
  protected function protectedFoo(){
    return true;
  }
  private function privateFoo(){
    return true;
  }
  static function staticFoo(){
    return true;
  }
}

$rc = new ReflectionClass("C");
var_dump($rc->hasMethod('publicFoo'));
var_dump($rc->hasMethod('protectedFoo'));
var_dump($rc->hasMethod('privateFoo'));
var_dump($rc->hasMethod('staticFoo'));
var_dump($rc->hasMethod('bar'));
var_dump($rc->hasMethod('PUBLICFfOO'));
?>
<?php
echo "ReflectionClass::getExtension() \n";
$class = new ReflectionClass('ReflectionClass');
$extension = $class->getExtension();
var_dump($extension);
?>
<?php
echo "passing by reference vs passing by value \n";

function pass_by_value($param){
  push_array($param, 4,5);
}
$ar = array(1,2,3);
pass_by_value($ar);
foreach($ar as $elem){
  print "\n $elem";
}
?>
<?php
function pass_by_reference(&$param){
  push_array($param,4,5);
}
$ar = array(1,2,3);
pass_by_reference($ar);
foreach ($ar as $elem){
  print "\n $elem";
}
?>





