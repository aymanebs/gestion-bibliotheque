<?php 
namespace App;

use mysqli;

class Connection{
    public $DB_HOST;
    public $DB_NAME;
    public $DB_PASSWORD;
    public $DB_USER;
    public $connection;

    public function __construct($DB_HOST,$DB_NAME,$DB_PASSWORD,$DB_USER)
    {
        $this->DB_HOST=$DB_HOST;
        $this->DB_NAME=$DB_NAME;
        $this->DB_PASSWORD=$DB_PASSWORD;
        $this->DB_USER=$DB_USER;
        $this->connection=new mysqli($this->DB_HOST,$this->DB_NAME,$this->DB_PASSWORD,$this->DB_USER);   
        
        if($this->connection->connect_error){
            error_log("connection error".$this->connection->connect_error);
        }
        else{
            $this->connection;
            echo'connected';
        }
    }
    


}