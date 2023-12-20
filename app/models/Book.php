<?php

namespace App\models;
use mysqli;
class Book{
    private $id;
    private $title;
    private $author;
    private $genre;
    private $description;
    private $publication_year;
    private $total_copies;
    private $avaible_copies;
    
    public function __construct($id,$title,$author,$genre,$description,$publication_year,$total_copies,$avaible_copies){
        $this->id;
        $this->title;
        $this->author;
        $this->genre;
        $this->description;
        $this->publication_year;
        $this->total_copies;
        $this->avaible_copies;
    }

    public function Create($title,$author,$genre,$description,$publication_year,$total_copies,$avaible_copies){
        $connection=new mysqli("localhost","root","","bibliotheque");
        if($connection->connect_error){
            echo'conndection error';
        }
        else{
            $stmt=$connection->prepare("INSERT INTO book(title,author,genre,description,publication_year,total_copies,avaible_copies) VALUES(?,?,?,?,?,?,?)");
            $stmt->bind_param('sssssdd',$title,$author,$genre,$description,$publication_year,$total_copies,$avaible_copies);
            if(!$stmt->execute()){
                error_log("query failed: ". $stmt->error);
            }
        }

    }

    public function display(){
        $connection=new mysqli("localhost","root","","bibliotheque");
        $stmt=$connection->prepare("SELECT * FROM book");
        $stmt->execute();
        $result=$stmt->get_result();
        if($result){
            $users=[];
            while($row=$result->fetch_assoc()){
                $users[]=$row;
            }
            return $users;
        }
        else{
            error_log("querry failed: " . $stmt->error);
            return [];
        }  
       }
    
    


    
}