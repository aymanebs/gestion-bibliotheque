<?php

use App\models\Book;

require __DIR__. '/../../../../vendor/autoload.php';
    if(isset($_GET['id'])){
        $book=new Book('','','','','','','','','','');
        $id=$_GET['id'];
        $row=$book->displayById($id);
        if($row == null){
            echo"fail";
        }
        }
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id=$_POST['id'];
        $title=$_POST['title'];
        $author=$_POST['author'];
        $genre=$_POST['genre'];
        $description=$_POST['description'];
        $publication_year=$_POST['publication_year'];
        $total_copies=$_POST['total_copies'];
        $avaible_copies=$_POST['avaible_copies'];
        $image_name = $_FILES['image']['name'];
        $image_path = "uploads/" . $image_name; 
        move_uploaded_file($_FILES['image']['tmp_name'], $image_path);
        
        $book=new Book($id,$title,$author,$genre,$description,$publication_year,$total_copies,$avaible_copies,$image_name,$image_path);
        $result=$book->update($id);
        if($result){
            header('location:/../../../views/admin/book/list.php');
            exit();
        }
        else{
            header('location:/../../../views/admin/book/edit.php');
            exit();
        }
    }    
   

        
    
