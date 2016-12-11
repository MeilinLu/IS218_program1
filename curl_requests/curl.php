<?php

class Curl{
 
  function httpPost($url, $params){
    
    $postData='';
    
    foreach($params as $k=>$v){
      $postData .= $k .'='. $v . '&';
    }
    
    $postData = rtrim($postData, '&');
    
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_POST, count($postData));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    
    $output = curl_exec($ch);
    if(curl_exec($ch)){
      throw new Exception(curl_error($ch));
    }
    curl_close($ch);
    
    return $output; 
  } 
}



?>
