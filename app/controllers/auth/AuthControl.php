<?php

namespace App;
class AuthControl{

public function register($fullname,$username,$password,$confirm_password,$email,$phone){
    $user=new User($fullname,$username,$password,$email,$phone);
    $error="";
    if(empty($name) || empty($pasword) || empty($email) || empty($phone)){
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
            $user->Create();
            header('Location:/../../views/login.php');
            exit();
        }
    }
    

}
SessionManager::startSession();
SessionManager::setSessionData($error,$error);
header('Location:/../../views/register.php');
exit();





}

