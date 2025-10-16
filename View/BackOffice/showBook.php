<?php 
require_once "./../../Model/Book.php";

$book1= new Book("test1","2A2","2025","FR","Disponible",5,"Science");
var_dump($book1);
$book1->show();
?>