<?php 
class Book {
    private int $id;
    private string $title,$author;
    private DateTime $publication_date;
    private string $langue;
    private string $status;
    private int $copies;
    private string $category ;

    public function __construct($title,$author,$date,$langue,$status,$copies,$category){
        
        $this->title=$title;
        $this->author=$author;
        $this->publication_date=$date;
        $this->langue=$langue;
        $this->status=$status;
        $this->copies=$copies;
        $this->category=$category;

    }

   public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }
     public function getAuthor() {
        return $this->author;
    }
     public function getPublicationDate() {
        return $this->publication_date;
    }
     public function getLangue() {
        return $this->langue;
    }
     public function getStatus() {
        return $this->status;
    }
     public function getCopies() {
        return $this->copies;
    }
     public function getCategory() {
        return $this->category;
    }
     public function setId($id){
        $this->id=$id;
    }
    public function setTitle($title){
        $this->title=$title;
    }
    public function setAuthor($author){
        $this->title=$author;
    }
     public function setPublicationDate($date){
        $this->publication_date=$date;
    }
      public function setLangue($langue){
        $this->langue=$langue;
    }
     public function setCopies($copies){
        $this->copies=$copies;
    }
      public function setStatus($status){
        $this->status=$status;
    }
      public function setCategory($category){
        $this->category=$category;
    }
 public function show() {

        echo "<table border='1'>";
        echo "<tr><td>Title</td><td>author</td><td>date</td><td>langue</td><td>status</td><td>copies</td> <td>category</td></tr>";
        echo "<tr>";
        echo "<td>{$this->title}</td>";
        echo "<td>{$this->author}</td>";
        echo "<td>{$this->publication_date}</td>";
        echo "<td>{$this->langue}</td>";
        echo "<td>{$this->status}</td>";
        echo "<td>{$this->copies}</td>";
        echo "<td>{$this->category}</td>";
        echo "</tr>";
        echo "</table>";
        }
}


?>