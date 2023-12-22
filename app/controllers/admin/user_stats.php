<?php

use App\models\User;

require __DIR__ . '/../../../vendor/autoload.php';

$user =new User('','','','','','');
$stats=$user->stats();
if($stats){
    foreach ($stats as $user) {
        echo "USER ID: " . $user['id'] . "<br>";
        echo "NAME: " . $user['name'] . "<br>";
        echo "Reservation Count: " . $user['reservation_count'] . "<br>";
        echo "<hr>";
    }

}



 ?>