<?php

use App\AuthControl;

if($_SERVER["request_method"]=='post'){
    $authentification=new AuthControl;
    $authentification->register($fullname,$username,$password,$confirm_password,$email,$phone);
}