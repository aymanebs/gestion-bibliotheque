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
    private $image_name;
    private $image_path;

    
    public function __construct($id,$title,$author,$genre,$description,$publication_year,$total_copies,$avaible_copies,$image_name,$image_path){
        $this->id=$id;
        $this->title=$title;
        $this->author=$author;
        $this->genre=$genre;
        $this->description=$description;
        $this->publication_year=$publication_year;
        $this->total_copies=$total_copies;
        $this->avaible_copies=$avaible_copies;
        $this->image_name=$image_name;
        $this->image_path=$image_path;
    }

    public function Create($title,$author,$genre,$description,$publication_year,$total_copies,$avaible_copies,$image_name,$image_path){
        $connection=new mysqli("localhost","root","","bibliotheque");
        if($connection->connect_error){
            echo'conndection error';
        }
        else{
            $stmt=$connection->prepare("INSERT INTO book(title,author,genre,description,publication_year,total_copies,avaible_copies,image_name,image_path) VALUES(?,?,?,?,?,?,?,?,?)");
            $stmt->bind_param('sssssddss',$title,$author,$genre,$description,$publication_year,$total_copies,$avaible_copies,$image_name,$image_path);
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
    
    public function displayById($id){
        $connection=new mysqli('localhost','root','','bibliotheque');
        if($connection->connect_error){
            error_log("Failed to connect: " . $connection->connect_error);
        }
        $stmt=$connection->prepare('SELECT * FROM book WHERE id=? ');
        $stmt->bind_param('d',$id);
        $stmt->execute();
        $result=$stmt->get_result();
        if(!$result){
            error_log("Querry fail: " . $stmt->error);
        }
        $row=$result->fetch_assoc(); 
        return $row;
     
    }

    // public function getBookById($id){
    //     $connection=new mysqli('localhost','root','','bibliotheque');
    //     if($connection->error){
    //         error_log("Failed to connect: " . $connection->error);
    //     }
    //     $stmt=$connection->prepare('SELECT * FROM book WHERE id=?');
    //     $stmt->bind_param('d',$id);
    //     $stmt->get_result();

    // }

    public function update($id){
    $connection=new mysqli("localhost","root","","bibliotheque");
    if($connection->connect_error){
        error_log("Failed to connect: " . $connection->connect_error);
    }
    $stmt=$connection->prepare('UPDATE book SET title=?,author=?,genre=?,description=?,publication_year=?,total_copies=?,avaible_copies=?,image_name=?,image_path=? WHERE id=?');
    $stmt->bind_param('sssssddssd',$this->title,$this->author,$this->genre,$this->description,$this->publication_year,$this->total_copies,$this->avaible_copies,$this->image_name,$this->image_path,$id);
    
    if(!$stmt->execute()){
        error_log("Querry fail: " . $stmt->error);
        return false;
    }
    return true;
    }

    public function delete($id){
        $connection=new mysqli('localhost','root','','bibliotheque');
        if($connection->connect_error){
            error_log('Failed to connect: ' . $connection->connect_error);     
        }
        $stmt=$connection->prepare("DELETE FROM book WHERE id=?");
        $stmt->bind_param('d',$id);
        $stmt->execute();
        if(!$stmt->execute()){
            error_log("Failed querry: " . $stmt->error);
            return false;
        }
        return true;
    }
   
    
}