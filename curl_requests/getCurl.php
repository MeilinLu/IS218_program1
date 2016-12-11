<?php
  require_once("curl.php");

  $name = $_GET["name"];

  $Curl = new Curl();
  
  $targetURL = "http://localhost/curl_requests/postCurl.php";
  
  $param = array("name"=>name);

  echo $Curl->httpPost($targetURL, $param);

?>
