<?php
require '../../../vendor/autoload.php';
use App\Controllers\Auth\AuthControl;
if($_SERVER['REQUEST_METHOD']=== "POST"){
$username=$_POST['username'];
$password=$_POST['password'];
$auth=new AuthControl();
$auth->login($username,$password);

}
?>