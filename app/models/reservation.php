<?php
 
namespace App\models;

use mysqli;

 class Reservation{
    private $id;
    private $description;
    private $reservation_date;
    private $return_date;
    private $is_returned;
    private $user_id;
    private $book_id;

    public function __construct($id,$description,$reservation_date,$return_date,$is_returned,$user_id,$book_id){
        $this->id=$id;
        $this->description=$description;
        $this->reservation_date=$reservation_date;
        $this->return_date=$return_date;
        $this->is_returned=$is_returned;
        $this->user_id=$user_id;
        $this->book_id=$book_id;
    }

    public function Create($description,$reservation_date,$return_date,$user_id,$book_id){
        $connection=new mysqli("localhost","root","","bibliotheque");
        if($connection->connect_error){
            echo'conndection error';
        }
        else{
            $stmt=$connection->prepare("INSERT INTO reservation(description,reservation_date,return_date,user_id,book_id) VALUES(?,?,?,?,?)");
            $stmt->bind_param('sssii',$description,$reservation_date,$return_date,$user_id,$book_id);
            if(!$stmt->execute()){
                error_log("query failed: ". $stmt->error);
            }
            
        }

    }

 }