<?php

  function cvsToJson($fname){
    
    //open csv file
    if(!($fp = fopen($fname, 'r'))){
      die("Unable to open the file !");
    }
    
    //read csv headers
    $key = fgetcsv($fs,"1024",",");

    //parse csv rows into array
    $json = array();
    while($row = fgetcsv($fp, "1024",",")){
      $json[] = array_combine($key,$row);
    }

    //release file handle
    fclose($fp);
    return json_encode($json, JSON_PRETTY_PRINT);
  }

?>
