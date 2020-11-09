<?php


class Router
{
    static public function redirect ($url)
    {
        header("Location: " . $url);
    }

    static public function init ()
    {
        include_once 'views' . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'default.php';
    }
}