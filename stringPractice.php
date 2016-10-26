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
  echo "Hello", 
?>
