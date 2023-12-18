<?php 
namespace App;

use mysqli;

class Connection{
    public $DB_HOST;
    public $DB_NAME;
    public $DB_PASSWORD;
    public $DB_USER;
    public static $connection;

    public function __construct()
    {
        $this->DB_HOST="localhost";
        $this->DB_NAME="root";
        $this->DB_PASSWORD="";
        $this->DB_USER="bibliotheque";
        $this->connection=new mysqli($this->DB_HOST,$this->DB_NAME,$this->DB_PASSWORD,$this->DB_USER);   

        if($this->connection->connect_error){
            error_log("connection error".$this->connection->connect_error);
        }
        else{
            $this->connection;
        }
    }
    


}