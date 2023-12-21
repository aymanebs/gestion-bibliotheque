<?php

use App\models\Reservation;

require __DIR__ .'/../../../../vendor/autoload.php';
   
    if(isset($_POST['submit'])){
    
        $return_date=$_POST['return_date'];
        $reservation_date=$_POST['reservation_date'];
        $description=$_POST['description'];
        $reservation=new Reservation('',$description,$reservation_date,$return_date,'','','');
        $reservation->Create($description,$reservation_date,$return_date);
        header('Location:/../../../index.php');
        exit();

    }
   