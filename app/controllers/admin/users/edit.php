<?php
     require  __DIR__ . '/../../../../vendor/autoload.php';
    use App\models\User;

    if(isset($_GET['id'])){
        $user=new User('','','','','','');
        $id=$_GET['id'];
        $row=$user->displayById($id);
    }
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        $id=$_POST['id'];
        $fullname=$_POST['fullname'];
        $username=$_POST['username'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $user=new User($id,$fullname,$username,'',$email,$phone);
        $result=$user->update($id);
        if($result){
            header('location:/../../../views/admin/users/list.php');
            exit();
        }
        else{
            header('location:/../../../views/admin/users/edit.php');
            exit();
        }
        

    }



?>