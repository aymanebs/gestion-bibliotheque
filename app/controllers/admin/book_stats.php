<?php

use App\models\Book;

require __DIR__ . '/../../../vendor/autoload.php';

$book =new Book('','','','','','','','','','');
$stats=$book->stats();
if($stats){
    foreach ($stats as $book) {
        echo "Book ID: " . $book['id'] . "<br>";
        echo "Title: " . $book['title'] . "<br>";
        echo "Reservation Count: " . $book['reservation_count'] . "<br>";
        echo "<hr>";
    }

}



 ?>