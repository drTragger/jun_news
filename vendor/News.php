<?php


class News
{


    private function getDBConnect(){
        $db = new mysqli(DB_HOST, DB_USER_NAME, DB_PASSWORD, DB_NAME);
        if($db->connect_errno !=0){
            $msg = 'connect error' . $db->connect_error;
            die($msg);
        }
        return $db;
    }

}