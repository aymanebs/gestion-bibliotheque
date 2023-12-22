<?php

use App\models\Book;

require __DIR__ ."/../../../../vendor/autoload.php";
if(isset($_GET['id'])){
    $book=new Book('','','','','','','','','','');
    $id=$_GET['id'];
    $book->delete($id);
    header('Location:/../../../views/admin/book/list.php');
    exit();
}