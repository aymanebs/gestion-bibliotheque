<?php

use App\models\Book;

require __DIR__ . '/../../../vendor/autoload.php';

$book =new Book('','','','','','','','','','');
$stats=$book->avaibleCount();

if ($stats) {
    echo "Total Available Copies: " . $stats;
}