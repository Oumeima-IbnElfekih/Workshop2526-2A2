<?php 
require_once __DIR__ . "/../../Model/Book.php";
require_once __DIR__ . "/../../Controller/BookController.php";
$author=$_POST['author'];
$publication_date=$_POST['publication_date'];
$language=$_POST['language'];
$status=$_POST['status'];
$number_of_copies=$_POST['number_of_copies'];
$book1= new Book($_POST['title'],$author,$publication_date,$language,$status,$number_of_copies,$_POST['category']);

var_dump($book1);
$controllerInstance=new BookController();
$controllerInstance->showBook($book1);
?>