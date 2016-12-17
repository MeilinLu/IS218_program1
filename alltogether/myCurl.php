<?php

  include 'csvFile.class.php';
  include 'curl.class.php';
  $url = 'https://web.njit.edu/~ml473/alltogether/index.php'
  $curl = new curl($url);
  $response = $curl->get();
  print_r($response);
  $output = json_decode($response,true);
  print_R($output);
?>
