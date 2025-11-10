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
    public function listebook(){
        $sql= "SELECT * FROM book";
        $db=config::getConnexion();
        try {
                 $list= $db->query($sql);
                 return $list;
        }
          catch (Exception $e){
            echo 'Error'.$e->getMessage();
        }

    }
    public function supprimerbook($id){
        $sql="DELETE FROM book WHERE id=:id";
        $db=config::getConnexion();
        try {
                    $req= $db->prepare($sql);
                    $req->bindValue(':id',$id);
                    $req->execute();
        }
         catch (Exception $e){
            echo 'Error'.$e->getMessage();
        }
    }

    public function getbook($id){
            $sql="SELECT * FROM book WHERE id=$id";
        $db=config::getConnexion();
        $req=$db->prepare($sql);
        try {
                $req-> execute();
                $book= $req->fetch();
                return $book;
        }
         catch (Exception $e){
            echo 'Error'.$e->getMessage();
        }

    }

 public function updateBook($book, $id) {
  
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE book SET 
                    title = :title,
                    author = :author,
                    publication_date = :publication_date,
                    langue = :langue,
                    status = :status,
                    copies = :copies,
                    category = :category
                WHERE id = :id'
            );
            $query->execute([
                'id' => $id,
                'title' => $book->getTitle(),
                'author' => $book->getAuthor(),
                'publication_date' => $book->getPublicationDate() ? $book->getPublicationDate()->format('Y-m-d') : null,
                'langue' => $book->getLangue(),
                'status' => $book->getStatus(),
                'copies' => $book->getCopies(),
                'category' => $book->getCategory()
            ]);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

/*
    public function showBook(Book $book){
        echo "<h2>Information from controller </h2>";
        $book->show();

    }*/
}

?>