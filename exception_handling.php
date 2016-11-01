<?php
echo "Exception Handling \n";

class FileExistException extends Exception{}
class FileReadException extends Exception{}
class FileWriteException extends Exception{}

$filename = 'abd.csv';

try{
  try{
    $data = file_get_contents($filename);
    if($data === false){
      throw new Exception();
    }
  }
  catch(Exception $e){
    if(!file_exists($filename)){
      throw new FileExistException($filename."does not exist \n");
    }
    elseif(!is_readable($filename)){
      throw new FileReadException($filename."is not readable \n");
    }
    elseif(!is_writable($filename)){
      throw new FileWriteException($filename."is not writable \n");
    }
    else{
      throw new Exception("Unknown error accessing file.");
    }
  }
}  
catch(FileExistException $fe){
  echo $fe->getMessage();
  error_log($fe->getTraceAsString());
}
catch(FileReadException $fr){
  echo $fr->getMessage();
  error_log($fr->getTraceAsString());
}
catch(FileWriteException $fw){
  echo $fw->getMessage();
  error_log($fw->getTraceAsString());
}
?>
