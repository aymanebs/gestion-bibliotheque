<?php
 
namespace App\models;

use mysqli;

 class User{
    private $fullname;
    private $username;
    private $password;
    private $email;
    private $phone;
    

    public function __construct($fullname,$username,$password,$email,$phone)
    {
        $this->fullname=$fullname;
        $this->username=$username;
        $this->password=$password;
        $this->email=$email;
        $this->phone=$phone;
        
    }
    public function getFullName(){
        return $this->fullname;
    }
    public function getUserName(){
        return $this->username;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPhone(){
        return $this->phone;
    }
  
  
    public function setFullName($fullname){
        $this->fullname=$fullname;
    }
    public function setUserName($username){
        $this->username=$username;
    }
    public function setPassword($password){
        $this->password=$password;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function setPhone($phone){
        $this->phone=$phone;
    }
    

   public function Create($fullname,$username,$password,$email,$phone){
    $connection=new mysqli("localhost","root","","bibliotheque");
    if($connection->connect_error){
        echo'conndection error';
    }
    else{
        $fullname=htmlspecialchars($fullname);
        $username=htmlspecialchars($username);
        $password=password_hash($password,PASSWORD_DEFAULT);
        $email=htmlspecialchars($email);
        $phone=htmlspecialchars($phone);
        $stmt=$connection->prepare("INSERT INTO users(fullname,username,password,email,phone) VALUES(?,?,?,?,?)");
        $stmt->bind_param('sssss',$fullname,$username,$password,$email,$phone);
        if($stmt->execute()){
            echo"user inserted";
        }
        else {
            echo 'Error creating user: ' . $stmt->error;
        }
    }
   }

   public function getUserByUsername(){
    $connection=new mysqli("localhost","root","","bibliotheque");
    $stmt=$connection->prepare("SELECT * FROM users where username=?;");
    $stmt->bind_param('s',$this->username);
    $stmt->execute();

   }

 }