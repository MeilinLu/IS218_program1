<?php

//singleton

class Book1{
  private $author = "Matt";
  private $title = "PHP Objects, Patterns, and Practice";
  private static $book = NULL;
  private static $borrowOut = FALSE;
  
  private function __construct(){}

  static function borrowBook(){
    if(FALSE == self::$borrowOut){
      if(NULL == self::$book){
        self::$book = new Book1();
      }
      self::$borrowOut = TRUE;
      return self::$book;
    }
    else{
      return NULL;
    }
  }

  static function returnBook(Book1 $returnedBook){
    self::$borrowOut = FALSE;
  }
  function getAuthor(){
    return $this->author;
  }
  function getTitle(){
    return $this->title;
  }
  function getAuthorAndTitle(){
    return $this->getTitle().'by'.$this->getAuthor();
  }
}
?>
