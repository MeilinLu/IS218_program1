<?php
  echo '#1: string addslashes(string $str)';
  $str = "Is your name O'Reilly?";
  echo "$str";
  echo addslashes($str);
?>
<?php 
  echo '#2: string chr (int $ascii)';
  echo chr(-159),chr(833);
  $str = "The string ends in excape: ";
  $str .= chr(27);
  $str = sprintf("The string ends in escape:%c", 27);

?>
<?php
  echo '#3 chunk_split';
  $str = "0123456789";
  echo substr(chunk_split($str,1,':'), 0, 19);
?>
