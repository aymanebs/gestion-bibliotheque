<?php
namespace App;
class SessionManager{
    public static function startSession(){
        if(session_status()==PHP_SESSION_NONE){
            session_start();
        }
    }
    public static function setSessionData($key,$value){
        $_SESSION[$key]=$value;
    }
    public static function endSesssion(){
        session_destroy();
    }

}


