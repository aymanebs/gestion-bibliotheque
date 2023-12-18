<?php
require '../../../vendor/autoload.php';
use App\Controllers\Auth\AuthControl;

if($_SERVER["REQUEST_METHOD"]==='POST'){
    $fullname=$_POST['fullname'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $confirm_password=$_POST['confirm_password'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $authentification=new AuthControl;
    $authentification->register($fullname,$username,$password,$confirm_password,$email,$phone);
}