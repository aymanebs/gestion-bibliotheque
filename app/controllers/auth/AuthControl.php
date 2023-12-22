<?php
namespace App\Controllers\Auth;
require '../../../vendor/autoload.php';
use App\Models\User;
use App\config\SessionManager;

class AuthControl{

public function register($fullname,$username,$password,$confirm_password,$email,$phone){
    $user=new User("",$fullname,$username,$password,$email,$phone);
    $error="";
    if(empty($fullname) ||empty($username) || empty($password) ||empty($confirm_password) || empty($email) || empty($phone)){
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
    $session->display();

    header('Location:/../../views/auth/register.php');
    exit();  

}
public function login($username,$password){
$username=htmlspecialchars($username);
$password=htmlspecialchars($password);
$user=new user('','',$username,$password,'','');
$row=$user->getUserByUsername();

if(!$row){
    header('Location:/../../views/auth/login.php');   
}
else{
    if(password_verify($password,$row['password'])){
        $session= new SessionManager();
        $session->startSession();
        $row=$user->getUserRoleId();
        if ($row['roleId'] == 1) {
       
            $session->setSessionData('user_id', $row['userId']);
            header('Location: /../../views/admin/users/list.php');
            exit();
        } else if ($row['roleId'] == 2) {
           
         
            $session->setSessionData('user_id', $row['userId']);
            header('Location: /../../index.php');
            exit();
        } 
        
          
 
    
        
    }
else{
    die("invalid input"); 
}
}

}

}