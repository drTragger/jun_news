<?php


class Router
{
    // Use this to get rid of the POST data
    static public function redirect()
    {
        header("Location: " .$_SERVER['PHP_SELF']);
    }

    static public function init()
    {
        $controller = new Controller();
        $action = 'all';
        if(isset($_GET['newsId'])){
            $action = 'item';
        }else if($_POST['title']){
            $action = 'add';
        }
        $controller->$action();
    }
}