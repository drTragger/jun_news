<?php


class Router
{
    static public function redirect ($url)
    {
        header("Location: " . $url);
    }

    static public function init ()
    {
        $controller = new Controller();
    }
}