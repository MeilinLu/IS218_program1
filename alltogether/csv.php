<?php
class CSV {
  public $filein;
  public $fileout;
  public $data;
  public $exception;

  public function __construct($filein='', $fileout='', $data='') {
    //open csv file
    if(is_file($filein)) {
      $this->readFile($filein);
      return $this->data;
      echo $this->exception;
    }
    elseif($fileout != '' && $data != '') {
      $this->writeFile($fileout, $data);
      echo $this->exception;
    }
  }

  public function readFile($filein) {
    try{
      if(($handle = fopen($filein, 'r')) !== FALSE) {
        $data = fgetcsv($handle, 1000, ',');
      	$this->data = $data;
      }
      fclose($handle);
    }
    catch(Exception $e) {
      $this->exception = 'Caught Exception: ' . $e->getMessage() . "n";
    }
  }

  public function writeFile($fileout, $data) {
    try{
      $fp = fopen($fileout, 'w');
      foreach($data as $fields) {
        fputcsv($fp, $fields);
      }
      fclose($fp);
    }
    catch(Exception $e) {
      $this->exception = 'Caught exception: ' . $e->getMessage() . "n";
    }
  }

}

?>
