<?php

use App\config\SessionManager;
use App\models\Book;
use App\models\Reservation;

require __DIR__ .'/../../../../vendor/autoload.php';
$session=new SessionManager();

    if(isset($_POST['submit'])){
       
        $return_date=$_POST['return_date'];
        $reservation_date=$_POST['reservation_date'];
        $user_id=$_POST['user_id'];
        $book_id=$_POST['book_id'];

    $reservation=new Reservation('','',$reservation_date,$return_date,'',$user_id,$book_id);
    $reservation->Create('',$reservation_date,$return_date,$user_id,$book_id);
    $book=new Book('','','','','','','','','','');
    $book->subtract($book_id);

    header('Location:/../../../index.php');
    
    exit();
    }