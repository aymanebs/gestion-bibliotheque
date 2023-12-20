<?php
    require  __DIR__ . '/../../../vendor/autoload.php';
    use App\models\User;
    if(isset($_GET['id'])){
        $user=new user('','','','','','');
        $id=$_GET['id'];
        $user->delete($id);
        header('Location:/../../../views/admin/list.php');
        exit();
       
    }

