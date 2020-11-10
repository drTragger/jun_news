<?php


class Router
{
    // Use this to get rid of the POST data
    static public function redirect($url)
    {
        header("Location: " . $url);
    }

    static public function init()
    {
        $news = new News();
        $controller = new Controller($news->getAllNews());
        if (isset($_POST['title']) && isset($_POST['content'])) {
            $news->addNewsItem($controller->add());
        }
    }
}