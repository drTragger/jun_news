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
        $controller = new Controller();
        $news = new News();
        if (isset($_POST['title'])) {
            $news->addNewsItem(); // Please remove the 'oneItem' attribute from the method
        } else {
            if (!empty($news->getAllNews())) {
                $controller->news = $news->getAllNews();
            }
        }
    }
}