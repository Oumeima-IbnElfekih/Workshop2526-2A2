<?php  
require_once __DIR__ . "/../../Controller/BookController.php";
 $bookcontroller= new BookController();

 $bookcontroller->supprimerbook($_GET['id']);
 header('Location:ListBook.php');


?>