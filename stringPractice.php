<?php
  echo "\n".'#1: string addslashes(string $str)'."\n";
  $str = "Is your name O'Reilly?";
  echo "$str";
  echo addslashes($str);
?>
<?php 
  echo "\n".'#2: string chr (int $ascii)'."\n";
  echo chr(-159),chr(833);
  $str = "The string ends in excape: ";
  $str .= chr(27);
  $str = sprintf("The string ends in escape:%c", 27);

?>
<?php
  echo "\n".'#3 chunk_split'."\n";
  $str = "0123456789";
  echo substr(chunk_split($str,1,':'), 0, 19);
?>
<?php
  echo "\n".'#4 count_chars()'."\n";
  $data = "Two Ts and one F.";
  foreach(count_chars($data,1) as $i=>$val){
    echo 'There were '.$val.' instance of "'.chr($i).'" in the string.'."\n";
  }
?>
<?php
  echo "\n".'#5 echo '."\n";
  echo "Sum: ", 1+2;
  echo "Hello"; 
?>
<?php
  echo "\n".'#6 explode()'."\n";
  $car = "Honda, Toyota, BMW";
  echo $car."\n";
  $brand = explode(", ", $car);
  echo $brand[0];
?>
<?php
  echo "\n".'#7 htmlentities'."\n";
  $orig = "I'll \"walk\" the <b>dog</b> now";
  $a = htmlentities($orig);
  $b = html_entity_decode($a);
  echo $a."\n";
  echo $b."\n";
?>
<?php
  echo "\n".'#8 htmlspecialchars_decode()'."\n";
  $str = "<p>this -&gt; &quot;</p>\n";
  echo htmlspecialchars_decode($str);
  echo htmlspecialchars_decode($str, ENT_NOQUOTES);
?>
<?php
  echo "\n".'#9 implode'."\n";
  $array = array('name', 'age', 'grade');
  $comma_separated = implode(",", $array);
  echo $comma_separated."\n";
  var_dump(implode('hello', array()));
?>
<?php
  echo "\n".'#10 md5'."\n";
  $str = 'apple';
  if(md5($str)==='1f3870be274f6c49b3e31a0c6728957f'){
    echo "Would you like a green or red apple?";
  }
?>
<?php
  echo "\n".'#11 rtrim'. "\n";
  $hello = "Hello Apple";
  $trimmed = rtrim($hello,"Hple>");
  var_dump($trimmed); 
?>
<?php
  echo "\n".'#12 str_getcsv'."\n";
  $csv = array_map('str_getcsv', file('cars.csv'));
  print_r($csv);
?>
<?php
  echo "\n".'#13 strip_tags'."\n";
  $text = '<h1>title</he><a href = "www.google.com">link</a>';
  echo strip_tags($text)."\n";
  echo strip_tags($text,'<p><a>');
?>
<?php
  echo "\n".'#14 strpos()'."\n";
  $str = "abc abc abc";
  $pos = strpos($str,'a',0);
  echo $pos;
  $pos = strpos($str,'a',1);
  echo $pos;
  $pos = strpos($str,'a',5);
  echo $pos;
?>
<?php
  echo "\n".'#15 string length function'."\n";
  $str = "asdf";
  echo strlen($str)."\n";
  $str = "1234567890";
  echo strlen($str);
?>






















