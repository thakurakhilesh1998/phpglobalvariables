<?php
include('book.php');
// $book1=new Book('Java',120);
// // $book1->setBookName('C++');
// echo $book1->getBookName().'<br>';
// echo $book1->getPrice();

//echo Book::$book1myName;
// echo Book::getMyName();
$mag=new Magzines('Pc',2020,'Book',400);
echo $mag->getBookName().'<br>';
echo $mag->getPrice();
?>
