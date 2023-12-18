<?php
namespace App\Controllers\Auth;
require '../../../vendor/autoload.php';
use App\Models\User;

class AuthControl{

public function register($fullname,$username,$password,$confirm_password,$email,$phone){
    $user=new User($fullname,$username,$password,$email,$phone);
    $error="";
    if(empty($fullname) || empty($password) || empty($email) || empty($phone)){
            $error="All fields should be inserted";
    }
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $error="invalid email";
    }
    else if($password!=$confirm_password){
        $error="passwords don't match";
    }
    else{
        if($user->getUserByUsername()){
            $error="username already used";
        }
        else{
            $user->Create($fullname,$username,$password,$email,$phone);
            header('Location:/../../views/auth/login.php');
            exit();
        }
    }
    $session= new SessionManager();
    $session->startSession();
    $session->setSessionData($error,$error);
    header('Location:/../../views/register.php');
    exit();  

}


}

