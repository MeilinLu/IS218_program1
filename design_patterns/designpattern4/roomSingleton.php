<?php
class roomSingleton{

  private $hotel = '';
  private $  = '';
  private static $book = NULL;
  private static $isLoanedOut = FALSE;
  private function __construct() {
  }
  static function borrowBook() {
  if (FALSE == self::$isLoanedOut) {
  if (NULL == self::$book) {
  self::$book = new
  BookSingleton();	
  }
  self::$isLoanedOut = TRUE;
  return									 self::$book;
  }
  else
  {
  return NULL;
  }
}
function returnBook(BookSingleton $bookReturned){
self::$isLoanedOut = FALSE;
}
function getAuthor(){return $this->author;}
function getTitle(){return $this->title;}
function getAuthorAndTitle()
{return $this->getTitle()

}
?>
