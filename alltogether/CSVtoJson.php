<?php

function CSVtoJson($filename, $getArray) {
  //open csv file
  if (!($fp = fopen($filename, 'r'))) {
    die("Can't open file...");
  }
  //read csv headers
  $key = fgetcsv($fp, "1024",",");
  //parse csv rows into array
  $json = array();
  while($row = fgetcsv($fp, "1024",",")) {
    $json[] = array_combine($key, $row);
  }
  //release file handle
  fclose($fp);
  $rejson = array();
  if(isset($getArray)) {
    $rejson = array_filter($json, function($rawData) use($getArray) {
      return isset($rawData['getArray']) && $rawData['getArray'] == $getArray;
    });
    return json_encode($rejson, JSON_PRETTY_PRINT);
  } else {
    echo 'Json';
    return json_encode($json, JSON_PRETTY_PRINT);
  }
}



$json = CSVtoJson('data.csv', $getArray);
  print_r($json);

?>
