<?php
require_once __DIR__ . "/../Model/Book.php";
require_once __DIR__ . "/../config.php";
class BookController {

    public function addBook(Book $book) {
        $sql="INSERT INTO book VALUES(NULL,:title,:author,:publication_date, :langue,:status,:copies,:category)";
        $db=config::getConnexion();
        try {
            $query= $db->prepare($sql);
            $query -> execute(
               [
                'title'=> $book->getTitle(),
                'author'=> $book->getAuthor(),
                'publication_date'=> $book->getPublicationDate()->format('y-m-d'),
                'langue'=> $book ->getLangue(),
                'status'=>$book->getStatus(),
                'copies'=>$book->getCopies(),
                'category'=>$book->getCategory()
               ] 
               );
        }
        catch (Exception $e){
            echo 'Error'.$e->getMessage();
        }
    }



/*
    public function showBook(Book $book){
        echo "<h2>Information from controller </h2>";
        $book->show();

    }*/
}

?>