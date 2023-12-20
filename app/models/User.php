<?php
 
namespace App\models;

use mysqli;

 class User{
    private $id;
    private $fullname;
    private $username;
    private $password;
    private $email;
    private $phone;
    

    public function __construct($id,$fullname,$username,$password,$email,$phone)
    {   
        $this->id=$id;
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
        $user_id=$stmt-> insert_id; 
        $role_id=2;  
        $stmt=$connection->prepare("INSERT INTO user_role(user_id,role_id) VALUES(?,?)");
        $stmt->bind_param('dd',$user_id,$role_id);
        if($stmt->execute()){
            echo"user inserted succesfuly";
        }
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
    $result=$stmt->get_result();
    $row=$result->fetch_assoc();
    return $row;
   }

   public function getUserRoleId(){
    $connection=new mysqli("localhost","root","","bibliotheque");
    $stmt=$connection->prepare("SELECT users.id AS userId,users.username AS username,user_role.user_id ,user_role.role_id AS roleId FROM users JOIN user_role ON users.id=user_role.user_id WHERE username=?");
    $stmt->bind_param('s',$this->username);
    $stmt->execute();
    $result=$stmt->get_result();
    $row=$result->fetch_assoc();
    return $row;
   } 

   public function display(){
    $connection=new mysqli("localhost","root","","bibliotheque");
    $stmt=$connection->prepare("SELECT * FROM users");
    $stmt->execute();
    $result=$stmt->get_result();
    if($result){
        $users=[];
        while($row=$result->fetch_assoc()){
            $users[]=$row;
        }
        return $users;
    }
    else{
        error_log("querry failed: " . $stmt->error);
        return [];
    }  
   }

   public function displayById($id){
    $connection=new mysqli("localhost","root","","bibliotheque");
    $stmt=$connection->prepare("SELECT * FROM users WHERE id=?");
    $stmt->bind_param('d',$id);
    $stmt->execute();
    $result=$stmt->get_result();
    $row=$result->fetch_assoc();
    return $row;
   }
   public function update($id){
    $connection=new mysqli("localhost","root","","bibliotheque");
    $stmt=$connection->prepare(" UPDATE users SET fullname=?,username=?,email=?,phone=? WHERE id=?");
    $stmt->bind_param("ssssd",$this->fullname,$this->username,$this->email,$this->phone,$id);
    if(!($stmt->execute())){
        die("Query failed: ". $stmt->error);
    }
    return true;
    }

    public function delete($id){
        $connection=new mysqli("localhost","root","","bibliotheque");
        $stmt=$connection->prepare("DELETE FROM users WHERE id=?");
        $stmt->bind_param("d",$id);
        $stmt->execute();
    }
 }