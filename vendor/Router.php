<?php


class Router
{
    // Use this to get rid of the POST data
    static public function redirect ($url)
    {
        header("Location: " . $url);
    }

    static public function init ()
    {
        $controller = new Controller();
    }
}