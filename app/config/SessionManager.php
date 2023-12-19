<?php
namespace App\config;
 class SessionManager{
    public function startSession(){
        if(session_status()==PHP_SESSION_NONE){
            $result=session_start();
            if(!$result){
                error_log("session_start failed");
            }
        }
    }
    public  function setSessionData($key,$value){
         $_SESSION[$key]=$value;
    }
    public function display(){
        echo $_SESSION;
    }
    public  function endSession(){
        $result=session_destroy();
        if(!$result){
            error_log("session_destroy failed");
        }
    }

}


