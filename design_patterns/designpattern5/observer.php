<?php

//observer
class PatternObserver{
  public function __construct(){}
  public function update($name, $bookTitle,$record){
    echo "Observer Report: ".$name." ".$record. " ".$bookTitle."<br>";
  }
}
//Borrower is the observer subject
class Borrower{
  private $name;
  private $book;
  private $hasBook;
  public $observers = array();

  public function __construct($name){
    $this->name=$name;
  }

  
  public function attach(PatternObserver $ob){
    $this->observers[] = $ob;
  }
  public function detach(PatternOberserver $ob){
    foreach($this->observers as $okey=>$oval){
      if($oval == $ob){
        unset($this->observers[$okey]);
      }
    }
  }
  public function notify($name, $bookTitle, $record){
    foreach($this->observers as $ob){
      $ob->update($name, $bookTitle, $record);
    }
  }

  public function borrowBook($book){
    if($book != NULL){
      $this->book=$book; 
      $this->hasbook=TRUE;
      $this->notify($this->name,$this->book->getTitle(), 'borrows');
    }
  }
  public function returnBook($book){
    if($this->book != NULL){
      $this->book->return($this->book);
      $this->hasbook=FALSE;
      $this->notify($this->name,$this->book->getTitle(),'returns');
    }
  }
  public function getName(){
    echo $this->name;
  }
  public function getBookTitle(){
    if($this->book != NULL && $this->hasBook == TRUE){
      echo $this->book->getTitle().'<br>';
    }
    else{
      echo 'NO BOOK';
    }
  }
  public function getHasBook(){
    echo $this->hasBook;
  }
}
//borrower factory
class BorrowerFactory{
  public static function create($name){
    return new Borrower($name);
  }
}

?>
