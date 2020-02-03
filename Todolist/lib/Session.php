<?php


class Session{

    public function __construct(){
        session_start();
    }
    
    public function __destruct(){
    }

    public function is_logged_in(){
        if($_SESSION['logged_in'] == true)
        {
            return true;
        }else{
            return false;
        }
    }

    public static function get_user_id(){
        return $_SESSION['user_id'];
    }




}



?>