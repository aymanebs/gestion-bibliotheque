<?php

use App\models\Book;
require __DIR__ .'/../../../../vendor/autoload.php';
   
    if(isset($_POST['submit'])){
        $title=$_POST['title'];
        $author=$_POST['author'];
        $genre=$_POST['genre'];
        $description=$_POST['description'];
        $publication_year=$_POST['publication_year'];
        $total_copies=$_POST['total_copies'];
        $avaible_copies=$_POST['avaible_copies'];
        $image_name = $_FILES['image']['name'];
        $image_path = "../../../../public/images/books/" . $image_name; 
        move_uploaded_file($_FILES['image']['tmp_name'], $image_path);
        $book=new Book('','','','','','','','','','');
        $book->Create($title,$author,$genre,$description,$publication_year,$total_copies,$avaible_copies,$image_name,$image_path);
        header('Location:/../../../views/admin/book/list.php');
        exit();

    }
