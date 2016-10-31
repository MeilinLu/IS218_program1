<?php
echo "Function with Arbitrary Number of Arguments\n";
echo "Function with 2 optional arguments\n";
function foo($arg1 = '',$arg2 = ''){
  echo "arg1: $arg1 \n";
  echo "arg2: $arg2 \n";
}
foo('hello', 'world');
foo();
echo "func_get_args()\n";
function fooo(){
  //returns an array of all passed arguments
  $args=func_get_args();
    foreach($args as $k=>$v){
    echo "arg".($k+1).":$v\n";  
  }
}
fooo();
fooo('hello');
fooo('hello','world','again');
?>
<?php
echo "Using glob() to find files \n";
echo "get all PHP files\n";
$files = glob('*.php');
print_r($files);

echo "get all PHP files and TXT files \n";
$files = glob('*.{php,txt}',GLOB_BRACE);
print_r($files);

echo "realpath\n";
$files = glob('../images/a*.jpg');
//applies the function to each array element
$files=array_map('realpath',$files);
print_r($files);
?>
<?php
echo "Memory Usage Information \n";
echo 'Initial: '.memory_get_usage()."bytes \n";
//let's use up some memory
for($i = 0; $i < 100000; $i++){
  $array[]=md5($i);
}
//let's move half of the array
for($i = 0; $i < 100000; $i++){
  unset($array[$i]);
}
echo 'Final: '.memory_get_usage()."bytes \n";
echo 'Peak: '.memory_get_peak_usage()."bytes \n";
?>
<?php
echo "CPU Usage Information";
print_r(getrusage());

echo "sleep for 3 seconds (non-busy) \n";
sleep(3);
$data = getrusage();
echo "User time: ".($data['ru_utime.tv_sec']+$data['ru_utime.tv_usec']/1000000);
echo "System time: ".($data['ru_stime.tv_sec']+$data['ru_stime.tv_usec']/1000000);

echo "\n loop 10 million times (busy) \n";
for($i=0; $i<10000000;$i++){
}
$data2=getrusage();
echo "User time: ".($data2['ru_utime.tv_sec']+$data2['ru_utime.tv_usec']/1000000);
echo "System time:
".($data2['ru_stime.tv_sec']+$data2['ru_stime.tv_usec']/1000000);

echo "\n keep calling microtime for about 3 seconds \n";
$start = microtime(true);
while(microtime(true) - $start < 3){
}
$data3 = getrusage();
echo "User time:
".($data3['ru_utime.tv_sec']+$data3['ru_utime.tv_usec']/1000000);
echo "System time:
".($data3['ru_stime.tv_sec']+$data3['ru_stime.tv_usec']/1000000);
?>

<?php
echo "\n Magic Constants \n";
echo "__FILE__ \n";

//this is relative to the loaded script's path
//it may cause problems when running scripts from different dirctories
require_once('switch_isset_null_empty.php');

//this is always relative to theis file's path
//no matter where it was included from
//require_once(dirname(__FILE__).'switch_isset_null_empty.php');

echo "\n __LINE__ \n";
//my_debug("some debug message", __LINE__);
//my_debug("another debug message", __LINE__);
function my_debug($msg, $line){
  echo "Line $line: $msg \n";
}
?>

<?php
echo "\n Generating Unique ID's \n";
//generate unique string
echo md5(time().mt_rand(1,1000000))."\n";
echo uniqid()."\n";
echo uniqid()."\n";

echo "pass a prefix->reduce duplicate OR sechond parameter->increase entropy \n";

//with prefix
echo uniqid('foo_')."\n";
//with more entropy
echo uniqid('', true)."\n";
//with both 
echo uniqid('bar_', true)."\n";
?>
<?php
echo "serialization \n";
//a complex array
$myvar =  array('hello',42,array(1,'two'),'apple');
//convert to a string
$string = serialize($myvar);
echo $string."\n";
//
$newvar=unserialize($string);
print_r($newvar)."\n";
?>
<?php
echo "Compressing Strings";

$string="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut elit id mi ultricies adipiscing. Nulla facilisi. Praesent pulvinar, sapien vel feugiat vestibulum, nulla dui pretium orci, non ultricies elit lacus quis ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pretium ullamcorper urna quis iaculis. Etiam ac massased turpis tempor luctus. Curabitur sed nibh eu elit mollis congue. Praesent ipsum diam, consectetur vitae ornare a, aliquam a nunc. In id magna pellentesque tellus posuere adipiscing. Sed non mi metus, at lacinia augue. Sed magna nisi, ornare in mollis in, mollis sed nunc. Etiam at justo in leo congue mollis. Nullam in neque eget metus hendrerit scelerisque eu non enim. Ut malesuada lacus eu nulla bibendum id euismod urna sodales. \n";

$compressed = gzcompress($string);
echo "Original size: ".strlen($string)."\n";
echo "Compressed size: ".strlen($compressed)."\n";
//getting it back
$original = gzuncompress($compressed);
?>

<?php
echo "register shutdown function \n";
//capture the start time
$start_time = microtime(true);
//work
//work
//work
//display how long the script took
echo "execution took: ".(microtime(true)-$start_time)." seconds. \n";

$start = microtime(true);
register_shutdown_function('my_shutdown');
//work
//work
//work
function my_shutdown(){
  global $start;
  echo "execution took: ".(microtime(true)-$start)." seconds. \n";
}
?>








