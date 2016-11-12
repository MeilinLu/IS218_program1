<?php
require_once('book.php');
require_once('observer.php');

$ob1 = new PatternObserver;


$borrower1 = BorrowerFactory::create('Amy');

$borrower1->attach($ob1);
$borrower1->borrowBook(Book1::borrowBook());
echo "Which book do you have? <br>";
$borrower1->getBookTitle();
$borrower1->returnBook();
echo "Which book do you have? <br>";
$borrower1->getBookTitle();
$borrower1->detach($ob1);
$borrower1->borrowBook(Book1::borrowBook());
?>
