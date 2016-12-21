<?php 

class Curl{

  public static function HttpRequest($url, $param, $method){
    $data = inputData($params);
    switch($method){
      case 'GET':
        return getRequest($url,$data);
	break;
      case 'POST':
        return postRequest($url,$data);
        break;
      default:
        return "Wrong Method! GET OR POST?";
	break;
    
    }
  }
  
  public function inputData($params){
    $temp = '';
    foreach($paras as $k=> $v){
      $temp .= $k . '='.$v.'&';
    }
    return rtrim($temp, '&');
  }

  private function getRequest($url,$data){
    $ch=curl_init();
    curl_setopt($ch, CURLOPT_URL, $url.'?'.$data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);

    $output=curl_exec($ch);
    if(curl_errno($ch)){
      throw new Exception(curl_error($ch));
    }
    curl_close($ch);
    return $output;
  }

  private function postRequest($url,$data){
    $ch=curl_init();
    curl_setopt($ch, CURLOPT_RUL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER,false);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $output=curl_exec($ch);
    if(curl_errno($ch)){
      throw new Exception(curl_error($ch));
    }
    curl_close($ch);
    return $output;
  }
}

?>
