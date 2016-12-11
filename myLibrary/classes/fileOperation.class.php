<?php

class FileOperation{
  private $fpath;
  private $fname;
  private $file;

  public function __construct($filePath, $fileName){
    $this->fpath = $filePath;
    $this->fname = $fileName;
    $this->file = fopen($filePath.$fileName,"r+") or die("You cannot open this
    file now: $fileName");
  }

  public function readFile(){
    rewind($this->file);
    return fread($this->file, filesize($this->fpath.$this->fname));
  }

  public function readLine(){
    rewind($this->file);

    $lines = array();
    while(!feof($this->file)){
      $lines[]=fgets($this->file);
    }
    return $lines;
  }

  public function writeFile($line){
    fwrite($this->file,$line);
  }

  public function closeFile(){
    fclose($this->file);
  }

}

?>
