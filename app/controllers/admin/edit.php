<?php
    require "../../vendor/autoload.php";
    use App\models\User;

    if(isset($_GET['id'])){
        $user=new User('','','','','','');
        $id=$_GET['id'];
        $row=$user->displayById($id);
        if($row){
            echo $row['fullname'];
        }
        
        


    }



?>